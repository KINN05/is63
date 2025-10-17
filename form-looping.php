<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        Tanggal:
        <select>
        <?php
            for($day=1; $day <= 31; $day++){
                echo "<option>$day</option>";
            }
        ?> 
        </select>
        
        Bulan:
        <select>
        <?php
            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            foreach($bulan as $b){
                echo "<option>$b</option>";
            }
        ?>
        </select>
        <!-- <select>
            <?php
                $bulan  = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                foreach($bulan as $list){
                    echo "<option>$list</option>";
                }
            ?>
        </select>

        Tahun:
        <select>
        <?php
            for($tahun=2025; $tahun >= 1970; $tahun--){
                echo "<option>$tahun</option>";
            }
        ?>
    </form>
</body>
</html>
