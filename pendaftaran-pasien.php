<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
p {
  text-align: center;
  color: gray;
}
h1 {
  padding-left: 300px;
}
form {
  width: 800px;
}
.form {
  padding-left: 300px;
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
        <li><a href="home.php">Home</a></li>
        <li><a class="active" href="">Pendaftaran pasien</a></li>
        <li><a href="data-pasien.php">Data pasien </a></li>
        <li><a href="data-dokter.php">Data Dokter</a></li>
        <li><a href="rekam-medis.php">Rekam Medis</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <br><br><br><br><br><br><br><br><br><br>
    <p>admin : 
    <?php echo $_SESSION['nama_lengkap']?>
    </p>
    </div><br>

    <h1>Pendaftaran Pasien</h1><br>

    <div class="form">
    <form action="proses-pendaftaran-pasien.php" method="POST">
      <input type="text" class="form-control" name="id_pasien" placeholder="ID pasien"><br>
      <input type="text" class="form-control" name="no_telp" placeholder="No. telepon"><br>
        <input type="text" class="form-control" name="nama_pasien" placeholder="Nama pasien"><br>
        <input type="text" class="form-control" name="umur" placeholder="Umur"><br>
        <input type="radio"  name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio"  name="jenis_kelamin" value="perempuan"> Perempuan<br><br>
        <input type="text" class="form-control" name="alamat" placeholder="Alamat"><br>
        <textarea name="keluhan" class="form-control" cols="30" rows="5" placeholder="Keluhan"></textarea><br>
        <input type="reset" class="btn btn-danger" name="reset" value="Reset">
        <input type="submit" class="btn btn-success" name="daftar" value="Daftar"><br><br><br><br><br>
    </form>
    </div>

</body>
</html>