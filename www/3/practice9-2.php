<?php
$str1 = '今日はくもりです。';
$str2 = '明日は改正でしょう。';

//「でしょう。」で終わる正規表現
$result1 = preg_match('/でしょう。$/u', $str1);
$result2 = preg_match('/でしょう。$/u', $str2);

var_dump($result1);
var_dump($result2);
?>