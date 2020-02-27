<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM mhs WHERE nim=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

$stukas=mysql_query("SELECT * FROM stukas WHERE Nama_file='2.JPG'");
$stukasRow=mysql_fetch_array($stukas);
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Studi Kasus | Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="style2.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body bgcolor="grey">
	<div id="wrapper">
		<div id="header">
			<div id="logo-left"><img src="images/logo.PNG" width="135" height="135"></div>
			<div id="logo"><img src="images/um.PNG" width="125" height="125"></div>
			<div id="logoname1" style="-webkit-text-stroke: 2px black"><font color="white" size="7">MODUL</font></div><br />
			<div id="logoname2" style="-webkit-text-stroke: 2px black"><font color="white" size="7.5">INTERAKTIF</font></div><br />
		</div>
		<hr width="1142px" align="left">
		<div id="header-menu">
			<div id="menu" align="left">
				<ul>
					<li><a href="index.php"><i class="fa fa-home" style="width: 90px; "> Beranda</i></a></li>
					<li><a href="tutorial.php"><i class="fa fa-book" style="width: 120px; "> Tutorial <i class="fa fa-caret-down" style="color: black;"></i></i></a>
						<ul>
							<li><a href="video.php">Video</a></li>
							<li><a href="materi.php">Materi</a></li>
						</ul>
					</li>
					<li><a href="latihan.php"><i class="fa fa-pencil-square" style="width: 120px;"> Latihan <i class="fa fa-caret-down" style="color: black;"></i></i></a>
						<ul>
							<li><a href="latihan.php">Pilihan Ganda</a></li>
							<li><a href="stukas.php">Studi Kasus</a></li>
						</ul>
					</li>
					<li><a href="informasi.php"><i class="fa fa-exclamation-circle" style="width: 120px; "> Informasi <i class="fa fa-caret-down" style="color: black;"></i></i></a>
						<ul>
							<li><a href="berita-acara.php">Berita & Acara</a></li>
							<li><a href="info-nilai.php">Informasi Nilai</a></li>
						</ul>
					</li>
					<li><a href="live.php"><i class="fa fa-pencil-square-o" style="width: 120px; "> Live Coding </i></a></li>
					<li><a href="angket-intro.php"><i class="fa fa-quote-left" style="width: 90px; "> Angket</i></a></li>
					<li><a href="panduan.php"><i class="fa fa-tag" style="width: 90px; "> Panduan</i></a></li>
				</ul>
			</div>
			<div id="searchmenu" align="right">
				<form> 
					<input type="text" name="search" placeholder="Kata Kunci" size="20">
					<input type="submit" value="cari" class="tombol">
				</form>
			</div>
		</div>
		<hr width="1142px" align="left">
		<div id="inner">
		<div id="contentbox">
			<div class="scroll">
				<div id="content">
				<h1><?php echo $stukasRow['Bab']; ?></h1>
				<div id="j-soal">Studi Kasus</div>
				<form>	
					<div id="i-soal"><?php echo $stukasRow['Kasus']; ?></div>
					<div id="gambar"><img width="300px" height="350px" src="dosen/files/<?php echo $stukasRow['Nama_file']; ?>" border='0' /></div>
					<div id="i-soal">Kemudian buatlah laporan dalam bentuk .pdf atau .doc, beri nama NIM_laporanke dan upload melalui tombol di bawah ini, dengan format laporan : source code, screenshoot program dan penjelasan singkat mengenai jalannya program. </div>
					<div id="browse">
						<label>File</label><br />
						<div id="b-file"><input type="file" name="upload" size="33" /></div>
						<input class="tombol" type="submit" name="upload" value="Upload">
					</div>
				</form>
				</div>
			</div>
		</div>

		<div id="sidebar">
			<div id="login">
				<label>
				<table>
					<div class="tombol"><center>Selamat Datang</center></div> <br />
					
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><?php echo $userRow['nama']; ?></td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><?php echo $userRow['nim']; ?></td>
					</tr>
					<tr>
						<td>Prodi</td>
						<td>:</td>
						<td><?php echo $userRow['prodi']; ?></td>
					</tr>
					<tr>
						<td>Off</td>
						<td>:</td>
						<td><?php echo $userRow['off']; ?></td>
					</tr>
					</label>
					<tr>
						<td></td>
						<td></td>
						<td align="center"><a href="logout.php"><i class="fa fa-sign-out" style="width: 90px;"> Logout </i></a></td>
					</tr>
				</table>
			</div>
		
			<div id="morelinks">
				<p>&nbsp;<h2><font color="orange"> Tautan Lain</font></h2></p>
				<ul>
					<li><font face="Arial" color="teal" size="3"><i class="fa fa-caret-down" style="margin-left: -35px; width: 20px; color: teal;"></i> <b>(1)</b> </font>
						<ul>
							<li><font face="Arial" color="teal" size="2" style="margin-left: -50px;"><u>Live Editor</u></font></li>
						</ul>
					</li>
					<li><font face="Arial" color="teal" size="3"><i class="fa fa-caret-down" style="margin-left: -35px; width: 20px; color: teal;"></i> <b>Abstract Class (2)</b> </font>
    					<ul>
							<li><font face="Arial" color="teal" size="2" style="margin-left: -50px;"><u>Pengertian dan Kegunaan Abstrak Class</u></font></li>
							<li><font face="Arial" color="teal" size="2" style="margin-left: -50px;"><u>Manfaat Abstract Class</u></font></li>
						</ul>
    				</li> 
				</ul>
			</div>
		</div>
		

		<div id="footer">
			<div id="credits">
			<div align="center">
				<font color="#E0FFFF">
				&copy; 2018. Design by Tiga Dara. Teknik Informatika UM 
				</font>
			</div>
		</div>
	</div>
</div>

</body>
</html>


