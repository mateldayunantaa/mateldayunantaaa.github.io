<?php
require "koneksi.php";
require 'restricted_page.php';
require 'access_page.php';

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
    <link rel="stylesheet" href="produk.css">
</head>

<body> 

<?php

    include "koneksi.php";
    

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_produk'])) {
        $id_produk=htmlspecialchars($_GET["id_produk"]);

        $sql="delete from produk where id_produk='$id_produk' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>
    <center><h1>Data produk</h1></center>
    <center><a href="tambahproduk.php"> + &nbsp; Tambah</a></center>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Deskripsi Produk</th>
            <th>Harga Produk</th>
            <th>Stok Produk</th>
            <th>Kategori Produk</th>
            <th>Gambar</th>
            <th style="width: 100px; text-align:center;">Aksi</th>
        </tr>
        <?php $i = 1;
        foreach ($produk as $pdk) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?= $pdk["nama_produk"] ?> </td>
                <td> <?= $pdk["deskripsi_produk"] ?> </td>
                <td> <?= $pdk["harga_produk"] ?> </td>
                <td> <?= $pdk["stok_produk"] ?> </td>
                <td> <?= $pdk["kategori_produk"] ?> </td>
                <td> <img src = "<?php echo "img/".$pdk['gambar']; ?>" alt ="ini gambar" width="80px" height="70px"></td>
                <td class="actions">
                    <a href='editproduk.php?id=<?= $pdk["id_produk"] ?>'>Edit</a>
                    <a href='hapusproduk.php?id=<?= $pdk["id_produk"] ?>'>hapus</a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
    <a href="admin.php">Kembali ke home</a>   

</body>
</html>