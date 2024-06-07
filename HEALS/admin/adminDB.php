<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALS</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #8B0000; /* Dark red */
            padding-top: 20px;
        }
        .sidebar .nav-link,
        .sidebar .navbar-brand {
            color: white !important;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <nav class="navbar navbar-expand-lg navbar-dark flex-column">
            <a class="navbar-brand" href="#">Hello Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manageUser.php">Manage user</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="faskesadmin.php" aria-current="page"  aria-expanded="false">
                            Faskes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="content">
        <!-- card -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-header">Jumlah User</div>
                        <div class="card-body">
                            <h5 class="card-title" id="user-count">0</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Jumlah Fasilitator</div>
                        <div class="card-body">
                            <h5 class="card-title" id="fasilitator-count">0</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Jumlah Faskes</div>
                        <div class="card-body">
                            <h5 class="card-title" id="faskes-count">0</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../assets/js/admin.js"></script>
</body>
</html>
