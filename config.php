<?php
require 'stripe/init.php';

$stripe = array(
  "secret_key"      => "sk_test_JAptxaGW0HjUKq3ierLTfk59",
  "publishable_key" => "pk_test_Iwf2UwasetNz76gQIXB2rKxe"
);

Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
