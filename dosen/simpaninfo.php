<?php
include 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");

$No = $_POST['no'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$date = date("Y/m/d");

$sql = "INSERT INTO informasi (No, Judul, Isi, Tanggal) VALUES ('$No','$judul','$isi','$date')";

if ($cnn->query($sql) == TRUE){
	echo "<script>alert('Data Berhasil Disimpan.');window.location='info.php'</script>";
} else {
	echo "Error: ".$sql.". ". $cnn->error;
}
?>