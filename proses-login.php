
<?php
// session_start();
// include 'koneksi.php';
// if (isset($_POST['login'])) {
//     $database = new Database();
//     $username = $_POST['username'];
//     $pass = ($_POST['pass']);
//     $result = mysqli_query(
//         $database->db,
//         "SELECT * FROM admin WHERE username='$username' and pass='$pass'"
//     );
//     $row = mysqli_num_rows($result);
//     // var_dump($row);
//     if ($row > 0) {
//         $_SESSION['login'] = $pass;
//         echo "<script type='text/javascript'>
//         alert('Login Berhasil!')
//             window.location = 'home.php'
//         </script>";
//         // ;
//     } else {
//        echo "<script type='text/javascript'>
//         alert('Email atau Password Anda Salah!')
//             window.location = 'login.php'
//         </script>";
//     }
// }
?>

<?php

 $username = $_POST['username'];
 $pass     = $_POST['pass'];

 include 'koneksi.php';

 $user = mysqli_query($db, "select * from admin where username='$username' and pass='$pass'");
 $chek = mysqli_num_rows($user);
 if ($chek > 0) {
     session_start();
     $row = mysqli_fetch_array($user);
     $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
     header ("location: home.php?status=sukses");
 } else {
     header ("location: login.php?status=gagal");
 }

?>