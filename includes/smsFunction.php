<?php
// Be sure to include the file you've just downloaded
require_once 'AfricasTalkingGateway.php';
// Specify your authentication credentials
$username   = "temitayo315@gmail.com";
$apikey     = "d9fc94bb1906f67433dec8ebd2d9e9de80757b94c69d567b4d727bf1bad3064f";

$gateway    = new AfricasTalkingGateway($username, $apikey);

function sendsms($recipients, $message){
try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipients, $message);
            
  foreach($results as $result) {
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!! 
}
?> 