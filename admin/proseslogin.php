<?php
session_start();
require_once('koneksi.php');

$user	= $_POST['user'];
$pass	= $_POST['pass'];
$login = mysqli_query($cnn, "SELECT * FROM akun WHERE Username = '$user'");

$row = mysqli_fetch_array($login);
if ($row['Username'] == $user AND $row['Password'] == $pass) 
{
	$_SESSION['user'] = $row['username'];
	header('location:masuk.php');
}else {
	echo "LOGIN GAGAL!";
	echo "Username atau Password Anda Salah!";
	header('location:login.php');
}
?>