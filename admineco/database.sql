-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2018 at 05:53 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsv_anggota`
--

DROP TABLE IF EXISTS `bsv_anggota`;
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
  `event` varchar(255) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsv_anggota`
--

INSERT INTO `bsv_anggota` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `bidang`, `alamat`, `no_telepon`, `profil`, `event`) VALUES
('3573032208840006', 'Agustinus Prima Yudi Brata', 'Batu', '1984-08-22', 'Laki-laki', 'Pertanian', 'Jalan Raya Ngujung No. 192 B\r\nDesa PandanRejo Kecamatan Bumiaji\r\nKota Batu', '082143151769', 'Sudah menekuni bidang pertanian\r\nselama kurang lebih 2 tahun,\r\nsecara khusus tanaman jeruk dan stroberi.', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
