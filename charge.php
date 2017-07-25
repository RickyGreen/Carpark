<?php
require_once('./config.php');
error_reporting(E_ALL);
ini_set('display_errors', 'on');


$token  = $_POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
    'email' => $_POST['email'],
    'source'  => $token
));

$customer = \Stripe\Customer::retrieve($customer->id);
$customer->sources->create(array("source" => $card));

$card = new stdClass();
$card->number = $_POST['card_number'];
$card->cvc = $_POST['cvc'];
$card->exp_month = $_POST['exp_month'];
$card->exp_year = $_POST['exp_month'];
$card->number = $_POST['number'];

$charge = \Stripe\Charge::create(array(
    'customer' => $customer->id,
    'amount'   => $_POST['fee'],
    'currency' => 'GBP'
));

echo '<h1>You have paid your Fine!</h1>';
?>
