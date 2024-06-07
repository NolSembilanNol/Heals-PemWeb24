<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - HEALS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/sigin-style.css">
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
    
    <div id="sigin-form">
        <div class="wrapper">
            <div class="Sign_in">
                <img src="https://cdn-icons-png.freepik.com/256/1077/1077114.png?ga=GA1.1.1635961466.1715582567&semt=ais_hybrid"/>
            </div>
            <h2>Sign Up</h2>
            <form action="action_signup.php" method="POST">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="nama">Name:</label><br>
                <input type="text" id="nama" name="nama" required><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <label for="capacity">Daftar sebagai:</label><br>
                <select name="capacity" id="capacity">
                    <option value="admin">Admin</option>                    
                    <option value="fasilitator">Fasilitator</option>                    
                </select>
                <input type="submit" value="Sign Up">
            </form>
            <p>Sudah Mempunyai Akun? <a href="login.php">Log In</a></p>
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
                    <p>Website ini dibuat untuk memenuhi tugas project kelompok Pemrograman Web 2024 </p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
