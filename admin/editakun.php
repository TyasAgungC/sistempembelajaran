<?php
include 'koneksi.php';

$Nama = $_POST['nama'];
$Username = $_POST['user'];
$Password = $_POST['pass'];
$Confirm = $_POST['pass'];

$sql = "UPDATE akun SET Username = '$Username', Password = '$Password', Confirm = '$Confirm' where Nama = '$Nama'";

if ($cnn->query($sql) == true) {
	header ("Location: tampilakun.php");
} else {
	echo "Error: " . $cnn->error;
}
?>