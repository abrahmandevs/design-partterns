<?php
require_once('./singleton/singleton.php');
require_once('./singleton/DB.php');
require_once('./singleton/Log.php');

// $singleton = Singleton::getInstances();
// $DB = DB::getInstances();
// $log = Log::getInstances();


require_once('./adapter/adapter.php');

$paypal = new PayPal();
$stripe = new Stripe();
$adpStripe = new stripeAdapter($stripe);
$pp = new PaymentProcessor($adpStripe);
$pp->purchaseProduct(44);
echo '<pre>';
    var_dump($paypal);
    //var_dump($pp);
    // var_dump($log);
echo'</pre>';
?>