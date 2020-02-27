<?php
include 'koneksi.php';

$No = 0;
$No++;
$sql = "DELETE FROM informasi WHERE No = '$No++'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Dihapus.');window.location='info.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}
?>