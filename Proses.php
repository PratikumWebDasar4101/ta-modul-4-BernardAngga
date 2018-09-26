<?php
session_start();

$dir = "uploads/";
$nama_file = $_FILES["image"]["name"];
$nama_file_tmp = $_FILES["image"]["tmp_name"];
$target_file = $dir.$nama_file;

if (move_uploaded_file($nama_file_tmp, $target_file)) {
	header("Location: tampil.php");
}

$detil = array(
	"nama" 		=> $_POST["nama"],
	"genre" 	=> $_POST["genre"],
	"wisata" 	=> $_POST["wisata"],
	"image" 	=> $target_file
);

$_SESSION["detil"] = $detil;
?>