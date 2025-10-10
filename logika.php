<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    # STRKTUR LOGIKA
    # IF, ELSEIF, ELSE
    # SWITCH

    # OPERATOR PERBANDINGAN (== != > < >= <=)
    # OPERATOR LOGIKA ( AND OR) (&& ||)

    // $username = "admin";
    // $password = "admin123";

    // if($username == "admin" && $password == "admin123"){
    //     echo "LOGIN BERHASIL";
    // }else{
    //     echo "LOGIN GAGAL";
    // }

    $username = "admin";
    $password = "123456";

    if($username == "admin" && $password == "123456"){
        echo "Login Berhasil";
    }elseif($username == "admin" && $password != "123456"){
        echo "Password Salah";
    }elseif($username != "admin" && $password == "123456"){
        echo "Username Salah";
    }else{
        echo "Login Gagal";
    }


    // $nama = "kinn";
    // $nilai = 80;

    // if($nilai >= 60){
    //     echo "Selamat $nama, Kamu Lulus";
    // }elseif($nilai >= 40){
    //     echo "Hai $nama, Kamu Harus Ikut Remedial";
    // }elseif($nilai >= 20){
    //     echo "Hai $nama, Kamu Harus Mengulang Tahun Depan";
    // }else{
    //     echo "Hai $nama, Kamu Tidak Lulus";
    // }


    
    // $nilai = 40;

    // if($nilai > 50){
    //     echo "Kamu Lulus";
    //     if($nilai >90){
    //         echo ", Nilai A";
    //     }
    // }else{
    //     echo "Kamu Tidak Lulus";
    //     if($nilai >30){
    //         echo ", Harus Ikut Remedial";
    //     }
    // }

    ?>
</body>
</html>