<?php
session_start();
if((!$_POST['user']) or (!$_POST['pass'])){
	echo "
	<script type='text/javascript'>
	if(confirm('nim atau password kosong')){
		self.location = 'index.html';
	}</script>";
} else {
	include ("koneksi.php");

	$user = $_POST['user'];
	$passw = $_POST['pass'];

	$query_login = mysql_query("select * from mhs where nim='$user' and pass='$passw'");

	if(mysql_num_rows($query_login) == 0){
		echo 'Upss...!!! Login gagal';
	}else{
		$row = mysql_fetch_assoc($query_login);
	}
}

?>