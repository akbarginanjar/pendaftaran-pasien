<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>
    body {
    background-image: url("img/back.jpg");
  }
  .bg {
    background-color: rgba(0, 0, 0, 0.376);
    height: 657px;
  }
    a {
        text-decoration: none;
      }
      .form {
        padding-left: 100px;
      }
    form {
        width: 400px;
        background: white;
        padding: 50px;
        border-radius: 5px;
        box-shadow: 0px 3px 10px;
        text-align: center;
    }
    form p {
        color:#BFC9CA;
    }
    .p {
        background: white;
        color: black;
        width: 20%;
        padding: 10px;
        border-radius: 4px; 
        box-shadow: 0pc 3px 10px black;
        position: absolute;
        top: 350px;
        left: 550px;
    }
    h2 {
        color: gray;
        font-size: 30px;
    }
    .header {
    background: white;
    box-shadow: 0px 40px 20px black;
  }
  H2 {
    font-size: 40px;
    color: white;
  }
  .a {
    background: #3B9C9C;
    padding: 10px;
    text-align: center;
  }
  .a a{
    color: white;
    padding: 12px 30px;
    text-decoration: none;
  }
  .a a:hover {
    background: #045F5F;
    transition: 0.3s;
  }
  a.active {
    border-bottom: 3px solid #F67280;
  }
  .h2 {
    float: right;
    color: white;
    font-size: 40px;
    position: absolute;
    top: 240px;
    left: 550px;
  }
  input[type="submit"] {
    background: #3B9C9C;
  }
  input[type="submit"]:hover {
    background: #045F5F;
  }
</style>
<div class="bg">
<div class="header"><br>
  <center>
<img src="img/logo-rskia.png" width="200"></center><br>
</div>
<div class="a">
  <a href="index.php">Beranda</a>
  <a href="pendaftaran-online.php">Pendaftaran Pasien Online</a>
  <a class="active" href="">Cek Pasien</a>
  <a href="login.php">Login Admin</a>
</div><br><br>
<div class="form">
    <form action="proses-cek.php" method="post">
        <h3>Pengecekan Pasien</h3><br>
        <input type="text" name="nama_pasien" class="form-control" placeholder="Masukan Nama" required><br>
        <input type="text" name="no_telp" class="form-control" placeholder="No Telepon" required><br>
        <input type="submit" class="form-control text-light" name="cek" value="Cek Pasien"><br>
    </form></div>
    <div class="h2">PASIEN SUDAH TERDAFTARATAU BELUM <br>
  Silahkan Cek Disini</div>
    <br>

    <?php if(isset($_GET['status'])): ?>
    <div class="p">
        <?php                 
            if($_GET['status'] == 'gagal-cek'){
                echo "<center>";
                echo "<b>PASIEN TIDAK TERDAFTAR</b>";
                echo "</center>";
            } else if($_GET['status'] == 'sukses-cek'){
              echo "<center>";
                echo "<b>PASIEN SUDAH TERDAFTAR</b>";
                echo "<center>";
            }
        ?>
    </div>
<?php endif; ?>
</body>
</html>