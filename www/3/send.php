<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<p>お問い合わせ内容を入力してください</p>
		<form action="receive.php" method="post">
            <p>名前<br><input type="text" size="40" name="name"></p>
            <p>メールアドレス<br><input type="email" size="40" name="email"></p>
            <p>メルマガの送信<br>
                <input type="radio" name="dm" value="1">希望する
                <input type="radio" name="dm" value="2">希望しない
            </p>
            <p>
            お問い合わせ内容<br>
            <textarea name="comment" rows="4" cols="50"></textarea>
            </p>
            <p><input type="submit" value="送信"></p>
        </form>
	</body>
</html>
