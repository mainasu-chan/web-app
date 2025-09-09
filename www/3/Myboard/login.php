<?php
	session_start();
	
	//すでにログイン済みの場合は管理者画面へ
	if(isset($_SESSION['Username'])){
		header('Location: admin.php');
	}
	
	//入力されたID,Passwordでログイン認証
	if(isset($_POST['id'])) {
		$id=$_POST['id'];
		$password=$_POST['password'];

		if($id == 'testid' && $password == 'asdf123'){
			$_SESSION['Username'] = $id;
			header('Location: admin.php');
		}else{
			header('Location: login.php?error=1');
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ログイン画面</title>
	</head>
	<body>
		<p>ログインしてください</p>
		<form action="login.php" method="post">
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Login"></td>
				</tr>
			</table>
		</form>
		<p><a href="board.php">ユーザ画面へ</a></p>
	</body>
</html>
