<?php
include 'koneksi.php';
  $Bab = $_POST['bab'];
  $Kasus = $_POST['kasus'];
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file = $_FILES['fupload']['name'];
  $ukuran_file = $_FILES['fupload']['size'];
  $direktori = "files/$nama_file";
   
  //apabila file berhasil diupload
  if (move_uploaded_file($lokasi_file,"$direktori")) {
     
    //masukan informasi ke dalam database
    $sql = "INSERT INTO stukas(Bab, Kasus, Nama_file, Ukuran_file, Direktori) values ('$Bab', '$_POST[kasus]', '$nama_file','$ukuran_file','$direktori')";
  
  if ($cnn->query($sql) == true){
  echo "<script>alert('Data Berhasil Disimpan.');window.location='stukas.php'</script>";
} else {
  echo "Error: ".$sql.". ". $cnn->error;
}
}
?>