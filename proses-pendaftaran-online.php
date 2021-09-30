<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id_pasien = $_POST['id_pasien'];
    $no_telp = $_POST['no_telp'];
    $nama_pasien = $_POST['nama_pasien'];
    $umur = $_POST['umur'];    
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];

    // buat query
    $sql = "INSERT INTO pasien (id_pasien, no_telp, nama_pasien, umur, jenis_kelamin, alamat, keluhan) VALUE ('$id_pasien', '$no_telp', '$nama_pasien', '$umur', '$jenis_kelamin', '$alamat', '$keluhan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: cek-pasien.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pendaftaran-online.php');
    }


} else {
    die("Akses dilarang...");
}

?>