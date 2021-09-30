<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien RSKIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php
session_start();
if($_SESSION['nama_lengkap']=='')
{
    header("location:login.php");
}
?>

<nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo-rskia.png" width=70></a>
  </div>
</nav><br><br><br>
    
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="pendaftaran-pasien.php">Pendaftaran pasien</a></li>
        <li><a href="data-pasien.php">Data pasien </a></li>
        <li><a href="data-dokter.php">Data Dokter</a></li>
        <li><a href="">Data Pendaftaran Pasien</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No Antrian</th>
            <th>ID Pasien</th>
            <th>Nama Pasien</th>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
            <th>Hari</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        <?php

        //SELECT u.id_pasien, u.nama_pasien, a.id_dokter, a.nama_dokter FROM pasien AS u INNER JOIN antrian AS i ON u.id_pasien = i.id_pasien INNER JOIN dokter AS a ON i.id_dokter = a.id_dokter;

        ?>

    </tbody>
    </table>

    <p>Total: <?php //echo mysqli_num_rows($query) ?></p>

    </body>
</html>