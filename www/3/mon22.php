<?php
    $str = '123-12345';
    if(preg_match('/^\d{3}-\d{5}$/',$str)){
        echo '正しい郵便番号です';
    }else{
        echo '郵便番号形式エラーです';
    }