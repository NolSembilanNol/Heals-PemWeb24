<?php
session_start();
if (!isset($_SESSION['session_email'])) {
    header("Location: login.html");
    exit();
}

echo "Selamat datang, " . $_SESSION['session_email'] . "!";
?>
<br><a href="index.html">Home</a><br><br>
<a href="logout.php">Logout</a>
