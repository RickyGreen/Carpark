<?php
require_once('./config.php');

$token  = $_POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
    'email' => $POST['email'],
    'source'  => $token
));

$charge = \Stripe\Charge::create(array(
    'customer' => $customer->id,
    'amount'   => $POST['fee'],
    'currency' => 'GBP'
));

echo '<h1>You have paid your Fine!</h1>';
?>
