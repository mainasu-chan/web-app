<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$opinion = htmlspecialchars($_POST['opinion'], ENT_QUOTES, 'UTF-8');

$opinion = nl2br($opinion); // 改行を<br>タグに変換
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力フォームの練習</title>
</head>
<body>
    <p>確認画面</p>
    <p>名前:
        <?php echo $name; ?><br>
        メールアドレス:
        <?php echo $email; ?><br>
        ご意見:
        <?php echo $opinion; ?>
    </p>
</body>
</html>