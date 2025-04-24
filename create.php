<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_peserta = $_POST['nama_peserta'];
    $nisin = $_POST['nisin'];
    $id_sekolah = $_POST['id_sekolah'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $nama_ortu = $_POST['nama_ortu'];
    $nilai_un = $_POST['nilai_un'];

    // Gunakan prepared statement untuk mencegah SQL Injection
    $stmt = $conn->prepare("INSERT INTO tb_peserta (nama_peserta, nisin, id_sekolah, alamat, jenis_kelamin, agama, tempat_lahir, tgl_lahir, nama_ortu, nilai_un) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {{
        die("Error pada prepare statement: " . $conn->error);
    }
    $stmt->bind_param("ssissssssd", $nama_peserta, $nisin, $id_sekolah, $alamat, $jenis_kelamin, $agama, $tempat_lahir, $tgl_lahir, $nama_ortu, $nilai_un);

    if ($stmt->execute()) {
        echo '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $stmt->error . '</div>';
    }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<div class="container mt-5">
    <h2 class="text-center mb-4">Formulir Pendaftaran Peserta</h2>

    <div class="mb-3 text-left">
        <a href="read.php" class="btn btn-warning">Kembali ke Halaman List</a>
    </div>

    <!-- halaman pendaftaran peserta -->
    <form method="POST" class="p-4 border rounded shadow-sm bg-light">
        <div class="mb-3">
            <label for="nama_peserta" class="form-label">Nama Peserta</label>
            <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" placeholder="Masukkan nama peserta" required>
        </div>
        <div class="mb-3">
            <label for="nisin" class="form-label">nisin</label>
            <input type="text" class="form-control" id="nisin" name="nisin" placeholder="Masukkan nisin" required>
        </div>
        <div class="mb-3">
            <label for="id_sekolah" class="form-label">Sekolah Asal</label>
            <?php
            $query = "SELECT id_sekolah, nama_sekolah FROM tb_sekolah_asal";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                echo '<select class="form-select" id="id_sekolah" name="id_sekolah" required>';
                echo '<option value="" disabled selected>Pilih sekolah asal</option>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['id_sekolah'] . '">' . $row['nama_sekolah'] . '</option>';
                }
                echo '</select>';
            } else {
                echo '<p class="text-danger">Data sekolah tidak tersedia.</p>';
            }
            ?>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="" disabled selected>Pilih jenis kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" id="agama" name="agama" required>
                <option value="" disabled selected>Pilih agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir" required>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
        </div>
        <div class="mb-3">
            <label for="nama_ortu" class="form-label">Nama Orang Tua</label>
            <input type="text" class="form-control" id="nama_ortu" name="nama_ortu" placeholder="Masukkan nama orang tua" required>
        </div>
        <div class="mb-3">
            <label for="nilai_un" class="form-label">Nilai UN</label>
            <input type="number" class="form-control" id="nilai_un" name="nilai_un" placeholder="Masukkan nilai UN" required>
        </div>
        <!-- button untuk submit data -->
        <button type="submit" class="btn btn-primary w-100">Tambah</button>
    </form>
</div>