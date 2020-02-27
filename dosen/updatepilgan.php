<?php
include 'koneksi.php';

$Materi = $_POST['bab'];
$Kode_soal = $_POST['kode'];
$Urutan = $_POST['urutan'];
$Soal = $_POST['soal'];
$Pilihan = $_POST['materi'];
$Jawaban = $_POST['jawaban'];
$Kunci = $_POST['kunci'];
$Feedback = $_POST['komentar'];

$sql = "UPDATE soal_pilgan SET materi = '$Materi', urutan = '$Urutan', soal = '$Soal', pilihan = '$Pilihan', jawaban = '$Jawaban', kunci = '$Kunci', feedback = '$Feedback' WHERE kode_soal = '$Kode_soal'";

if ($cnn->query($sql) == true) {
	echo "<script>alert('Data Berhasil Diperbaharui.');window.location='pilgan.php'</script>";
} else {
	echo "Error: " . $cnn->error;
}