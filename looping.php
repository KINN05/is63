<?php
### FOR ###
for($i=1; $i <= 10; $i++){
    echo "Perulangan ke-$i <br>";
}
echo "<hr>";
for($i=10; $i >= 1; $i--){
        echo "Yang ke-$i <br>";
}

echo "<hr>";
### WHILE ###
$awal = 1;
while($awal <= 10){
    echo "Rumah ke-$awal <br>";
    $awal++;
}

echo "<hr>";
### DO WHILE ###
$awal2 = 1;
do{
    echo "Mahasiswa ke-$awal2 <br>";
    $awal2++;
}while($awal2 <= 10);

// echo "<hr>";
// ### FOREACH ###
// $warna = array("Merah", "Kuning", "Hijau", "Biru", "Ungu");
// foreach($warna as $w){
//     echo "Warna $w <br>";
// }

// echo "<hr>";
// $angka = array(10, 20, 30, 40, 50);
// foreach($angka as $a){
//     echo "Angka $a <br>";
// }
?>