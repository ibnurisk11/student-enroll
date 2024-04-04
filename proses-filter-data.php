<?php

include("config.php");

// cek apakah tombol daftar sudah di klik atau belum?
// if(isset($_POST['daftar'])){

    // ambil data dari formulir

    $f_agama = $_POST['f_agama'];
    $f_nama = $_POST['f_nama'];

    session_start();

    $_SESSION['f_agama'] = $f_agama;
    $_SESSION['f_nama'] = $f_nama;


    header('Location: list-siswa.php');

?>
