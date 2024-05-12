-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 06:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `id_banner` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `nama`, `path`) VALUES
(19, 'Banner 1', '../assets/img/hero/Banner 1.png'),
(20, 'Banner 2', '../assets/img/hero/Banner 2.png'),
(21, 'Banner 3', '../assets/img/hero/Banner 3.png'),
(22, 'Banner 4', '../assets/img/hero/Banner 4.png'),
(23, 'Banner 5', '../assets/img/hero/Banner 5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sambutan`
--

CREATE TABLE `tbl_sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `foto_kepsek` varchar(100) NOT NULL,
  `nama_kepsek` varchar(100) NOT NULL,
  `sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_sambutan`
--

INSERT INTO `tbl_sambutan` (`id_sambutan`, `foto_kepsek`, `nama_kepsek`, `sambutan`) VALUES
(1, '../assets/img/sambutan/Herdi Supardi, S.E, M.Pd..png', 'Herdi Supardi, S.E, M.Pd.', 'Dengan penuh rasa syukur dan puji kepada Allah SWT, kami dengan bangga mempersembahkan laman resmi SMK Tonjong. Laman ini dibangun dengan tujuan menjadi jembatan informasi bagi para siswa, guru, dan masyarakat yang membutuhkan informasi terkait dengan kegiatan dan berita terbaru dari SMK Tonjong. Kami telah berupaya untuk meningkatkan kualitas tampilan dan tata letak laman ini agar lebih mudah diakses oleh pengguna yang mencari informasi tentang berita sekolah, prestasi siswa, video kegiatan, pendaftaran siswa baru, dan informasi akademik lainnya. Kami mengucapkan terima kasih kepada semua pihak yang telah memberikan kontribusi dan bantuan dalam pembuatan laman ini sehingga dapat disajikan kepada Anda. Terima kasih banyak atas dukungan dan partisipasinya.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
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
  `id` int(11) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `berita` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `thumbnail`, `judul`, `berita`, `waktu`) VALUES
(4, '../assets/img/berita/coba.png', 'coba', 'coba aja', '2024-05-11 14:37:42'),
(5, '../assets/img/berita/tes2.png', 'tes2', 'testes', '2024-05-11 14:38:19'),
(6, '../assets/img/berita/testes.png', 'testes', 'testes', '2024-05-11 14:40:22'),
(9, '../assets/img/berita/Viral Bocah SD di Jambi Setinggi 2 Meter, Sering Gonta-ganti Seragam.png', 'Viral Bocah SD di Jambi Setinggi 2 Meter, Sering Gonta-ganti Seragam', 'Berbagai macam informasi terkait sekolah, siswa, guru, dan wali murid dapat ditampilkan dan diumumkan dengan mudah melalui website sekolah.Informasi sekolah seperti sejarah, visi misi, pengurus, lambang, dan masih banyak lagi. |\n\nSelain informasi sekolah, melalui website juga dapat membagikan informasi untuk siswa, guru, dan wali murid.\n\nMisalnya informasi kalender pendidikan untuk siswa, informasi yang berkaitan dengan guru, hingga informasi perkembangan sekolah yang ditujukan untuk wali murid.\n...\nDengan memberikan informasi apa saja melalui website sekolah, informasi dapat disebarluaskan dengan mudah, cepat, dan efektif.\n\nWebsite sekolah juga bisa dimanfaatkan sebagai media promosi demi ksejahteraan sekolah.\n\nBiasanya promosi yang ditampilkan pada website sekolah berupa prestasi sekolah itu sendiri dan prestasi yang didapatkan oleh murid.\n\nPrestasi sekolah misalnya mendapatkan penghargaan Sekolah Adiwiyata, Sekolah Rujukan, dan sebagainya.\n\nSedangkan prestasi yang didapatkan oleh murid seperti kejuaraan baik tingkat nasional hingga internasional dan juga dapat menampilkan peringkat paralel di setiap kelas.', '2024-05-11 16:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  `deskripsi` varchar(128) NOT NULL DEFAULT 'Dokumentasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `path`, `deskripsi`) VALUES
(2, '../assets/img/galeri/asdawdas.png', 'asdawdas'),
(3, '../assets/img/galeri/asd.png', 'asd'),
(6, '../assets/img/galeri/tes.png', 'tes'),
(7, '../assets/img/galeri/testes.png', 'testes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

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
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
