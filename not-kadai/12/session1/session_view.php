<?php
session_start();

if (isset($_SESSION["test"])) {
    echo $_SESSION["test"] . "の値は「" . $_SESSION["test"] . "」です。";
    echo "<br>";
    echo "セッション名は".session_name();
    echo "<br>";
    echo "セッションの値は".session_id();
} else {
    echo "セッションに値はセットされていません。";
}
?>
<br><a href="./session_top.html">戻る</a>
<br>