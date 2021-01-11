<?php
include "koneksi.php";
//perintah untuk ke mySQL server
mysqli_query($koneksi, "INSERT INTO product (id,
											nama,
											supplier,
											harga)
											VALUES(
											'$_POST[id]',
											'$_POST[nama]',
											'$_POST[supplier]',
											'$_POST[harga]'
											 )");
?>

<!-- link untuk kembali ke halaman home -->
<br><br><br><br><br><br>
<center><h2><a href='home.php'>Oke Pak, Data Sudah Masuk . . . !</a></h2></center>
