<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $dm = (int)$_POST['dm'];
 $comment = $_POST['comment'];

 ?>

<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
        <p>入力内容をご確認ください</p>
		<p>お名前<br>
        <?php
            echo $name;
        ?>さま</p>
		<p>メールアドレス<br>
			<?php	
            echo $email;
			?>
	    </p>
		<p>メルマガの送信<br>
            <?php
                if($dm ===1){
                    echo '希望する';
                }elseif($dm ===2){
                    echo '希望しない';
                }
            ?>
        </p>
		<p>
            お問い合わせ内容<br>
			<?php echo nl2br($comment);?>
		</p>
	</body>
</html>