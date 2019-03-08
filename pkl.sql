-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 03:11 AM
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
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `nama`, `email`, `nohp`) VALUES
(1, 'adminonly', 'Admin 1', 'admin1@gmail.com', '08514796325');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` char(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `password`, `nama`, `email`, `nohp`) VALUES
('123456789098765', '123', 'dosen q', 'dosen@gmail.com', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(11) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `password`, `nama`, `email`, `nohp`) VALUES
('12345678901', '1', 'Yusuf jancuk', 'cok@cok.cok', '1'),
('12345678909', '123', 'Dani danc', 'dani@gmail.com', '2147483647'),
('22222222222', '1', 'bangsat', 'bangsat@bangsat.bangsat', '1'),
('33333333333', '3', '3', '3@3', '3'),
('44444444444', '4', '4', '4@4', '4'),
('55555555555', '5', '5', '5@5.com', '5'),
('66666666666', '6', '6', '6@6.co.id', '6');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuanberhasil`
--

CREATE TABLE `pengajuanberhasil` (
  `id` int(11) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuanpkl`
--

CREATE TABLE `pengajuanpkl` (
  `id` int(11) NOT NULL,
  `npm` char(11) DEFAULT NULL,
  `perusahaan` int(11) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `dosen` char(30) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tglpengajuan` timestamp NULL DEFAULT NULL,
  `tglaccadmin` timestamp NULL DEFAULT NULL,
  `tglaccdosen` timestamp NULL DEFAULT NULL,
  `tglaccperusahaan` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuanpkl`
--

INSERT INTO `pengajuanpkl` (`id`, `npm`, `perusahaan`, `admin`, `dosen`, `status`, `tglpengajuan`, `tglaccadmin`, `tglaccdosen`, `tglaccperusahaan`) VALUES
(1, '55555555555', 11111, 1, '123456789098765', 4, '2019-03-07 16:27:34', '2019-03-08 01:45:38', '2019-03-08 02:06:50', '2019-03-08 02:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `fax` varchar(12) NOT NULL,
  `jmlmhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `password`, `nama`, `email`, `nohp`, `fax`, `jmlmhs`) VALUES
(11111, '123', 'PT. Eka Manju', 'ekamaju@gmail.com', '98098', '123456', 0),
(22222, '123', 'PT. Ajinomoto', 'ajinomoto@gmail.com', '98765', '123456', 0),
(33333, '123', 'PT. Elang Sakti', 'elangsakti@gmail.com', '98754', '123456', 0),
(44444, '123', 'PT. Jaya Sakti', 'jayasakti@gmail.com', '42367', '123456', 0),
(55555, '123', 'PT. Maju tak Gentar', 'majutakgentar@gmail.com', '257432', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `pengajuanpkl`
--
ALTER TABLE `pengajuanpkl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuanpkl`
--
ALTER TABLE `pengajuanpkl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
