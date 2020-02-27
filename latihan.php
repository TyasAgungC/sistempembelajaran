<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user'])){
	header("Location: login.php");
}

$res=mysql_query("SELECT * FROM mhs WHERE nim=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

$materi=mysql_query("SELECT * FROM materi WHERE urutan_sub='1'");
$materiRow=mysql_fetch_array($materi);

$soal1=mysql_query("SELECT * FROM soal_pilgan WHERE urutan='1'");
$soal1Row=mysql_fetch_array($soal1);

$soal2=mysql_query("SELECT * FROM soal_pilgan WHERE urutan='2'");
$soal2Row=mysql_fetch_array($soal2);

if(isset($_POST['save'])){
	$unim = $userRow['nim'];
	$umateri = $materiRow['bab'];
	$ujawab1 = mysql_real_escape_string($_POST['jwb1']);
	$ujawab2 = mysql_real_escape_string($_POST['jwb2']);
	$ujawab3 = mysql_real_escape_string($_POST['jwb3']);
	$ujawab4 = mysql_real_escape_string($_POST['jwb4']);
	$ujawab5 = mysql_real_escape_string($_POST['jwb5']);

	if(mysql_query("INSERT INTO jawaban(nim, bab, jawaban) VALUES('$unim','$umateri','$ujawab1$ujawab2$ujawab3$ujawab4$ujawab5')")){
	?>
    	<script>alert('save success. Silahkan submit');</script>
    	<?php 
	} else{
	?>
    	<script>alert('save error ...');</script>
	<?php
	}
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Latihan | Modul Interaktif</title>
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
				<h1><?php echo $materiRow['bab']; ?></h1>
				
				<form method="post" action="">
					<div id="j-soal">1. <?php echo $soal1Row['soal']; ?> </div>
					<div id="i-soal">
						<input type="radio" name="jwb1" value="a"> a. Membagi sebuah class dalam method-method dan data <br />
						<input type="radio" name="jwb1" value="b"> b. Membungkus method dan data pada suatu class sehingga menjadi suatu method yang tersusun rapi <br />
						<input type="radio" name="jwb1" value="c"> c. Membuat copy method dan data pada suatu class sehingga menjadi suatu modul yang baru <br />
						<input type="radio" name="jwb1" value="d"> d. <?php echo $soal1Row['jawaban']; ?> <br />
					</div>
					<div id="j-soal">2. <?php echo $soal2Row['soal']; ?> </div>
						<div id="i-soal">
						<input type="radio" name="jwb2" value="a"> a. <?php echo $soal2Row['jawaban']; ?> <br />
						<input type="radio" name="jwb2" value="b"> b. Menggunakan keyword void untuk membaca nilai sebuah variabel <br />
						<input type="radio" name="jwb2" value="c"> c. Menggunakan keyword public pada variabel <br />
						<input type="radio" name="jwb2" value="d"> d. Menggunakan keyword return untuk mengeset nilai sebuah variabel <br />
					</div>
					<div id="j-soal">3. <?php echo $soal1Row['soal']; ?> </div>
					<div id="i-soal">
						<input type="radio" name="jwb3" value="a"> a. Membagi sebuah class dalam method-method dan data <br />
						<input type="radio" name="jwb3" value="b"> b. Membungkus method dan data pada suatu class sehingga menjadi suatu method yang tersusun rapi <br />
						<input type="radio" name="jwb3" value="c"> c. Membuat copy method dan data pada suatu class sehingga menjadi suatu modul yang baru <br />
						<input type="radio" name="jwb3" value="d"> d. <?php echo $soal1Row['jawaban']; ?> <br />
					</div>
					<div id="j-soal">4. <?php echo $soal2Row['soal']; ?> </div>
						<div id="i-soal">
						<input type="radio" name="jwb4" value="a"> a. <?php echo $soal2Row['jawaban']; ?> <br />
						<input type="radio" name="jwb4" value="b"> b. Menggunakan keyword void untuk membaca nilai sebuah variabel <br />
						<input type="radio" name="jwb4" value="c"> c. Menggunakan keyword public pada variabel <br />
						<input type="radio" name="jwb4" value="d"> d. Menggunakan keyword return untuk mengeset nilai sebuah variabel <br />
					</div>
					<div id="j-soal">5. <?php echo $soal1Row['soal']; ?> </div>
					<div id="i-soal">
						<input type="radio" name="jwb5" value="a"> a. Membagi sebuah class dalam method-method dan data <br />
						<input type="radio" name="jwb5" value="b"> b. Membungkus method dan data pada suatu class sehingga menjadi suatu method yang tersusun rapi <br />
						<input type="radio" name="jwb5" value="c"> c. Membuat copy method dan data pada suatu class sehingga menjadi suatu modul yang baru <br />
						<input type="radio" name="jwb5" value="d"> d. <?php echo $soal1Row['jawaban']; ?> <br />
					</div>
					<input class="tombol" type="submit" name="save" value="Save">
				</form>
					<form method="post" action="cek-latihan.php">
						<input class="tombol" type="submit" name="submit" value="Submit">
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


