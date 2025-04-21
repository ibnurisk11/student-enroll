<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mahasiswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 50px; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">User Registration Form</h2>
        <form action="process-user.php" method="POST">
            <fieldset>
                <div class="row p-4 border">
                    <div class="col">
                        <label for="no_daftar" class="form-label">No Daftar</label>
                        <input type="number" class="form-control" name="no_daftar" required>
                        
                        <label for="nama_peserta" class="form-label">Nama Peserta</label>
                        <input type="text" class="form-control" name="nama_peserta" required>

                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control" name="nisn" required>

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

                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" required></textarea>
                    </div>

                    <div class="col">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" required>
                            <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" required>
                            <label class="form-check-label">Perempuan</label>
                        </div>

                        <label for="agama" class="form-label">Agama</label>
                        <select class="form-select" name="agama">
                            <option value="">Pilih...</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Atheis">Atheis</option>
                        </select>

                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" required>

                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" required>

                        <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
                        <input type="text" class="form-control" name="nama_ortu" required>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>