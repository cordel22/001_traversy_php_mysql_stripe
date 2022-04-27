<?php
/* echo 'SUBMITTED'; */
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_BQokikJOvBiI2HIWgH4olfQ2');

//  Snitize POST Array

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
/* $token = $_POST['stripeToken']; */

echo $email;  //  check
/* echo $token; */

//  Create Customer In Stripe
/* $customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
)); */

//  Charge Customer
/* $charge = \Stripe\Charge::create(array(
  "amount" => 5000,
  "currency" => "usd",
  "description" => "Intro To React Course",
  "Customer" => $customer->id
));
 */
/* print_r($charge); */

//  Redirect to success
/* header('Location: success.php?tid='.$charge->id.'&product='.$charge->description); */
header('Location: success.php');
