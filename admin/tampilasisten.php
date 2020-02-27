<!DOCTYPE html>
<html lang="id">
<head>
	<title>Modul Interaktif</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<link rel="stylesheet" href="tampilanasisten.css" type="text/css" />
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
					<li><a href="masuk.php"><i class="fa fa-home" class="icon" style="color: orange; width: 80px;"><font face="arial" size="3"><b> Home</b></font></i></a></li>
					<li><a href="tampildosen.php"><i class="fa fa-book" style="color: orange; width: 137px;"><font face="arial"size="3"><b> Data Dosen</b></font></i></a></li>
					<li><a href="tampilasisten.php"><i class="fa fa-book" style="color: orange;width: 137px;"><font face="arial"size="3"><b> Data Asisten </i></a></li>
					<li><a href="tampilmhs.php"><i class="fa fa-book" style="color: orange;width: 154px;"><font face="arial"size="3"><b> Data Mahasiswa</b></font></i></a></li>
					<li><a href="tampilakun.php"><i class="fa fa-exclamation-circle" style="color: orange;width: 91px;"><font face="ebrima"size="3"><b></b><font face="arial" size="3"><b>Akun </b></font></i></a></li>
					<li><a href="login.php"><class="icon" style="color: orange; width: 88px;">Login</i></a></li>
				</ul>
			</div>
		</div>

		<div id="inner">
			<div class="txt">
				<i class="fa fa-home" style="color: silver; width: 60px;"><b> Home</b></i>
				<div class="txt1"></div>
			</div>
		</div>
		<div id="contentbox">
			<div class="scroll">
			<div id="content">
				<?php
				include 'koneksi.php';
				$sql = mysqli_query($cnn, 'SELECT * FROM asisten');	
				?>
					<div class="lap"><font color="blue" face="arial" size="5">Data Asisten</font></div>
						<div class="nama">Nama</div>
						<div class="angkatan">Angkatan</div>
						<div class="offering">Offering</div>
						<div class="status">Status</div>
						<div class="garis1"></div>

						<?php
						while ($row = mysqli_fetch_array($sql)) {?>
						
							<div class="nama"><?php echo $row['Nama'];?></div>
							<div class="angkatan"><?php echo $row['Angkatan'];?></div>
							<div class="offering"><?php echo $row['Offering'];?></div>
							<div class="status"><?php echo $row['Status'];?></div>
							<div class="pen">
								<form action="editasisten.php" method="POST">
								<a href="updateasisten.php"><i class="fa fa-pencil-square" style="font-size: 25px; color: #00CCCC"></i></a>
								</form>
								<form action="hapus.php" method="POST">
								<i class="fa fa-times-circle" style="font-size: 25px; color: #00CCCC"></i>
								</form>
							</div>
							<?php
							}
							?>

							<div class="garis2"></div>
							<a href="da.php"><input type="submit" name="tambah" size="35" value="+ Tambah Asisten" class="tombol"></a>
			</div>

			</div>
		</div>

		<div id="footer">
			<div id="credits">
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