<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        form {
            padding: 20px;
            width: 95%;
            background: white;
            text-align: left;
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
    <form action="proses-register.php" method="POST" class="mt-4 p-5 bg-light rounded">
        <h1>REGISTRASI ADMIN</h1><br>
        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap" required><br>
        <input type="text" class="form-control" name="username" placeholder="Username" required><br>
        <input type="password" class="form-control" name="pass" placeholder="Password" required><br>
        <input type="submit" class="form-control text-light" name="register" value="Register"><br>
    </form><br><br><br>
    <img src="img/logo-rskia.png" width="130">
    </center>
</body>
</html>