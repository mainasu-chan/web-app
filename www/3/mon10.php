<?php
    $ans = date("s")% 4;
    switch($ans){
        case 0:
            echo'大吉';
            break;
        case 1:
            echo'中吉';
            break;
        case 2;
            echo '小吉';
            break;
        default:
            echo'凶';
    }
