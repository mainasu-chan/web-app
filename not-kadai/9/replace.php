<?php

$str = "プログラミングを、 習いたい。";
$result = str_replace("/\s|、|。/","", $str);

var_dump($result);