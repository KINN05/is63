<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
</head>
<body>
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        Keterangan :
        <input type="teks" name="ket">
        
        <br>
        <br>

        Foto :
        <input type="file" accept="image/*" name="upload">

        <!-- <input type="file" accept="image/jpeg" name="upload">
        <input type="file" accept="vidio/*" name="upload"> -->
        
        <br>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>