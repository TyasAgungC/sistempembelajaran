<?php
include 'koneksi.php';

$No = 0;
$No++;
$judul = $_POST['Judul'];
$isi = $_POST['isi'];

$sql = "UPDATE informasi SET Judul = '$judul',  Isi = '$isi' WHERE No = '$No++'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Diperbaharui.');window.location='info.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}
?>