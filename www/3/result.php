<?php
 $teihen = (int)$_POST['teihen'];
$height = (int)$_POST['height'];
 ?>

<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <?php
    echo '底辺',$teihen,'cm高さ',$height,'cmの三角形の面積は',$teihen*$height/2,"cm<sup>2</sup>です"
    ?>
	</body>
</html>