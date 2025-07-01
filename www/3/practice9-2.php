<?php
$str1 = '今日はくもりです。';
$str2 = '明日は快晴でしょう。';

//「でしょう。」で終わる正規表現
$result1 = preg_match('/でしょう。$/u', $str1);
$result2 = preg_match('/でしょう。$/u', $str2);
// 結果を表示
var_dump($result1); // 0
var_dump($result2); // 1   
?>