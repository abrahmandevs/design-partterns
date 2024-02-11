<?php
require_once('./singleton/singleton.php');
require_once('./singleton/DB.php');
require_once('./singleton/Log.php');

$singleton = Singleton::getInstances();
$DB = DB::getInstances();
$log = Log::getInstances();


echo '<pre>';
    var_dump($DB);
    var_dump($log);
echo'</pre>';
?>