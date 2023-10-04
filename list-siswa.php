<?php include("config.php");  session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding Terpadu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <!-- Notification ketika tambah berhasil -->
    <?php if (isset($_SESSION['flash'])) { ?>
        <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert info">
            <span class="alertClose">X</span>
            <span class="alertText"><?=$_SESSION['flash'];?></span>
        </div>
        </label> 
            
    <?php unset($_SESSION['flash']); } ?>

    <!-- Notification ketika edit berhasil -->
    <?php if (isset($_SESSION['flash-edit'])) { ?>
        <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert warning">
            <span class="alertClose">X</span>
            <span class="alertText"><?=$_SESSION['flash-edit'];?></span>
        </div>
        </label> 
            
    <?php unset($_SESSION['flash-edit']); } ?>

    <!-- Notification ketika hapus berhasil -->
    
    <?php if (isset($_SESSION['flash-deleted'])) { ?>
        <label>
        <input type="checkbox" class="alertCheckbox" autocomplete="off" />
        <div class="alert error">
            <span class="alertClose">X</span>
            <span class="alertText"><?=$_SESSION['flash-deleted'];?></span>
        </div>
        </label> 
            
    <?php unset($_SESSION['flash-deleted']); } ?>

    <!-- Modal untuk menghapus data -->
  


    <!-- Endof Modal untuk menhapus data -->

        <div >
        <header class="d-flex justify-content-center">
            <h2 class="mt-4">Siswa yang sudah mendaftar</h2>
        </header>
            <a href="form-daftar.php" class="btn btn-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
        <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2Zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672Z"/>
        <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5Z"/>
        </svg> Tambah Data </a>
        <a href="index.php" class="btn btn-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
        </svg> Halaman Daftar</a>
        </div>

    <!-- Menu Filter -->
      <!-- <div class="container"> -->
      <div>
      <h4 align="left" style="margin: 30px 0px 0px 0px;">Filter &amp; Search pada PHP ke Semua Kolom</h4>

      <?php
        $f_agama = isset($_SESSION['f_agama']) && $_SESSION['f_agama'] != ''  ? $_SESSION['f_agama'] : '' ;
        $f_nama = isset($_SESSION['f_nama']) && $_SESSION['f_nama'] != '' ? $_SESSION['f_nama'] : '';
      ?>
  
  <hr>

  <form method="POST" action="proses-filter-data.php">
        <div class="row mb-3" style="margin-top:20px;">
		    <div class="col-sm-12"><h4>Cari</h4></div>
		    <div class="col-sm-3">
		        <div class="form-group">
		            <select name="f_agama" id="f_agama" class="form-control">
		                <option value="">Filter Agama</option>
		                <option value="Islam" <?php if ($f_agama=="Islam"){ echo "selected"; } ?>>Islam</option>
		                <option value="Kristen" <?php if ($f_agama=="Kristen"){ echo "selected"; } ?>>Kristen</option>
		                <option value="Budha" <?php if ($f_agama=="Budha"){ echo "selected"; } ?>>Budha</option>
		                <option value="Hindhu" <?php if ($f_agama=="Hindhu"){ echo "selected"; } ?>>Hindhu</option>
		                <option value="Atheis" <?php if ($f_agama=="Atheis"){ echo "selected"; } ?>>Atheis</option>
		            </select>
		        </div>
		    </div>
		    <div class="col-sm-4">
		        <div class="form-group">
		            <input type="text" placeholder="nama" name="f_nama" id="f_nama" class="form-control" value="<?php echo $f_nama; ?>">
		        </div>
		    </div>
		    <div class="col-sm-4" >
		        <button type="submit" class="btn btn-warning">Cari</button>
		    </div>
		</div>
	</form>
      </div>
      

    <!-- The end of menu filter -->
    
    <br>

    <!-- Bagian Tabel -->
    
    <table class="table table-striped table-bordered">
    <thead>
        <tr class="table-dark">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    <thead>
    
    <?php
        // $sql = "SELECT * FROM calon_siswa";
      $sql = "SELECT * FROM calon_siswa";
      if ($f_agama != '') {
        $sql .= " where agama = '".$f_agama."'";
      }

      if ($f_nama != '') {
        if ($f_agama != '') {
          $sql .= " and nama like '%".$f_nama."%'";
        }else {
          $sql .= " where nama like '%".$f_nama."%'";
        }
      }
      // print_r($sql);
      // die;

        // $sql = "SELECT * FROM calon_siswa where agama = '".$f_agama."' and nama = '".$f_agama."'";

        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)) {
            // <td> yang dibungkus oleh <tr>

            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td>";
            
            echo "<div class='d-flex'><a class='btn-edit' href='form-edit.php?id=".$siswa['id']."'>Edit</a> |";
            echo "<button onclick='openModal(".$siswa['id'].", `".$siswa['nama']."`)' class='modalBtn btn-delete'>Hapus</button></div>";
            // echo "<button id='modalBtn' href='hapus.php?id=".$siswa['id']."'>Hapus</button>";
            echo "</td>";
            
            echo "</tr>";
        }
    ?>
    </tbody>
    </table>

    <!-- The end of bagian tabel -->


    <div id="simpleModal" class="modal-overlay">
    <div class="modal-content">
      <div class="modal-header">
          <h2>Delete</h2>
      </div>
      <div class="modal-body">
            <p>Delete Data</p>
            <p>Apakah anda yakin akan menghapus <span id="id_delete"></span>?</p>

            <a class="button" id='proses_delete'>Ya</a>
            <a class="closeBtn">Tidak</a>
      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>


    <p>Total: <?php echo mysqli_num_rows($query)?></p>

    <script>
                // console.log('#open-modal')
            
                // Get modal element
        var modal = document.getElementById('simpleModal');
        // Get open modal button
        // var modalBtn = document.getElementsByClassName('modalBtn');
        // Get close button
        var closeBtn = document.getElementsByClassName('closeBtn')[0];
            
        // Listen for open click
        // modalBtn.addEventListener('click', openModal);
        // Listen for close click
        closeBtn.addEventListener('click', closeModal);
        // Listen for outside click
        window.addEventListener('click', outsideClick);
            
        // Open modal
        function openModal(id, name){
          document.getElementById("proses_delete").href = 'hapus.php?id=' + id;
          document.getElementById("id_delete").innerHTML = name;
          modal.style.display = 'block';
        }
        
        // Close modal
        function closeModal(){
          modal.style.display = 'none';
        }
        
        // Click outside and close
        function outsideClick(e){
          if(e.target == modal){
            modal.style.display = 'none';
  }
}
    </script>
    
</body>
</html>