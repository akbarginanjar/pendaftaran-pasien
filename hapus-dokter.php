<?php

include("koneksi.php");

if( isset($_GET['id_dokter']) ){

    // ambil id dari query string
    $id_dokter = $_GET['id_dokter'];

    // buat query hapus
    $sql = "DELETE FROM dokter WHERE id_dokter=$id_dokter";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: data-dokter.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>