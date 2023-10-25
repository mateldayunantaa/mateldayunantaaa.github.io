<?php
require "koneksi.php";

if (isset($_POST["tambahproduk"])) {
    $nama = $_POST["nama"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $kategori = $_POST["kategori"];
    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.', $gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/' . $gambar_baru)) {
        $result = mysqli_query($conn, "INSERT INTO produk
        (nama_produk, deskripsi_produk, harga_produk, stok_produk, kategori_produk, gambar) 
        VALUES ('$nama', '$deskripsi', '$harga', '$stok', '$kategori', '$gambar_baru')");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'tambahproduk.php';
                </script>
            ";
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
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
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Nama Barang</label><br>
        <input type="text" name="nama" id=""> <br>
        <label for="">Deskripsi Barang</label><br>
        <input type="text" name="nama" id=""> <br>
        <label for="">Harga Barang</label><br>
        <input type="number" name="harga" id=""> <br>
        <label for="">Stok</label><br>
        <input type="text" name="stok" id=""> <br>
        <label for="">Kategori Barang</label><br>
        <input type="text" name="nama" id=""> <br>
        <label for="">Upload gambar</label>
        <input type="file" name="gambar" id=""> <br>
        <button type="submit" name="tambahproduk">Tambah</button><br>
        <a href="index.php">Kembali ke home</a>
    </form>
    
</body>

</html>