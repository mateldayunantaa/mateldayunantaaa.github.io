<?php
session_start(); // start session

// do check
if (!isset($_SESSION["username"])) {
    echo "
            <script>
            alert('Maaf Anda harus login terlebih dahulu!');
            document.location.href = 'login.php';
            </script>
        ";
    exit; // prevent further execution, should there be more code that follows
}