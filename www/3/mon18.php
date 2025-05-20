<?php

    $phone_list = array('Taro' => '03-1111-1111',
    'Jiro' => '03-2222-2222',
    'Saburo' => '03-3333-3333',
    'Siro' => '03-4444-4444');

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>連想配列</title>
    </head>
    <body>
        <dl>
        <?php
            foreach($phone_list as $key => $var){
                echo '<dt>'.$key.'</dt><dd>'.$var.'<dd><br>';
            }
        ?>
        </dl>
    </body>

</html>