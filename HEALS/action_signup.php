<?php

require_once ("koneksi.php");

// Status tidak error
$error = 0;

// Memvalidasi inputan
if ( isset($_POST['nama']) ) $nama = htmlspecialchars( ucwords($_POST['nama']) );
else $error = 1;

if ( isset($_POST['email']) ) $email = htmlspecialchars( $_POST['email'] );
else $error = 1;

if ( isset($_POST['password']) ) $password = $_POST['password'];
else $error = 1;

if ( isset($_POST['capacity']) ) $capacity = $_POST['capacity'];
else $error = 1;

// Mengatasi jika terjadi error pada inputan
if ( $error == 1 )  {
    echo
        "<script>
            alert('terjadi kesalahan pada proses input data data!');
            document.location.href = 'signup.php';
        </script>";
    exit();
}

$password = hash ("sha256", $password);

// Menyiapkan Query MySQL untuk dieksekusi
$query = "
    INSERT INTO tb_user
    (nama, email, password, capacity)
    VALUES
    ('{$nama}', '{$email}', '{$password}', '{$capacity}');
";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika ada error pada saat eksekusi query
if ( $insert == false ) {
    echo
        "<script>
            alert('Error dalam menambahkan data!');
            document.location.href = 'registration.php';
        </script>";
    exit();
}
else {
    echo
        "<script>
            alert('Daftar user berhasil!');
            document.location.href = 'login.php';
        </script>";
}