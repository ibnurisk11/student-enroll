<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding Terpadu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 50px; }
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
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nisin" class="form-label">NISN</label>
                            <input type="text" class="form-control" name="nisin" required>
                        </div>
                        <div class="form-group">
                            <label for="id_sekolah" class="form-label">Sekolah Asal</label>
                            <select class="form-select" name="id_sekolah">
                                <option value="">Pilih Sekolah</option>
                                <?php
                                $query = "SELECT id_sekolah, nama_sekolah FROM sekolah_asal";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id_sekolah']}'>{$row['nama_sekolah']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" required>
                                <label class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" required>
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" name="agama">
                                <option value="">Pilih...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Atheis">Atheis</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nilai_un" class="form-label">Nilai Ujian Nasional</label>
                            <input type="text" class="form-control" name="nilai_un" required>
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