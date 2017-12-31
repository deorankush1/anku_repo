<?php
$json_string = 'http://mmb.moneycontrol.com/jsondata.json';

$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata);
print_r($obj['Result']);
?>