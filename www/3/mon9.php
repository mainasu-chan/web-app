<?php
    $ans = date("s")% 4;
    if($ans == 0){
        echo'大吉';
    }
    elseif($ans == 1){
        echo'中吉';
    }
    elseif($ans == 2){
        echo'小吉';
    }
    else{
        echo'凶';
    }