<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<hr>";
    $hari = 1
    ; // Ganti dengan angka 1 sampai 7 untuk hari yang diinginkan
    switch ($hari) {
        case 1:
            echo "Hari Senin";
            break;
        case 2:
            echo "Hari Selasa";
            break;
        case 3:
            echo "Hari Rabu";
            break;
        case 4:
            echo "Hari Kamis";
            break;
        case 5:
            echo "Hari Jumat";
            break;
        case 6:
            echo "Hari Sabtu";
            break;
        case 7:
            echo "Hari Minggu";
            break;
        default:
            echo "Tidak ada hari dengan nomor $hari";
    }
    ?>
</body>
</html>