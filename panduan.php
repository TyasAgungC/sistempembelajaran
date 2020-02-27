<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user']))
{
 header("Location: style.css.php");
}
$res=mysql_query("SELECT * FROM mhs WHERE nim=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Panduan | Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="panduan.css" type="text/css" />
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
			<div id="morelinks2">
				<div class="txt8">
					<div id="menu1">
						<ul>
							<li><a href="#"><font face="arial" color="black" size="3"> Contents</font></a>
								<ul>
									<li class="txt7"><a href="#"><font color="black"> Memulai</font></a></li>
									<li class="txt7"><a href="#"><font color="black"> Tutorial</font></a></li>
									<li class="txt7"><a href="#"><font color="black"> Latihan</font></a></li>
									<li class="txt7"><a href="#"><font color="black"> Informasi</font></a>
										<ul>
											<li class="txt7"><a href="#"><font color="black"> Latihan dan Nilai</font></a></li>
											<li class="txt7"><a href="#"><font color="black"> Berita dan Acara</font></a></li>
										</ul>
									</li>
									<li class="txt7"><a href="#"><font color="black"> Live Editor</font></a></li>
									<li class="txt7"><a href="#"><font color="black"> Mengakhiri</font></a></li>
								</ul>
							</li>
							</li>
							<li><a href="#"><font face="arial" color="black" size="3"> Index</font></a></li>
							<li><a href="#"><font face="arial" color="black" size="3"> Search</font></a></li>
						</ul>
					</div>
				</div>
			<div id="morelinks3"></div>
			<div class="gar" style="width: 3px; height: 509px; text-align: center; background-color: black;"></div>
			</div>
		</div>
		<div id="contentbox2">
			<div id="content">
				<div class="tut">Tutorial</div>
				<div class="tutor">Tutorial merupakan salah satu menu yang disediakan oleh Modul Interaktif. Menu ini menyediakan materi-materi tambahan yang diperlukan oleh pengguna dalam mempelajari konsep pemrograman berorientasi obyek. Materi-materi dalam tutorial ini dirancang untuk melengkapi materi yang diajarkan saat pertemuan tatap muka, sehingga bersifat lebih kaya dan fleksibel.</div>
				<div class="tutor"> Materi dalam sebuah bab dibagi ke dalam beberapa sub materi sehingga pengguna lebih mudah dalam mempelajarinya. Adapun beberapa sub materi yang tersedia antara lain: Pengertian, Cara Kerja, Implementasi dalam Pemrograman, Contoh dan Simulasi yang berupa video tutorial.</div>
				<div class="tutor">Berikut ini adalah beberapa materi yang disediakan oleh Modul Interaktif, seperti yang dapat dilihat dalam menu "Tutorial"</div>

				<div id="header-menu1">
					<div id="menu" align="left">
						<ul>
							<li><a href="#"><i class="fa fa-book" style="color: orange; width: 77px; font-size: 18px;"><font face="arial"size="3"><b> Tutorial </b></font></i></a>
								<ul>
									<div class="txt7">
										<li><a href="tutorial.php"><font color="black">Enkapsulasi</font></a></li></div>
									<div class="txt7">
										<li><a href="#"><font color="black">Abstract Class</font></a></li>
									</div>
									<div class="txt7">
										<li><a href="#"><font color="black">Interface</font></a></li>
									</div>
									<div class="txt7">
										<li><a href="#"><font color="black">Polimorfisme</font></a></li>
									</div>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-pencil-square" style="color: orange;width: 137px; font-size: 19px; "><font face="arial"size="3"><b> Latihan </b></font><i class="fa fa-caret-down" style="color: black" ;"></i></i></a>
								<ul>
									<div class="txt7">
										<li><a href="pil.php"><font color="black">Pilihan Ganda</font></a></li>
									</div>
									<div class="txt7">
										<li><a href="studikasus.php"><font color="black">Studi Kasus</font></a></li>
									</div>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="tutorial">Apabila pengguna memilih salah satu materi yang tersedia, maka akan muncul tampilan berikut : </div>
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


