<?php
require 'fungsi.php';

// Check if form is submitted
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $capacity = $_POST['capacity'];

    $query = "INSERT INTO db_user (email, nama, password, capacity) VALUES ('$email', '$nama', '$password', '$capacity')";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
                alert('User added successfully');
                document.location.href = 'manageUser.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to add user');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Add User</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="capacity" class="form-label">Capacity</label>
                <select class="form-select" id="capacity" name="capacity" required>
                    <option value="admin">Admin</option>
                    <option value="fasilitator">Fasilitator</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Add User</button>
        </form>
    </div>
</body>
</html>
