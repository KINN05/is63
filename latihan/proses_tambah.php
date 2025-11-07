<?php
#1. Meng-koneksikan PHP ke MySQL
include("koneksi.php");

#2. Mengambil data dari form Tambahan
// $deklarasi= $_POST ["input"];
$nama = $_POST["nama"];
$nohp = $_POST["no_hp"];
$buku = $_POST["buku"];


#3. Query Insert data ke dalam tabel (proses tambah data)
// $query = "INSERT INTO nama_tabel (kolom) VALUE ('$kolom')";
$query .= "INSERT INTO buku (nama,no_hp,buku)
    VALUE ('$nama','$nohp','$buku')";

$tambah = mysqli_query($koneksi, $query);
#4. Jika berhasil triggernya apa? (opsional)
if ($tambah) {
    header("location:index.php");
} else {
    echo "Data gagal ditambah";
}