<?php 
	require 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$id = $_GET["id"];

	$ubah = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			echo "Artikel berhasil Diedit";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk Melihat Hasil";
		}
		else{
			echo "Artikel Gagal Diedit";
			echo "<br>";
			echo "SIlahkan klik ";
			echo "<a href='creat.php'>Disini</a>";
			
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit articel</title>
</head>
<body style="background: url(2.jpg);">
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->

 	<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $ubah["id"]?>">
 		<br>
 		Judul	: 
		<input type="text" name="judul" placeholder="Judul" value="<?= $ubah["judul"]?>">
		<br>
		<br>
		Isi	:
		<textarea name="isi" rows="20" cols="100" value="<?= $ubah["isi"]?>"></textarea>
		<br><br>
		<input type="submit" name="submit"">
 	</form>
</body>
</html>