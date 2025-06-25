<?php
$zipcode1 = "115-0002";
$zipcode2 = "220-601";

$result1 = preg_match('/^\d{3}-\d{4}$/', $zipcode1);
$result2 = preg_match('/^\d{3}-\d{4}$/', $zipcode2);

var_dump($result1);
var_dump($result2);