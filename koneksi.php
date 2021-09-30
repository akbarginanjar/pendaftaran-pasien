<?php

// class Database
// {
//     public $host = "localhost", $user = "root", $pass = "", $database = "pendaftaran_pasien";
//     public $db;
//     public function __construct()
//     {
//         $this->db = mysqli_connect(
//             $this->host,
//             $this->user,
//             $this->pass,
//             $this->database
//         );
//         if ($this->db) {
//             // echo "berhasil";
//         } else {
//             echo "Koneksi Database Gagal";
//         }
//     }
// }

// $database = new Database();

 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "pendaftaran_pasien";

 $db = mysqli_connect($host, $user, $password, $database)


?>