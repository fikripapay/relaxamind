-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2024 pada 15.06
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
-- Database: `smktonjong`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `nama`, `path`) VALUES
(25, 'tes', '../assets/img/hero/tes.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dataps`
--

CREATE TABLE `tbl_dataps` (
  `id_dataps` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_dataps`
--

INSERT INTO `tbl_dataps` (`id_dataps`, `nama`, `jenis_kelamin`, `pendidikan`, `jabatan`, `deskripsi`) VALUES
(4, 'papay', 'Laki-laki', 'S1', 'Tech Lead', 'Nothing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sambutan`
--

CREATE TABLE `tbl_sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `foto_kepsek` varchar(100) NOT NULL,
  `nama_kepsek` varchar(100) NOT NULL,
  `sambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_sambutan`
--

INSERT INTO `tbl_sambutan` (`id_sambutan`, `foto_kepsek`, `nama_kepsek`, `sambutan`) VALUES
(1, '../assets/img/Herdi Supardi, S.E, M.Pd..png', 'Herdi Supardi, S.E, M.Pd.', 'Dengan penuh rasa syukur dan puji kepada Allah SWT, kami dengan bangga mempersembahkan laman resmi SMK Tonjong. Laman ini dibangun dengan tujuan menjadi jembatan informasi bagi para siswa, guru, dan masyarakat yang membutuhkan informasi terkait dengan kegiatan dan berita terbaru dari SMK Tonjong. Kami telah berupaya untuk meningkatkan kualitas tampilan dan tata letak laman ini agar lebih mudah diakses oleh pengguna yang mencari informasi tentang berita sekolah, prestasi siswa, video kegiatan, pendaftaran siswa baru, dan informasi akademik lainnya. Kami mengucapkan terima kasih kepada semua pihak yang telah memberikan kontribusi dan bantuan dalam pembuatan laman ini sehingga dapat disajikan kepada Anda. Terima kasih banyak atas dukungan dan partisipasinya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'b57cc8b88cab17ad74ed177f964f4567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `berita` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `thumbnail`, `judul`, `berita`, `waktu`) VALUES
(4, '../assets/img/berita/coba.png', 'coba', 'coba aja', '2024-05-11 14:37:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  `deskripsi` varchar(128) NOT NULL DEFAULT 'Dokumentasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_galeri`
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
-- Indeks untuk tabel `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `tbl_dataps`
--
ALTER TABLE `tbl_dataps`
  ADD PRIMARY KEY (`id_dataps`);

--
-- Indeks untuk tabel `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_dataps`
--
ALTER TABLE `tbl_dataps`
  MODIFY `id_dataps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  MODIFY `id_sambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
