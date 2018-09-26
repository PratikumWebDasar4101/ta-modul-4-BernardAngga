<?php 
session_start();
if (isset($_SESSION["detil"])) {
	$konsumen = $_SESSION["detil"];
?>
<table>
	<tr>
		<th>Nama</th>
		<th>Genre Film</th>
		<th>Tujuan Wisata</th>
		<th>Gambar</th>
	</tr>
	<tr>
		<td><?php echo $konsumen["nama"]; ?></td>
		<td>
			<?php
				foreach ($konsumen["genre"] as $values) {
					echo $values . "<br>";
				}	
			?>
		</td>
		<td>
			<?php
				foreach ($konsumen["wisata"] as $values) {
					echo $values . "<br>";
				}	
			?>
		</td>
		<td>
			<img width="200px" src="<?php echo $konsumen["image"]; ?>" alt="">
		</td>
	</tr>
	<tr>
		<td><a href="deletedarray.php">Deleted</a></td>
	</tr>
</table>
<?php
}else {
	?>
	<table align="center">
		<tr align="left">
			<th>Nama</th>
			<th>Hobi</th>
			<th>Gambar</th>
		</tr>
		<tr>
			<td>-</td>
			<td>
				-
			</td>
			<td>
				-
			</td>
		</tr>
		<tr><td><a href="Form.php">Tambah</a></td></tr>
	</table>
<?php } 
?>