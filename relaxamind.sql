-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2025 at 09:49 AM
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
-- Database: `relaxamind`
--

-- --------------------------------------------------------

--
-- Table structure for table `stress_test_results`
--

CREATE TABLE `stress_test_results` (
  `id` int NOT NULL,
  `id_users` int NOT NULL,
  `score` int NOT NULL,
  `stress_level` varchar(50) NOT NULL,
  `test_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stress_test_results`
--

INSERT INTO `stress_test_results` (`id`, `id_users`, `score`, `stress_level`, `test_date`) VALUES
(18, 4, 15, 'Sedang', '2024-12-08 14:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dataps`
--

CREATE TABLE `tbl_dataps` (
  `id_dataps` int NOT NULL,
  `nama` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dataps`
--

INSERT INTO `tbl_dataps` (`id_dataps`, `nama`, `jenis_kelamin`, `pendidikan`, `jabatan`, `deskripsi`) VALUES
(5, 'data1', 'Laki-laki', 'data1', 'data1', 'data1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nama`, `umur`, `jenis_kelamin`, `username`, `password`) VALUES
(4, 'Admin', 1, 'Perempuan', 'admin', '$2y$10$ffeT9tfSoB4N7BQZb1gYLO4IqDmh//s1knEmcO/l.ZVzKHx7GAtPa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stress_test_results`
--
ALTER TABLE `stress_test_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `tbl_dataps`
--
ALTER TABLE `tbl_dataps`
  ADD PRIMARY KEY (`id_dataps`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stress_test_results`
--
ALTER TABLE `stress_test_results`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_dataps`
--
ALTER TABLE `tbl_dataps`
  MODIFY `id_dataps` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stress_test_results`
--
ALTER TABLE `stress_test_results`
  ADD CONSTRAINT `stress_test_results_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `tbl_users` (`id_users`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
