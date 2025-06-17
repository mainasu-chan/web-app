<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数</title>
</head>
<body>
    <?php
    
        function print_copy($copy, $name) {
            $ans = 'Copyright ' . $copy . ' ' . $name . ' all rights reserved.';
            return $ans;
        }
        echo print_copy('2020','竹内');
    ?>
</body>
</html>