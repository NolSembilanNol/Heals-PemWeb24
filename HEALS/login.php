<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - HEALS</title>
    <link rel="stylesheet" href="assets/css/login-style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>HEALS</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php" class="tbl-biru">Home</a></li>
                    <li><a href="login.php">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="login-form">
        <div class="wrapper">
            <div class="logo_in">
                <img src="https://cdn-icons-png.freepik.com/256/1077/1077114.png?ga=GA1.1.1635961466.1715582567&semt=ais_hybrid" />
            </div>
            <h2>Log In</h2>
            <form action="action_login.php" method="POST">
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" value="" required><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" value="" required><br>
                
                <!-- <div class="checkbox">
                    <label>
                        <input id="login-remember" type="checkbox" name="ingataku" value="1" <?php if(isset($_COOKIE['ingataku']) && $_COOKIE['ingataku'] == '1') echo "checked"; ?> Ingat pengguna
                    </label>
                </div><br> -->

                <input type="submit" value="Log In">
            </form>
            <p>Belum Mempunyai Akun? <a href="signup.php">Daftar</a></p>
        </div>
    </div>

    <div id="aboutus">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>HEALS</h3>
                    <p>Website sistem informasi fasilitas kesehatan kota Mataram</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Website ini dibuat untuk memenuhi tugas project kelompok Pemrograman Web 2024</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>+628123456789</p>
                    <p>Kode Pos: 112233</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2024. <b>HEALS.</b> Pemrograman web
        </div>
    </div>
</body>

</html>
