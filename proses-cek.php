
<?php

?>

<?php

 $nama_pasien = $_POST['nama_pasien'];
 $no_telp     = $_POST['no_telp'];

 include 'koneksi.php';

 $user = mysqli_query($db, "select * from pasien where nama_pasien='$nama_pasien' and no_telp='$no_telp'");
 $chek = mysqli_num_rows($user);
 if ($chek > 0) {
     session_start();
     $row = mysqli_fetch_array($user);
     $_SESSION['nama_pasien'] = $row['nama_pasien'];
     header ("location: cek-pasien.php?status=sukses-cek");
 } else {
     header ("location: cek-pasien.php?status=gagal-cek");
 }

?>