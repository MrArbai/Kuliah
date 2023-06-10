-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 04:41 PM
-- Server version: 10.4.8-MariaDB
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
-- Database: `learn_web2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `far_ord_ri`
--

CREATE TABLE `far_ord_ri` (
  `no` int(11) NOT NULL,
  `id_sroom` varchar(50) NOT NULL,
  `trs_type` varchar(50) NOT NULL,
  `month` smallint(6) NOT NULL,
  `no_sp` varchar(50) NOT NULL,
  `id_supp` varchar(50) NOT NULL,
  `part_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `far_ord_ri`
--

INSERT INTO `far_ord_ri` (`no`, `id_sroom`, `trs_type`, `month`, `no_sp`, `id_supp`, `part_code`) VALUES
(1, 'FIrt', 'ORD', 2, 'JF-11330', 'DR00erewe', 'FO428'),
(2, 'FI', 'ORD', 2, 'JF-11331', 'DR17', 'AS401'),
(3, 'FI', 'ORD', 2, 'JF-11332', 'DR12', 'AS503'),
(5, 'FIi', 'ORD', 3, 'JF-11334', 'DR12', 'AS503'),
(7, 'asds', 'sds', 3, 'sdsa', 'asds', 'sdas');

-- --------------------------------------------------------

--
-- Table structure for table `hrg_umum`
--

CREATE TABLE `hrg_umum` (
  `kd_hrg` varchar(50) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` decimal(18,2) NOT NULL,
  `st_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hrg_umum`
--

INSERT INTO `hrg_umum` (`kd_hrg`, `descr`, `kelas`, `harga`, `st_aktif`) VALUES
('XC002', 'tahu', 'VII', '100000.00', 0),
('XS503', 'Sirup', 'VIP', '200000.00', 0),
('qwer', 'tahu bulat', 'i', '50000000.00', 0),
('qwer123', 'kelapa', 'II', '50000000.00', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`KODE`, `NAMA_PRSH`, `ALAMAT`, `TLP`, `EMAIL`) VALUES
(1, 'Amerada Hess Indonesia Lematang Ltd', 'Suite 113D, 113 Floor, Sentral Senayan 1, Jl Asia Afrika 8, Jakarta 10270', '00 62 21 572 5744', 'afsaddfsda@Amerada.com'),
(2, 'BP Amoco', 'Summitmas 11, 18th Floor, JI. Jenderal Sudirman Kav.62, Jakarta 12069', '00 62 21 252 6854', 'BPAmoco@BPAmoco.com'),
(3, 'ExxonMobil Oil Indonesia, Inc', 'Wisma GKBI 27th ?31st Floor, Jln Jend Sudirman No. 28, Jakarta 10210', '00 62 21 12345678', 'ExxonMobil@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `far_ord_ri`
--
ALTER TABLE `far_ord_ri`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `far_ord_ri`
--
ALTER TABLE `far_ord_ri`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
