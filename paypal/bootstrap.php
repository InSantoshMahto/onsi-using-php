<?php

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

// 1. Autoload the SDK Package. This will include all the files and classes to your autoloader
// Used for composer based installation
require __DIR__  . '/vendor/autoload.php';
// Use below for direct download installation
// require __DIR__  . '/PayPal-PHP-SDK/autoload.php';

$enableSandbox = false;  // false => live or true => sandbox

// Database settings. Change these for your database configuration.
$dbConfig = [
  'host' => 'localhost',
  'username' => 'onsi',
  'password' => 'onsi',
  'name' => 'speakin'
];

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
  // sandbox
  // 'client_id' => 'Af-moBnt8lvXRkSigp3nM-QRK_6vhMOzXXDEkK_sNT_b_jZWlRfk4F8xx-OMBR1hkTWN0cUc9hG9JEcy',
  // 'client_secret' => 'EGa-FMl-HsWEMLo7KnclaCe144z1uNkyhNTizari9u47DW9a28TfCALFLyR9t03RRudDykVHvXrHsLXh',
  // live
  'client_id' => 'AfwAcEkHIHgzXlj0N40iXPd6hkCNtBsgzcGd8dgVmlSyPkFso0vKLlkSsRes5_korWGOnjE128NiUCO2',
  'client_secret' => 'EBxksWf8F1MBBDfiVOZAfoUZwCSlCUQZCXcUpRrY8C9UAfaqsxcuvfuElAOvPUKL4vWkTDGJkndcH3By',
  'return_url' => 'http://localhost/paypal/success.php',
  'cancel_url' => 'http://localhost/paypal/cancel.php'
];


$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

// store log into PayPal.log file.
$apiContext->setConfig(
  array(
    'log.LogEnabled' => true,
    'log.FileName' => 'PayPal.log',
    'log.LogLevel' => 'DEBUG'
  )
);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
  $apiContext = new ApiContext(
    new OAuthTokenCredential($clientId, $clientSecret)
  );
  $apiContext->setConfig([
    'mode' => $enableSandbox ? 'sandbox' : 'live'
  ]);
  return $apiContext;
}
