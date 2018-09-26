<!DOCTYPE html>
<html>
<head>
	<title>Dokumen</title>
</head>
<body>
	<form action="Login_proses.php" method="post">
		<table>
			<?php if(isset($_SESSION["pesan"])) : ?>
			<tr>
				<td><?php echo $pesan; ?></td>
			</tr>
			<?php endif; ?>
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
			</tr>
			<tr>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>