<?php
include 'koneksi.php';
session_start();
 
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = hash('sha256', $_POST['password']);
    
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['role'] == 'user'){
            $_SESSION['username'] = $row['username'];
            echo "
            <script>
            alert('Login Berhasil!');
            document.location.href = 'user.php';
            </script>
        ";
        exit();
        }else {
            $_SESSION['username'] = $row['username'];
            echo "
            <script>
            alert('Login Berhasil!');
            document.location.href = 'admin.php';
            </script>
        ";
        exit();
        }
    } else {
        echo "
        <script>
        alert('Username atau password Anda salah. Silakan coba lagi!')
        document.location.href = 'login.php';
        </script>";
    }
}
?>