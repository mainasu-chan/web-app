<?php

function hello_message($name) {
    $now = date("H:i:s");
    echo "はじめまして、" . $name . "さん".$now;

    // echo $word; // Removed to avoid use of undefined variable
    echo $now;
    echo $name;
}

$word = "太郎";
hello_message($word);

echo $word;
echo $now;
echo $name;