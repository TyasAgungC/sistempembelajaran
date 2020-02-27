<html>
<head>
<title>**Fuzzy Mamdani**</title>
</head>
<body>
    <h3>Mamdani</h3> 
    <form method="post">
    <table width="427" border="1">
        <tr>
            <td width="205"> Nilai Latihan
            <input type='text' class='masukan' name='lat'></td>
            <td width="206"> Nilai Studi Kasus
            <input type='text' class='masukan' name='kas'></td>
        </tr>
    </table>
    <br>
    <input type='submit' >
    </form>

<!-- otomatisasi penentuan kelulusan suatu materi -->
<?php
error_reporting(0);

$lat  = $_POST['lat'];
$kas  = $_POST['kas'];

//penentuan bagus dan tidak bagus//

//pilihan ganda tinggi
if($lat>=80){
    $ptinggi = 1;
} elseif ($lat > 60 && $lat < 80) {
    $ptinggi = (80-$lat)/20;
} else {
    $ptinggi = 0;
}

//pilihan ganda rendah
if($lat<=60){
    $prendah = 1;
} elseif ($lat > 60 && $lat < 80) {
    $prendah = ($lat-60)/20;
} else {
    $prendah = 0;
}

echo $ptinggi."<br />"; 
echo $prendah."<br />"; 

//studi kasus tinggi
if($kas>=80){
    $stinggi = 1;
} elseif ($kas > 60 && $kas < 80) {
    $stinggi = (80-$kas)/20;
} else {
    $stinggi = 0;
}

//studi kasus rendah
if($kas<=60){
    $srendah = 1;
} elseif ($kas > 60 && $kas < 80) {
    $srendah = ($kas-60)/20;
} else {
    $srendah = 0;
}

echo $stinggi."<br />"; 
echo $srendah."<br />"; 

//rule (stukas mempengaruhi)
$a1 = min($stinggi,$ptinggi);    
$a2 = min($stinggi,$prendah);
$a3 = min($srendah,$ptinggi);
$a4 = min($srendah,$prendah);

echo $a1."<br />"; 
echo $a2."<br />"; 
echo $a3."<br />"; 
echo $a4."<br />"; 

$z1 = 4;
$z2 = 3;
$z3 = 2;
$z4 = 1;

//nilai akhir
$na = (($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4))/($a1+$a2+$a3+$a4);
echo $na; 

//0-1 d , 1-2 c, 2-3 b, 3-4 a
if ($na >= 1 && $na < 2) {
    echo "D (Tidak Lulus! Revisi) ";
} elseif ($na >= 2 && $na < 3) {
    echo "C (Tingkatkan Lagi) ";
} elseif ($na >= 3 && $na < 4) {
    echo "B (Ingat!! Sudah Baik) ";
} elseif($na >= 4){
    echo "A (Sangat Baik!!)";
} else {
    echo "error";
}
?> 
 
</body>
</html>
