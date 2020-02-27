<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user'])){
	header("Location: login.php");
}

$res=mysql_query("SELECT * FROM mhs WHERE nim=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if(isset($_POST['submit'])){
	$nim = $userRow['nim'];
	$p1 = mysql_real_escape_string($_POST['p1']);	
	$p2 = mysql_real_escape_string($_POST['p2']);	
	$p3 = mysql_real_escape_string($_POST['p3']);	
	$p4 = mysql_real_escape_string($_POST['p4']);	
	$p5 = mysql_real_escape_string($_POST['p5']);	
	$saran = mysql_real_escape_string($_POST['saran']);

	if(mysql_query("INSERT INTO angket(nim, skor, saran, tanggal) VALUES ('$nim','$p1$p2$p3$p4$p5','$saran',CURRENT_TIMESTAMP)")){
?>
        <script>alert('success');</script>
        <?php
        //header("Location: angket.php");
    } else{
?>
        <script>alert('error while registering you...');</script>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
	<title>Angket | Modul Interaktif</title>
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
		
			<div id="menu" align="left">
				<ul>
					<li><a href="index.php"><i class="fa fa-home" style="width: 90px; "> Beranda</i></a></li>
					<li><a href="tutorial.php"><i class="fa fa-book" style="width: 120px; "> Tutorial <i class="fa fa-caret-down" style="color: black; "></i></i></a>
						<ul>
							<li><a href="video.php">Video</a></li>
							<li><a href="materi.php">Materi</a></li>
						</ul>
					</li>
					<li><a href="latihan.php"><i class="fa fa-pencil-square" style="width: 120px;"> Latihan <i class="fa fa-caret-down" style="color: black; "></i></i></a>
						<ul>
							<li><a href="latihan.php">Pilihan Ganda</a></li>
							<li><a href="stukas.php">Studi Kasus</a></li>
						</ul>
					</li>
					<li><a href="informasi.php"><i class="fa fa-exclamation-circle" style="width: 120px; "> Informasi <i class="fa fa-caret-down" style="color: black; "></i></i></a>
						<ul>
							<li><a href="berita-acara.php">Berita & Acara</a></li>
							<li><a href="info-nilai.php">Informasi Nilai</a></li>
						</ul>
					</li>
					<li><a href="live.php"><i class="fa fa-pencil-square-o" style="width: 120px; "> Live Editor </i></a></li>
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
		
		<hr width="1142px" align="left">
		<div id="inner">
		<div id="contentbox">
			<div class="scroll">
			<div id="content">
				<form method="post">
					<font color="#356598" face="Arial">
					<table border="1" rules="all" cellpadding="5">
						<tr>
							<th rowspan="2">No</th>
							<th rowspan="2">Pernyataan</th>
							<th colspan="4">SKOR</th>
						</tr>
						<tr>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Saya merasa senang saat belajar dengan menggunakan media pembelajaran berbasis web tersebut</td>
							<td><input type="radio" name="p1" value="1"></td>
							<td><input type="radio" name="p1" value="2"></td>
							<td><input type="radio" name="p1" value="3"></td>
							<td><input type="radio" name="p1" value="4"></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Saya termotivasi dalam belajar dengan menggunakan media pembelajaran berbasis web tersebut </td>
							<td><input type="radio" name="p2" value="1"></td>
							<td><input type="radio" name="p2" value="2"></td>
							<td><input type="radio" name="p2" value="3"></td>
							<td><input type="radio" name="p2" value="4"></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Desain tampilan media menarik dan sesuai dengan materi</td>
							<td><input type="radio" name="p3" value="1"></td>
							<td><input type="radio" name="p3" value="2"></td>
							<td><input type="radio" name="p3" value="3"></td>
							<td><input type="radio" name="p3" value="4"></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Warna yang digunakan sesuai</td>
							<td><input type="radio" name="p4" value="1"></td>
							<td><input type="radio" name="p4" value="2"></td>
							<td><input type="radio" name="p4" value="3"></td>
							<td><input type="radio" name="p4" value="4"></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Teks yang ditampilkan mudah dibaca</td>
							<td><input type="radio" name="p5"  value="1"></td>
							<td><input type="radio" name="p5" value="2"></td>
							<td><input type="radio" name="p5" value="3"></td>
							<td><input type="radio" name="p5" value="4"></td>
						</tr>
						<tr>
							<td>6</td>
							<td>Media pembelajaran ini mudah digunakan</td>
							<td><input type="radio" name="6" value="1"></td>
							<td><input type="radio" name="6" value="2"></td>
							<td><input type="radio" name="6" value="3"></td>
							<td><input type="radio" name="6" value="4"></td>
						</tr>
						<tr>
							<td>7</td>
							<td>Navigasi yang disediakan memudahkan pengguna dalam mengoperasikan media</td>
							<td><input type="radio" name="7" value="1"></td>
							<td><input type="radio" name="7" value="2"></td>
							<td><input type="radio" name="7" value="3"></td>
							<td><input type="radio" name="7" value="4"></td>
						</tr>
						<tr>
							<td>8</td>
							<td>Materi yang disajikan sesuai dengan tujuan pembelajaran</td>
							<td><input type="radio" name="8" value="1"></td>
							<td><input type="radio" name="8" value="2"></td>
							<td><input type="radio" name="8" value="3"></td>
							<td><input type="radio" name="8" value="4"></td>
						</tr>
						<tr>
							<td>9</td>
							<td>Materi pembelajaran yang disajikan dapat menunjang saya dalam belajar</td>
							<td><input type="radio" name="9" value="1"></td>
							<td><input type="radio" name="9" value="2"></td>
							<td><input type="radio" name="9" value="3"></td>
							<td><input type="radio" name="9" value="4"></td>
						</tr>
						<tr>
							<td>10</td>
							<td>Uraian materi yang diberikan mudah dipahami</td>
							<td><input type="radio" name="10" value="1"></td>
							<td><input type="radio" name="10" value="2"></td>
							<td><input type="radio" name="10" value="3"></td>
							<td><input type="radio" name="10" value="4"></td>
						</tr>
						<tr>
							<td>11</td>
							<td>Saya merasakan manfaat dari materi yang diberikan</td>
							<td><input type="radio" name="11" value="1"></td>
							<td><input type="radio" name="11" value="2"></td>
							<td><input type="radio" name="11" value="3"></td>
							<td><input type="radio" name="11" value="4"></td>
						</tr>
						<tr>
							<td>12</td>
							<td>Ilustrasi yang digunakan memudahkan saya dalam memahami materi pembelajaran yang diberikan</td>
							<td><input type="radio" name="12" value="1"></td>
							<td><input type="radio" name="12" value="2"></td>
							<td><input type="radio" name="12" value="3"></td>
							<td><input type="radio" name="12" value="4"></td>
						</tr>
						<tr>
							<td>13</td>
							<td>Ilustrasi yang digunakan menarik</td>
							<td><input type="radio" name="13" value="1"></td>
							<td><input type="radio" name="13" value="2"></td>
							<td><input type="radio" name="13" value="3"></td>
							<td><input type="radio" name="13" value="4"></td>
						</tr>
						<tr>
							<td>14</td>
							<td>Ilustrasi yang diberikan merepresentasikan materi pembelajaran</td>
							<td><input type="radio" name="14" value="1"></td>
							<td><input type="radio" name="14" value="2"></td>
							<td><input type="radio" name="14" value="3"></td>
							<td><input type="radio" name="14" value="4"></td>
						</tr>
						<tr>
							<td>15</td>
							<td>Video dan simulasi yang disajikan dapat berjalan dengan baik di komputer saya</td>
							<td><input type="radio" name="15" value="1"></td>
							<td><input type="radio" name="15" value="2"></td>
							<td><input type="radio" name="15" value="3"></td>
							<td><input type="radio" name="15" value="4"></td>
						</tr>
						<tr>
							<td>16</td>
							<td>Kualitas audio yang disajikan baik</td>
							<td><input type="radio" name="16" value="1"></td>
							<td><input type="radio" name="16" value="2"></td>
							<td><input type="radio" name="16" value="3"></td>
							<td><input type="radio" name="16" value="4"></td>
						</tr>
						<tr>
							<td>17</td>
							<td>Media pembelajaran dilengkapi dengan buku panduan bagi pengguna</td>
							<td><input type="radio" name="17" value="1"></td>
							<td><input type="radio" name="17" value="2"></td>
							<td><input type="radio" name="17" value="3"></td>
							<td><input type="radio" name="17" value="4"></td>
						</tr>
						<tr>
							<td>18</td>
							<td>Media pembelajaran dilengkapi dengan fasilitas untuk mengunduh materi dan soal yang disajikan</td>
							<td><input type="radio" name="18" value="1"></td>
							<td><input type="radio" name="18" value="2"></td>
							<td><input type="radio" name="18" value="3"></td>
							<td><input type="radio" name="18" value="4"></td>
						</tr>
						<tr>
							<td>19</td>
							<td>Instruksi yang diberikan saat mengerjakan soal jelas</td>
							<td><input type="radio" name="19" value="1"></td>
							<td><input type="radio" name="19" value="2"></td>
							<td><input type="radio" name="19" value="3"></td>
							<td><input type="radio" name="19" value="4"></td>
						</tr>
						<tr>
							<td>20</td>
							<td>Evaluasi yang diberikan sesuai dengan tujuan pembelajaran dan materi yang disampaikan</td>
							<td><input type="radio" name="20" value="1"></td>
							<td><input type="radio" name="20" value="2"></td>
							<td><input type="radio" name="20" value="3"></td>
							<td><input type="radio" name="20" value="4"></td>
						</tr>
						<tr>
							<td>21</td>
							<td>Jumlah soal yang diberikan seimbang dengan materi yang disajikan</td>
							<td><input type="radio" name="21" value="1"></td>
							<td><input type="radio" name="21" value="2"></td>
							<td><input type="radio" name="21" value="3"></td>
							<td><input type="radio" name="21" value="4"></td>
						</tr>
						<tr>
							<td>22</td>
							<td>Tingkat kesulitan soal yang diberikan seimbang</td>
							<td><input type="radio" name="22" value="1"></td>
							<td><input type="radio" name="22" value="2"></td>
							<td><input type="radio" name="22" value="3"></td>
							<td><input type="radio" name="22" value="4"></td>
						</tr>
						<tr>
							<td>23</td>
							<td>Evaluasi yang diberikan memberikan balikan yang cukup</td>
							<td><input type="radio" name="23" value="1"></td>
							<td><input type="radio" name="23" value="2"></td>
							<td><input type="radio" name="23" value="3"></td>
							<td><input type="radio" name="23" value="4"></td>
						</tr>
					</table> <br />
					<div>Saran</div>
					<textarea rows="5" cols="30" name="saran"></textarea><br />
					<?php $date = date("Y/m/d"); ?>
					Malang, <?php echo $date ?> <br />
					<?php echo $userRow['nama']; ?> 
					<input class="tombol" type="submit" name="submit" value="Submit">
					</font>
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


