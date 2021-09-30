<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
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
    transition: 0.4s;
  }
  h3 {
    color: white;
  }
  a.active {
    border-bottom: 3px solid #F67280;
  }
  .form {
      color: white;
      padding-left: 70px;
      font-size: 20px;
  }
  h1 {
      padding-left: 70px;
      color: white;
  }
  table {
      width: 600px;
  }
  input {
      margin: 1px;
  }
  textarea {
    margin: 1px;

  }
</style>

<div class="bg">
<div class="header"><br>
  <center>
<img src="img/logo-rskia.png" width="200"></center><br>
</div>
<div class="a">
  <a href="index.php">Beranda</a>
  <a href="" class="active">Pendaftaran Pasien Online</a>
  <a href="cek-pasien.php">Cek Pasien</a>
  <a href="login.php">Login Admin</a>
</div>
    <br>
<h1>Pendaftaran Pasien</h1>

    <div class="form">
        
    <form action="proses-pendaftaran-online.php" method="POST"><table>
        <tr>
            <td>
      <input type="text" class="form-control" name="no_telp" placeholder="No. telepon"></td><td>
        <input type="text" class="form-control" name="nama_pasien" placeholder="Nama pasien"></td></tr>
        <tr><td colspan=2>
        <input type="text" class="form-control" name="umur" placeholder="Umur">
        <input type="radio"  name="jenis_kelamin" value="laki-laki"> Laki-laki
        <input type="radio"  name="jenis_kelamin" value="perempuan"> Perempuan</td></tr>
        <tr>
            <td colspan=2>
        <input type="text" class="form-control" name="alamat" placeholder="Alamat"></td></tr>
        <tr>
            <td colspan=2>
        <textarea name="keluhan" class="form-control" cols="30" rows="5" placeholder="Keluhan"></textarea></td></tr>
        <tr>
            <td colspan=2>
        <input type="reset" class="btn btn-danger" name="reset" value="Reset">
        <input type="submit" class="btn btn-success" name="daftar" value="Daftar"></table></td></tr><br>
    </form>
    
    </div>

</body>
</html>