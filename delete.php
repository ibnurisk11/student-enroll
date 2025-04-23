<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tb_peserta WHERE no_daftar = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus.";
    }
}
?>
<a href="read.php">Kembali ke daftar peserta</a>