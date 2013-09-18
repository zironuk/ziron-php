<?php
// Sample PHP to do SRI Lookup

require('../ziron-api.php');

// set the API credenetials
$account_sid = ""; // your account SID
$auth_token = ""; // your auth token

$number = ""; // Number to lookup

// Use Ziron class
$Ziron = new Ziron($account_sid,$auth_token);

// Get the account details
$result = $Ziron->lookup((array('lookup_type' => 'hlr', 'number' => $number)));

// Display the result
print_r($result);

