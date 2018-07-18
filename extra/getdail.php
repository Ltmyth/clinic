<?php
//receive AT Posts
//require_once('dbConnector.php');

$recordingUrl = $_POST['sessionId'];
$isActive  = $_POST['isActive'];
$direction = $_POST['direction'];
$callerNumber = $_POST['callerNumber'];
$destinationNumber = $_POST['destinationNumber'];
$dtmfDigits  = $_POST['dtmfDigits'];
$durationInSeconds  = $_POST['durationInSeconds'];
$currencyCode  = $_POST['currencyCode'];
$amount  = $_POST['amount'];

if ($isActive == 1)  {
    $text = "Thank you for calling BAREFOOT. Press 0 followed by the hash sign to leave a message, 1 followed by the hash sign to talk to support or 2 followed by the hash sign to hear this message again.";
    
      // Compose the response
      $response  = '<?xml version="1.0" encoding="UTF-8"?>';
      $response .= '<Response>';
      $response .= '<GetDigits timeout="5" callbackUrl="http://mbozi.com/voice/callback2.php" finishOnKey="#">';
      $response .= '<Say>'.$text.'</Say>';
      $response .= '</GetDigits>';
      $response .= '</Response>';
       
      // Print the response onto the page so that our gateway can read it
      header('Content-type: text/plain');
      echo $response;
} else {
  // You can then store this information in the database for your records
  $durationInSeconds  = $_POST['durationInSeconds'];
  $currencyCode  = $_POST['currencyCode'];
  $amount  = $_POST['amount'];
}
