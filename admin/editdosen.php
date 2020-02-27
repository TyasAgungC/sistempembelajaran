<?php
include 'koneksi.php';

$NIP = $_POST['nip'];
$Nama = $_POST['nama'];
$Username = $_POST['user'];
$Password = $_POST['pass'];
$Confirm = $_POST['pass'];

$sql = "UPDATE dsn SET Nama = $Nama, Username = '$Username', Password = '$Password', Confirm = '$Confirm' where NIP = '$NIP'";

if ($cnn->query($sql) == true) {
	header ("Location: tampildosen.php");
} else {
	echo "Error: " . $cnn->error;
}
?>