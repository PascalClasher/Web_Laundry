<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel=stylesheet href="login.css" />

    <?php
        session_start(); // Memulai session
        
        // Cek apakah pengguna sudah login atau belum
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            header("location: welcome.php"); // Redirect ke halaman welcome jika sudah login
            exit;
        }
        
        // Proses login
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = "kelompok7";
            $password = "TIK2032C";
            
            $input_username = $_POST["username"];
            $input_password = $_POST["password"];
            
            if ($input_username == $username && $input_password == $password) {
                // Login berhasil, set session dan redirect ke halaman welcome
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                header("location: welcome.php");
            } else {
                echo "Username atau password salah.";
            }
        }
        ?>

</head>
<body>
    <h1>Web Laundry</h1>
    <div class="login">
        <h3> Login Form </h3>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div align="center">
        <img src="../static/image/Laundrylogin.png" width="100" height="100  "/>
        </div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
