-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2022 at 12:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_core`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_example`
--

CREATE TABLE `tb_example` (
  `id` int(11) NOT NULL,
  `example` varchar(255) NOT NULL,
  `delete_at` int(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_example`
--

INSERT INTO `tb_example` (`id`, `example`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, '1', 1, '2022-07-24 15:47:54', '2022-07-30 15:39:43'),
(2, '3', 1, '2022-07-24 15:47:54', '2022-07-30 15:39:47'),
(3, 'example 3 edit', 1, '2022-07-24 15:58:05', '2022-07-30 15:39:53'),
(4, 'Penrekrutan', 1, '2022-07-24 16:27:47', '2022-07-30 14:02:59'),
(5, 'tes 1', 1, '2022-07-30 13:58:04', '2022-07-30 14:02:55'),
(6, 'example 4 edit', 1, '2022-07-30 14:03:09', '2022-07-30 15:39:56'),
(7, 'example 5 edit', 1, '2022-07-30 14:08:02', '2022-07-30 15:40:01'),
(8, 'test', 1, '2022-07-30 15:26:43', '2022-07-30 15:40:05'),
(9, 'tes 2', 1, '2022-07-30 15:27:20', '2022-08-09 09:58:03'),
(10, '4', 0, '2022-07-30 15:34:03', '2022-07-30 15:34:03'),
(11, '5', 0, '2022-07-30 15:34:27', '2022-07-30 15:34:27'),
(12, '6', 0, '2022-07-30 15:35:14', '2022-07-30 15:35:14'),
(13, 'tes', 0, '2022-08-09 09:57:40', '2022-08-09 09:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_group`
--

CREATE TABLE `tb_group` (
  `id` int(11) NOT NULL,
  `nama_group` varchar(255) NOT NULL,
  `delete_at` int(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_group`
--

INSERT INTO `tb_group` (`id`, `nama_group`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 0, '2022-07-24 13:55:23', '2022-07-24 13:55:23'),
(2, 'Admin', 0, '2022-07-24 13:55:23', '2022-07-24 13:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `hash_user` varchar(100) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `delete_at` int(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `id_group`, `hash_user`, `nama_lengkap`, `no_telepon`, `alamat`, `foto`, `email`, `password`, `delete_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'JHB89sjh288', 'Super Admin', '081234567890', 'Jl Raya Inkopad Blok O-5 No.9, Sasak Panjang. Tajurhalang, Bogor Kode Pos 16320', '', 'superadmin@demo.com', '17c4520f6cfd1ab53d8745e84681eb49', 0, '2022-07-24 13:56:31', '2022-07-24 13:56:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_example`
--
ALTER TABLE `tb_example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_group`
--
ALTER TABLE `tb_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_example`
--
ALTER TABLE `tb_example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
