<?php
require "koneksi.php";
require 'restricted_page.php';
require 'access_page.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows == 1) {
        $user_data = $result->fetch_assoc();

        
        if (isset($_POST['edituser'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

           
            if ($_FILES['photo']['error'] == 0) {
                $upload_dir = "img/";
                $upload_file = $upload_dir . basename($_FILES['photo']['name']);

                if (move_uploaded_file($_FILES['photo']['tmp_name'], $upload_file)) {
                    
                    $update_query = "UPDATE users SET
                                    name = ?,
                                    email = ?,
                                    phone = ?,
                                    photo = ?
                                    WHERE id = ?";

                    $stmt = $conn->prepare($update_query);
                    $stmt->bind_param("sssss", $name, $email, $phone, $_FILES['photo']['name'], $id);
                } else {
                    echo "Gagal mengupload foto.";
                    exit;
                }
            } else {
                
                $update_query = "UPDATE users SET
                                name = ?,
                                email = ?,
                                phone = ?
                                WHERE id = ?";

                $stmt = $conn->prepare($update_query);
                $stmt->bind_param("ssss", $name, $email, $phone, $id);
            }

            $update_result = $stmt->execute();

            if ($update_result) {
                echo "
                    <script>
                    alert('Data user berhasil diupdate!');
                    document.location.href = 'profiladmin.php'; // Change to your desired page
                    </script>
                ";
            } else {
                echo "Gagal mengupdate data user.";
            }
        }
    } else {
        echo "Data user tidak ditemukan.";
        exit;
    }
} else {
    echo "ID user tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="edituser.css" />
</head>

<body>
    <header>
        <h1>EDIT DATA ADMIN</h1>
    </header>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name</label><br>
        <input type="text" name="name" value="<?= $user_data['name'] ?>"><br>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="<?= $user_data['email'] ?>"><br>
        <label for="phone">Phone</label><br>
        <input type="text" name="phone" value="<?= $user_data['phone'] ?>"><br>
        <td><img src="<?= "img/" . $user_data['photo']; ?>" alt="ini photo" width="80px" height="70px"></td>
        <label for="photo">Upload Foto Profil Baru</label><br />
        <input type="file" name="photo" id="photo"> <br>
        <button type="submit" name="editadmin">Save</button><br>
        <a href="profiladmin.php">Back to Admin Data</a>
    </form>

</body>

</html>
