-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2024 pada 09.27
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heals`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_user`
--

CREATE TABLE `db_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `capacity` enum('admin','fasilitator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_user`
--

INSERT INTO `db_user` (`id_user`, `email`, `nama`, `password`, `capacity`) VALUES
(1, 'ridhoadhimam@gmail.com', 'Ridho Adhimam Putra', '11', 'admin'),
(2, 'Iyoong75@gmail.com', 'Dho', '9', 'admin'),
(3, 'admin@admin.com', 'ADMIN', 'password', 'admin'),
(4, 'tes@tes.com', 'TES', 'tes', 'fasilitator'),
(9, 'gacor@gmail.com', 'maula sanggili', 'kenahack', 'fasilitator'),
(10, 'cece@gmail.com', 'cece', '123', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `layanan` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `kategori`, `alamat`, `telepon`, `layanan`, `latitude`, `longitude`, `gambar`) VALUES
(1, 'RS Bhayangkara', 'RS', 'tesnamaalamat', '081', 'infus', -8.577125662345455, 116.08436134953062, ''),
(2, 'RSUD Mataram', 'RS', 'tesnamaalamat', '081', 'infus', -8.59904109211086, 116.11358999785524, ''),
(3, 'RS Universitas Mataram', 'RS', 'tesnamaalamat', '081', 'infus', -8.589858174493028, 116.09345311378829, ''),
(4, 'RS Kemala Hikmah Polwi', 'RS', 'tesnamaalamat', '081', 'infus', -8.579281944483506, 116.09365840786575, ''),
(5, 'RS Siti Hajar', 'RS', 'tesnamaalamat', '081', 'infus', -8.586423718126822, 116.11436356295383, ''),
(6, 'RS Siloam', 'RS', 'tesnamaalamat', '081', 'infus', -8.592841532519087, 116.09879115636869, ''),
(7, 'RSK St. Antonius', 'RS', 'tesnamaalamat', '081', 'infus', -8.569610189561642, 116.07971459213104, ''),
(8, 'RSAD Wira Bhakti', 'RS', 'tesnamaalamat', '081', 'infus', -8.58027225551394, 116.10908057539206, ''),
(9, 'RS Risa Sentra Medika', 'RS', 'tesnamaalamat', '081', 'infus', -8.585277782806351, 116.12276827421712, ''),
(10, 'RS Harapan Keluarga', 'RS', 'tesnamaalamat', '081', 'infus', -8.577783637903256, 116.14687285113482, ''),
(11, 'RS Biomedika', 'RS', 'tesnamaalamat', '081', 'infus', -8.603877650976377, 116.11352388429225, ''),
(12, 'RS Metro Medika', 'RS', 'tesnamaalamat', '081', 'infus', -8.561997223037627, 116.1125989005121, ''),
(13, 'RSUD Provinsi', 'RS', 'tesnamaalamat', '081', 'infus', -8.606397830572252, 116.13204570646643, ''),
(14, 'RS Umum Daerah Mataram', 'RS', 'tesnamaalamat', '081', 'infus', -8.599105456502096, 116.11404455923004, ''),
(15, 'Puskesmas Mataram', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.583115391658659, 116.10546646324116, ''),
(16, 'Puskesmas Pejeruk', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.567647504668098, 116.0930887495358, ''),
(17, 'Puskesmas Dasan Agung', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.57880336891152, 116.09430213802104, ''),
(18, 'Puskesmas Pagesangan', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.594243089404841, 116.10065718705604, ''),
(19, 'Puskesmas Karang Taliwang', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.577800465483875, 116.12586542298055, ''),
(20, 'Puskesmas Dasan Cermen', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.601491189911103, 116.13600203908881, ''),
(21, 'Puskesmas Selaparang', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.564524538865555, 116.12226338940013, ''),
(22, 'Puskesmas Cakranegara Pustu Selagalas', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.580927107856098, 116.1427801627113, ''),
(23, 'Puskesmas Babakan', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.596210821039149, 116.13596155679873, ''),
(24, 'Puskesmas Pegesangan', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.590668715071928, 116.1011613794521, ''),
(25, 'Puskesmas Cakranegara', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.592069096558308, 116.1477176704014, ''),
(26, 'Puskesmas Perawatan Tanjung Karang', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.598290197131842, 116.08432987952409, ''),
(27, 'Puskesmas Pembantu Cakra Barat', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.596219201509802, 116.12456964553878, ''),
(28, 'Puskesmas Pembantu Rembige', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.55964159133816, 116.1113849528756, ''),
(29, 'Puskesmas Karang Pule', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.611676219270732, 116.09937128197559, ''),
(30, 'Puskesmas Perawatan Ampenan', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.568719172287071, 116.07667427681946, ''),
(31, 'Puskesmas Pembantu Turida', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.604192902966378, 116.14361733026352, ''),
(32, 'Puskesmas Cakra Selatan', 'Puskesmas', 'tesnamaalamat', '081', 'infus', -8.593760934342587, 116.14539564560488, ''),
(33, 'Klinik Kuret Mataram (dr. Angela)', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.579701467714079, 116.09522857245445, ''),
(34, 'Klinik Risa Husada', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.583115391658659, 116.11324281188887, ''),
(35, 'Klinik Glora', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.577171604070509, 116.11702053357368, ''),
(36, 'Klinik Mitra Medistra', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.577171604070509, 116.11702053357368, ''),
(37, 'Klinik Pratama Jaya Medika', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.583939731080878, 116.12946250446667, ''),
(38, 'Klinik Gora', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.577737237705048, 116.11696473999103, ''),
(39, 'Klinik Mitra Husada Lombok', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.596349565618524, 116.11328377927397, ''),
(40, 'Klinik Onecare', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.59353082059737, 116.10103758192484, ''),
(41, 'Klinik Nugraha', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.590158399791756, 116.12720794976573, ''),
(42, 'Klinik Pratama Arta Medika', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.580897214863834, 116.11931687142, ''),
(43, 'Klinik Kuret Mataram (dr. Siska)', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.586791244928762, 116.08561767439238, ''),
(44, 'Klinik Kuret Mataram (dr. Isna)', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.583171825302843, 116.10270225965377, ''),
(45, 'Klinik Unram', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.583477333266494, 116.09273686162415, ''),
(46, 'Klinik Sriwijaya', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.594251091157448, 116.10949032168384, ''),
(47, 'Klinik Asy-syifa', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.59662171318398, 116.08514094398403, ''),
(48, 'Klinik Caturwarga', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.588119303578772, 116.11750696613484, ''),
(49, 'Tirta Medical Center Mataram', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.587722541147842, 116.10059217597154, ''),
(50, 'Klinik Nayaka Husada Mataram', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.589052853717138, 116.11961044229353, ''),
(51, 'Klinik Kamboja', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.583973572394386, 116.10719116565602, ''),
(52, 'Quantum Sarana Medika', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.579167541056334, 116.10836963386282, ''),
(53, 'Klinik Kuret Matarm (dr. Felina)', 'Klinik', 'tesnamaalamat', '081', 'infus', -8.572733140306322, 116.10857862007417, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `markers`
--

INSERT INTO `markers` (`id`, `lat`, `lng`, `title`, `color`) VALUES
(1, -8.577125662345455, 116.08436134953062, 'RS Bhayangkara', 'red'),
(2, -8.59904109211086, 116.11358999785524, 'RSUD Mataram', 'red'),
(3, -8.589858174493028, 116.09345311378829, 'RS Universitas Mataram', 'red'),
(4, -8.579281944483506, 116.09365840786575, 'RS Kemala Hikmah Polwi', 'red'),
(5, -8.586423718126822, 116.11436356295383, 'RS Siti Hajar', 'red'),
(6, -8.592841532519087, 116.09879115636869, 'RS Siloam', 'red'),
(7, -8.569610189561642, 116.07971459213104, 'RSK St. Antonius', 'red'),
(8, -8.58027225551394, 116.10908057539206, 'RSAD Wira Bhakti', 'red'),
(9, -8.585277782806351, 116.12276827421712, 'RS Risa Sentra Medika', 'red'),
(10, -8.577783637903256, 116.14687285113482, 'RS Harapan Keluarga', 'red'),
(11, -8.603877650976377, 116.11352388429225, 'RS Biomedika', 'red'),
(12, -8.561997223037627, 116.1125989005121, 'RS Metro Medika', 'red'),
(13, -8.606397830572252, 116.13204570646643, 'RSUD Provinsi', 'red'),
(14, -8.599105456502096, 116.11404455923004, 'RS Umum Daerah Mataram', 'red'),
(15, -8.583115391658659, 116.10546646324116, 'Puskesmas Mataram', 'blue'),
(16, -8.567647504668098, 116.0930887495358, 'Puskesmas Pejeruk', 'blue'),
(17, -8.57880336891152, 116.09430213802104, 'Puskesmas Dasan Agung', 'blue'),
(18, -8.594243089404841, 116.10065718705604, 'Puskesmas Pagesangan', 'blue'),
(19, -8.577800465483875, 116.12586542298055, 'Puskesmas Karang Taliwang', 'blue'),
(20, -8.601491189911103, 116.13600203908881, 'Puskesmas Dasan Cermen', 'blue'),
(21, -8.564524538865555, 116.12226338940013, 'Puskesmas Selaparang', 'blue'),
(22, -8.580927107856098, 116.1427801627113, 'Puskesmas Cakranegara Pustu Selagalas', 'blue'),
(23, -8.596210821039149, 116.13596155679873, 'Puskesmas Babakan', 'blue'),
(24, -8.590668715071928, 116.1011613794521, 'Puskesmas Pegesangan', 'blue'),
(25, -8.592069096558308, 116.1477176704014, 'Puskesmas Cakranegara', 'blue'),
(26, -8.598290197131842, 116.08432987952409, 'Puskesmas Perawatan Tanjung Karang', 'blue'),
(27, -8.596219201509802, 116.12456964553878, 'Puskesmas Pembantu Cakra Barat', 'blue'),
(28, -8.55964159133816, 116.1113849528756, 'Puskesmas Pembantu Rembige', 'blue'),
(29, -8.611676219270732, 116.09937128197559, 'Puskesmas Karang Pule', 'blue'),
(30, -8.568719172287071, 116.07667427681946, 'Puskesmas Perawatan Ampenan', 'blue'),
(31, -8.604192902966378, 116.14361733026352, 'Puskesmas Pembantu Turida', 'blue'),
(32, -8.593760934342587, 116.14539564560488, 'Puskesmas Cakraselatan', 'blue'),
(33, -8.579701467714079, 116.09522857245445, 'Klinik Kuret Mataram (dr. Angela)', 'green'),
(34, -8.583115391658659, 116.11324281188887, 'Klinik Risa Husada', 'green'),
(35, -8.577171604070509, 116.11702053357368, 'Klinik Glora', 'green'),
(36, -8.577171604070509, 116.11702053357368, 'Klinik Mitra Medistra', 'green'),
(37, -8.583939731080878, 116.12946250446667, 'Klinik Pratama Jaya Medika', 'green'),
(38, -8.577737237705048, 116.11696473999103, 'Klinik Gora', 'green'),
(39, -8.596349565618524, 116.11328377927397, 'Klinik Mitra Husada Lombok', 'green'),
(40, -8.59353082059737, 116.10103758192484, 'Klinik Onecare', 'green'),
(41, -8.590158399791756, 116.12720794976573, 'Klinik Nugraha', 'green'),
(42, -8.580897214863834, 116.11931687142, 'Klinik Pratama Arta Medika', 'green'),
(43, -8.586791244928762, 116.08561767439238, 'Klinik Kuret Mataram (dr. Siska)', 'green'),
(44, -8.583171825302843, 116.10270225965377, 'Klinik Kuret Mataram (dr. Isna)', 'green'),
(45, -8.583477333266494, 116.09273686162415, 'Klinik Unram', 'green'),
(46, -8.594251091157448, 116.10949032168384, 'Klinik Sriwijaya', 'green'),
(47, -8.59662171318398, 116.08514094398403, 'Klinik Asy-syifa', 'green'),
(48, -8.588119303578772, 116.11750696613484, 'Klinik Caturwarga', 'green'),
(49, -8.587722541147842, 116.10059217597154, 'Tirta Medical Center Mataram', 'green'),
(50, -8.589052853717138, 116.11961044229353, 'Klinik Nayaka Husada Mataram', 'green'),
(51, -8.583973572394386, 116.10719116565602, 'Klinik Kamboja', 'green'),
(52, -8.579167541056334, 116.10836963386282, 'Quantum Sarana Medika', 'green'),
(53, -8.572733140306322, 116.10857862007417, 'Klinik Kuret Matarm (dr. Felina)', 'green');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
