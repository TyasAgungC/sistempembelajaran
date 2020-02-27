<?php
include 'koneksi.php';

$NIM = $_POST['nim'];
$Nama = $_POST['user'];
$password = $_POST['pass'];
$Angkatan = $_POST['angkatan'];
$Offering = $_POST['offering'];
$Status = $_POST['status'];

$sql = "INSERT INTO asisten (NIM, Nama, password, Angkatan, Offering, Status) VALUES ('$NIM','$Nama','$password','$Angkatan','$Offering', '$Status')";

if ($cnn->query($sql) == TRUE){
header("location:da.php");
} else {
	echo "Error: ".$sql.". ". $cnn->error;
}
?>