<?php
session_start();
if (empty($_SESSION['user'])) {
	header('location:login.php');
} else {
	$user = $_SESSION['user'];
}
?>