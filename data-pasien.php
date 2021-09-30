<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien RSKIA</title>
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
.tabel {
    padding-left: 300px;
    padding-right: 50px;
}
h1 {
    padding-left: 310px;
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
        <li><a href="pendaftaran-pasien.php">Pendaftaran pasien</a></li>
        <li><a class="active" href="">Data pasien </a></li>
        <li><a href="data-dokter.php">Data Dokter</a></li>
        <li><a href="rekam-medis.php">Rekam Medis</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <br><br><br><br><br><br><br><br><br><br>
    <p>admin : 
    <?php echo $_SESSION['nama_lengkap']?>
    </p>
    </div><br>

    <h1>Data Pasien</h1><br><br>

    <div class="tabel">
    <div class="container">
    <table class="table table-border bg-light">
    <thead>
        <tr>
            <th class="bg-primary text-light">No</th>
            <th class="bg-primary text-light">ID Pasien</th>
            <th class="bg-primary text-light">Nama Pasien</th>
            <th class="bg-primary text-light">Umur</th>
            <th class="bg-primary text-light">Jenis Kelamin</th>
            <th class="bg-primary text-light">Alamat</th>
            <th class="bg-primary text-light">No telepon</th>
            <th class="bg-primary text-light">Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $no = 1;
        $sql = "SELECT * FROM pasien";
        $query = mysqli_query($db, $sql);

        while($pasien = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no++."</td>";
            echo "<td>".$pasien['id_pasien']."</td>";
            echo "<td>".$pasien['nama_pasien']."</td>";
            echo "<td>".$pasien['umur']."</td>";
            echo "<td>".$pasien['jenis_kelamin']."</td>";
            echo "<td>".$pasien['alamat']."</td>";
            echo "<td>".$pasien['no_telp']."</td>";

            echo "<td>";
            echo "<a class='col-sm-8 btn btn-danger btn-sm text-light' href='hapus-pasien.php?id_pasien=".$pasien['id_pasien']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
</div>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    </body>
</html>