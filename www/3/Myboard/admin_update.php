<?php
	session_start();

	$dsn='mysql:host=localhost;dbname=sample;charset=utf8';
	$user='root';
	$password='';
	
	//DBの接続
	try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8');

	}catch (PDOException $e){
		echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
		exit();
	}
	if(isset($_GET['no']) && $_GET['no']!=""){
		$no = $_GET['no'];
		$_SESSION['no'] = $no;
	}else{
		echo 'パラメータエラー<br>';
		exit();
	}
	
	try{
		$sql = 'SELECT * FROM topic_tb WHERE no=:no';
		$stmt = $dbh->prepare($sql);
		$stmt->bindValue(':no', $no, PDO::PARAM_INT);
		$stmt->execute();

		$num = $stmt->rowCount();

	}catch (PDOException $e){
		echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
		exit();
	}
	
	//1件取得
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	//DBの切断
	$dbh = NULL;
	
	print <<<EOM
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>メッセージ変更フォーム</title>
	</head>
	<body>
		[<a href="admin.php">戻る</a>]<br>
		<form method="post" action="admin.php">
		<table>
			<tr>
				<td>No</td>
				<td>{$row['no']}</td>
			</tr>
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" value="{$row['title']}"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><textarea rows="5" cols="40" name="msg">{$row['message']}</textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="更新"></td>
			</tr>
		</table>
			<input type="hidden" name="action" value="update">
		</form>
	</body>
</html>
EOM;
?>