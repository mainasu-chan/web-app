<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$mail = htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8');
$opinion = htmlspecialchars($_POST['opinion'], ENT_QUOTES, 'UTF-8');

$opinion = nl2br($opinion);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力フォームの練習</title>
</head>
<body>
    <p>入力の確認</p>
    <p>
        お名前: <?php echo $name; ?><br>
        メールアドレス: <?php echo $mail; ?><br>
        ご意見: <?php echo $opinion; ?><br>
    </p>
    <p><a href="#" onclick="history.back()">戻る</a></p>
</body>
</html>