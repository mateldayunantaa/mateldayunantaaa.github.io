<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query untuk menghapus data produk berdasarkan ID
    $delete_result = mysqli_query($conn, "delete from users where users.id = '$id'");

    if ($delete_result) {
        echo "
            <script>
            alert('Data user berhasil dihapus!');
            document.location.href = 'datalogin.php';
            </script>
        ";
    } else {
        echo mysqli_error($conn) . " 
        <script>
            alert('Gagal menghapus data login.!');
            document.location.href = 'datalogin.php';
        </script>
        ";
    }
} else {
    echo "ID login tidak valid.";
}
?>
