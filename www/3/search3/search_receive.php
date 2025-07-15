<?php
$mode_flg = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['mode'] == '名前検索') {
        $name = $_POST['name'];
    } else if($_POST['mode'] == '番号検索') {
        $id = $_POST['id'];
        $mode_flg = 1;
    }
}
$dsn = 'mysql:host=localhost;dbname=sample;charset=utf8';
$username = 'root';
$password = '';
$data =[];
try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($mode_flg == 0){
        $sql = "SELECT id,name,age,email FROM user WHERE name like :name";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':name', $name.'%', PDO::PARAM_STR);
    } else {
        $sql = "SELECT id,name,age,email FROM user WHERE id = :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    }

    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count = count($data);
} catch (PDOException $e) {
    echo  ($e->getMessage());
    die();
}
?>
<html>
    <body>
        <h1>会員データ一覧</h1>
        <p><?php echo $count; ?>件見つかりました。</p>
        <table border=1>
            <tr><th>id</th><th>名前</th><th>年齢</th><th>メール</th></tr>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
