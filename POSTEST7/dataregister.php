<?php
require "koneksi.php";
require 'restricted_page.php';

$result = mysqli_query($conn, "select * from users");

$users = [];

while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5 - CRUD</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">FASHION<span>BAG</span>SHOP</a>

      <div class="navbar-nav">
        <a href="../postest6/">Home</a><a href="#about">About Me</a>
        <a href="#produk" onclick="alert('belum bisa diakses')">Produk</a>
      </div>

      <div class="navbar-extra">
        <a href="login.php" id="user"><i data-feather="user"></i></a>
        <button id="dark-mode-button"><i data-feather="sun"></i></button>
      </div>
    </nav>
    <!-- Navbar end -->

    <h1>DATA REGISTER</h1>
    <link rel="stylesheet" href="dataregister.css" />
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>No. Handphone</th>
            <th>Password</th>
            <th>Photo Profil</th>
            <th style="text-align: center;">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($users as $usr) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?php echo $usr["name"] ?> </td>
                <td> <?= $usr["username"] ?> </td>
                <td> <?= $usr["email"] ?> </td>
                <td> <?= $usr["phone"] ?> </td>
                <td> <?= $usr["password"] ?> </td>
                <td> <img src = "<?php echo "img/".$usr['photo']; ?>" alt ="ini photo" width="80px" height="70px"></td>
                <td class="actions">
                    <a href="edit.php?id=<?=$usr["id"];?>">Edit</a>
                    <a href="hapus.php?id=<?=$usr["id"];?>">Hapus</a>
                </td>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
    <a href="index.php">Kembali Ke Halaman Utama</a>
</body>

</html>