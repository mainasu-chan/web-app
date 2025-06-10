<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力フォームの練習</title>
</head>
<body>
    <p>投稿しました</p>
    <p>
        お名前: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
        メールアドレス: <?php echo htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'); ?><br>
        メッセージ: <?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?><br>
    </p>
    <p><a href="input.html">戻る</a></p>
</body>
</html>
<?php
    $now = date("Y-m-d H:i:s");
    $data = "[$now],[$name],[$mail],[$message]\r\n";

    $file = fopen("data.txt", "a");
    fwrite($file, $data);
    fclose($file);
?>