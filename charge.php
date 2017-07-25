<?php
require_once('config.php');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


$token  = $_POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
    'email' => $_POST['email'],
    'source'  => $token
));

$card = array(
  $card->number = $_POST['number'],
  $card->cvc = $_POST['cvc'],
  $card->exp_month = $_POST['exp_month'],
  $card->exp_year = $_POST['exp_year'],
  $card->number = $_POST['number']
);


$customer = \Stripe\Customer::retrieve($customer->id);
$customer->sources->create(array('source' => $card));

$charge = \Stripe\Charge::create(array(
    'customer' => $customer->id,
    'amount'   => $_POST['fee'],
    'currency' => 'GBP'
));

echo '<h1>You have paid your Fine!</h1>';
?>
