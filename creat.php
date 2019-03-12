<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body style="background: url(1.jpg);">
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		Judul	: 
		<input type="text" name="judul" placeholder="Judul">
		<br>
		<br>
		Isi	:
		<textarea name="isi" rows="20" cols="100" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>