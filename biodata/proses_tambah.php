<?php
#1. Meng-koneksikan PHP ke MySQL
include("koneksi.php");

#2. Mengambil data dari form Tambahan
// $deklarasi= $_POST ["input"];
$nama = $_POST["nama"];
$nisn = $_POST["nisn"];
$t_lahir = $_POST["t_lahir"];
$tgl_lahir = $_POST["tgl_lahir"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$jk = $_POST["jk"];
$jur = $_POST["jur"];

#3. Query Insert data ke dalam tabel (proses tambah data)
// $query = "INSERT INTO nama_tabel (kolom) VALUE ('$kolom')";
$query .= "INSERT INTO biodata (nama,nisn,tempat_lahir,tgl_lahir,alamat,email,jenis_kelamin,jurusan)
    VALUE ('$nama','$nisn','$t_lahir','$tgl_lahir','$alamat','$email','$jk','$jur')";

$tambah = mysqli_query($koneksi, $query);
#4. Jika berhasil triggernya apa? (opsional)
if ($tambah) {
    header("location:index.php");
} else {
    echo "Data gagal ditambah";
}
