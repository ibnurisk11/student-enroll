<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding Terpadu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <header>
            <h2 class="text-center mt-5">Formulir Pendaftaran Siswa Baru</h2>
            <nav class="d-flex justify-content-center">
                <a class="btn btn-warning ms-5" href="index.php">Beranda</a>
            </nav>
    </header>

    <div class="container mt-5">
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
                <div class="row p-4 border">
                    <div class="col">
                    <img src="assets/yatra-logo.png" class="card-img-top p-5" alt="sekolah-coding">
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki">
                                <label class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" name="agama">
                                <option selected>Pilih...</option>
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Budha</option>
                                <option>Hindu</option>
                                <option>Atheis</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sekolah" class="form-label">Sekolah Asal</label>
                            <input type="text" name="sekolah_asal" class="form-control" placeholder="Nama sekolah">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary mt-3" value="Daftar" name="daftar">
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>