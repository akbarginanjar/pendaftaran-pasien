<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['register'])){

    // ambil data dari formulir
    $id = $_POST['id_admin'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // buat query
    $sql = "INSERT INTO admin (id_admin, nama_lengkap, username, pass) VALUE ('$id', '$nama_lengkap', '$username', '$pass')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: login.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: login.php');
    }


} else {
    die("Akses dilarang...");
}

?>