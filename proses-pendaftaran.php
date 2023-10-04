<?php

include("config.php");

// cek apakah tombol daftar sudah di klik atau belum?
if(isset($_POST['daftar'])){


    // ambil data dari formulir

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
   


    // buat query

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);
   

    // cek apakah query simpan berhasil?

    if( $query ) {
        // print_r('qwe');
        // die;
        // kalau berhasil alihkan ke halaman index.php dengan status = sukses
        // header('Location : list-siswa.php');
        session_start();
        $_SESSION['flash'] = 'Sukses menambahkan data';
        header('Location: list-siswa.php');

        
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status = gagal
        $_SESSION['flash'] = 'Gagal menambahkan data';
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>