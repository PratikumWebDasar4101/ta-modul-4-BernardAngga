<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="Proses2.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="genre[]" value="Action"><b>Action</b><br>
					<input type="checkbox" name="genre[]" value="Romance"><b>Romance</b><br>
					<input type="checkbox" name="genre[]" value="Animasi"><b>Animasi</b><br>
					<input type="checkbox" name="genre[]" value="Thriller"><b>Thriller</b><br>
					<input type="checkbox" name="genre[]" value="Anime"><b>Anime</b><br>
					<input type="checkbox" name="genre[]" value="Comedy"><b>Comedy</b><br>
					<input type="checkbox" name="genre[]" value="Cartoon"><b>Cartoon</b>
				</td>
			</tr>
			<tr>
				<td>Tempay/Tujuan Wisata</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="wisata[]" value="Raja Ampat"><b>Raja Ampat</b><br>
					<input type="checkbox" name="wisata[]" value="Karimun Jawa"><b>Karimun Jawa</b><br>
					<input type="checkbox" name="wisata[]" value="Pulau Komodo"><b>Pulau Komodo</b><br>
					<input type="checkbox" name="wisata[]" value="Bali"><b>Bali</b><br>
					<input type="checkbox" name="wisata[]" value="Bhunaken"><b>Bhunaken</b><br>
					<input type="checkbox" name="wisata[]" value="Danau Toba"><b>Danau Toba</b>
				</td>
			</tr>
			<tr>
				<td>Upload</td>
				<td>:</td>
				<td><input type="file" name="image" id="image"></td>
			</tr>
			<tr>
				<td colspan="3"><input align="center" type="submit" value="Submit" name="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>