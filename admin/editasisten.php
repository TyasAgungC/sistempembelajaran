<?php
include 'koneksi.php';

$NIM = $_POST['nim'];
$Nama = $_POST['user'];
$password = $_POST['pass'];
$Angkatan = $_POST['angkatan'];
$Offering = $_POST['offering'];
$Status = $_POST['status'];

$sql = "UPDATE asisten SET NIM = '$NIM', password = '$password', Angkatan = '$Angkatan' , Offering = '$Offering' , Status = '$Status' where Nama = '$Nama'";

if ($cnn->query($sql) == true) {
	header ("Location: tampilasisten.php");
} else {
	echo "Error: " . $cnn->error;
}
?>