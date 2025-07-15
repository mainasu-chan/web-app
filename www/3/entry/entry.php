<?php
$error_flg = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(mb_strlen($_POST['name']) == 0){
        echo "nameを入力してください。<br>";
        $error_flg = 1;
    }
    if(mb_strlen($_POST['age']) == 0){
        echo "ageを入力してください。<br>";
        $error_flg = 1;
    }
    else if(is_numeric($_POST['age']) !== true){
        echo "ageは数値で入力してください。<br>";
        $error_flg = 1;
    }
    if($error_flg == 1){
        exit();
    }
}
$dsn = 'mysql:host=localhost;dbname=sample;charset=utf8';
$username = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (name, age, email) VALUES (:name, :age, :email)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $stmt->bindValue(':age', $_POST['age'], PDO::PARAM_INT);
    $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->execute();
} catch (PDOException $e) {
    echo  ($e->getMessage());
    die();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>会員登録</title>
    </head>
    <body>
        <p>以下のデータを登録しました</p>
        <ul>
            <li>name: <?php echo $_POST['name'];?></li>
            <li>age: <?php echo $_POST['age'];?></li>
            <li>email: <?php echo $_POST['email'];?></li>
        </ul>
        <a href="entry.html">フォームへ</a>
    </body>
</html>