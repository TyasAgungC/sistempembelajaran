<?php
session_start();
require_once("koneksi.php");
$username = $_GET['user'];
$pass = $_GET['pass'];
$cekuser = mysql_query("SELECT * from mhs WHERE nim='$username'");
$hasil = mysql_fetch_array($cekuser);
if(mysql_num_rows($cekuser)==0){
	echo "USERNAME BELUM TERDAFTAR";
	header("location:daftar.html");
}
if($pass <> $hasil['pass']){
	echo "password salah";
	header("location:login.html");
} 
if (mysql_num_rows($cekuser)==1){
	$_SESSION['user'] = $hasil['user'];
	header("location:index.html");
}
?>
