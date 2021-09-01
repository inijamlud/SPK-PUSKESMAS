-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 03:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `c1`
--

CREATE TABLE `c1` (
  `id_c1` int(11) NOT NULL,
  `pilihan_c1` varchar(255) NOT NULL,
  `bobot_c1` double NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c1`
--

INSERT INTO `c1` (`id_c1`, `pilihan_c1`, `bobot_c1`, `updated_at`) VALUES
(1, 'Sangat Baik Sekali', 1, '2021-07-28 01:04:38'),
(2, 'Sedang', 0.75, '0000-00-00 00:00:00'),
(3, 'Tidak Baik', 0.4, '2021-07-28 02:37:57'),
(4, 'Sangat Tidak Baik', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `c2`
--

CREATE TABLE `c2` (
  `id_c2` int(11) NOT NULL,
  `pilihan_c2` varchar(255) NOT NULL,
  `bobot_c2` double NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c2`
--

INSERT INTO `c2` (`id_c2`, `pilihan_c2`, `bobot_c2`, `updated_at`) VALUES
(1, 'Sangat Bersih', 1, '2021-07-28 02:58:27'),
(2, 'Bersih', 0.75, '0000-00-00 00:00:00'),
(3, 'Cukup Bersih', 0.25, '0000-00-00 00:00:00'),
(4, 'Sangat Kurang Bersih', 0.5, '2021-07-28 02:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `c3`
--

CREATE TABLE `c3` (
  `id_c3` int(11) NOT NULL,
  `pilihan_c3` varchar(255) NOT NULL,
  `bobot_c3` double NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c3`
--

INSERT INTO `c3` (`id_c3`, `pilihan_c3`, `bobot_c3`, `updated_at`) VALUES
(1, 'Sangat Mumpuni', 1, '0000-00-00 00:00:00'),
(2, 'Sedang', 0.75, '0000-00-00 00:00:00'),
(3, 'Kurang Mumpuni', 0.5, '2021-07-28 02:47:19'),
(4, 'Sangat Kurang Mumpuni', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `c4`
--

CREATE TABLE `c4` (
  `id_c4` int(11) NOT NULL,
  `pilihan_c4` varchar(255) NOT NULL,
  `bobot_c4` double NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c4`
--

INSERT INTO `c4` (`id_c4`, `pilihan_c4`, `bobot_c4`, `updated_at`) VALUES
(1, 'Sangat Layak dan Lengkap', 1, '0000-00-00 00:00:00'),
(2, 'Lengkap', 0.75, '0000-00-00 00:00:00'),
(3, 'Kurang Lengkap', 0.5, '2021-07-28 02:47:40'),
(4, 'Sangat Kurang Layak dan Lengkap', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbkriteria`
--

CREATE TABLE `tbkriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbnilai`
--

CREATE TABLE `tbnilai` (
  `id_nilai` int(11) NOT NULL,
  `id_pus` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `C1` int(11) NOT NULL,
  `C2` int(11) NOT NULL,
  `C3` int(11) NOT NULL,
  `C4` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL DEFAULT '2020-09-02 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbnilai`
--

INSERT INTO `tbnilai` (`id_nilai`, `id_pus`, `created_at`, `C1`, `C2`, `C3`, `C4`, `updated_at`, `deleted_at`) VALUES
(22, 3, '2021-07-28 02:46:05', 3, 2, 3, 2, '2021-07-28 02:46:05', '2020-09-02 00:00:00'),
(23, 2, '2021-07-28 02:46:25', 1, 1, 1, 1, '2021-07-28 02:46:25', '2020-09-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbpuskesmas`
--

CREATE TABLE `tbpuskesmas` (
  `id_puskesmas` int(255) NOT NULL,
  `nama_puskesmas` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL DEFAULT '2020-09-02 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpuskesmas`
--

INSERT INTO `tbpuskesmas` (`id_puskesmas`, `nama_puskesmas`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Puskesmas Maracang', 'Maracang dong pasti Industri Mania', '2021-07-27 04:49:56', '2021-07-28 01:02:21', '2020-09-02 00:00:00'),
(3, 'Puskesmas Munjul', 'Munjul, Purwakarta, Jawa Barat', '2021-07-27 07:47:15', '2021-07-27 07:47:15', '2020-09-02 00:00:00'),
(7, 'Puskesmas Purwakarta', 'Purwakarta, Jawa Barat', '2021-07-27 07:47:15', '2021-07-27 07:47:15', '0000-00-00 00:00:00'),
(8, 'Puskesmas Maniis', 'Maniis, Purwakarta, Jawa Barat', '2021-07-27 07:47:15', '2021-07-27 07:47:15', '0000-00-00 00:00:00'),
(9, 'Puskesmas Bandung Merpati', 'California, Karawang Barat', '2021-07-27 07:47:15', '2021-07-27 07:47:15', '0000-00-00 00:00:00'),
(10, 'Puskesmas Merdeka Siratu', 'Palembang, Boston, AS', '2021-07-27 07:47:15', '2021-07-27 07:47:15', '0000-00-00 00:00:00'),
(11, 'Puskesmas Sehat Selalu', 'Jl. Sehat Hati', '2021-07-27 07:47:15', '2021-07-27 07:47:15', '0000-00-00 00:00:00'),
(12, 'Puskesmas Sehat Bersama', 'Jl. Sehat Hati2', '2021-07-27 07:47:15', '2021-07-27 07:47:15', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`id_c1`);

--
-- Indexes for table `c2`
--
ALTER TABLE `c2`
  ADD PRIMARY KEY (`id_c2`);

--
-- Indexes for table `c3`
--
ALTER TABLE `c3`
  ADD PRIMARY KEY (`id_c3`);

--
-- Indexes for table `c4`
--
ALTER TABLE `c4`
  ADD PRIMARY KEY (`id_c4`);

--
-- Indexes for table `tbkriteria`
--
ALTER TABLE `tbkriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbnilai`
--
ALTER TABLE `tbnilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbpuskesmas`
--
ALTER TABLE `tbpuskesmas`
  ADD PRIMARY KEY (`id_puskesmas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c1`
--
ALTER TABLE `c1`
  MODIFY `id_c1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c2`
--
ALTER TABLE `c2`
  MODIFY `id_c2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `c3`
--
ALTER TABLE `c3`
  MODIFY `id_c3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c4`
--
ALTER TABLE `c4`
  MODIFY `id_c4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbkriteria`
--
ALTER TABLE `tbkriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbnilai`
--
ALTER TABLE `tbnilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbpuskesmas`
--
ALTER TABLE `tbpuskesmas`
  MODIFY `id_puskesmas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
