<?php
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8');
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
		<p>名前: 
        {$name}<br>
        メールアドレス: {$email}<br>
        意見: {$opinion}</p>
        <a href="#" onclick="history.back()">戻る</a>
	</body>
</html>
EOM;
?>