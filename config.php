<?php
require_once('stripe/lib/Stripe.php');

$stripe = array(
  secret_key      => getenv('sk_live_3BHXVEQozvscHHfm36Sg6jEB'),
  publishable_key => getenv('pk_live_isHXIIexadvaauIwDjRb6khR')
);
Stripe::setApiKey($stripe['secret_key']);
?>
