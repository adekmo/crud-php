<?php
include "koneksi.php";
// perintah untuk mengubah isi/record dari tabel product
mysqli_query ($koneksi, "UPDATE product SET
											nama = '$_POST[nama]', 	
											harga =	'$_POST[harga]',
											supplier =	'$_POST[supplier]'
											WHERE id = '$_POST[id]' ");
?>

//javascript
<script>
	alert ('Data product berhasil diedit');
	document.location.href='detail.php?id=<?php echo $_POST['id']; ?>';
</script>
<?php
include "bawah.php";			
?>