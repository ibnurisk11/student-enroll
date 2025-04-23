<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_peserta WHERE no_daftar = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_peserta = $_POST['nama_peserta'];
    $nisin = $_POST['nisin'];

    $query = "UPDATE tb_peserta SET nama_peserta='$nama_peserta', nisin='$nisin' WHERE no_daftar=$id";

    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Data berhasil diperbarui.</div>";
    } else {
        echo "<div class='alert alert-danger'>Terjadi kesalahan saat memperbarui data.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Update Data Peserta</h2>
    <form method="POST" class="shadow p-4 rounded bg-light">
        <div class="mb-3">
            <label for="nama_peserta" class="form-label">Nama Peserta</label>
            <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" value="<?= htmlspecialchars($data['nama_peserta']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="nisin" class="form-label">nisin</label>
            <input type="text" class="form-control" id="nisin" name="nisin" value="<?= htmlspecialchars($data['nisin']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

echo "<script>
    alert('Data berhasil diperbarui.');
    window.location.href = 'read.php';
</script>";