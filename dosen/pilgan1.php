<!DOCTYPE html>
<html lang="id">
<head>
	<title>Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="style.css" type="text/css" />
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
							<li><a href="pil.php"><font color="black">Pilihan Ganda</font></a></li>
							<li><a href="studikasus.php"><font color="black">Studi Kasus</font></a></li>
						</ul>
					</li>
					<li><a href="laporan.php"><i class="fa fa-file" style="color: orange;width: 154px;"><font face="arial"size="3"><b> Laporan Kegiatan</b></font></i></a></li>
					<li><a href="info.php"><i class="fa fa-exclamation-circle" style="color: orange;width: 91px;"><font face="ebrima"size="3"><b> I</b><font face="arial" size="3"><b>nformasi </b></font></i></a></li>
					<li><a href="panduan.php"><i class="fa fa-asterisk" style="color: orange;width: 88px;"><font face="arial"size="3"><b> Panduan</b></font></i></a></li>
				</ul>
			</div>
		</div>

		<div id="inner">
			<div class="txt4">
			<a href="beranda.php"><i class="fa fa-home" style="width: 60px; color: grey"><b> Home</b></i></a>
			</div>
			<div class="txt5">
				<div id="sidebar">
					<div><a href="tutorial.php">Enkapsulasi</a></div>
					<div><a href="#">Abstract Class</a></div>
					<div><a href="#">Interface</a></div>
					<div><a href="#">Polimorfisme</a></div>
				</div>
			</div>
			<div class="txt6">
				<a href="logout.php"><i class="fa fa-sign-out" class="icon" style="color: grey; width: 60px"><b>Logout</b></i></a>
			</div>
		</div>
		<div id="contentbox">
			<div id="content">
				<?php
				include 'koneksi.php';
				$sql = mysqli_query($cnn, 'SELECT * FROM soal_pilgan');	
				while ($row = mysqli_fetch_array($sql)) {
					if ($row['kode_soal'] == "En_PG_01" ){?>
					<font color="teal" face="ebrima" size="4">
						<div class="bab">Materi: <?php echo $row['materi']; ?></div>
						<div><?php echo "Kode Soal : " . $row['kode_soal']; ?></div>
						<div><?php echo "Urutan : " . $row['urutan']; ?></div>
						<div><?php echo "Soal : " . $row['soal']; ?></div>
						<div><?php echo "Pilihan : " . $row['pilihan']; ?></div>
						<div><?php echo "Jawaban : " . $row['jawaban']; ?></div>
						<div><?php echo "Kunci : " . $row['kunci']; ?></div>
						<div><?php echo "Feedback : " . $row['feedback']; ?></div>
					</font>
						<?php
					}
				}
				?>
				<input type="button" value="Kembali" onClick="self.history.back()" class="back" />
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
</body>
</html>