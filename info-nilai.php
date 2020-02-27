<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM mhs WHERE nim=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

$materi=mysql_query("SELECT * FROM materi WHERE urutan_sub='1'");
$materiRow=mysql_fetch_array($materi);
$mtr = $materiRow['bab'];

$res1=mysql_query("SELECT * FROM nilai_latihan WHERE nim=".$_SESSION['user']);
$userRow1=mysql_fetch_array($res1);
$res2=mysql_query("SELECT * FROM nilai_stukas WHERE nim=".$_SESSION['user']);
$userRow2=mysql_fetch_array($res2);
$res3=mysql_query("SELECT * FROM nilai_akhir WHERE nim=".$_SESSION['user']);
$userRow3=mysql_fetch_array($res3);

$lat  = $userRow1['nilai_latihan'];
$kas  = $userRow2['nilai_stukas'];

  //pilihan ganda tinggi
  if($lat>=80){
    $ptinggi = 1;
  } elseif ($lat > 60 && $lat < 80) {
    $ptinggi = (80-$lat)/20;
  } else {
    $ptinggi = 0;
  }

    //pilihan ganda rendah
  if($lat<=60){
    $prendah = 1;
  } elseif ($lat > 60 && $lat < 80) {
    $prendah = ($lat-60)/20;
  } else {
    $prendah = 0;
  }

  //studi kasus tinggi
  if($kas>=80){
    $stinggi = 1;
  } elseif ($kas > 60 && $kas < 80) {
    $stinggi = (80-$kas)/20;
  } else {
    $stinggi = 0;
  }

  //studi kasus rendah
  if($kas<=60){
    $srendah = 1;
  } elseif ($kas > 60 && $kas < 80) {
    $srendah = ($kas-60)/20;
  } else {
    $srendah = 0;
  }

  $z1 = 4;
  $z2 = 3;
  $z3 = 2;
  $z4 = 1;

  //rule
  $a1 = min($stinggi,$ptinggi);    
  $a2 = min($stinggi,$prendah);
  $a3 = min($srendah,$ptinggi);
  $a4 = min($srendah,$prendah); 
  
  //nilai akhir
  $na = (($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4))/($a1+$a2+$a3+$a4); 

$unim = mysql_real_escape_string($userRow['nim']);
  //nilai akhir diberi kondisi if else untuk menentuka grade ABC atau D
  //0-1 d , 1-2 c, 2-3 b, 3-4 a
  if ($na >= 1 && $na < 2) {
    mysql_query("INSERT INTO nilai_akhir(nim, bab, nilai_akhir, keterangan) VALUES('$unim','$mtr',$na',
    	'Tidak Lulus! Revisi')");
  } elseif ($na >= 2 && $na < 3) {
    mysql_query("INSERT INTO nilai_akhir(nim, bab, nilai_akhir, keterangan) VALUES('$unim','$mtr','$na',
    	'Tingkatkan Lagi')");
  } elseif ($na >= 3 && $na < 4) {
    mysql_query("INSERT INTO nilai_akhir(nim, bab, nilai_akhir, keterangan) VALUES('$unim','$mtr','$na',
    	'Ingat!! Sudah Baik')");
  } elseif($na >= 4){
    mysql_query("INSERT INTO nilai_akhir(nim, bab, nilai_akhir, keterangan) VALUES('$unim','$mtr','$na',
    	'Sangat Baik!!')");
  } else {
    echo "error";
  }

?> 

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Informasi Nilai | Modul Interaktif</title>
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
					<div id="info"><i class="fa fa-exclamation-circle" style="width: 200px; "> Informasi Nilai</i></div>
					<table rules="rows" cellpadding="3">
						<tr align="left">
							<th width="200"><font face="Arial" size="3" color="blue">Materi</font></th>
							<th width="200"><font face="Arial" size="3" color="blue">Pilihan Ganda</font></th>
							<th width="200"><font face="Arial" size="3" color="blue">Studi Kasus</font></th>
							<th width="250"><font face="Arial" size="3" color="blue">Keterangan</font></th>
							<th width="200"><font face="Arial" size="3" color="blue">Materi dan Soal</font></th> 
						</tr>
						<tr align="left">
							<td width="200"><?php echo $materiRow['bab']; ?> </th>
							<td width="200"><?php echo $userRow1['nilai_latihan']; ?></th>
							<td width="200"><?php echo $userRow2['nilai_stukas']; ?></th>
							<td width="250"><?php echo $userRow3['keterangan']; ?></th>
							<td width="200" align="center"><a href="#"><font color="lightskyblue">Download</font></a></th>
						</tr>
					</table>
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


