<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $currentPassword = hash('sha256', $_POST['current_password']);
    $newPassword = hash('sha256', $_POST['new_password']);
    $confirmPassword = hash('sha256', $_POST['confirm_password']);

    $username = $_SESSION['username'];

    // Check if the current password matches the one in the database
    $checkPassword = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$currentPassword'");

    if ($checkPassword->num_rows > 0) {
        // Current password is correct, now check if the new password and confirm password match
        if ($newPassword == $confirmPassword) {
            // Update the password in the database
            $updatePassword = $conn->query("UPDATE users SET password='$newPassword' WHERE username='$username'");

            if ($updatePassword) {
                echo "
                    <script>
                    alert('Password berhasil diubah!');
                    document.location.href = 'profiluser.php'; // Redirect to user profile or wherever you want
                    </script>
                ";
            } else {
                echo "
                    <script>
                    alert('Gagal mengubah password. Silakan coba lagi!');
                    document.location.href = 'ubahpassworduser.php'; // Redirect back to the change password page
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                alert('Konfirmasi password baru tidak sesuai!');
                document.location.href = 'ubahpassworduser.php'; // Redirect back to the change password page
                </script>
            ";
        }
    } else {
        echo "
            <script>
            alert('Password saat ini salah. Silakan coba lagi!');
            document.location.href = 'ubahpassworduser.php'; // Redirect back to the change password page
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="ubahpassword.css" />
</head>

<body>
  <div class="container">
    <h1>Ubah Password</h1>
    <form method="POST" action="ubahpassworduser.php">
      <label>Password Saat Ini</label><br />
      <input type="password" name="current_password" placeholder="Password Saat Ini" required="" /><br />
      <label>Password Baru</label><br />
      <input type="password" name="new_password" placeholder="Password Baru" required="" /><br />
      <label>Konfirmasi Password Baru</label><br />
      <input type="password" name="confirm_password" placeholder="Konfirmasi Password Baru" required="" /><br />
      <br />
      <input type="submit" value="UBAH PASSWORD" name="submit">
      <a href="profiluser.php">Back to User Data</a>
    </form>
  </div>
</body>

</html>
