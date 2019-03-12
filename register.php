<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location: register.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
 <div class="row">
  <div class="col-md-6 col-md-offset-3">

 	Silahkan Login <br><br>
 	<form method="POST" action="actionlogin.php">
 		Username	: 
		<input type="text" name="username" placeholder="username">
		<br>
		<br>
		Password	:
		<input type="password" name="password" placeholder="password">
		<br><br>
		<input type="submit" name="masuk">
 	</form>
 		<br><br> <h3>Belum Punya Akun?</h3> <button><a href="formregister.php"> Sign Up</a></button>
 				
 </div>
</div>
</body>
</html>