<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DAFTAR AKUN</title>
  <link rel="stylesheet" href="register.css" />
</head>

<body>
  <div class="container">
    <h1>REGISTRASI</h1>
    <form method="POST" action="register_process.php" enctype="multipart/form-data">
      <label>Nama Lengkap</label><br />
      <input type="text" name="name" placeholder="Nama Lengkap" required="" /><br />
      <label>Username</label><br />
      <input type="text" name="username" placeholder="Username" required="" /><br />
      <label>No. Handphone</label><br />
      <input type="nomor" name="phone" placeholder="No Handphone" required="" /><br />
      <label>Email</label><br />
      <input type="email" name="email" placeholder="Email" required="" /><br />
      <label>Password</label><br />
      <input type="password" name="password" placeholder="Password" required="" /><br />
      <label for="">Upload Foto Profil</label><br />
      <input type="file" name="photo" id=""> <br>
      <br />
      <input type="submit" value="SUBMIT" name="submit">
      <!-- <a href="url_anda_disini" name="tambah">
        <button type="submit">SUBMIT</button>
      </a> -->
    </form>
    <p>Already have an Account? <a href="login.php"> Login Now!</a></p>
    <a href="dataregister.php">Tampilkan data Register</a>
  </div>
  <footer>
    <p>Copyright © 2023 Matelda Yunanta Ambon | All right reserved</p>
  </footer>
</body>

</html>