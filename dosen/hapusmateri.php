<?php
include 'koneksi.php';

$sql = "DELETE FROM materi WHERE urutan_sub='$_GET[urutansub]'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Dihapus.');window.location='tutorial.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}
?>