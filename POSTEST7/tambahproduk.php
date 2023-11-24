<?php
    require 'restricted_page.php';
    require 'access_page.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="tambahproduk.css">
</head>

<body>
    <center><h1>Tambah produk</h1></center>
    <br>
    <form action="process_tambah_produk.php" method="post" enctype="multipart/form-data">
        <label for="">Nama Barang</label><br>
        <input type="text" name="nama_produk" id=""> <br>
        <label for="">Deskripsi Barang</label><br>
        <input type="text" name="deskripsi_produk" id=""> <br>
        <label for="">Harga Barang</label><br>
        <input type="number" min= "50000" name="harga_produk" id=""> <br>
        <label for="">Stok</label><br>
        <input type="number" min="1" name="stok_produk" id=""> <br>
        <label for="">Kategori Barang</label><br>
        <input type="text" name="kategori_produk" id=""> <br>
        <label for="">Upload gambar</label>
        <input type="file" name="gambar" id=""> <br>
        <button type="submit" name="tambahproduk">Tambah</button><br>
        <a href="admin.php">Kembali ke home</a>
    </form>

</body>
</html>