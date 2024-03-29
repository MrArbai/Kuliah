-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 09:28 AM
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
  `KODE` int(10) NOT NULL,
  `NAMA_PRSH` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `TLP` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`KODE`, `NAMA_PRSH`, `ALAMAT`, `TLP`, `EMAIL`) VALUES
(3, 'ExxonMobil Oil Indonesia, Inc', 'Wisma GKBI 27th ?31st Floor, Jln Jend Sudirman No. 28, Jakarta 10210', '00 62 21 12345678', 'ExxonMobil@gmail.com'),
(4, 'LASMO Oil', '12/F Landmark Centre, Jalan Jend Sudirman Kav 70A, Jakarta', '00 62 21 571 0801', 'LASMOOil@gmail.com'),
(11, 'Amerada Hess Indonesia Lematang Ltd', 'Suite 113D, 113 Floor, Sentral Senayan 1, Jl Asia Afrika 8, Jakarta 10270', '00 62 21 572 5777', 'Amerada@Amerada.com'),
(12, 'pt sambu', 'rwerwer', 'werwer', 'werwere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`KODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `KODE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
