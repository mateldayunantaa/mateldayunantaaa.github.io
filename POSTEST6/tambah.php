<?php
include_once "koneksi.php";

if (isset($_POST["submit"])) {
    // Field / Form sesuaikan dengan kebutuhan
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $photo = $_POST["password"];


    // $result disini akan menampilkan hasil query tambah data
    $result = $conn->query("INSERT INTO users values ('', '$name', '$username', '$email', '$phone', '$password', $photo)"); // insert into, disini adalah query untuk tambah data. ingat *user* disini adalah tabel, jadi sesuaikan dengan tabel yg ada di db anda atau tabel yg anda maksud
    
    // error handling atau if else statement
    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'datalogin.php';
                </script>
            ";
    } else {
        echo error_log($result)."
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'login.php';
            </script>
        ";
    }
}
?>