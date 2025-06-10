<?php
    $time = date("Y-m-d H:i:s");
    $title = "ファイルの書き込みテスト";
    $message = "PHPでデータをファイルに書き込んでいます。";
    $file = fopen("comment.txt", "a");
    fwrite($file, $time . "," . $title . "," . $message . "\r\n");
    fclose($file);
    echo "ファイルに書き込みました。";
    ?>