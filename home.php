<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="font/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<style>
  * {
    margin: 0;
    padding: 0;
    list-style: none;
  }
  .sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  box-shadow: 0px 0px 8px gray;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #3B9C9C;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  padding-left: 24px;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
ul li a.active {
  font-weight: bold;
  border-right: 4px solid #045F5F;
  color: #045F5F;
  padding-left: 24px;
}
img {
  padding-left: 30px;
}
h1 {
  font-weight: bold;
  text-align: center;
  color: #045F5F;
}
h2 {
  padding-left: 295px;
  font-size: 30px;
  color: #3B9C9C;
  text-transform: uppercase;
}
h3 {
  padding-left: 295px;
  font-size: 25px;
  text-transform: uppercase;
  color: #3B9C9C;
}
p {
  text-align: center;
  color: gray;
}

</style>

<?php
session_start();
if($_SESSION['nama_lengkap']=='')
{
    header("location:login.php");
}
?>

<nav class="navbar fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo-rskia.png" width=128></a>
  </div>
</nav><br><br><br>
    
<div class="sidenav"><br><br><br>
    <ul>
        <li><a href="" class="active"><i class="fas fa-house-user"> Home</i></a></li>
        <li><a href="pendaftaran-pasien.php"> Pendaftaran pasien</a></li>
        <li><a href="data-pasien.php">Data pasien </a></li>
        <li><a href="data-dokter.php">Data Dokter</a></li>
        <li><a href="rekam-medis.php">Rekam Medis</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul><br><br><br><br><br><br><br><br><br><br>
    <p>admin : 
    <?php echo $_SESSION['nama_lengkap']?>
    </p>
    </div><br><br>

    <h1>SELAMAT DATANG DI HALAMAN ADMIN</h1>
    <h3>Rumah Sakit Khusus Ibu & Anak</h3>
    <h2><?php echo $_SESSION['nama_lengkap']?></h2>

    <center>
    <img src="img/bg-dokter.jpg" width=720>
    </center>

</body>
</html>