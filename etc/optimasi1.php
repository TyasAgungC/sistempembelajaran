<html>
<head>
<title>**Mamdani**</title>
</head>
<body>
<h3>Mamdani</h3> 
<form method="post">
<table width="427" border="1">
  <tr>
    <td width="205">&nbsp;Nilai Latihan
      <input type='text' class='masukan' name='lat'></td>
    <td width="206">&nbsp;Nilai Studi Kasus
      <input type='text' class='masukan' name='kas'></td>
  </tr>
</table>
  <br>
     <input type='submit' >
</form>
  <?php
   $lat  = $_POST['lat'];
   $kas  = $_POST['kas'];

  //pilihan ganda
  if($lat>=80){
    $ptinggi = 1;
    $prendah = 0;
  } elseif ($lat > 60 && $lat < 80) {
    $ptinggi = (80-$lat)/20;
    $prendah = ($lat-60)/20;
  } else {
    $ptinggi = 0;
    $prendah = 1;
  }

  echo $ptinggi."<br />"; 
  echo $prendah."<br />"; 

  //studi kasus
  if($kas>=80){
    $stinggi = 1;
    $srendah = 0;
  } elseif ($kas > 60 && $kas < 80) {
    $stinggi = (80-$kas)/20;
    $srendah = ($kas-60)/20;
  } else {
    $stinggi = 0;
    $srendah = 1;
  }
   echo $stinggi."<br />"; 
   echo $srendah."<br />"; 

  $z1 = 4;
  $z2 = 3;
  $z3 = 2;
  $z4 = 1;

  
    $a1 = min($ptinggi,$stinggi);    
    $a2 = min($ptinggi,$srendah);
    $a3 = min($prendah,$stinggi);
    $a4 = min($prendah,$srendah);

    echo $a1."<br />"; 
    echo $a2."<br />"; 
    echo $a3."<br />"; 
    echo $a4."<br />"; 
  
  //nilai akhir
  $na = (($a1*$z1)+($a2*$z2)+($a3*$z3)+($a4*$z4))/($a1+$a2+$a3+$a4);
  echo $na; 

  //nilai akhir diberi kondisi if else untuk menentuka grade ABC atau D
  //0-1 d , 1-2 c, 2-3 b, 3-4 a
  if ($na == 1) {
    echo "D";
  } elseif ($na == 2) {
    echo "C";
  } elseif ($na == 3) {
    echo "B";
  } else {
    echo "A";
  }
  ?> 
 
</body>
</html>
