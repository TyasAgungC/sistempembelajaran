<?php
include 'koneksi.php';

$sql = "DELETE FROM asisten where Nama = '$Nama'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Dihapus.');window.location='tampilasisten.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}
?>