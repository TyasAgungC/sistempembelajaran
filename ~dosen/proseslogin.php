<?php
session_start();
require_once('koneksi.php');
$user	= $_POST['user'];
$pass	= $_POST['pass'];
$login = mysqli_query($cnn, "SELECT * FROM dsn WHERE NIP = '$user' AND Password = '$pass'");

$row = mysqli_fetch_array($login);
if ($row['NIP'] == $user AND $row['Password'] == $pass) 
{
	session_start();
	$_SESSION['user'] = $row['NIP'];
	$_SESSION['pass'] = $row['Password'];
	header('location:index.php');
}
else
{
	echo "LOGIN GAGAL!";
	echo "Username atau Password Anda Salah!";
	header('location:login.php');
}
?>