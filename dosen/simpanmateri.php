<?php
include 'koneksi.php';

$bab = $_POST['bab'];
$urutan_bab = $_POST['urutanbab'];
$sub_materi = $_POST['sub'];
$urutan_sub = $_POST['urutansub'];
$uraian = $_POST['uraian'];

$sql = "INSERT INTO materi (bab, urutan_bab, sub_materi, urutan_sub, uraian) VALUES ('$bab','$urutan_bab','$sub_materi','$urutan_sub','$uraian')";

if ($cnn->query($sql) == TRUE){
	echo "<script>alert('Data Berhasil Disimpan.');window.location='tutorial.php'</script>";
} else {
	echo "Error: ".$sql.". ". $cnn->error;
}
?>