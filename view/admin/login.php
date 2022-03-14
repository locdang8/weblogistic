<?php

require '../model/thuvien.php';

session_start();
if($_SERVER['REQUEST_METHOD'] == "POST") {
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		// $select = "SELECT * FROM user WHERE taikhoan='$username' AND matkhau='$password'";
		// $stmt = $pdo->query($select);
		// $count = $stmt->rowCount();
		$count = showItem($pdo, "user", $username, $password);
		if($count > 0) {
			$_SESSION['username'] = $username;
			header("location: /weblogistic/controller/admin.php");

		} else {
			$error = "Tài khoản hoặc mật khẩu không đúng!!";
			session_destroy();
		}
	}
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="../view/css/login.css">
</head>
<body>
	<div class="container">
		<div class="form">
			<!-- start form -->
			<form action="" method="POST" class="form__content">
				<div class="form__title">
					<h1>Đăng nhập</h1>
				</div>
				<div class="form__element">
					<div><label for="">Tài khoản</label></div>
					<input type="text" name="username" placeholder="Nhập tài khoản" required>
					<?php 
					if(isset($error)) {
						echo "<span style='color:red'>".$error."</span>";
					}
					?>
				</div>
				
				<div class="form__element">
					<div><label for="">Mật khẩu</label></div>
					<input type="password" name="password" placeholder="Nhập mật khẩu" required>
					<?php 
					if(isset($error)) {
						echo "<span style='color:red'>".$error."</span>";
					}
					?>
				</div>
				
				<div class="form__element">
					<input type="submit" name="submit" value="Đăng nhập">
				</div>
			</form>
			<!-- end form -->
		</div>
	</div>
</body>
<script src="../view/app/login.js"></script>
</html>
