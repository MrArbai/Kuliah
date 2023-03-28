-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2023 at 07:10 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `kode_prsh` int(10) NOT NULL,
  `nama_prsh` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`kode_prsh`, `nama_prsh`, `alamat`, `email`, `telepon`) VALUES
(1, 'Amerada Hess Indonesia Lematang Ltd', 'Suite 113D, 113 Floor, Sentral Senayan 1, Jl Asia Afrika 8, Jakarta 10270', 'Amerada@Amerada.com', '00 62 21 572 5744'),
(2, 'BP Amoco', 'Summitmas 11, 18th Floor, JI. Jenderal Sudirman Kav.62, Jakarta 12069', 'BPAmoco@BPAmoco.com', '00 62 21 252 6854'),
(3, 'ExxonMobil Oil Indonesia, Inc', 'Wisma GKBI 27th –31st Floor, Jln Jend Sudirman No. 28, Jakarta 10210', 'ExxonMobil@gmail.com', '00 62 21 574 0707'),
(4, 'LASMO Oil', '12/F Landmark Centre, Jalan Jend Sudirman Kav 70A, Jakarta', 'LASMOOil@gmail.com', '00 62 21 571 0801');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`kode_prsh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `kode_prsh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
