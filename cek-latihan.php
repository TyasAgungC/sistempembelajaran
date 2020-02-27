<?php
include_once 'koneksi.php';

$kunci = array("d","a","d","a","d");

$jwb = mysql_query("SELECT * FROM jawaban");
while ($row = mysql_fetch_array($jwb)) {
	$nilai = 0;
	$jawaban = $row['jawaban'];
	for ($i=0; $i < 5  ; $i++) { 
		if ($kunci[$i]==$jawaban[$i]) {
			$nilai++;
		}
	}
	$total = $nilai*20;
	//echo $total;
	$nim = $row['nim'];
	$materi = $row['bab'];
}

	if(mysql_query("INSERT INTO nilai_latihan(nim, bab, nilai_latihan) VALUES('$nim','$materi','$total')")){
	?>
    	<script>alert('submit success');</script>
    	<?php header("Location: latihan.php");
	} else{
	?>
    	<script>alert('save error ...');</script>
	<?php
	}
?>



