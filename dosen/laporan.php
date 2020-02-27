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
					<li><a href="info.php"><i class="fa fa-exclamation-circle" style="color: orange;width: 91px;"><font face="ebrima"size="3"><b> I</b><font face="arial" size="3"><b>nformasi </b></font></i></a></li>
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
				<div class="lap"><font color="blue" face="arial" size="5">Laporan Kegiatan Mahasiswa</font></div>
				<?php
				include_once 'koneksi.php';
				?>
				<form method="post">
					<div id="morelinks">
						<div class="ang">Angkatan : 
							<select name = "angkatan">
							<option value = "2015"> 2015</option>
							<option value = "2016">2016</option>
							<option value = "2017">2017</option>
							</select>
							
							Offering : 
							<select name="offering">
							<option value = "A">A</option>
							<option value = "B">B</option>
							<option value = "C">C</option>
							<option value = "D">D</option>
							<option value = "E">E</option>
							</select>
						</div>
						<div class="cari">
							<input type="submit" name="submit" value="Cari" />
						</div>
						</div>
					</form>

				<div class="garis2"></div>
				<div class="enkap">Enkapsulasi</div>
				<div class="abs">Abstract Class</div>
				<div class="in">Interface</div>
				<div class="pol">Polimorfisme</div>
				<div class="garis3"></div>
				<div class="no">No</div>
				<div class="nama">Nama</div>
				<div class="pg1">PG</div>
				<div class="sk1">SK</div>
				<div class="pg2">PG</div>
				<div class="sk2">SK</div>
				<div class="pg3">PG</div>
				<div class="sk3">SK</div>
				<div class="pg4">PG</div>
				<div class="sk4">SK</div>
				<?php 
				if (isset($_POST['submit'])){
					$no = 1;
					$cari = $_POST['angkatan'];
					$cari1 = $_POST['offering'];
					$sql = mysqli_query($cnn, "SELECT No, Nama, PG1, SK1, PG2, SK2, PG3, SK3, PG4, SK4 FROM nilai WHERE angkatan like '$cari' and offering like '$cari1'");
					while ($row = mysqli_fetch_array($sql)){
						?>
					
				<div class="no1"><?php echo $no; ?></div>
				<div class="nama1"><?php echo $row['Nama']; ?></div>
				<div class="pg5"><?php echo $row['PG1']; ?></div>
				<div class="sk5"><?php echo $row['SK1']; ?></div>
				<div class="pg6"><?php echo $row['PG2']; ?></div>
				<div class="sk6"><?php echo $row['SK2']; ?></div>
				<div class="pg7"><?php echo $row['PG3']; ?></div>
				<div class="sk7"><?php echo $row['SK3']; ?></div>
				<div class="pg8"><?php echo $row['PG4']; ?></div>
				<div class="sk8"><?php echo $row['SK4']; ?></div>
				<?php
				$no++;
			} 
		} 
		?>
				<div class="garis4"></div>
				<font color="teal">
				<div class="lap">Keterangan : PG = Pilihan Ganda. SK = Studi Kasus.</div>
				</font>
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


