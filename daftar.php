<?php
session_start();
if(isset($_SESSION['user'])!=""){
	header("Location: index.php");
}

include_once 'koneksi.php';

if(isset($_POST['daftar'])){
	$unim = mysql_real_escape_string($_POST['nim']);
	$unama = mysql_real_escape_string($_POST['nama']);
	$uprodi = mysql_real_escape_string($_POST['prodi']);
	$uangk = mysql_real_escape_string($_POST['angkatan']);
	$uoff = mysql_real_escape_string($_POST['off']);
	$upass = mysql_real_escape_string($_POST['pass']);

if(mysql_query("INSERT INTO mhs(nim, nama, prodi, angkatan, off, pass) VALUES('$unim','$unama','$uprodi','$uangk','$uoff','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
        header("Location: login.php");
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Sign Up | Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="style.css" type="text/css" />
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
					<li><a href="login.php"><i class="fa fa-home" style="width: 90px;"> Beranda</i></a></li>
					<li><a href="login.php"><i class="fa fa-book" style="width: 120px;"> Tutorial <i class="fa fa-caret-down"></i></i></a>
						<ul>
							<li><a href="login.php">Video</a></li>
							<li><a href="login.php">Materi</a></li>
						</ul>
					</li>
					<li><a href="latihan.php"><i class="fa fa-pencil-square" style="width: 120px;"> Latihan <i class="fa fa-caret-down" style="color: black;"></i></i></a>
						<ul>
							<li><a href="login.php">Pilihan Ganda</a></li>
							<li><a href="login.php">Studi Kasus</a></li>
						</ul>
					</li>
					<li><a href="login.php"><i class="fa fa-exclamation-circle" style="width: 120px;"> Informasi <i class="fa fa-caret-down" style="color: black;"></i></i></a>
						<ul>
							<li><a href="login.php">Berita & Acara</a></li>
							<li><a href="login.php">Informasi Nilai</a></li>
						</ul>
					</li>
					<li><a href="login.php"><i class="fa fa-pencil-square-o" style="width: 120px;"> Live Coding </i></a></li>
					<li><a href="login.php"><i class="fa fa-quote-left" style="width: 90px;"> Angket</i></a></li>
					<li><a href="login.php"><i class="fa fa-tag" style="width: 90px;"> Panduan</i></a></li>
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
				<div id="content">
				<div id="daftar">
					<form method="post">
					<table>
						<h2>Pendaftaran Akun</h2>
						<tr>
							<td align="right">NIM</td>
							<td> </td>
							<td><input type="text" name="nim" maxlength="12" required size="30"></td>
						</tr>
						<tr>
							<td align="right">Nama</td>
							<td> </td>
							<td><input type="text" name="nama" required size="30"></td>
						</tr>
						<tr>
							<td align="right">Program Studi</td>
							<td> </td>
							<td><select name="prodi">
								<option>Teknik Informatika</option>
								<option>Pendidikan Teknik Informatika</option>
								<option>Teknik Elektro</option>
								<option>Pendidikan Teknik Elektro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="right">Angkatan</td>
							<td> </td>
							<td><select name="angkatan">
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
							</select></td>
						</tr>
						<tr>
							<td align="right">Offering</td>
							<td> </td>
							<td><select name="off">
								<option>A</option>
								<option>B</option>
								<option>C</option>
								<option>D</option>
							</select></td>
						</tr>
						<tr>
							<td align="right">Password</td>
							<td> </td>
							<td><input type="password" name="pass" required size="30"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input class="tombol" type="submit" name="daftar" value="Daftar" ></td>
						</tr>
					</table>
					</form>
				</div>
				</div>
			</div>	
		</div>

		<div id="sidebar">
			
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


