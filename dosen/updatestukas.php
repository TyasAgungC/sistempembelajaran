<?php
include 'koneksi.php';

$Kasus = $_POST['kasus'];
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];
$direktori = "files/$nama_file";

if (move_uploaded_file($lokasi_file,"$direktori")) {

$sql = "UPDATE stukas SET Kasus = '$_POST[kasus]', Ukuran_file = '$ukuran_file', Direktori = '$direktori' WHERE Nama_file  = '$nama_file'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Diperbaharui.');window.location='stukas.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}
}
?>