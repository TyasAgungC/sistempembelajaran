<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['user']))
{
 	header("Location: login.php");
}
$res1=mysql_query("SELECT * FROM nilai_latihan WHERE nim=".$_SESSION['user']);
$userRow1=mysql_fetch_array($res1);
$res2=mysql_query("SELECT * FROM nilai_stukas WHERE nim=".$_SESSION['user']);
$userRow2=mysql_fetch_array($res2);
?>

<html>
<head>
<title>**Fuzzy Mamdani**</title>
</head>
<body>
<h3>Mamdani</h3> 
  <?php
   echo $userRow1['nilai_latihan'];
   echo $userRow2['nilai_stukas'];
   $lat  = $userRow1['nilai_latihan'];
   $kas  = $userRow2['nilai_stukas'];

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
  } elseif ($kas > 60 && $kas < 70) {
    $srendah = ($kas-60)/20;
  } else {
    $srendah = 0;
  }
   echo $stinggi."<br />"; 
   echo $srendah."<br />"; 

  $z1 = 4;
  $z2 = 3;
  $z3 = 2;
  $z4 = 1;

  //rule
  $a1 = min($stinggi,$ptinggi);    
  $a2 = min($stinggi,$prendah);
  $a3 = min($srendah,$ptinggi);
  $a4 = min($srendah,$prendah);

  echo $a1."<br />"; 
  echo $a2."<br />"; 
  echo $a3."<br />"; 
  echo $a4."<br />"; 
  
  //nilai akhir
  $na = (($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4))/($a1+$a2+$a3+$a4);
  echo $na; 

  //nilai akhir diberi kondisi if else untuk menentuka grade ABC atau D
  //0-1 d , 1-2 c, 2-3 b, 3-4 a
  if ($na >= 1 && $na < 2) {
    echo "D";
  } elseif ($na >= 2 && $na < 3) {
    echo "C";
  } elseif ($na >= 3 && $na < 4) {
    echo "B";
  } elseif($na >= 4){
    echo "A";
  } else {
    echo "error";
  }
  ?> 
 
</body>
</html>
