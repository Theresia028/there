-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `there`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_028`
--

CREATE TABLE `tbl_028` (
  `id_mhs` int(15) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `nim_mhs` varchar(30) NOT NULL,
  `alamat_mhs` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_028`
--

INSERT INTO `tbl_028` (`id_mhs`, `nama_mhs`, `nim_mhs`, `alamat_mhs`) VALUES
(12, 'Irsyad', '200411100210', 'Bandung'),
(13, 'Theresia', '200411100211', 'Jakarta'),
(14, 'Fabian', '20041110013', 'Malang'),
(15, 'Wahyudi', '20041110018', 'Magelang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_028`
--
ALTER TABLE `tbl_028`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_028`
--
ALTER TABLE `tbl_028`
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
