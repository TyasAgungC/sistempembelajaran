<?php
session_start();
require_once('koneksi.php');
$user = $_POST['user'];
$pass = $_POST['pass'];
$login = mysqli_query($cnn, "SELECT * FROM dsn WHERE NIP = '$user' AND Password = '$pass'");

$row = mysqli_fetch_array($login);
if ($row['NIP'] == $user AND $row['Password'] == $pass) 
{
  session_start();
  $_SESSION['user'] = $row['NIP'];
  $_SESSION['pass'] = $row['Password'];
  header('location:beranda.php');
} else {
  echo "<script>alert('LOGIN GAGAL! Username atau Password yang Anda Masukkan Salah! Silahkan Cek dan Login Kembali.');window.location='login.php'</script>";
} 
?>