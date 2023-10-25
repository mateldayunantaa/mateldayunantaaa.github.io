<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];

    // Lakukan query untuk menghapus data produk berdasarkan ID
    $delete_query = "DELETE FROM produk WHERE id_produk = $id_produk";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        echo "
            <script>
            alert('Data produk berhasil dihapus!');
            document.location.href = 'produk.php';
            </script>
        ";
    } else {
        echo "Gagal menghapus data produk.";
    }
} else {
    echo "ID produk tidak valid.";
}
?>
