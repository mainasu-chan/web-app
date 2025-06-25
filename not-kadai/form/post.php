<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力フォームの練習</title>
</head>
<body>
    <p>確認画面</p>
    <p>
        名前:
        <php echo $_POST['name']; ?><br>
        メールアドレス:
        <php echo $_POST['email']; ?><br>
    </p>
</body>
</html>