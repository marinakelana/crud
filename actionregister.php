<?php 
	
	session_start();
	require 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password')");


	if ($result) {
		echo "Anda Berhasil Registrasi!!!";
		echo("<br>");
		echo "Silahkan Login ";
		echo "<a href='register.php'>Disini</a>";
		
	}
	else {
		echo "Maaf Anda Belum Berhasil Registrasi";
		echo "<a href='formregister.php'>Silahkan Coba Lagi</a>";
	}


?>