<?php
$dsn = 'mysql:dbname=sample;charset=utf8mb4;host=localhost';
$username = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "接続に成功しています。";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}