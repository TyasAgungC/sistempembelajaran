<?php
include 'koneksi.php';

$NIP = $_POST['nip'];
$Nama = $_POST['nama'];
$Username = $_POST['user'];
$password = $_POST['pass'];
$Confirm = $_POST['pass'];

$sql = "INSERT INTO dsn (NIP, Nama, Username, password, Confirm) VALUES ('$NIP',$Nama','$Username','$password','$Confirm')";

if ($cnn->query($sql) == TRUE){
header("location:tampildosen.php");
} else {
	echo "Error: ".$sql.". ". $cnn->error;
}
?>