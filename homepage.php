<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boiler</title>
    <link rel="stylesheet" href="./css/homepage.css">
    <script src="https://kit.fontawesome.com/b99e6756e.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/date.js"></script>
    <script src="./js/level_feed_water.js"></script>
    <script src="./js/lh.js"></script>
    <script src="./js/rh.js"></script>
    <script src="./js/lhguil.js"></script>
    <script src="./js/rhguil.js"></script>
    <script src="./js/lhstoker.js"></script>
    <script src="./js/rhstoker.js"></script>
    <script src="./js/lhfd.js"></script>
    <script src="./js/rhfd.js"></script>
    <script src="./js/pvsteam.js"></script>
    <script src="./js/idfan.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="header">
                <img src="./img/kecap.png" alt="logo">
                <h2>Boiler PT Bumi Alam Segar</h2>
            </div>
            <ul>
                <li><a href="homepage.php"><img src="./img/dashboard1.png" alt="icon"
                            style="max-width: 20px; height: auto; margin-right: 5px;">Dashboard</a></li>
                <li><a href="#"><img src="./img/data-trend.png" alt="icon"
                            style="max-width: 20px; height: auto; margin-right: 5px;">Data Trend</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
            <div class="footer">By 2024</div>
        </div>
        <div class="main_content">
            <div class="header">
                <h2>Web Based</h2>
                <div class="user">
                    <h4>Admin</h4>
                    <h5>admin</h5>
                </div>
                <div class="profil">
                    <img src="./img/user.png" alt="user">
                </div>
            </div>
            <div class="info">
                <img src="./img/tampilan.png" alt="background">
                <div class="data">
                    <div class="info">
                        <div class="date-time">
                            <div class="date">
                                <span id="day"></span> <span id="month"></span> <span id="year"></span> |
                                <span id="hour"></span>:<span id="minute"></span>:<span id="second"></span>
                            </div>
                        </div>
                        <p id="value" class="water"></p>
                        <p id="temp1" class="lh"></p>
                        <p id="temp2" class="rh"></p>
                        <p id="lhguil" class="lhg"></p>
                        <p id="rhguil" class="rhg"></p>
                        <p id="lhstoker" class="lhs"></p>
                        <p id="rhstoker" class="rhs"></p>
                        <p id="lhfd" class="lhf"></p>
                        <p id="rhfd" class="rhf"></p>
                        <p id="pvsteam" class="pvs"></p>
                        <p id="idfan" class="idf"></p>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>