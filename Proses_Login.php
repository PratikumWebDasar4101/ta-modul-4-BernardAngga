<?php 
session_start();

$user = array(
	"nama" => "Nama Anda",
	"username" => "admin",
	"password" => 000,
	"notelp" => "085767769889"
);

if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: Form.php");
}else {
	header("Location: login.php");
}
?>