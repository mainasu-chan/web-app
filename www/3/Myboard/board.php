<?php
	$dsn='mysql:dbname=sample;host=localhost;charset=utf8';
	$user='root';
	$password='';
	
	try {
		$dbh = new PDO($dsn, $user, $password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
		exit();
	}
	//----------------------------------------------------------------------------
	// 新規登録処理
	//----------------------------------------------------------------------------
	if(isset($_POST['action']) && $_POST['action']=="投稿"){

		$title =  htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');		//P91参照
		$msg =  htmlspecialchars($_POST['msg'], ENT_QUOTES, 'UTF-8'); 
		$err_flg = true;
		
		if($title == ''){
			echo 'タイトルを入力してください。<br>';
			$err_flg = false;
		}
		if($msg == ''){
			echo 'メッセージを入力してください。<br>';
			$err_flg = false;
		}
		
		if($err_flg == false){
			exit();
		}

		$date = date('Y-m-d H:i:s');	//P76参照

		//実行したいSQL文
		//INSERT INTO topic_tb(title,message,date)VALUES(:title,:msg,:date)
		try{
			$sql = 'INSERT INTO topic_tb(title,message,date)VALUES(:title,:msg,:date)';
			$stmt = $dbh->prepare($sql);
			$stmt->bindValue(':title', $title, PDO::PARAM_STR);
			$stmt->bindValue(':msg', $msg, PDO::PARAM_STR);
			$stmt->bindValue(':date', $date, PDO::PARAM_STR);
			$stmt->execute();
		}catch (PDOException $e){
			echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
			exit();
		}
	}
	//------------------------------------------------------------------------
	// 画面表示
	//------------------------------------------------------------------------
	//実行したいSQL文
	//SELECT * FROM topic_tb ORDER BY date DESC
	//投稿日時の新しい順にデータを取得するSQLを実行し、一行ずつデータを変数に取得し配列に格納するコードを記述
	$data = [];
	try{
		$sql = 'SELECT * FROM topic_tb ORDER BY date DESC';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}catch (PDOException $e){
		echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
		exit();
	}
	//DBの切断
	$dbh = NULL;
	
	print <<<EOM
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>なかよしメッセージボード</title>
		<style>
			p{
				margin:0px;
			}
			h1{
				color:#ffffff;
				font-size:1em;
				background-color:#cc6699;
				border-bottom:1px solid #cc6699;
				padding:3px;
			}
			h2{
				color:#336699;
				font-size:1.2em;
				border-bottom:1px solid #6699cc;
				margin-top:20px;
			}
			.date{
				font-size:0.8em;
				color:#666666;
				text-align:right;
			}
			#contents{
				margin-left:50px;
				width:700px;
			}
		</style>
	</head>
	<body>
		<div id="contents">
		<h1>メッセージボード</h1>
		<p>メッセージを投稿してください</p>
		<form method="post" action="board.php">
		<tr>
			<td>タイトル</td>
			<td><input type="text" name="title" size = "40"></td>
		</tr>
		<tr>
			<td>メッセージ</td>
			<td><textarea name="msg" cols="40" rows="5"></textarea></td>
		</tr>
		<tr>
			<td colspan="2">
			<input type="submit" name="action" value="投稿">
			<input type="reset"  name="action" value="リロード">
			</td>
		</tr>
		</form>







EOM;
		foreach($data as $value){
			echo '<h2>' . $value['title'] . '</h2>';
			echo '<p>' . nl2br(($value['message'])) . '</p>';
			echo '<p class="date">投稿日：' . $value['date'] . '</p>';
		}
	echo '</div>';
	echo '</body>';
echo '</html>';
?>
