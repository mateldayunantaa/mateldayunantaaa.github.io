<?php
require "koneksi.php";
require "id_generator.php";

if (isset($_POST["tambahproduk"])) {
    $id = 'PRD'.generateRandomString();
    $nama = $_POST["nama_produk"];
    $deskripsi = $_POST["deskripsi_produk"];
    $harga = $_POST["harga_produk"];
    $stok = $_POST["stok_produk"];
    $kategori = $_POST["kategori_produk"];
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $pic_profil = $_FILES['gambar']['name'];
    $name_pic = 'PRD-' . $pic_profil;
    $x = explode('.', $name_pic);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 524288000) {
            move_uploaded_file($file_tmp, 'img/' .$name_pic);
            $result = $conn->query("INSERT INTO produk VALUES ('$id', '$nama', '$deskripsi', '$harga', '$stok', '$kategori', '$name_pic')");

            if ($result) {
                echo "
                    <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'produk.php';
                    </script>
                ";
            } else {
                echo mysqli_error($conn) . "
                <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'tambahproduk.php';
                </script>
            ";

                // die("< pre>".print_r($result)."< /pre>");
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }
}
?>