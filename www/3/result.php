<?php
$teihen = (int)$_POST['teihen'];
$height = (int)$_POST['height'];
$area = $teihen * $height / 2
 ?>

<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <?php
    echo '底辺',$teihen,'cm高さ',$height,'cmの三角形の面積は',$area,"cm<sup>2</sup>です"
    ?>
	</body>
</html>