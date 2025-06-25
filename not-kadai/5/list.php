<!DOCTYPE html>
<html lang="ja">
<head>
<style>
    ul{
        width: 100px;
    }
    .color-red{
        background-color: red;
    }
</style>
</head>
<body>
    <ul>
        <?php
         for ($i = 1; $i <= 20; $i++) {
            if($i%2 === 1){
                echo '<li class="color-red">奇数</li>';
            }else{
                echo '<li>偶数</li>';
            }
         }
        ?>
    </ul>
</body>
</html>