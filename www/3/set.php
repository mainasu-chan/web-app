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
        $item = isset($_POST['item']) ? $_POST['item'] : '';
        $_SESSION['item'] = $item;
        echo '<p>セッション変数に'.$_SESSION['item'].'を保存しました。</p>';
    ?>
    <p><a href="view.php">データの取り出しへ</a></p>
</body>
</html>