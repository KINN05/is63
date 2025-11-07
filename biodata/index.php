<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Biodata Siswa</title>
</head>

<body style="background-color: #e3f2fd;">
    <?php
    include_once 'navbar.php';
    ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col-5 m-auto">
                <div class="card">
                    <div class="card-header" >
                        Biodata Siswa
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Nama :</label>
                                <input name="nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">NISN :</label>
                                <input name="nisn" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tempat Lahir :</label>
                                <input name="t_lahir" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Tanggal Lahir :</label>
                                <input name="tgl_lahir" type="date" class="form-control" id="formGroupExampleInput" placeholder="MM/DD/YYYY">
                            </div>
                            <div class="mb-3">
                                <label for="inputAddress" class="form-label">Alamat :</label>
                                <input name="alamat" type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email :</label>
                                <input name="email" type="email" class="form-control" id="inputEmail " placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Jenis Kelamin :</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Laki-Laki">
                                    <label class="form-check-label" for="inlineRadio2">Laki-Laki</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Jurusan :</label>
                                <select class="form-select" aria-label="Default select example" name="jur" id="">
                                    <option selected>Pilih Jurusan</option>
                                    <option value="IPA">IPA (Ilmu Pengetahuan Alam)</option>
                                    <option value="IPS">IPS (Ilmu Pengetahuan Sosial)</option>
                                    <option value="Agama">AGAMA</option>
                                    <option value="Bahasa">BAHASA</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto :</label>
                                <input name="foto" class="form-control" type="file" id="formFile">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>