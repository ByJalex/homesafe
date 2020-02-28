<?php

require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey("sk_test_MsyF8BISJTg9eJ2rbovRCxRE00zTfMUy2j");

$token = $_POST['stripeToken'];
$charge = \Stripe\Charge::create([
    "amount" => 90000,
    "currency" => "usd",
    "description" => "Compra #312879",
    "source" => $token
]);

header('Location: ../thankyou.php')

?>