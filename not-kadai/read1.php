<?php
$file = fopen("access.log", "r") or die("ファイルを開けませんでした");
flock($file, LOCK_SH);
while (!feof($file)) {
    $line = fgets($file);
    echo "<p>".$line."</p>";
}
flock($file, LOCK_UN);
fclose($file);
?>