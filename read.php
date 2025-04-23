<?php
include 'config.php';

$query = "SELECT * FROM tb_peserta";
$result = mysqli_query($conn, $query);

echo "<table border='1'>";
echo "<tr><th>No Daftar</th><th>Nama</th><th>NISN</th><th>Aksi</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['no_daftar']}</td>
        <td>{$row['nama_peserta']}</td>
        <td>{$row['nisn']}</td>
        <td><a href='update.php?id={$row['no_daftar']}'>Edit</a> | 
            <a href='delete.php?id={$row['no_daftar']}'>Hapus</a></td>
    </tr>";
}

echo "</table>";
?>