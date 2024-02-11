<?php

interface PaymentGateway{
    function sendPayment($payment);
}

class PaymentProcessor{
    private $getway;

    function __construct(PaymentGateway $pg)
    {
        $this->getway = $pg;
    }

    function purchaseProduct ($amount){
        $this->getway->sendPayment($amount);
    }
}

class PayPal implements PaymentGateway {
    function sendPayment($payment){
        echo "{$payment} paypal procssed";
    }
}

class Stripe {
    function makePayment($amount){
        echo "{$amount} Stripe procssed";
    }
}


class stripeAdapter implements PaymentGateway{
private $stripe;
function __construct(Stripe $stripe)
{
    $this->stripe =$stripe;
}

    function sendPayment($payment)
    {
        $this->stripe->makePayment($payment);
    }
}





?>