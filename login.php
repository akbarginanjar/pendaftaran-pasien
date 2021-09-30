<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><br><br><br>
<style>
    body {
        padding: 0;
        margin: 0;
        background: whitesmoke;
    }
    a {
        text-decoration: none;
    }
    form {
        background: white;
        width: 400px;
        box-shadow: 0px 3px 10px;
        border-radius: 6px;
        padding: 30px;
    }
    form p {
        color:#BFC9CA;
    }
    .p {
        background: #B22222;
        color: white;
        width: 20%;
        padding: 7px;
        border-radius: 4px; 
        box-shadow: 0pc 3px 10px black;
        position: absolute;
        top: 540px;
        left: 550px;
    }
    h2 {
        color: gray;
        font-size: 30px;
    }
    input[type="submit"] {
    background: #3B9C9C;
  }
  input[type="submit"]:hover {
      transition: 0.4s;
    background: #045F5F;
  }
</style>
    <center>
    <form action="proses-login.php" method="post"><br>
        <img src="img/logo-rskia.png" width=200><br><br><br>
        <input type="text" name="username" class="form-control" placeholder="Username" required><br>
        <input type="password" name="pass" class="form-control" placeholder="Password" required><br>
        <input type="submit" class="form-control text-light" name="login" value="Login Admin"><br>
        Jika admin belum punya akun
        <a href="register.php">Register</a><br><br><br>
    </form><br>

    <?php if(isset($_GET['status'])): ?>
    <div class="p">
        <?php
            if($_GET['status'] == 'gagal'){
                echo "<center>";
                echo "<b>LOGIN GAGAL!</b><br>";
                echo "Username atau password salah";
                echo "</center>";
            } else {
            }
        ?>
    </div>
<?php endif; ?>
</center>
</body>
</html>