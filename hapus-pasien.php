<?php

include("koneksi.php");

if( isset($_GET['id_pasien']) ){

    // ambil id dari query string
    $id_pasien = $_GET['id_pasien'];

    // buat query hapus
    $sql = "DELETE FROM pasien WHERE id_pasien=$id_pasien";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data-pasien.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>