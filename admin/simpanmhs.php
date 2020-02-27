<?php
include 'koneksi.php';

$NIM = $_POST['nim'];
$Nama = $_POST['user'];
$prodi = $_POST['prodi'];
$password = $_POST['pass'];
$Angkatan = $_POST['angkatan'];
$Offering = $_POST['offering'];

$sql = "INSERT INTO mhs (nim, nama, prodi, angkatan, off, pass) VALUES ('$NIM','$Nama','$prodi','$Angkatan','$Offering','$password')";

if ($cnn->query($sql) == TRUE){
header("location:tampilmhs.php");
} else {
	echo "Error: ".$sql.". ". $cnn->error;
}
?>