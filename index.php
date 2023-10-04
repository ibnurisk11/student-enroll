<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding Terpadu</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<!-- Navigation Bar -->

<nav class="navbar navbar-expand-lg bg-primary navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Beranda</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ms-2 text-decoration-none">
          <a class="active text-light" aria-current="page" href="form-daftar.php">Halaman Pendaftaran</a>
        </li>
        <li class="nav-item ms-2 text-decoration-none">
          <a class="text-light" href="list-siswa.php">List Siswa</a>
        </li>
        <li class="nav-item ms-2 text-decoration-none">
          <a class="text-light" href="#">Panduan Penggunaan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="card m-4 d-" style="width: 18rem;">
                <img src="assets/sekolah-coding.png" class="card-img-top" alt="sekolah-coding">
                    <div class="card-body">
                <h5 class="card-title text-center">Pendaftaran SMK Coding Terpadu</h5>
                <p class="card-text">Selamat datang di <b>Sekolah Coding Terpadu</b>  Silahkan Melakukan Pendaftaran untuk bergabung bersama kami</p>
                    <a href="form-daftar.php" class="btn btn-primary">Daftar Baru</a>
                    <a href="list-siswa.php" class="btn btn-warning">Daftar Siswa</a>          -->
    
    <div class="container">
            <div class="row">
                <div class="col bg-dark p-5">A1</div>
                <div class="col bg-primary p-5">A2</div> 
                <div class="col bg-warning p-5">A3</div>

            <div class="row">
                <div class="col bg-dark p-5">B1</div>
                <div class="col bg-warning p-5">B2</div>
                <div class="col bg-dark p-5">B3</div>
            </div>
    </div>
    

    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php 
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
    </body>
</html>