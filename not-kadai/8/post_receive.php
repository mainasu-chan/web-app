<?php
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];
    $comment = $_POST['comment'];
?>
<html>
    <head>
        <meta> charset="UTF-8">
    </head>
    <body>
        <h1>受信ページ</h1>
        <p>あなたの名前は<?php echo $name; ?>さんです。</p>
        <p>性別は
            <?php
                if ($gender === 1) {
                    echo "男性";
                } elseif ($gender === 2) {
                    echo "女性";
                }
            ?>
        </p>
        <p>血液型は<?php echo $blood; ?>型です。</p>
        <p>ひとこと: <?php echo nl2br($comment); ?></p>
    </body>
</html>