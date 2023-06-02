-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2023 at 07:21 PM
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
-- Database: `learn_web2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `far_ord_ri`
--

CREATE TABLE `far_ord_ri` (
  `no` int(11) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`no`),
  `id_sroom` varchar(50) NOT NULL,
  `trs_type` varchar(50) NOT NULL,
  `month` smallint(6) NOT NULL,
  `no_sp` varchar(50) NOT NULL,
  `id_supp` varchar(50) NOT NULL,
  `part_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `far_ord_ri`
--

INSERT INTO `far_ord_ri` (`no`, `id_sroom`, `trs_type`, `month`, `no_sp`, `id_supp`, `part_code`) VALUES
(1, 'FI', 'ORD', 2, 'JF-11330', 'DR00', 'FO428'),
(2, 'FI', 'ORD', 2, 'JF-11331', 'DR17', 'AS401'),
(3, 'FI', 'ORD', 2, 'JF-11332', 'DR12', 'AS503'),
(4, 'FI', 'ORD', 2, 'JF-11333', 'DR15', 'AS403'),
(5, 'FIi', 'ORD', 3, 'JF-11334', 'DR12', 'AS503'),
(6, 'FIL', 'ORD', 3, 'JF-11335', 'DR19', 'AS509');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hrg_umum`
--

INSERT INTO `hrg_umum` (`kd_hrg`, `descr`, `kelas`, `harga`, `st_aktif`) VALUES
('XC001', 'gula pasir', 'X', '10000.00', 0),
('XC002', 'tahu', 'VII', '100000.00', 0),
('XC003', 'ayam', 'X', '400000.00', 0),
('XO428', 'Paten', 'III', '80000.00', 0),
('XS401', 'Generik', 'VIP', '100000.00', 0),
('XS503', 'Sirup', 'VIP', '200000.00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `far_ord_ri`
--
ALTER TABLE `far_ord_ri`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `hrg_umum`
--
ALTER TABLE `hrg_umum`
  ADD PRIMARY KEY (`kd_hrg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `far_ord_ri`
--
ALTER TABLE `far_ord_ri`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
