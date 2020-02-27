<!DOCTYPE html>
<html lang="id">
<head>
	<title>Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="editpilgan.css" type="text/css" />
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
					<li><a href="info.php"><i class="fa fa-exclamation-circle" style="color: orange;width: 91px;"><font face="ebrima"size="3"><b> I</b><font face="arial" size="3"><b>nformasi </b></font></i></a></li>
					<li><a href="panduan.php"><i class="fa fa-asterisk" style="color: orange;width: 88px;"><font face="arial"size="3"><b> Panduan</b></font></i></a></li>
				</ul>
			</div>
		</div>

		<div id="inner">
			<div class="txt">
			<a href="beranda.php"><i class="fa fa-home" style="width: 60px; color: grey"><b> Home</b></i></a>
			</div>
			<div class="txt1">
				<div id="sidebar">
					<div><a href="pilgan.php">Enkapsulasi</a></div>
					<div><a href="#">Abstract Class</a></div>
					<div><a href="#">Interface</a></div>
					<div><a href="#">Polimorfisme</a></div>
				</div>
			</div>
		</div>
		<div id="contentbox">
			<div id="content">
			<form action="updatepilgan.php" method="post">
				<div id="morelinks">
					<div class="mat">
						<div class="style">Soal</div>
						<div class="style1"><u>K</u>ode Soal : <input type="text" name="kode" id="kode" size="33" /></div>
						<div class="style3"><u>M</u>ateri : <input type="text" name="bab" id="kode" size="33" /></div>
						<div class="style4"><u>U</u>rutan : <input type="text" name="urutan" id="urutan" size="33" /></div>
						<div class="style5"><u>S</u>oal : </div><textarea name="soal" rows="5" cols="68"></textarea>
					</div>
				</div>

				<div id="morelinks1">
					<div class="mat">
						<div class="style">Pilihan Jawaban</div>
					</div>
					<div class="style10"><u>P</u>ilihan : <input type="text" name="materi" id="materi" size="33" /></div>
					<div class="style9"><u>J</u>awaban : </div><textarea name="jawaban" rows="5" cols="68"></textarea>
		 
					<?php error_reporting(0); ?>
						<div class="style8"><u>K</u>unci :
							<input type="radio" name="kunci" value="Benar" />Benar
							<input type="radio" name="kunci" value="Salah" />Salah
						</div>
					<div class="style7"><u>F</u>eedback : </div><textarea name="komentar" rows="5" cols="68"></textarea>
				</div>
					<div class="style6"><input type="submit" size="35" name="login" value="Simpan" class="tombol"> 
					</div>
			</form>
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


