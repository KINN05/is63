<?php
if (isset($_POST['nli'])){
    $nama = $_POST['nm'];
    $nilai = $_POST['nl'];

   if($nilai >= 85){
        echo "Selamat $nama, Anda mendapatkan Nilai A,"; 
    }elseif ($nilai >=70){
        echo "$nama, Anda mendapatkan Nilai B,";

    }elseif ($nilai >=60){
        echo "$nama, Anda mendapatkan Nilai C,";

    }elseif ($nilai >=50){
        echo "$nama, Anda mendapatkan Nilai D,";

    }elseif ($nilai < 50){
        echo "Maaf $nama, Anda mendapatkan Nilai E,";
    }
    echo "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Nilai</h1>
    <form action="latihan.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nm"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>:</td>
                <td><input type="number" name="nl"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="nli" value="Gass"></td>
            </tr>   
        </table>
    </form>
</body>
</html>