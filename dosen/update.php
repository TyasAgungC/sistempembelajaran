<?php
include 'koneksi.php';

$bab = $_POST['bab'];
$sub_materi = $_POST['sub'];
$urutan_sub = $_POST['urutansub'];
$uraian = $_POST['uraian'];

$sql = "UPDATE materi SET bab = '$bab',  sub_materi = '$sub_materi', uraian = '$uraian' WHERE urutan_sub = '$urutan_sub'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Diperbaharui.');window.location='tutorial.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}
?>