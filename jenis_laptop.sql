-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 08:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang-smk3`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_laptop`
--

CREATE TABLE `jenis_laptop` (
  `id` int(11) NOT NULL,
  `jenis_laptop` varchar(20) NOT NULL,
  `procesor_laptop` varchar(50) NOT NULL,
  `jenis_ram` varchar(50) NOT NULL,
  `jenis_gpu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_laptop`
--

INSERT INTO `jenis_laptop` (`id`, `jenis_laptop`, `procesor_laptop`, `jenis_ram`, `jenis_gpu`) VALUES
(1, 'Acer Chromebook 714', 'A9-9420e', 'DDR4', 'AMD Radeon RX 5700 Series'),
(2, 'Dell Inspiron 11 300', 'A9-9420e', 'DDR4', 'NVIDIA GeForce RTX 206'),
(3, 'ASUS VivoBook A442UQ', 'A314-41-96NQ', 'DDR4', 'AMD Radeon RX 5700 Series'),
(4, 'HP 14z', 'A9-9420e', 'DDR4', 'AMD Radeon RX 5700 Series');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_laptop`
--
ALTER TABLE `jenis_laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_laptop`
--
ALTER TABLE `jenis_laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
