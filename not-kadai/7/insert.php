<?php
$dsn = 'mysql:dbname=sample;charset=utf8mb4;host=localhost';
$username = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (id,name,age,email) VALUES (NULL,'田中三郎', 28, 'sample5@sample5.com')";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    echo "接続に成功しています。";
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}