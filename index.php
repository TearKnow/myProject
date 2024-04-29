<?php 

require_once './vendor/autoload.php';

$obj = new \jack\currency\CurrencyService();
$result = $obj->display(10);
echo $result;