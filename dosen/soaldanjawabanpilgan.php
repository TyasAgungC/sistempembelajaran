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

$sql = "INSERT INTO soal_pilgan (materi, kode_soal, urutan, soal, pilihan, jawaban, kunci, feedback) VALUES ('$Materi','$Kode_soal', '$Urutan','$Soal', '$Pilihan', '$Jawaban', '$Kunci', '$Feedback')";

if ($cnn->query($sql) == TRUE){
	echo "<script>alert('Data Berhasil Disimpan.');window.location='pilgan.php'</script>";
} else {
	echo "Error: ".$sql.". ". $cnn->error;
}
?>