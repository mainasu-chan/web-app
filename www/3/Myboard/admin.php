<?php
	//--------------------------------------------------------------------------
	// 管理者用
	//  メッセージの更新と削除ができる
	//--------------------------------------------------------------------------
	session_start();

	$dsn='mysql:host=localhost;dbname=sample;charset=utf8';
	$user='root';
	$password='';
	
	try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->query('SET NAMES utf8');

	}catch (PDOException $e){
		echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
		exit();
	}
	//----------------------------------------------------------------------------------
	// 削除処理
	//----------------------------------------------------------------------------------
	if(isset($_GET['action'])&& $_GET['action']=="delete" && $_GET['no']!=""){
		$no = $_GET['no'];

		try{
			$sql = 'DELETE FROM topic_tb WHERE no=:no';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':no', $no, PDO::PARAM_INT);
            $stmt->execute();

			$num = $stmt->rowCount();

		}catch (PDOException $e){
			echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
			exit();
		}
		
		echo 'データを' . $num . '件削除しました';
	}
	//----------------------------------------------------------------------------------
	//更新処理
	//----------------------------------------------------------------------------------
	if(isset($_POST['action']) && $_POST['action']=="update"){
		$title = $_POST['title'];
		$message = $_POST['msg'];
		$date = date('Y-m-d H:i:s');

		$no = $_SESSION['no'];
		
		try{
			$sql = 'UPDATE topic_tb SET title=:title, message=:message ,date=:date WHERE no=:no';
            $stmt = $dbh->prepare($sql);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':message', $message, PDO::PARAM_STR);
            $stmt->bindValue(':date', $date, PDO::PARAM_STR);
            $stmt->bindValue(':no', $no, PDO::PARAM_INT);
            $stmt->execute();

			
			$num = $stmt->rowCount();
		}catch (PDOException $e){
			echo 'ただ今メンテナンス中です。しばらくの後にお越しください。';
			exit();
		}

		echo 'データを' . $num . '件更新しました';
		unset($_SESSION['no']);
	}
	//------------------------------------------------------------------------
	// 画面表示
	//------------------------------------------------------------------------

	//実行したいSQL文
	//SELECT * FROM topic_tb ORDER BY date DESC
	try{
        $sql = 'SELECT * FROM topic_tb ORDER BY date DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();

        $data = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

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
				background-color:#6699cc;
				border-bottom:1px solid #6699cc;
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
		<h1>メッセージボード管理者用</h1>
		<form method="post" action="admin.php">
			<input type="submit" name="action" value="リロード">
		</form>
EOM;
		foreach($data as $value){
			echo '<h2>' . $value['title'] . '</h2>';
			echo '<p>' . nl2br(($value['message'])) . '</p>';
			echo '<p class="date">投稿日：' . $value['date'] . '</p>';
			echo '<a href="admin.php?action=delete&no=' . $value['no'] . '" onclick="return confirm(\'削除してよいですか？\')">削除</a>';
			echo '　<a href="admin_update.php?no=' . $value['no'] . '">更新</a>';
		}
	echo '</div>';
	echo '</body>';
echo '</html>';
?>
