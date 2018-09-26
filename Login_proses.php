<?php 
session_start();

$konsumen = array(
	"username" => "admin",
	"password" => 008
);

if ($konsumen["username"] == $_POST["username"] && $konsumen["password"] == $_POST["password"]) {
	$_SESSION["username"] = $konsumen["username"];
	$_SESSION["password"] = $konsumen["password"];
	$_SESSION["user"] = $konsumen;
	header("Location: Form.php");
}else {
	header("Location: Login.php");
}
?>