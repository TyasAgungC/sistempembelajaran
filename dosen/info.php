<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user'])){
header("Location : login.php");
}
$login = mysqli_query($cnn, "SELECT * FROM dsn WHERE NIP = ".$_SESSION['user']);
$row = mysqli_fetch_array($login);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="stukas.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body bgcolor="grey">
	<div id="wrapper">
		<div id="header">
			<div id="logo-left"><img src="foto/logo.PNG" width="135" height="135"></div>
			<div id="logo"><img src="foto/um.PNG" width="125" height="125"></div>
			<div id="logoname1" style="-webkit-text-stroke: 2px black"><font color="white" size="7">MODUL</font></div><br />
			<div id="logoname2" style="-webkit-text-stroke: 2px black"><font color="white" size="7.5">INTERAKTIF</font></div><br />
		</div>
		<div id="header-menu">
			<div id="menu" align="left">
				<ul>
					<li><a href="beranda.php"><i class="fa fa-home" class="icon" style="color: orange; width: 64px;"><font face="arial" size="3"><b> Home</b></font></i></a></li>
					<li><a href="tut.php"><i class="fa fa-book" style="color: orange; width: 77px;"><font face="arial"size="3"><b> Tutorial</b></font></i></a></li>
					<li><a href="#"><i class="fa fa-folder" style="color: orange;width: 137px;"><font face="arial"size="3"><b> Soal Evaluasi </b></font><i class="fa fa-caret-down" style="color: black" ;"></i></i></a>
						<ul>
							<div class="txt2">
							<li><a href="pil.php"><font color="black">Pilihan Ganda</font></a></li></div>
							<div class="txt2">
							<li><a href="studikasus.php"><font color="black">Studi Kasus</font></a></li>
							</div>
						</ul>
					</li>
					<li><a href="laporan.php"><i class="fa fa-file" style="color: orange;width: 154px;"><font face="arial"size="3"><b> Laporan Kegiatan</b></font></i></a></li>
					<li><a href="#"><i class="fa fa-exclamation-circle" style="color: orange;width: 91px;"><font face="ebrima"size="3"><b> I</b><font face="arial" size="3"><b>nformasi </b></font></i></a></li>
					<li><a href="panduan.php"><i class="fa fa-asterisk" style="color: orange;width: 88px;"><font face="arial"size="3"><b> Panduan</b></font></i></a></li>
				</ul>
			</div>
		</div>
		<div id="inner">
			<div class="txt">
			<a href="beranda.php"><i class="fa fa-home" style="width: 60px; color: silver"><b> Home</b></i></a>
			</div>
			<div class="txt4">
				<a href="logout.php"><i class="fa fa-sign-out" class="icon" style="color: silver; width: 60px"><b>Logout</b></i></a>
			</div>
		</div>
		<div id="contentbox">
			<div id="content">
				<div class="lap"><font color="blue" face="arial" size="5">Informasi</font></div>
				<div id="morelinks1">
					<div class="no2">No</div>
					<div class="info">Informasi</div>
					<div class="tgl">Tanggal</div>
					<div class="oleh">Oleh</div>
					<div class="garis5"></div>
					
					<?php
					include 'koneksi.php';
					
					$sql = mysqli_query($cnn, 'SELECT * FROM informasi');	
					while ($bar = mysqli_fetch_array($sql)) {?>
					<div class="no2"><?php echo $bar['No']; ?></div>
					<div class="info"><?php echo $bar['Judul']; ?></div>
					<div class="tgl"><?php echo $bar['Tanggal']; ?></div>
					<div class="oleh"><?php echo $row['Nama']; ?></div>
					<div class="pen">
					<a href="editinfo.php"><i class="fa fa-pencil-square" style="font-size: 25px; color: #00CCCC"></i></a>
					<a href="hapusinfo.php"><i class="fa fa-times-circle" style="font-size: 25px; color: #00CCCC"></i></a>
					</div>
					<div class="garis6"></div>
					<?php 
					}
					?>
					<a href="tambahinfo.php"><input type="submit" name="info" size="35" value="+ Tambah Informasi" class="tombol1"></a>
				</div>
			</div>
		</div>

		<div id="footer">
			<div id="credits">
			<div class="isi1">
			<div align="center">
				<font color="#E0FFFF" size="4">
				&copy; 2018. Design by Tiga Dara. Teknik Informatika UM 
				</font>
			</div>
		</div>
	</div>
</div>
</body>
</html>