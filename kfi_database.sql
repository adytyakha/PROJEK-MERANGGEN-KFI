-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 04:23 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kfi_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_kfi`
--

CREATE TABLE `admin_kfi` (
  `id_admin` int(11) NOT NULL,
  `namalkp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_kfi`
--

INSERT INTO `admin_kfi` (`id_admin`, `namalkp`, `email`, `password`) VALUES
(2, 'adytya', 'adytyanbg321@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(9, 'didit', 'didit@gmail.com', 'b54158bd2d60aa56125ff181a32fb1d0');

-- --------------------------------------------------------

--
-- Table structure for table `akun_kfi`
--

CREATE TABLE `akun_kfi` (
  `id` int(11) NOT NULL,
  `namalkp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akun_kfi`
--

INSERT INTO `akun_kfi` (`id`, `namalkp`, `email`, `password`) VALUES
(1, 'adytya', 'a@wertty', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(3, 'Hadi Yadi', 'hadi@gmail.com', '76671d4b83f6e6f953ea2dfb75ded921'),
(14, '111', '11@gmail.com', '6512bd43d9caa6e02c990b0a82652dca');

-- --------------------------------------------------------

--
-- Table structure for table `data_kfi`
--

CREATE TABLE `data_kfi` (
  `id_data` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jenisusaha` varchar(50) NOT NULL,
  `sosialmedia` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kotakab` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_kfi`
--

INSERT INTO `data_kfi` (`id_data`, `namalengkap`, `jenisusaha`, `sosialmedia`, `alamat`, `kotakab`, `provinsi`, `hp`) VALUES
(1, 'MAwar', 'air mineral', 'nganu@facebook.com, @downnie, Diewaa', 'Semarang', 'Semarang', 'Jawa Tengah', ''),
(7, 'fifi sholihatun', 'es krim', '@bakuler, Bakulersemarang, #bakul,  ', 'Semarang', 'Semarang', 'Jawa Tengah', '09876543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_kfi`
--
ALTER TABLE `admin_kfi`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `akun_kfi`
--
ALTER TABLE `akun_kfi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kfi`
--
ALTER TABLE `data_kfi`
  ADD PRIMARY KEY (`id_data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_kfi`
--
ALTER TABLE `admin_kfi`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `akun_kfi`
--
ALTER TABLE `akun_kfi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_kfi`
--
ALTER TABLE `data_kfi`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
