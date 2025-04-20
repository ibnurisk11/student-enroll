<?php
include("config.php");

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $nisin = $_POST['nisin'];
    $id_sekolah = $_POST['id_sekolah'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nilai_un = $_POST['nilai_un'];

    // Query untuk menyimpan data
    $query = "INSERT INTO peserta (nama_peserta, nisin, id_sekolah, alamat, jenis_kelamin, agama, nilai_un)
              VALUES ('$nama', '$nisin', '$id_sekolah', '$alamat', '$jenis_kelamin', '$agama', '$nilai_un')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Pendaftaran berhasil!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal!'); window.history.back();</script>";
    }
}
?>