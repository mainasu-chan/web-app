<?php
    function add($num1, $num2) {
        $ans = $num1 + $num2;
        return $ans;
    }
    function sub($num1, $num2) {
        $ans = $num1 - $num2;
        return $ans;
    }
    $num1 = 10;
    $num2 = 20;

    $result = add($num1, $num2);
    echo '足し算の答え:' . $result;

    echo'<br>';

    $result = sub($num1, $num2);
    echo '引き算の答え:' . $result;