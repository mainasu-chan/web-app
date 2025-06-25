<?php
session_start();
$profile = $_SESSION["profile"];
$cart = $_SESSION["cart"];
?>
<html>
    <body>
        <p>こんにちは、<?php echo $profile["user_name"];?>さん</p>
        <p>地域:<?php echo $profile["location"];?></p>
        <h2>カートの中身</h2>
        <hr>
        <?php
            foreach ($cart as $key => $var) {
                echo "商品ID: " . $key . "/個数: " . $var . "<br>";
            }
        ?>
        <a href="session_set.php">戻る</a>
    </body>