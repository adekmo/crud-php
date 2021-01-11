<?php
include "koneksi.php";
$udin = mysqli_query($koneksi, "SELECT * FROM product WHERE id='$_GET[id]' ");
$oncom= mysqli_fetch_array($udin);
?>

<h1> Edit <?php echo $oncom['id']; ?></h1> <hr><br>
<form method='POST' action='aksi_edit.php' enctype='multipart/form-data'>
<table border='0' width='50%'>
<tr><td>ID</td><td><input type=text name='id' size='10'  value='<?php echo $oncom['id']; ?>'></td></tr>
<tr><td>Nama Produk</td><td><input type=text name='nama'  value='<?php echo $oncom['nama']; ?>'></td></tr>
<tr><td>Harga Produk</td><td><input type=text name='harga'  value='<?php echo $oncom['harga']; ?>' ></td></tr>
<tr><td>Supplier</td><td><input type=text name='supplier'  value='<?php echo $oncom['supplier']; ?>' > &nbsp
        <select name='supplier' value='<?php echo $oncom['supplier']; ?>'> 
        <option value='PT ABC'> PT ABC </option>
        <option value='PT CDE'> PT CDE </option>
        </select></td></tr>
<tr>
	<td colspan=2>
	<br>
	<input type='submit' value='Simpan'>
	<a href='detail.php?id=<?php echo $oncom['id']; ?>'><input type='button' value='Back'></a>
	</td>
</tr>
</table>
</form>
<?php
include "bawah.php";
?>

