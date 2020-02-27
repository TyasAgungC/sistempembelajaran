<?php
include 'koneksi.php';

$sql = "DELETE FROM soal_pilgan WHERE kode_soal = 'En_PG_01'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Dihapus.');window.location='pilgan.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}
?>