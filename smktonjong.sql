-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2024 at 04:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smktonjong`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `nama`, `path`) VALUES
(25, 'tes', '../assets/img/hero/tes.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dataps`
--

CREATE TABLE `tbl_dataps` (
  `id_dataps` int NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(9) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dataps`
--

INSERT INTO `tbl_dataps` (`id_dataps`, `nama`, `jenis_kelamin`, `pendidikan`, `jabatan`, `deskripsi`) VALUES
(5, 'data1', 'Laki-laki', 'data1', 'data1', 'data1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sambutan`
--

CREATE TABLE `tbl_sambutan` (
  `id_sambutan` int NOT NULL,
  `foto_kepsek` varchar(100) NOT NULL,
  `nama_kepsek` varchar(100) NOT NULL,
  `sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sambutan`
--

INSERT INTO `tbl_sambutan` (`id_sambutan`, `foto_kepsek`, `nama_kepsek`, `sambutan`) VALUES
(1, '../assets/img/Herdi Supardi, S.E, M.Pd..png', 'Herdi Supardi, S.E, M.Pd.', 'Dengan penuh rasa syukur dan puji kepada Allah SWT, kami dengan bangga mempersembahkan laman resmi SMK Tonjong. Laman ini dibangun dengan tujuan menjadi jembatan informasi bagi para siswa, guru, dan masyarakat yang membutuhkan informasi terkait dengan kegiatan dan berita terbaru dari SMK Tonjong. Kami telah berupaya untuk meningkatkan kualitas tampilan dan tata letak laman ini agar lebih mudah diakses oleh pengguna yang mencari informasi tentang berita sekolah, prestasi siswa, video kegiatan, pendaftaran siswa baru, dan informasi akademik lainnya. Kami mengucapkan terima kasih kepada semua pihak yang telah memberikan kontribusi dan bantuan dalam pembuatan laman ini sehingga dapat disajikan kepada Anda. Terima kasih banyak atas dukungan dan partisipasinya.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'b57cc8b88cab17ad74ed177f964f4567');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int NOT NULL,
  `thumbnail` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `berita` text COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `thumbnail`, `judul`, `berita`, `waktu`) VALUES
(13, '../assets/img/berita/13.png', 'berita 1', 'berita 1', '2024-06-19 13:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int NOT NULL,
  `path` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(128) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Dokumentasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `path`, `deskripsi`) VALUES
(6, '../assets/img/galeri/Lomba Pencak Silat.png', 'Lomba Pencak Silat'),
(7, '../assets/img/galeri/Turnamen Futsal.png', 'Turnamen Futsal'),
(9, '../assets/img/galeri/Lomba Paskibra.png', 'Lomba Paskibra'),
(11, '../assets/img/galeri/Penampilan Ekstrakurikuler Tari.png', 'Penampilan Ekstrakurikuler Tari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tbl_dataps`
--
ALTER TABLE `tbl_dataps`
  ADD PRIMARY KEY (`id_dataps`);

--
-- Indexes for table `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_dataps`
--
ALTER TABLE `tbl_dataps`
  MODIFY `id_dataps` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  MODIFY `id_sambutan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
