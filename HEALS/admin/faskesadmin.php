<?php
require 'fungsi.php';

// Pagination logic
$limit = 5; // Number of entries per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch facilities with pagination
$fasilitas = query("SELECT * FROM faskes LIMIT $limit OFFSET $offset");
$total_faskes = count(query("SELECT * FROM faskes"));
$total_pages = ceil($total_faskes / $limit);

// Handle form submissions for adding, editing, and deleting
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $layanan = $_POST['layanan'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        
        $query = "INSERT INTO faskes (nama, kategori, alamat, telepon, layanan, latitude, longitude) VALUES ('$nama', '$kategori', '$alamat', '$telepon', '$layanan', '$latitude', '$longitude')";
        mysqli_query($conn, $query);
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $layanan = $_POST['layanan'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        
        $query = "UPDATE faskes SET nama = '$nama', kategori = '$kategori', alamat = '$alamat', telepon = '$telepon', layanan = '$layanan', latitude = '$latitude', longitude = '$longitude' WHERE id = $id";
        mysqli_query($conn, $query);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        
        $query = "DELETE FROM faskes WHERE id = $id";
        mysqli_query($conn, $query);
    }
    
    header('Location: faskesadmin.php?page=' . $page);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Healthcare Facilities</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
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
     <!-- end navbar -->
    <div class="container">
        <h2>Manage Healthcare Facilities</h2>
        
        <!-- Button to trigger Add Facility modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Add New Facility
        </button>

        <!-- List of Facilities -->
        <h3 class="mt-5">List of Facilities</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Layanan</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Gambar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fasilitas as $faskes) : ?>
                    <tr>
                        <td><?= $faskes['nama']; ?></td>
                        <td><?= $faskes['kategori']; ?></td>
                        <td><?= $faskes['alamat']; ?></td>
                        <td><?= $faskes['telepon']; ?></td>
                        <td><?= $faskes['layanan']; ?></td>
                        <td><?= $faskes['latitude']; ?></td>
                        <td><?= $faskes['longitude']; ?></td>
                        <td><?= $faskes['gambar']; ?></td>
                        <td>
                            <!-- Edit and Delete Buttons -->
                            <form action="faskesadmin.php" method="post" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $faskes['id']; ?>">
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" onclick="populateEditForm(<?= htmlspecialchars(json_encode($faskes)); ?>)">Edit</button>
                                <button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
                    <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Add Facility Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add New Facility</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="faskesadmin.php?page=<?= $page ?>" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="telepon" name="telepon" required>
                            </div>
                            <div class="mb-3">
                                <label for="layanan" class="form-label">Layanan</label>
                                <textarea class="form-control" id="layanan" name="layanan" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="latitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude" required>
                            </div>
                            <div class="mb-3">
                                <label for="longitude" class="form-label">Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude" required>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Upload Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                            <button type="submit" class="btn btn-primary" name="add">Add Facility</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Edit Facility Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Facility</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="faskesadmin.php?page=<?= $page ?>" method="post" id="editForm">
                            <input type="hidden" name="id" id="edit_id">
                            <div class="mb-3">
                                <label for="edit_nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="edit_nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="edit_kategori" name="kategori" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="edit_alamat" name="alamat" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_telepon" class="form-label">Telepon</label>
                                <input type="text" class="form-control" id="edit_telepon" name="telepon" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_layanan" class="form-label">Layanan</label>
                                <textarea class="form-control" id="edit_layanan" name="layanan" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit_latitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control" id="edit_latitude" name="latitude" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_longitude" class="form-label">Longitude</label>
                                <input type="text" class="form-control" id="edit_longitude" name="longitude" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="edit">Update Facility</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function populateEditForm(faskes) {
            document.getElementById('edit_id').value = faskes.id;
            document.getElementById('edit_nama').value = faskes.nama;
            document.getElementById('edit_kategori').value = faskes.kategori;
            document.getElementById('edit_alamat').value = faskes.alamat;
            document.getElementById('edit_telepon').value = faskes.telepon;
            document.getElementById('edit_layanan').value = faskes.layanan;
            document.getElementById('edit_latitude').value = faskes.latitude;
            document.getElementById('edit_longitude').value = faskes.longitude;
        }
    </script>
</body>
</html>
