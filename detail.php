<?php 

include "koneksi.php";
//membuat perintah ke mySQL server
$udin = mysqli_query($koneksi, "SELECT * FROM product WHERE id='$_GET[id]' ");
//perintah untuk menampilkan data hasil dari fungsi mysqli_query diatas
$oncom=mysqli_fetch_array($udin);
?>

<h1>Products <?php echo $oncom['id']; ?></h1> <hr><br>
<a href='edit.php?id=<?php echo $oncom['id']; ?>'><input type='button' value='Edit'></a>

<a href='delete.php?id=<?php echo $oncom['id']; ?>'  onclick="return confirm('apakah anda yakin mau menghapus data?')"><input type='button' value='Delete'></a>


<form>
<table border='0' width='50%'>
<br>
<tr><td>ID </td><td><input type=text name='id' size='10'  value='<?php echo $oncom['id']; ?>' readonly></td></tr>
<tr><td>Nama Produk</td><td><input type=text name='nama'  value='<?php echo $oncom['nama']; ?>' readonly></td></tr>
<tr><td>Supplier</td><td><input type=text name='supplier'  value='<?php echo $oncom['supplier']; ?>' readonly></td></tr>
<tr><td>Harga</td><td><input type=text name='harga'  value='<?php echo $oncom['harga']; ?>' readonly ></td></tr>

<tr>
	<td colspan=2>
	<br>
	
	<a href='home.php'><input type='button' value='Back'></a>
	</td>
</tr>
</table>
</form>

<?php
include "bawah.php";

?>