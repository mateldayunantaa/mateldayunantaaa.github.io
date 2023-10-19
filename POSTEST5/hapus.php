<?php
require "koneksi.php";

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = mysqli_query($conn, "delete from users where id = '$id'");

    if ($result) {
        echo "
        <script>
        if (confirm('Apakah Anda yakin ingin menghapus data?')) {
            alert('Data Berhasil Dihapus!');
            document.location.href = 'datalogin.php';
        } else {
            window.history.go(-1); // Kembali ke halaman sebelumnya
        }
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'datalogin.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
    <link rel="stylesheet" href="hapus.css" />
</head>
<body>
    <div class="container">
        <h1>Hapus Data</h1>
        <form action="" method="post">
            <p>Apakah Anda yakin ingin menghapus data ini?</p>
            <input type="submit" value="Ya, Hapus" name="submit">
            <a href="datalogin.php">Tidak, Batal</a>
        </form>
    </div>
</body>
</html>
