<?php
require "koneksi.php";
$id = isset($_GET["id"]) ? $_GET["id"] : null;

if ($id === null) {
    // Handle the case when "id" is not provided in the URL.
    echo "
        <script>
        alert('Parameter ID tidak valid!');
        document.location.href = 'datalogin.php';
        </script>
    ";
    exit;
}

$result = mysqli_query($conn, "select * from users where id = '$id'");

if (!$result || mysqli_num_rows($result) == 0) {
    // Handle the case when no user is found for the given ID.
    echo "
        <script>
        alert('Data tidak ditemukan!');
        document.location.href = 'datalogin.php';
        </script>
    ";
    exit;
}

$users = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    if (empty($name) || empty($username) || empty($email) || empty($phone) || empty($password)) {
        echo "
            <script>
            alert('Harap isi semua field!');
            </script>
        ";
    } else {
        $result = mysqli_query($conn, "update users set name = '$name', username = '$username', email = '$email', phone = '$phone', password = '$password' where id = '$id'");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'datalogin.php';
                </script>
            ";
        } else {
            echo "
                <script>
                alert('Data Gagal Diubah!');
                </script>
            ";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="edit.css" />
</head>

<body>
    <div class="container">
        <h1>Edit Data</h1>
        <form action="" method="post">
            <label for="name">Nama Lengkap</label><br />
            <input type="text" name="name" value="<?= $users["name"] ?>" required /><br />
            <label for="username">Username</label><br />
            <input type="text" name="username" value="<?= $users["username"] ?>" required /><br />
            <label for="email">Email</label><br />
            <input type="text" name="email" value="<?= $users["email"] ?>" required /><br />
            <label for="phone">No. Handphone</label><br />
            <input type="text" name="phone" value="<?= $users["phone"] ?>" required /><br />
            <label for="password">Password</label><br />
            <input type="password" name="password" value="<?= $users["password"] ?>" required /><br />
            <input type="submit" value="SUBMIT" name="submit">
        </form>
        <a href="datalogin.php">Kembali ke data login</a>
    </div>
</body>

</html>
