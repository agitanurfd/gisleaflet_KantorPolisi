-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2024 pada 05.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_leaflet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor_polisi`
--

CREATE TABLE `kantor_polisi` (
  `id` bigint(20) NOT NULL,
  `kantorpolisi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jamoperasional` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kantor_polisi`
--

INSERT INTO `kantor_polisi` (`id`, `kantorpolisi`, `alamat`, `jamoperasional`, `nohp`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(10, 'Polsek Sukajadi', 'Jl. Sukajadi No.141, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', '24 jam', '(022) 2031615', '-6.888254997667114', '107.59658249319865', '2024-01-04 08:43:20', '2024-01-07 08:05:14'),
(11, 'Polsekta Sukasari', 'Jl. Gegerkalong Hilir, Sukarasa, Bandung Barat, Kota Bandung, Jawa Barat 40153', '-', '(022) 2013179', '-6.868577340821791', '107.5827303528786', '2024-01-04 08:45:42', '2024-01-04 08:56:37'),
(12, 'Polsek Cimahi', 'Jl. Encep Kartawiria No.138, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512', '24 jam', '(022) 6634997', '-6.864014463498583', '107.5493274629116', '2024-01-04 08:56:25', '2024-01-04 08:56:25'),
(13, 'Polsek Coblong', 'Jl. Sangkuriang No.11A, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135', '-', '(022) 2502532', '-6.883118330915296', '107.61098608374598', '2024-01-04 10:28:36', '2024-01-04 10:28:36'),
(14, 'Polsek Sukajadi', 'Jl. Sukajadi No.141, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', '24 jam', '(022) 2031615', '-6.881484278277525', '107.57559835910799', '2024-01-04 21:19:16', '2024-01-04 21:19:44'),
(15, 'Polrestabes Bandung', 'Jl. Merdeka No.18-21, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117', '24 jam', '0224238858', '-6.914465118274929', '107.61058141158823', '2024-01-07 08:10:14', '2024-01-07 08:10:14'),
(16, 'Polsek Andir', 'Jl. Saritem No.4, Kb. Jeruk, Kec. Andir, Kota Bandung, Jawa Barat 40181', '-', '0226012062', '-6.916957104101544', '107.59775510519485', '2024-02-01 08:59:51', '2024-02-01 08:59:51'),
(17, 'Polsek Antapani', 'Jl. A.H. Nasution No.10, Antapani Wetan, Kec. Antapani, Kota Bandung, Jawa Barat 40291', '-', '0227208467', '-6.904035202441648', '107.66409262691869', '2024-02-01 09:10:08', '2024-02-01 09:10:08'),
(18, 'Polsek Arcamanik', 'Jl. Cisaranten Kulon No.168, Cisaranten Kulon, Kec. Arcamanik, Kota Bandung, Jawa Barat 40293', '24 jam', '0227805022', '-6.920216221821123', '107.68422749017785', '2024-02-01 09:12:34', '2024-02-01 09:12:34'),
(19, 'Polsek Astana Anyar', 'Jl. Astana Anyar No.340, Nyengseret, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40242', '24 jam', '0225204769', '-6.927700924249894', '107.60033301429307', '2024-02-01 09:17:38', '2024-02-01 09:17:38'),
(20, 'Polsek Kiaracondong', 'Kiaracondong', '24 jam', '948204', '-6.91615991352789', '107.64375440403157', '2024-02-01 23:57:44', '2024-02-01 23:58:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kantor_polisi`
--
ALTER TABLE `kantor_polisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kantor_polisi`
--
ALTER TABLE `kantor_polisi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
