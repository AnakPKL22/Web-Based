<?php
session_start();
include "koneksi_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="shortcut icon" href="./img/wings1.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body style="background-image: url(./img/background.png);">
    <div class="login-container">
        <img src="./img/bas.png" alt="Logo"/>
        <h2>Login</h2>
        <form action="cek_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login" name="proseslog">
        </form>
    <script>
        // Check if there's a login error message from PHP
        <?php if (isset($_SESSION['login_error'])): ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo $_SESSION['login_error']; ?>',
            });
        <?php 
            // Hapus pesan error setelah ditampilkan
            unset($_SESSION['login_error']);
        ?>
        <?php endif; ?>
    </script>
    </div>
</body>

</html>