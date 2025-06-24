<?php
$attend = 1;
//欠席は0出席は1
$place = 'b';

if ($attend === 0) {
    echo "パーティーを欠席にて承りました。";
} elseif ($attend === 1){
    echo "パーティーに出席にて承りました。";
    if ($place === 'a') {
        echo "会場はAホテルになります。";
    } elseif ($place === 'b') {
        echo "会場はB広場になります。";
    }
}
?>