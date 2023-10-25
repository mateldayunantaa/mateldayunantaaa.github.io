<?php
require 'koneksi.php';

if (isset($_POST["login"])){
   $nama = $_POST["name"];
   $username = $_POST["username"];
   $phone = $_POST["phone"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $photo = $_FILES['photo']['name'];
    $explode = explode('.', $photo);
    $ekstensi=strtolower(end($explode));
    $photo_profil_baru = "$nama.$ekstensi";
    $tmp = $_FILES['photo']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/' . $photo_profil_baru)){
      $result = mysqli_query($conn, "insert into users 
        (name, username, phone, email, password,photo) 
        values ('', $nama', '$username', '$phone', '$email', '$password', '$photo_profil_baru')");


    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'datalogin.php';
                </script>
            ";
    } else {
        echo error_log($result). "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'login.php';
            </script>
        ";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DAFTAR AKUN</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container">
      <h1>REGISTRASI</h1>
      <form method="POST" action="tambah.php" enctype="multipart/form-data">
        <label>Nama Lengkap</label><br />
        <input type="text" name="name" placeholder="Nama Lengkap" required=""/><br />
        <label>Username</label><br />
        <input type="text" name="username" placeholder="Username" required=""/><br />
        <label>No. Handphone</label><br />
        <input type="nomor" name="phone" placeholder="No Handphone" required="" /><br />
        <label>Email</label><br />
        <input type="email" name="email" placeholder="Email" required=""/><br />
        <label>Password</label><br />
        <input type="password" name="password" placeholder="Password" required=""/><br />
        <label for="">Upload Foto Profil</label><br />
        <input type="file" name="photo" id=""> <br>
        <br />
        <input type="submit" value="SUBMIT" name="submit">
        <!-- <a href="url_anda_disini" name="tambah">
        <button type="submit">SUBMIT</button>
      </a> -->
      </form>
      <p>Don't have an Account? <a href="#"> Login Now!</a></p>
      <a href="datalogin.php">Tampilkan data Login</a>
    </div>
    <footer>
      <p>Copyright © 2023 Matelda Yunanta Ambon | All right reserved</p>
    </footer>
  </body>
</html>
