<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - HEALS</title>
    <link rel="stylesheet" href="faskes_rsup-style.css">
    <style>
        /* Gaya CSS tambahan untuk tabel */
        table {
            width: 70%;
            border-collapse: collapse;
            box-shadow: none;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            box-shadow: none;
        }
        th {
            background-color: #f2f2f2;
            box-shadow: none;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
            box-shadow: none;
        }
        tr:hover {
            background-color: #ddd;
            box-shadow: none;
        }
        img {
            width: 200px; /* Sesuaikan dengan ukuran yang diinginkan */
            height: 150px; /* Sesuaikan dengan ukuran yang diinginkan */
            box-shadow: none;
        }
        th:active, td:active, tr:active, table:active {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>HEALS</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <!-- <li class="pilih">Pilih kategori</li> -->
                    <ul class="dropdown">
                        <!-- <li><a href="#">Rumah Sakit</a></li><br>
                        <li><a href="#">Puskesmas</a></li><br>
                        <li><a href="#">Klinik</a></li><br> -->
                        
                    </ul>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="login.html" class="tbl-biru">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 align="center">FASILITAS KESEHATAN RUMAH SAKIT UMUM DAERAH <br> PROVINSI NUSA TENGGARA BARAT</h1>
    

    <hr>

    <div class="kategori">
        <!-- Gunakan tabel untuk menyusun gambar dan teks -->
        <table>
            <tr>
                <td><b>Fasilitas yang disediakan:</b></td>
            </tr>
            <tr>
                <td>Gedung onkologi terpadu yang memberikan pelayanan rawat jalan</td>
            </tr>
            <tr>
                <td>Tes kesehatan jasmani, jiwa dan narkoba di Klinik MCU hanya Rp.413.000</td>
            </tr>
            <tr>
                <td>IGD buka selama 24 jam</td>
            </tr>
            <tr>
                <td>Instalasi Rawat Jalan buka sesuai jam kerja hari senin s.d sabtu.</td>
            </tr>
            <tr>
                <td>Instalasi Rawat Inap berupa : super vip, vip, kelas i, kelas ii, kelas iii, isolasi, perawatan ibu bersalin, ruang bayi serta isolasi </td>
            </tr>
            <tr>
                <td>Pelayanan medis khusus : ICU, ICCU, CVCU, NICU, PICU, HCU.</td>
            </tr>
            <tr>
                <td>Self check up covid-19 :<br><a href="https://rsud.ntbprov.go.id/checkup/covid.php">Check disini</a></td>
            </tr>
            <tr>
                <td>Data covid-19 di NTB :<br><a href="https://corona.ntbprov.go.id/">Check disini</a></td>
            </tr>
            <tr>
                <td>Lihat data dokter RSUDP NTB :<br><a href="https://rsud.ntbprov.go.id/">Check disini</a></td>
            </tr>
        </table><br>

        <table>
            <tr>
                <th colspan="2">Kontak Rumah Sakit Umum Daerah Provinsi NTB</th>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>0370-750 2424</td>
            </tr>
            <tr>
                <td>SMS</td>
                <td>0878782836848</td>
            </tr>
            <tr>
                <td>IGD</td>
                <td>0370-750-4288</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <a href="mailto:rsud@ntbprov.go.id">rsud@ntbprov.go.id</a><br>
                    <a href="mailto:rsudntb@gmail.com">rsudntb@gmail.com</a>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Jl. Prabu Rangkasari Dasan Cermen - Mataram</td>
            </tr>
        </table><br>
    
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

</body>

</html>