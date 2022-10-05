-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 06:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koni`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabor`
--

CREATE TABLE `cabor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabor`
--

INSERT INTO `cabor` (`id`, `nama`, `create_at`) VALUES
(1, 'Judo\r\n', '2022-10-04 06:17:12'),
(2, 'Taekwondo', '2022-10-04 06:17:12'),
(3, 'Bola Basket 5x5', '2022-10-04 06:17:12'),
(4, 'Bola Basket 3x3', '2022-10-04 06:17:12'),
(5, 'Renang', '2022-10-04 06:17:12'),
(6, 'Woodball', '2022-10-04 06:17:12'),
(7, 'Softball', '2022-10-04 06:17:12'),
(8, 'Rugby', '2022-10-04 06:17:12'),
(9, 'Cricket', '2022-10-04 06:17:12'),
(10, 'Beach Soccer', '2022-10-04 06:17:12'),
(11, 'Sepak Bola', '2022-10-04 06:17:12'),
(12, 'Xiangqi', '2022-10-04 06:17:12'),
(13, 'Sepak Takraw', '2022-10-04 06:17:12'),
(14, 'Selam Kolam', '2022-10-04 06:17:12'),
(15, 'Selam Laut', '2022-10-04 06:17:12'),
(16, 'Tenis Lapangan', '2022-10-04 06:17:12'),
(17, 'Atletik', '2022-10-04 06:17:12'),
(18, 'Senam', '2022-10-04 06:17:12'),
(19, 'Kabaddi', '2022-10-04 06:17:12'),
(20, 'Bulu Tangkis', '2022-10-04 06:17:12'),
(21, 'Pencak Silat', '2022-10-04 06:17:12'),
(22, 'Tinju', '2022-10-04 06:17:12'),
(23, 'Futsal', '2022-10-04 06:17:12'),
(24, 'Menembak', '2022-10-04 06:17:12'),
(25, 'Bola Voli Pasir', '2022-10-04 06:17:12'),
(26, 'Gateball', '2022-10-04 06:17:12'),
(27, 'Panahan', '2022-10-04 06:17:12'),
(28, 'Biliard', '2022-10-04 06:17:12'),
(29, 'Muay Thai', '2022-10-04 06:17:12'),
(30, 'Tenis Meja', '2022-10-04 06:17:12'),
(31, 'Kempo', '2022-10-04 06:17:12'),
(32, 'Tarung Derajat', '2022-10-04 06:17:12'),
(33, 'Yong Modoo', '2022-10-04 06:17:12'),
(34, 'Balap Motor Road Race', '2022-10-04 06:17:12'),
(35, 'Wushu', '2022-10-04 06:17:12'),
(36, 'Binaraga', '2022-10-04 06:17:12'),
(37, 'Angkat Besi', '2022-10-04 06:17:12'),
(38, 'Angkat Berat', '2022-10-04 06:17:12'),
(39, 'Karate', '2022-10-04 06:17:12'),
(40, 'Catur', '2022-10-04 06:17:12'),
(41, 'Bridge', '2022-10-04 06:17:12'),
(42, 'Panjat Tebing', '2022-10-04 06:17:12'),
(43, 'Balap Sepeda MTB', '2022-10-04 06:17:12'),
(44, 'Balap Sepeda BMX', '2022-10-04 06:17:12'),
(45, 'Balap Sepeda Criterium', '2022-10-04 06:17:12'),
(46, 'Balap Sepeda Road Race', '2022-10-04 06:17:12'),
(47, 'Dansa', '2022-10-04 06:17:12'),
(48, 'Bola Voli Indoor', '2022-10-04 06:17:12'),
(49, 'Petanque', '2022-10-04 06:17:12'),
(50, 'Balap Motor Motorcros', '2022-10-04 06:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `ket_cabor`
--

CREATE TABLE `ket_cabor` (
  `id` int(11) NOT NULL,
  `id_cabor` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medali`
--

CREATE TABLE `medali` (
  `id` int(11) NOT NULL,
  `id_kompetisi` int(11) NOT NULL,
  `id_cabor` int(11) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jml_emas` int(11) NOT NULL,
  `jml_perak` int(11) NOT NULL,
  `jml_perunggu` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_by` varchar(100) NOT NULL,
  `update_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medali`
--

INSERT INTO `medali` (`id`, `id_kompetisi`, `id_cabor`, `tahun`, `jml_emas`, `jml_perak`, `jml_perunggu`, `create_at`, `update_at`, `create_by`, `update_by`) VALUES
(2, 1, 2, 2020, 2, 0, 0, '2022-10-05 11:21:19', '2022-10-05 03:21:19', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `filepath` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role`, `filepath`, `create_at`) VALUES
(1, 'admin', 'admin', 'admin', 1, '', '2022-10-05 03:59:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabor`
--
ALTER TABLE `cabor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ket_cabor`
--
ALTER TABLE `ket_cabor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medali`
--
ALTER TABLE `medali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabor`
--
ALTER TABLE `cabor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `ket_cabor`
--
ALTER TABLE `ket_cabor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medali`
--
ALTER TABLE `medali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
