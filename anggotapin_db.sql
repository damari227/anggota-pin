-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 04:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anggotapin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) NOT NULL,
  `fotoktp` varchar(100) DEFAULT NULL,
  `nama_depan` varchar(20) DEFAULT NULL,
  `nama_blkg` varchar(40) NOT NULL,
  `noktp` int(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `no_telp` varchar(11) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_pin` varchar(10) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `kata_sandi` varchar(30) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `fotoktp`, `nama_depan`, `nama_blkg`, `noktp`, `prov`, `kota`, `kec`, `des`, `rw`, `rt`, `no_telp`, `fb`, `twitter`, `ig`, `email`, `no_pin`, `status`, `kata_sandi`, `level`, `created_at`, `updated_at`) VALUES
(18, '5f35ed8958944.jpg', 'baju', '', 342141, 'DKI JAKARTA', 'KOTA JAKARTA SELATAN', 'panongan', 'panongan', '03', '01', '0888888', 'damari', '@damari', '@damari', 'gaming29zacky@gmail.com', 'PIN1', 'Menunggu', 'za', 'Admin', '2020-08-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(19, '5f35ef4ba496f.jpg', 'zacky', '', 342141, 'DI YOGYAKARTA', 'KABUPATEN BANTUL', 'panongan', 'panongan', '03', '01', '0888888', 'damari', 'mutas-im', '@damari', 'gaming29zacky@gmail.com', 'PIN2', 'Menunggu', 'fafa', 'Anggota', '2020-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(20, 'public/img/AqHQNO1MX1w2EBUcL41FKucYiCjeiBvrlpnm7uwV.jpeg', 'aaa', 'ddd', 9898989, 'Provinsi..', 'Kota/kabupaten...', 'Kecamatan...', 'Desa/kelurahan...', '03', '01', '098795', 'mutasim_fb', 'aaa', '@damari', 'gaming29zacky@gmail.commm', NULL, NULL, 'vv', 'Anggota', '2020-08-18 23:57:49.000000', '2020-08-18 23:57:49.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
