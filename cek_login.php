<?php
session_start();
include "koneksi_login.php";

// Memeriksa apakah formulir sudah dikirimkan
if (isset($_POST['proseslog'])) {
    // Mencegah SQL Injection dengan menggunakan prepared statement
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Memeriksa apakah credential (username dan password) benar
    if ($row = mysqli_fetch_assoc($result)) {
        // Login berhasil, set variabel sesi (session)
        $_SESSION['username'] = $row['username'];
        $_SESSION['nama'] = $row['nama']; // Sesuaikan sesuai struktur database Anda
        $_SESSION['role'] = $row['role']; 

        if ($_SESSION['role'] == 'Admin') {
            header('Location: homepage.php');
        } else {
            header('Location: user_dashboard.php');
        }
        exit();
    } else {
        // Password salah, kembalikan ke halaman login dengan pesan error
        $_SESSION['login_error'] = "Username atau Password salah!";
        header('Location: index.php');
        exit();
    }

    // Menutup statement dan koneksi
    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
}
?>