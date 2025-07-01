<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
}
    $dsn = 'mysql:dbname=sample;charset=utf8mb4;host=localhost';
    $username = 'root';
    $password = '';
    $data = [];

    try {
        $dbh = new PDO($dsn, $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();
        $count = $stmt->rowCount();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
?>
<html>
    <body>
        <h1>会員データ</h1>
        <p><?php echo $count; ?>件見つかりました</p>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>名前</th>
            </tr>
            <?php foreach ($data as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>