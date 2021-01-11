<?php 
include "koneksi.php";
?>

<h2> Create Product</h2>
<form method='POST' action='aksi_tambah.php' enctype='multipart/form-data'>
<table border='0' width='100%'>
	<tr><td>ID</td><td><input type='text' name='id' size='30'></td></td>
	<tr><td>Nama</td><td><input type='text' name='nama' size='30'></td></td>
	<tr><td>Supplier</td><td>
        <select name='supplier'> 
        <option value='PT ABC'> PT ABC </option>
        <option value='PT CDE'> PT CDE </option>
        </select></td></tr>
		<tr><td>Harga</td><td><input type='text' name='harga' size='30'></td>
		<tr>
 		<td colspan=2>
    	<input type='submit' value='Submit'>
     	<a href='home.php'> <input type='button' value='Back'></a>
  		</td>
  		</tr>
  </table>
</form> 

<?php 
include "bawah.php";
 ?>
