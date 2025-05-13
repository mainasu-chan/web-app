<?php
    $hour = date("H");
    if($hour <12){
        echo'おはよう';
    }
    else{
        echo'こんにちは';
    }