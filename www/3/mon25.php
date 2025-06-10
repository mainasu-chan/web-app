<?php

$file = fopen("comment.txt", "r");

while (!feof($file)) {
    $line = fgets($file);
    if ($line !== false) {
        echo htmlspecialchars($line) . "<br>";
    }
}