<?php 
require 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

$id = $_GET["id"];

if (hapus($id)>0) {
			echo "Artikel Berhasil Dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk Melihat Hasil";
		}
	else
	{
			echo "Artikel Gagal Dihapus";
			echo "<br>";
			echo "Klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " Untuk Melihat Hasil";
		}
	


 ?>