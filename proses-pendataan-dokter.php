<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['dokter'])){

    // ambil data dari formulir
    $nama_dokter = $_POST['nama_dokter'];
    $spesialis = $_POST['spesialis'];    

    // buat query
    $sql = "INSERT INTO dokter (nama_dokter, spesialis) VALUE ('$nama_dokter', '$spesialis')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: data-dokter.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pendataan-dokter.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>