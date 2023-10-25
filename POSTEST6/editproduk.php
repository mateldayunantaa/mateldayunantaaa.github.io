<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];

    // Lakukan query untuk mengambil data produk berdasarkan ID
    $query = "SELECT * FROM produk WHERE id_produk = $id_produk";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data produk tidak ditemukan.";
        exit;
    }

    if (isset($_POST['editproduk'])) {
        $nama_produk = $_POST['nama_produk'];
        $deskripsi_produk = $_POST['deskripsi_produk'];
        $harga_produk = $_POST['harga_produk'];
        $stok_produk = $_POST['stok_produk'];
        $kategori_produk = $_POST['kategori_produk'];

        // Query SQL untuk mengupdate data produk
        $update_query = "UPDATE produk SET
                        nama_produk = '$nama_produk',
                        deskripsi_produk = '$deskripsi_produk',
                        harga_produk = '$harga_produk',
                        stok_produk = '$stok_produk',
                        kategori_produk = '$kategori_produk'
                        WHERE id_produk = $id_produk";

        $update_result = mysqli_query($conn, $update_query);

        if ($update_result) {
            echo "
                <script>
                alert('Data produk berhasil diupdate!');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "Gagal mengupdate data produk.";
        }
    }
} else {
    echo "ID produk tidak valid.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="editproduk.css">
</head>

<body>
    <center><h1>Edit Produk</h1></center>
    <br>
    <form action="" method="post">
        <input type="hidden" name="id_produk" value="<?= $row['id_produk'] ?>">
        <label for="nama_produk">Nama Produk</label><br>
        <input type="text" name="nama_produk" value="<?= $row['nama_produk'] ?>"><br>
        <label for="deskripsi_produk">Deskripsi Produk</label><br>
        <input type="text" name="deskripsi_produk" value="<?= $row['deskripsi_produk'] ?>"><br>
        <label for="harga_produk">Harga Produk</label><br>
        <input type="number" name="harga_produk" value="<?= $row['harga_produk'] ?>"><br>
        <label for="stok_produk">Stok Produk</label><br>
        <input type="number" name="stok_produk" value="<?= $row['stok_produk'] ?>"><br>
        <label for="kategori_produk">Kategori Produk</label><br>
        <input type="text" name="kategori_produk" value="<?= $row['kategori_produk'] ?>"><br>
        <button type="submit" name="editproduk">Simpan Perubahan</button><br>
        <a href="index.php">Kembali ke Daftar Produk</a>
    </form>
</body>

</html>
