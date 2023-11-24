<?php
include_once "koneksi.php";
include "id_generator.php";

session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["submit"])) {
    // Field / Form sesuaikan dengan kebutuhan
    $id = 'USR' . generateRandomString();
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = hash('sha256', $_POST['password']);
    // $role = 'admin';
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $pic_profil = $_FILES['photo']['name'];
    $name_pic = 'USR-' . $pic_profil;
    $x = explode('.', $name_pic);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, 'img/' .$name_pic);
            $result = $conn->query("INSERT INTO users VALUES ('$id', '$name', '$username', '$email', '$phone', '$password', DEFAULT, '$name_pic')");

            if ($result) {
                echo "
                    <script>
                    alert('Register Berhasil!');
                    document.location.href = 'login.php';
                    </script>
                ";
            } else {
                echo mysqli_error($conn) . "
                <script>
                alert('Register Gagal!');
                document.location.href = 'register.php';
                </script>
            ";

                // die("< pre>".print_r($result)."< /pre>");
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }
}
