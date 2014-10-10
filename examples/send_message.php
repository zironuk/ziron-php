<?php
// Sample PHP to send SMS

require('../ziron-api.php');

// set the API credenetials
$account_sid = ""; // your account SID
$auth_token = ""; // your auth token

// Use Ziron class
$Ziron = new Ziron($account_sid,$auth_token);

// Set mandatory parameters

$message['src'] = ""; // message source - E164 format (e.g. +447700900123) or alphanumeric (e.g. Testing) 
$message['dst'] = ""; // message destination - E164 format (e.g. +447700900123)
$message['data'] = ""; // message body 

// Set optional parameters
$message['message_type'] = "sms"; // if missing defaults to SMS
$message['callback_url'] = ""; // URL to receive message delivery notifications

// Send the message
$result = $Ziron->message_send($message);

// Display the result
print_r($result);

