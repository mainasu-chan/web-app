<?php
sesssion_start();
$_SESSION["test"] = "Hello";

echo "セッションに".$_SESSION["test"]."をセットした";
?>
<br><a href="./session_top.php">戻る</a>