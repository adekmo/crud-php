<?php
include "koneksi.php";
//perintah untuk menghapus isi dari tabel produk
mysqli_query($koneksi, "DELETE FROM product where id='$_GET[id]' ");
//link untuk kembali ke halaman home
?>
<br><br><br><br><br><br>
<center><h2><a href='home.php'>Oke Pak, Data Sudah Dihapus....</a></h2></center>
<?php  
include "bawah.php";
?>		
