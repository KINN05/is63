<?php
#1. Meng-koneksikan PHP ke MySQL
include("../koneksi.php");

#2. Mengambil Value dari Form Tambah
$nm_gel = $_POST["nm_gel"];
$tgl_mulai = $_POST["tgl_mulai"];
$tgl_berakhir = $_POST["tgl_berakhir"];



#3. Query Insert (proses tambah data)
$query .= "INSERT INTO gelombang (nama_gelombang,tgl_mulai,tgl_berakhir)
    VALUE ('$nm_gel','$tgl_mulai','$tgl_berakhir')";


$tambah = mysqli_query($koneksi, $query);

#4. Jika Berhasil triggernya apa? (optional)
if ($tambah) {
    header("location:index.php");
} else {
    echo "Data Gagal ditambah";
}
