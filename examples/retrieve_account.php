<?php
// Sample PHP to retrieve account details

require('../ziron-api.php');

// set the API credenetials
$account_sid = ""; // your account SID
$auth_token = ""; // your auth token

// Use Ziron class
$Ziron = new Ziron($account_sid,$auth_token);

// Get the account details
$result = $Ziron->account_retrieve();

// Display the result
print_r($result);

