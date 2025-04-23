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
    $nisn = $_POST['nisn'];

    $query = "UPDATE tb_peserta SET nama_peserta='$nama_peserta', nisn='$nisn' WHERE no_daftar=$id";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil diperbarui.";
    }
}

?>

<form method="POST">
    Nama Peserta: <input type="text" name="nama_peserta" value="<?= $data['nama_peserta'] ?>">
    NISN: <input type="text" name="nisn" value="<?= $data['nisn'] ?>">
    <button type="submit">Update</button>
</form>