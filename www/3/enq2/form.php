<?php
    session_start();
    if(isset($_POST["entry"])){
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        $mail = htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8');
        $opinion = htmlspecialchars($_POST['opinion'], ENT_QUOTES, 'UTF-8');

        $opinion = nl2br($opinion);
        
        print <<<EOM
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>入力フォームの練習</title>
    </head>
    <body>
        <h1>入力の確認</h1>
        <p>お名前: 
        {$name}<br>
        メールアドレス: 
        {$mail}<br>
        意見: 
        {$opinion}
        </p>
        <form method="post" action="comp.php">
        <input type="submit" value="投稿"name="entry">
        </form>
    </body>
</html>
EOM;
    $_SESSION['name'] = $name;
    exit();
    }
    print <<<EOM
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>入力フォームの練習</title>
	</head>
	<body>
		<form action="form.php" method="post">
			名前
			<input type="text" name="name"><br>
			メール
			<input type="text" name="mail"><br>
			ご意見
			<textarea name="opinion" cols="40" rows="5"></textarea><br>
			<input type="submit" value="送信" name="entry">
		</form>
	</body>
</html>
EOM;
?>