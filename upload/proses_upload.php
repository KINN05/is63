<?php
$ket = $_POST['ket'];

// 1. nama file
$nama_foto = $_FILES['upload']['name'];
echo "Nama File : $nama_foto<br>";

// 2. tipe file
$tipe_foto = $_FILES['upload']['type'];
echo "Tipe File : $tipe_foto<br>";

// 3. ukuran file
$ukuran_foto = $_FILES['upload']['size'];
echo "Ukuran File : $ukuran_foto<br>";

// 4. temporary file
$tmp_foto = $_FILES['upload']['tmp_name'];
echo "Lokasi Temporary File : $tmp_foto<br>";

// 5. jenis file
$error_foto = $_FILES['upload']['error'];
echo " KOde Error : $error_foto<br>";

echo $ket;

//upload file
move_uploaded_file(from: $tmp_foto,to: "foto/$nama_foto")
?>

<hr>
<img src="foto" alt="">
<a href="index.php">kembali</a>