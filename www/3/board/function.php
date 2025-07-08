<?php
function htmlspecialchars_custom($word) {
    return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}

function html_escape($word) {
    return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}
function get_post($key){
    if (isset($_POST[$key])) {
        $var = trim($_POST[$key]);
        return $var;
    }
}

function check_words($word,$length){
    if (mb_strlen($word) === 0) {
        return false;
    }elseif(mb_strlen($word) > $length){
        return false;
    }
    return true;
}
function get_db_connect(){
    try {
        $dsn = 'mysql:host=localhost;dbname=sample;charset=utf8';
        $username = 'root';
        $password = '';
        $dbh = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }
$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $dbh;
}

function insert_comment($dbh, $name, $comment) {
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO board (name, comment, created) VALUE (:name, :comment, '{$date}')";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
    if (!$stmt->execute()) {
        return "データの書き込みに失敗しました";
    }
}
function select_comments($dbh) {
$sql = "SELECT name, comment, created
FROM board";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$data = [];
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
$data[] = $row;

}
return $data;
}