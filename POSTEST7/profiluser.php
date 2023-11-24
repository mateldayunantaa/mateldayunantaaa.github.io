<?php
require "koneksi.php";
require 'restricted_page.php';
require 'access_page_user.php';

// Dapatkan username pengguna yang telah login
$username = $_SESSION['username'];

// Query hanya data pengguna yang sesuai dengan username pengguna yang telah login
$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

// Cek apakah query berhasil dijalankan
if ($result) {
    $user_data = mysqli_fetch_assoc($result); // Mendapatkan data pengguna yang telah login
} else {
    echo "Gagal mengambil data pengguna dari database.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Register</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="user.css" />
    <link rel="stylesheet" href="profil.css" />
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">FASHION<span>BAG</span>SHOP</a>

        <div class="navbar-nav">
            <a href="user.php">Home</a>
            <a href="produk_user.php" onclick="alert('akses produk')">Produk</a>
        </div>

    </nav>
    <!-- Navbar end -->

    <h1>Data User</h1>
    <link rel="stylesheet" href="dataregister.css" />
    <div class="user-profile">
        <div class="profile-item">
            <label>Photo Profil</label><br>
            <img src="<?= "img/" . $user_data['photo']; ?>" alt="ini photo" width="80px" height="70px">
        </div>
        <div class="profile-item">
            <label>ID:</label>
            <span><?= $user_data['id']; ?></span>
        </div>
        <div class="profile-item">
            <label>Nama:</label>
            <span><?= $user_data['name']; ?></span>
        </div>
        <div class="profile-item">
            <label>Username:</label>
            <span><?= $user_data['username']; ?></span>
        </div>
        <div class="profile-item">
            <label>Email:</label>
            <span><?= $user_data['email']; ?></span>
        </div>
        <div class="profile-item">
            <label>No. Handphone:</label>
            <span><?= $user_data['phone']; ?></span>
        </div>
        <div class="profile-item">
            <label>Password:</label>
            <span><?= $user_data['password']; ?></span>
        </div>
        <div class="profile-item actions">
            <a href="ubahpassworduser.php?id=<?= $user_data['id']; ?>">Ubah Password</a>
            <a href="edituser.php?id=<?= $user_data['id']; ?>">Edit</a>
        </div>
    </div>

</body>
</html>
