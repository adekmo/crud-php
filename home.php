<?php 
//koneksi ke database atau menyertakan file koneksi
include "koneksi.php";
?>
		<h2>Products</h2> 
		<center> 
		<table border='1' width='100%'>  
		<tr style='background: '>   
		<th>No</th>
		<th>ID</th>
		<th>Nama</th>
		<th>Supplier</th>
		<th>Harga</th>
		<th>Detail</th>
		</tr>

<!-- membuat perintah memilih table product -->
<?php
$manchester=mysqli_query($koneksi, "SELECT * FROM product");  
$no=1;  
//menampilkan perintah mysqli_query diatas
while ($united=mysqli_fetch_array($manchester)){ 
?>
 	<tr>  
		<td><?php echo $no; ?></td>  
  		<td><?php echo $united['id']; ?></td>
		<td><?php echo $united['nama']; ?></td>    
		<td><?php echo $united['supplier']; ?></td>
		<td><?php echo $united['harga']; ?></td>
		<td align=center>
			<?php echo "
  <a href='detail.php?id=$united[id]'>Lihat</a>"
   ?>
   </td>

   </tr>
   <?php    
   $no=$no+1;    
} ?> 

		</table>
		</center>
		<br><b><a href='tambah.php'> <input type='submit' value='Tambah'></a></b><br><br>

<?php
include "bawah.php";
?>