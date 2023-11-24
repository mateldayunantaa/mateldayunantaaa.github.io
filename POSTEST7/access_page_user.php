<?php
require 'koneksi.php';

    if($_SESSION['username']){
        $username = $_SESSION['username'];
        $page = $_SERVER['HTTP_REFERER'];
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            if($row['role'] === 'user'){
            }else{
                echo "
                <script>
                alert('Page ini hanya untuk user!')
                document.location.href = `$page`;
                </script>";
            }
        } 
    }
?>