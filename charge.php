<?php
  require_once(dirname(__FILE__) . '/config.php');
  $token  = $_POST['stripeToken'];
  $customer = \Stripe\Stripe_Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));
  $charge = \Stripe\Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 50,
      'currency' => 'GBP'
  ));
  echo '<h1>Successfully charged £5!</h1>';
?>
