<!DOCTYPE html>
<html lang="id">
<head>
	<title>Modul Interaktif</title>
	<link rel="stylesheet" href="materi.css" type="text/css" />
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
				<a href="beranda.php"><i class="fa fa-home" style="color: silver; width: 60px;"><b> Home</b></i></a>
				<div class="txt1"></div>
			</div>
		</div>
		<div id="contentbox">
			<div id="content">
				<div id="morelinks">
					<div class="mat">
						<div class="style">Materi</div>
					</div>
				<form action="simpanmateri.php" method="post">
					<div class="style1"><u>B</u>ab : <input type="text" name="bab" id="bab" size="33" /></div>
					<div class="style2"><u>U</u>rutan Bab : <input type="text" name="urutanbab" id="urutan" size="33" /> </div>
					<div class="style3"><u>S</u>ub Materi : <input type="text" name="sub" id="sub" size="33" /></div>
					<div class="style4"><u>U</u>rutan Sub  Materi : <input type="text" name="urutansub" id="urutan" size="33" /></div>
					<div class="style5"><u>U</u>raian : </div><textarea name="uraian" rows="70" cols="58"></textarea>
					<div class="style6"><input type="submit" size="35" name="login" value="Simpan" class="tombol"> 
					</div>
				</form>
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


