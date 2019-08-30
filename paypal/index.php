<?php

if (empty($_REQUEST['amount']) || empty($_REQUEST['description']) || empty($_REQUEST['productId'])) {
  echo 'OOPS! missing required credentials';
  throw new Exception('OOPS! missing required credentials');
}

use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

require 'bootstrap.php';

$payer = new Payer();
$payer->setPaymentMethod('paypal');

// Set some example data for the payment.
$currency = 'INR';
// $amountPayable = 1.00;
$amountPayable = $_REQUEST['amount'];
// $invoiceNumber = uniqid();
$invoiceNumber = $_REQUEST['productId'];

// amount setup
$amount = new Amount();
$amount->setCurrency($currency)
  ->setTotal($amountPayable);

// transaction setup
$transaction = new Transaction();
$transaction->setAmount($amount)
  ->setDescription($_REQUEST['description'])
  // ->setDescription('Some description about the payment being made')
  ->setInvoiceNumber($invoiceNumber);

// redirect url setup
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl($paypalConfig['return_url'])
  ->setCancelUrl($paypalConfig['cancel_url']);

// payment setup
$payment = new Payment();
$payment->setIntent('sale')
  ->setPayer($payer)
  ->setTransactions([$transaction])
  ->setRedirectUrls($redirectUrls);

// initiate payment
try {
  $payment->create($apiContext);
} catch (Exception $e) {
  echo 'OOPS! Unable to create link for payment', $e;
  throw new Exception('OOPS! Unable to create link for payment');
}

header('location:' . $payment->getApprovalLink());
exit(1);
