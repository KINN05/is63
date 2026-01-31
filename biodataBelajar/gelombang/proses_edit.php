<?php
#1. Meng-koneksikan PHP ke MySQL
include("../koneksi.php");

#2. Mengambil Value dari Form Tambah
$id = $_POST["id"];
$nm_gel = $_POST["nm_gel"];
$tgl_mulai = $_POST["tgl_mulai"];
$tgl_berakhir = $_POST["tgl_berakhir"];

#3. Query Insert (proses tambah data)
$query = "UPDATE gelombang SET nama_gelombang='$nm_gel', tgl_mulai='$tgl_mulai', tgl_berakhir='$tgl_berakhir'
WHERE id='$id'";

$tambah = mysqli_query($koneksi, $query);

#4. Jika Berhasil triggernya apa? (optional)
if ($tambah) {
    header("location:index.php");
} else {
    echo "Data Gagal ditambah";
}
