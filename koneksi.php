<!--<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'weblearning';

$koneksi = mysql_connect($host, $user, $pass) or die("GAGAL!");

mysql_select_db(weblearning);

?>

-->

<?php
if(!mysql_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("weblearning"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>


