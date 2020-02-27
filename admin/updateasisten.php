<?php
session_start();
if(isset($_SESSION['username'])) {
	header("Location: index.html");
}
?>

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
			<div id="content">
				<div id="morelinks">
				
				<form action="editasisten.php" method="POST">
					<div><h2><font color="orange">Edit Data Asisten</h2></div>
					<div>NIM <input type="text" name="nim" id="nim" autofocus maxlength="12" size="12" 	required />
					</div><br />
					<div>Username <input type="text" name="user" id="user" size="30" required />
					</div><br />
					<div>Password <input type="password" name="pass" id="pass" maxlength="8" size="8" required /> 
					</div><br />
					<form action="<?php $_SERVER ['PHP_SELF'];?>" method = "post">
					<div>Angkatan
						<select name="angkatan">
							<option value = "2017">2017
							<option value = "2016">2016
							<option value = "2015">2015
						</select><br />
						<?php
						if(isset($_POST['angkatan'])) {
							echo $_POST['angkatan'];
						}
						?>
					</div><br />
					<div>Offering
						<select name="offering">
							<option value="A">A
							<option value="B">B
							<option value="C">C
							<option value="D">D
							<option value="E">E
						</select><br />
						<?php
						if(isset($_POST['offering'])) {
							echo $_POST['offering'];
						}
						?>
					</div><br />
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method = "post">
					Status
						<input type="radio" name="status" value="Aktif" />Aktif
						<input type="radio" name="status" value="Pasif" />Pasif
						<?php
						if (isset($_POST['status'])) {
							echo $_POST['status'];
						}
						?>
					</form>
					<div>
						<input type="submit" size="35" name="simpan" value="Simpan" class="tombol"> 
						<input type="submit" size="35" name="batal" value="Batal" class="tombol">
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

