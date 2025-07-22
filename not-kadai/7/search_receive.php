<?php
$dsn = 'mysql:host=localhost;dbname=sample;charset=utf8';
$username = 'root';
$password = '';

try{
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $count = $stmt->rowCount();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $users[] = $row;
    }
    echo "処理が終了しました。";
}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}
?>
<html>
    <body>
        <h1>会員データ一覧</h1>
        <p><?php echo $count; ?>件見つかりました</p>
        <table border=1>
            <tr><th>id</th><th>名前</th></tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>