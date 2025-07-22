<?php
    session_start();
    $name = $_SESSION['name'] ?? '';

    session_destroy();
print <<<EOM
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>入力フォームの練習</title>
    </head>
    <body>
        <p>{$name}様ご意見をありがとうございました。</p>
        <p><a href="form.php">戻る</p>
    </body>
EOM;
?>