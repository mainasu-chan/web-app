<?php
$str1 = '0120';
$str = '090';
//数字が四回の繰り返しを正規表現で表す。
$result1 = preg_match('/^(\d{4})$/', $str1);
$result2 = preg_match('/^(\d{4})$/', $str);
var_dump($result1);
var_dump($result2);
