<?php
					include "koneksi.php";
					$select = "SELECT * FROM mhs WHERE nim='$user' AND pass='$password'";
					$query = mysql_query($select);

					$is_exist = mysql_num_rows($query);
					if($is_exist>0){
					$hasil = mysql_fetch_assoc($query);
					$_SESSION['user'] = $hasil['nim'];
					$_SESSION['nama'] = $hasil['nama'];
					$_SESSION['prodi'] = $hasil['prodi'];
					} else {
					die('username salah');
					}
					?>