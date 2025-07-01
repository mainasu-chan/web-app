<?php
$dsn = 'mysql:dbname=sample;charset=utf8mb4;host=localhost';
$username = 'root';
$password = '';
$name = '太田美香';
$age = 32;

try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (name,age) VALUES (:name,:age)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':name', $name,PDO::PARAM_STR);
    $stmt->bindParam(':age', $age,PDO::PARAM_INT);
    $stmt->execute();
    echo "処理が終了しました。";
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}