<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEALS</title>
    <link rel="stylesheet" href="assets/css/daftar_fakskes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
</head>
<body>
    <?php include('partials/navbar.php'); ?>
    
    <?php
    require 'admin/fungsi.php';

    if (isset($_GET['no'])) {
        $no = $_GET['no'];
        $faskes = query("SELECT * FROM faskes WHERE id = $no")[0];
    ?>

    <main id="detail" data-no="<?= $no ?>">
        <div class="container">
            <h2>Maps Rute Fasilitas Kesehatan</h2>
            <p>Klik marker faskes jika ingin melihat rute</p>
            <div id="map"></div>
            <div class="info">
                <div class="photo">
                    <h3>Foto Fasilitas Kesehatan</h3>
                    <img src="rsud.jpg" alt="Foto Fasilitas Kesehatan">
                </div>
                <div class="details">
                    <h3>Tabel Detail Informasi</h3>
                    <table>
                        <tr>
                            <td>Nama Fasilitas</td>
                            <td><?= $faskes['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?= $faskes['kategori'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $faskes['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td><?= $faskes['telepon'] ?></td>
                        </tr>
                        <tr>
                            <td>Layanan</td>
                            <td><?= $faskes['layanan'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <?php 
    } else {
        $faskesList = query("SELECT * FROM faskes");
    ?>

    <main>
        <div class="container">
            <h2>DAFTAR FASILITAS KESEHATAN KOTA MATARAM</h2>
            <p>Klik pin penanda jika ingin mengetahui lebih lanjut</p>
            <div id="map"></div>
            <div class="legend">
                <h3>Keterangan:</h3>
                <ul>
                    <li><span class="legend-icon" style="background-color:red;"></span> Rumah sakit</li>
                    <li><span class="legend-icon" style="background-color:blue;"></span> Puskesmas</li>
                    <li><span class="legend-icon" style="background-color:green;"></span> Klinik</li>
                </ul>
            </div>
            
            <!-- Daftar Tabel Fasilitas Kesehatan Kota Mataram -->
            <h2>Daftar Tabel Fasilitas Kesehatan Kota Mataram</h2>
            <input type="text" id="search" placeholder="Search...">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Fasilitas</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="facility-table">
                    <?php if (count($faskesList) > 0): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($faskesList as $faskes): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $faskes['nama'] ?></td>
                            <td><?= $faskes['layanan'] ?></td>
                            <td><?= $faskes['alamat'] ?></td>
                            <td>
                                <a href="?no=<?= $faskes['id'] ?>" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No data available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="pagination">
                <button id="prev" disabled>Previous</button>
                <span id="page-info">1</span>
                <button id="next">Next</button>
            </div>
        </div>
    </main>
    <?php
        }
    ?>
    
    <?php include('partials/footer.php'); ?>
    <script src="assets/js/daftar_fakes.js" defer></script>
    <script>
        // JavaScript untuk menangani navigasi paginasi
        document.getElementById('prev').addEventListener('click', function() {
            var currentPage = parseInt(document.getElementById('page-info').textContent);
            if (currentPage > 1) {
                window.location.href = '?page=' + (currentPage - 1);
            }
        });

        document.getElementById('next').addEventListener('click', function() {
            var currentPage = parseInt(document.getElementById('page-info').textContent);
            var totalPages = <?= $total_pages ?>;
            if (currentPage < totalPages) {
                window.location.href = '?page=' + (currentPage + 1);
            }
        });
    </script>
</body>
</html>
