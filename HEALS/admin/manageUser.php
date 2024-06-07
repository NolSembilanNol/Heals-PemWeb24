<?php
require 'fungsi.php';
$users = query("SELECT * FROM db_user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
        }
        .position-fixed.top-2 {
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Hello Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="manageUser.php">Manage user</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Faskes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="faskesadmin.php">Rumah Sakit</a></li>
                  <li><a class="dropdown-item" href="#">Puskesmas</a></li>
                  <li><a class="dropdown-item" href="#">Klinik</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- end mavbar -->
    <!-- <h2>Manage Users</h2> -->
    <!-- Input for adding a new user -->
    <button type="button" class="btn btn-outline-primary m-3">
        <a href="tambahuser.php" style="color: blue; text-decoration: none;">Tambah User</a>
    </button>
    <!-- table -->
    <div class="table-responsive mx-auto">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Actions</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Capacity</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
            <?php foreach($users as $user) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <!-- button -->
                    <td>
                        <button type="button" class="btn btn-outline-primary m-3">
                            <a href="ubahuser.php?id=<?= $user["id_user"]?>" style="color: blue; text-decoration: none;">Ubah</a>
                        </button>
                        <button type="button" class="btn btn-outline-primary m-3">
                            <a href="hapususer.php?id=<?= $user["id_user"]?>" style="color: blue; text-decoration: none;">Hapus</a>
                        </button>
                    </td>
                    <!-- content -->
                    <td><?= $user["email"]; ?></td>
                    <td><?= $user["nama"]; ?></td>
                    <td><?= $user["capacity"]; ?></td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- end table -->
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- end script bootstrap -->
</body>
</html>
