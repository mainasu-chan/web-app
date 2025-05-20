<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>連想配列</title>
    </head>
    <body>
        <?php
            $shop['5F']='レストラン';
            $shop['4F']='キッチン用品';
            $shop['3F']='子供服';
            $shop['2F']='紳士服';
            $shop['1F']='婦人服';
            foreach($shop as $key => $var){
                echo $key. 'は'.$var.'<br>';
            }
        ?>
    </body>
</html>