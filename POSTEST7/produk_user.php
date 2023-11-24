<?php
require "koneksi.php";
require 'restricted_page.php';
require 'access_page_user.php';

$result = mysqli_query($conn, "select * from produk");

$produk = [];

while ($row = mysqli_fetch_assoc($result)) {
    $produk[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST6</title>
    <link rel="stylesheet" href="produk_user.css">
</head>

<body>

    <?php

    include "koneksi.php";


    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_produk'])) {
        $id_produk = htmlspecialchars($_GET["id_produk"]);

        $sql = "delete from produk where id_produk='$id_produk' ";
        $hasil = mysqli_query($kon, $sql);

        //Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:index.php");
        } else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
        }
    }
    ?>
    <center>
        <h1>Daftar produk</h1>
    </center>
    <br>

    <div class="product-container">
    <?php foreach ($produk as $pdk) : ?>
        <div class="product-item">
            <img src="<?php echo "img/" . $pdk['gambar']; ?>" alt="ini gambar" width="200px" height="150px">
            <div class="product-details">
                <h2><?= $pdk["nama_produk"] ?></h2>
                <p><?= $pdk["deskripsi_produk"] ?></p>
                <p>Harga: <?= $pdk["harga_produk"] ?></p>
                <p>Stok: <?= $pdk["stok_produk"] ?></p>
                <p>Kategori: <?= $pdk["kategori_produk"] ?></p>

                <!-- Tambahkan form untuk masukkan keranjang -->
                <form action="" method="post">
                    <input type="hidden" name="id_produk" value="<?= $pdk['id_produk'] ?>">
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    <a href="user.php">Kembali ke home</a>

</body>
</html>
