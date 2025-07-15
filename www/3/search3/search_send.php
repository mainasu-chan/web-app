
<html>
    <head>
        <meta charset="UTF-8">
        <title>検索アプリ</title>
    </head>
<body>
    <h1>検索アプリ</h1>
<p>名前の一致する会員を一覧にしよう</p>
<form action="search_receive.php" method="POST">
    <label>名前で検索</label>
    <input type="text" name="name">
    <input type="submit" name="mode" value="名前検索"><br>
    <hr>
    idで検索
    <input type="text" name="id">
    <input type="submit" name="mode" value="番号検索">
</form>
</body>
</html>