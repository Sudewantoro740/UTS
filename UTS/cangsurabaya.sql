-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 03:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cangsurabaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `sugestion`
--

CREATE TABLE `sugestion` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `nama_tempat` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sugestion`
--

INSERT INTO `sugestion` (`id`, `nama_pengguna`, `nama_tempat`, `lokasi`, `alamat`) VALUES
(1, 'alo', 'Angops', 'surabaya timur', 'Jl. Raya Medokan Sawah No.I, Gunung anyar, Kec. Gn. Anyar, Kota SBY, Jawa Timur 60294'),
(2, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sugestion`
--
ALTER TABLE `sugestion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sugestion`
--
ALTER TABLE `sugestion`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
