<?php
    $str = 'abc=cyz';
    if(preg_match('/^[a-zA-Z0-9]+\s*=\s*[a-zA-Z0-9]+$/',$str)){
        echo 'マッチした';
    }else{
        echo 'マッチしない';
    }