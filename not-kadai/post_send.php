<html>
    <head>
        <meta> charset="UTF-8">
    </head>
    <body>
        <h1>POSTでデータを送信する</h1>
        <p>プロフィールを登録しよう</p>
        <form action="post_receive.php" method="post">
            <p>名前:<input type="text" name="name"></p>
            <p>性別:
                <input type="radio" name="gender" value="1">男性
                <input type="radio" name="gender" value="2">女性
            </p>
            血液型:
            <select name="blood">
                <option value="A">A型</option>
                <option value="B">B型</option>
                <option value="O">O型</option>
                <option value="AB">AB型</option>
            </select>
            <p>ひとこと:<br>
            <textarea name="comment" rows="4" cols="40"></textarea>
            </p>
            <p><input type="submit" value="送信"></p>
        </form>
    </body>
</html>