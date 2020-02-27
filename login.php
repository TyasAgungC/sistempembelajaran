<?php
session_start();
include_once 'koneksi.php';
if(isset($_SESSION['user'])!=""){
	header("Location: index.php");
}

if(isset($_POST['login'])){
	$unim = mysql_real_escape_string($_POST['nim']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM mhs WHERE nim='$unim'");
	$row=mysql_fetch_array($res);
 	if($row['pass']==$upass){
  		$_SESSION['user'] = $row['nim'];
  		header("Location: index.php");
 	}else{
?>
    <script>alert('NIM atau password salah!!');</script>
<?php
}
 
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Login | Modul Interaktif</title>
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
					<li><a href="login.php"><i class="fa fa-book" style="width: 120px;"> Tutorial <i class="fa fa-caret-down" style="color: black;"></i></i></a>
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
			<div class="scroll">
			<div id="content">
				<p><h3>Selamat Datang</h3></p>
				<?php error_reporting(0); echo $row['nim']; ?>
				<p align="justify">
					Media pembelajaran ini merupakan meda pembelajaran yang disediakan untuk memperlajari mata kuliah dengan lebih mudah. Dalam media pembelajaran ini, Anda akan menemukan berbagai macam pembahasan mengenai materi-materi perkuliahan terkait mulai dari pengertian, cara kerja, ilustrasi, contoh-contoh dan video pembelajaran.
				</p>
				<p align="justify"> 
					Media pembelajaran ini juga menyediakan evaluasi pembelajaran bagi Anda berupa soal pilihan ganda dan juga studi kasus. Setiap evaluasi pembelajaran yang telah Anda lakukan akan tersimpan secara otomatis dan diakses melalui menu informasi. Jika hasil evaluasi kurang maksimal, maka akan dilakukan perbaikan oleh dosen pengampu dengan memberikan soal tambahan.
				</p>
				<img src="images/teknik.jpg" height="150px" width="800px"><br />
				<p><h3> Video Simulasi Terkait </h3></p>
				<!--<p><video controls width="200" height="100"><source src="images/tulus.mp4" type="video/mp4"></video>-->
				<table>
					<tr>
						<td align="center"><font face="Arial" color="blue">Enkapsulasi</font></td>
						<td width="200"></td>
						<td align="center"><font face="Arial" color="blue">Abstract Class</font></td>
						<td></td>
					</tr>
					<tr>
						<td><iframe width="200" height="100" src="https://www.youtube.com/watch?v=4Bs17UHIh0E&t=8s"></iframe></td>
						<td width="200"><a href="#">Mulai</td>
						<td><iframe width="200" height="100" src="https://www.youtube.com/watch?v=4Bs17UHIh0E&t=8s"></iframe></td>
						<td><a href="#">Mulai</td>
					</tr>
					<tr>
						<td align="center"><font face="Arial" color="blue">HTML dan CSS</font></td>
						<td width="200"></td>
						<td align="center"><font face="Arial" color="blue">PHP</font></td>
						<td></td>
					</tr>
					<tr>
						<td><iframe width="200" height="100" src="https://www.youtube.com/watch?v=u_og9l1bdmU"></iframe></td>
						<td width="200"><a href="#">Mulai</td>
						<td><iframe width="200" height="100" src="https://www.youtube.com/watch?v=u_og9l1bdmU"></iframe></td>
						<td><a href="#">Mulai</td>
					</tr>
				</table>
			</div>
			</div>
		</div>

		<div id="sidebar">
			<div id="login">
				<form method="POST" onsubmit="validasi()">
					<div class="tombol"><center>Login Disini</center></div> <br />
					<div>
					<center>
					<input type="text" name="nim" id="nim" placeholder="NIM" autofocus /></center> 
					</div> <br />
					<div>
					<center>
					<input type="password" name="pass" id="pass" placeholder="Password" /></center> 
					</div> <br />
					<div>
					<center>
					<input type="submit" name="login" value="Login" class="tombol">
					<font color="orange"><a href="daftar.php"> Sign Up </a></font>
					</center>
					</div>
				</form>
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
<script type="text/javascript"> 
	//validasi awal
	function validasi() {
		var user = document.getElementById("nim").value;
		var pass = document.getElementById("pass").value;
		if (user != "" && pass != "") {
			return true;
		}else{
			alert('Field tidak boleh kosong!!');
		}
	}
</script>
</html>


