<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>TUGAS CRUD</title>
</head>
<body style="background: url(6.jpg);">

<center>
  <br>
    <h2>Artikel-Artikel Anda</h2>
    <div align="center" style="color:red">
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Isi</th>
    <th>Terkhir di Update</th>
    <th>Opsi</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["judul"] ?></td>
    <td><?= $x["isi"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <a href="index.php">Edit</a> | <a href="index.php">Hapus</a>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<br>
<button><a href="register.php">Login</a></button>
</center>
  </body>
</html>
