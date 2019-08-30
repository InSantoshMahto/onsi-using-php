<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'bootstrap.php';

if (empty($_GET['paymentId']) || empty($_GET['PayerID'])) {
  throw new Exception('OOPS! The response is missing the paymentId and PayerID');
}

$paymentId = $_GET['paymentId'];
$payment = Payment::get($paymentId, $apiContext);

$execution = new PaymentExecution();
$execution->setPayerId($_GET['PayerID']);

try {
  // Take the payment
  $payment->execute($execution, $apiContext);

  try {
    $db = new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

    $payment = Payment::get($paymentId, $apiContext);

    $data = [
      'transaction_id' => $payment->getId(),
      'payment_amount' => $payment->transactions[0]->amount->total,
      'payment_status' => $payment->getState(),
      'invoice_id' => $payment->transactions[0]->invoice_number
    ];
    if (addPayment($data) !== false && $data['payment_status'] === 'approved') {
      // Payment successfully added, redirect to the payment complete page.
      $db->close();
      header('location: http://localhost/paypal/success.html');
      exit(1);
    } else {
      $res->success = false;
      $res->message = "payment fail";
      echo json_encode($res);
    }
  } catch (Exception $e) {
    // Failed to retrieve payment from PayPal
    $res->success = false;
    $res->message = "Failed to retrieve payment from PayPal";
    echo json_encode($res);
  }
} catch (Exception $e) {
  // Failed to take payment    
  $res->success = false;
  $res->message = "Failed to take payment";
  echo json_encode($res);
}

/**
 * Add payment to database
 *
 * @param array $data Payment data
 * @return int|bool ID of new payment or false if failed
 */
function addPayment($data)
{
  global $db;

  if (is_array($data)) {
    $stmt = $db->prepare("INSERT INTO `payments` (transaction_id, payment_amount, payment_status, invoice_id, createdtime) VALUES(?, ?, ?, ?, ?)");
    $stmt->bind_param(
      "sdsss",
      $data['transaction_id'],
      $data['payment_amount'],
      $data['payment_status'],
      $data['invoice_id'],
      date('Y-m-d H:i:s')
    );
    $stmt->execute();

    // printf("Error: %s.\n", mysqli_stmt_error($stmt));

    $stmt->close();

    return $db->insert_id;
  }

  return false;
}
