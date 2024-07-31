<?php 
include "koneksi_login.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/styless.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="./img/wings1.png" alt="Logo">
            <span class="company-name">Boiler PT Bumi Alam Segar</span>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="dashboard.php">
                    <img src="./img/dashboard1.png" alt="Dashboard Icon">
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="./img/data-trend.png" alt="Users Icon">
                    <span class="menu-text">Data Trend</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="https://via.placeholder.com/30" alt="Settings Icon">
                    <span class="menu-text">Users</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="https://via.placeholder.com/30" alt="Logout Icon">
                    <span class="menu-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>

<div class="content">    
    <nav class="navbar">
        <div class="brand">
            <img src="./img/kecap.png" alt="logo">
        </div>
        <h2>Web Based</h2>
        <h3 id="profil">profil</h3>
        <div class="profil">
            <img src="./img/profil.png" alt="logo">
        </div>
    </nav>


        <!--        <nav>
            <div class="logo">
                <img src="./img/kecap.png" alt="logo-kecap">
            <h3>Web Based</h3>
            </div>
            <div class="profile-logo">
                <a href="#"><img src="./img/profil.png" alt="Profile Logo"></a>
            </div>
        </nav> -->



        <div class="level-feed-water">
            <h1 id="value" style="text-align: center;">0</h1>
            <h1>%</h1>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Fungsi untuk memuat dan memperbarui nilai feed water secara berkala
            function updateFeedWaterValue() {
                $.ajax({
                    url: 'feed_water.php', // File PHP untuk mengambil data terbaru dari MySQL
                    dataType: 'json',
                    success: function(response) {
                        $('#value').text(response.level_feed_water); // Update nilai feed water
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error: ' + status + error);
                    }
                });
            }

            // Memanggil fungsi updateFeedWaterValue setiap 1 detik
            setInterval(updateFeedWaterValue, 1000); // Interval setiap 1 detik (1000 ms)
        });
    </script>

</body>

</html>