<?php include("config.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding Terpadu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <h2 Class="d-flex justify-content-center mt-5">Formulir Pendaftaran Siswa Baru</h3>
        <nav>
            <a class="btn btn-warning ms-5" href="index.php">Kembali Halaman Utama</a>
        </nav>
    </header>

    
    <!-- Boorstap untuk halaman formulir -->

    <!-- Grid -->
    <form action="proses-pendaftaran.php" method="POST">

    <fieldset>
    
    <div class="container">
            <div class="row">
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="form-control-lg">
            <label for="nama" name="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" placeholder="nama lengkap" />
                </div>
                <div class="form-control-lg">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-control-lg">
                    <label for="jenis_kelamin" name="jenis kelamin" class="form-label">Jenis Kelamin</label>
                </div>

                <div class="form-check">
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-Laki</label>
                </div>
                <div class="form-check">
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
                </div>

                <div class="form-control-lg">
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
                <div class="form-control-lg">
                        <label for="sekolah" class="form-label">Sekolah Asal</label>
                        <input type="text" name="sekolah_asal" class="form-control" id="exampleFormControlInput1" placeholder="nama sekolah" />
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-primary m-3 d-block" value="daftar" name="daftar"/>
            </div>
            <div class="col"></div>
                </div>
            </div>

    <!-- The End of Grid -->
    </fieldset>
    <form>

<!-- Inputan Sebelumnya -->
    
    <!-- <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p class="form-control-lg">
            <label for="nama" class="form-label">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input type="submit" value="daftar" name="daftar"/>
        </p>
        
        </fieldset>
    </form> -->
</div>
</body>
</html>