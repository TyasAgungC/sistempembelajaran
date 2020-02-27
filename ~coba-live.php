<?php
$file = $pesan = $isi = "";
 
// saat tombol buka file ditekan
if (isset($_POST['file_button']))
{
    $file = $_FILES['file']['name'];
    if ($handle = fopen($file, "r"))
    {
        while (!feof($handle)) {
            // membaca per baris
            $isi .= fgets($handle);
        }
    } else
    {
        echo "Tidak dapat membaca file ." . $file;
    }
}
 
// saat simpan file ditekan
if (isset($_POST['simpan_file_button']))
{
    $file_hidden = $_POST['file_hidden'];
    $isi_baru = stripslashes($_POST['isi_baru']);
    $handle = fopen($file_hidden, "w");
    fputs($handle, $isi_baru);
    fclose($handle);
    $pesan = "File " . $file_hidden . " berhasil disimpan";
}
?>
<!doctype html>
<html>
    <head>
        <title>TutorialPedia.NET - text editor</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="file" >
            <input type="submit" name="file_button" value="Buka" >
        </form>
        <br>
        <div><?php echo $pesan; ?></div>
        <?php
        if ($file <> "" && !isset($_POST['simpan_file_button']))
        {
            ?>
            Nama file : <?php echo $file; ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <textarea cols="80" rows="20" name="isi_baru"><?php echo $isi ?></textarea><br>
                <input type="hidden" name="file_hidden" value="<?php echo $file ?>">
                <input type="submit" name="simpan_file_button" value="Simpan" >
            </form>        
            <?php
        }
        ?>
    </body>
</html>