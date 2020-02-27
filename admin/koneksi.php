<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'weblearning';

$cnn = mysqli_connect($host, $user, $pass, $db);
if(!$cnn){
	exit('Koneksi Gagal');
}
?>
