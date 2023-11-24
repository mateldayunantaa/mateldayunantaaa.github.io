
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <h1>Login</h1>
    <?php
    if (isset($error)) {
        echo "<p style='color: red;'> Username/Password Salah! </p>";
    } else {
        echo "<p style='color: red; display:none;'> Username/Password Salah! </p>";
    }
    ?>
    <form action="login_process.php" method="post">
        <label for="">Username : </label>
        <input type="text" name="username" id=""> <br>
        <label for="">Password : </label>
        <input type="password" name="password" id=""> <br>
        <button type="submit" name="submit">Login</button>
    </form>
    <p>Don't have an Account? <a href="register.php"> Register Now!</a></p>

</body>
</html>