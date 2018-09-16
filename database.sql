-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 03:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsv_anggota`
--

CREATE TABLE IF NOT EXISTS `bsv_anggota` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsv_anggota`
--

INSERT INTO `bsv_anggota` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `bidang`, `alamat`, `no_telepon`, `profil`, `event`) VALUES
('123', 'Sari', 'Malang', '2018-07-05', 'Perempuan', 'Kuliner', 'Batu', '081233723005', 'Kuliner', ''),
('3573032208840006', 'Agustinus Prima Yudi Brata', 'Batu Jatim', '1984-08-22', 'Laki-laki', 'Pertanian', 'Jalan Raya Ngujung 192 B Kota Batu', '082143151769', 'Sudah menekuni bidang pertanian\r\nselama kurang lebih 2 tahun,\r\nsecara khusus tanaman jeruk dan stroberi.', '25 Juli 2018 - Obral bibit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(7, 'David Lucardi', 'm4kr0n1', 'johndavidlucardi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bsv_anggota`
--
ALTER TABLE `bsv_anggota`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
