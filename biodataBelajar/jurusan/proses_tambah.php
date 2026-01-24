<?php
#1. Meng-koneksikan PHP ke MySQL
include("../koneksi.php");

#2. Mengambil Value dari Form Tambah
$kode = $_POST["kode"];
$nm_jur = $_POST["nama_jurusan"];


#3. Query Insert (proses tambah data)
$query .= "INSERT INTO jurusan (kode,nama_jurusan)
    VALUE ('$kode','$nm_jur')";


$tambah = mysqli_query($koneksi, $query);

#4. Jika Berhasil triggernya apa? (optional)
if ($tambah) {
    header("location:index.php");
} else {
    echo "Data Gagal ditambah";
}
