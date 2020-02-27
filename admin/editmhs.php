<?php
include 'koneksi.php';

$NIM = $_POST['nim'];
$Nama = $_POST['user'];
$prodi = $_POST['prodi'];
$Angkatan = $_POST['angkatan'];
$Offering = $_POST['offering'];
$password = $_POST['pass'];

$sql = "UPDATE mhs SET nama = '$Nama', prodi = $prodi, angkatan = '$Angkatan' , off = '$Offering', pass = '$password' where nim = '$NIM' ";

if ($cnn->query($sql) == true) {
	header ("Location: tampilmhs.php");
} else {
	echo "Error: " . $cnn->error;
}
?>