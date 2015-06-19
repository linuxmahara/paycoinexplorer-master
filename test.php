<?php

ini_set('display_errors',TRUE);
error_reporting(E_ALL);

$pricejson = file_get_contents('https://bittrex.com/api/v1.1/public/getmarketsummary?market=btc-xpy');
$price = json_decode($pricejson);
echo $price->result[0]->Last;
echo 'hello';
?>


