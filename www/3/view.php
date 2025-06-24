<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッションの練習</title>
</head>
<body>
    <?php
        echo '<p>セッション変数から取り出したデータは'.(isset($_SESSION['item']) ? $_SESSION['item'] : '未設定').'です。</p>';
        echo '<p>セッション名: '.session_name().'</p>';
        echo '<p>セッションID: '.session_id().'</p>';
    ?>
    <a href="session.html">トップへ</a>
</body>
</html>