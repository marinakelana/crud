<?php 
	require 'koneksi.php';


	session_start();
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$judul','$isi','$waktu')");

		if ($tambah>0) {
			echo "Artikel Anda Berhasil Ditambahkan";
			echo "<br>";
			echo "Klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk Melihat Hasil";
		}
		else {
			echo "Artikel Anda Gagal Ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";

		}
	

 ?>