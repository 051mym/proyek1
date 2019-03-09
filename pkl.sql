-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 07:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
  `id` char(3) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `nama`, `email`, `nohp`) VALUES
('1', '123', 'Admin 1', 'admin1@gmail.com', '08514796325'),
('2', '123', 'Admin 2', 'admin2@gmail.com', '098978675645');

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
('123456789011', '123', 'Dosen1', 'dosen@gmail.com', '12346546351'),
('123456789022', '123', 'Dosen2', 'dosen2@gmail.com', '09876123512');

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
('11111111111', '123', 'mahasiswa1', 'mahasiswa1@gmail.com', '089532456744'),
('22222222222', '123', 'mahasiswa2', 'mahasiswa2@gmail.com', '089765243541'),
('33333333333', '123', 'mahasiswa2', 'mahasiswa2@gmail.co3', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuanpkl`
--

CREATE TABLE `pengajuanpkl` (
  `id` int(11) NOT NULL,
  `npm` char(11) DEFAULT NULL,
  `perusahaan` char(25) DEFAULT NULL,
  `admin` char(25) DEFAULT NULL,
  `dosen` char(25) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tglpengajuan` timestamp NULL DEFAULT NULL,
  `tglaccadmin` timestamp NULL DEFAULT NULL,
  `tglaccdosen` timestamp NULL DEFAULT NULL,
  `tglaccperusahaan` timestamp NULL DEFAULT NULL,
  `pnama` char(25) NOT NULL,
  `dnama` char(25) NOT NULL,
  `anama` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` char(10) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `fax` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `password`, `nama`, `email`, `nohp`, `fax`) VALUES
('11111', '123', 'PT. Eka Manju', 'ekamaju@gmail.com', '98098', '123456'),
('22222', '123', 'PT. Ajinomoto', 'ajinomoto@gmail.com', '98765', '123456'),
('33333', '123', 'PT. Elang Sakti', 'elangsakti@gmail.com', '98754', '123456'),
('44444', '123', 'PT. Jaya Sakti', 'jayasakti@gmail.com', '42367', '123456'),
('55555', '123', 'PT. Maju tak Gentar', 'majutakgentar@gmail.com', '257432', '123456');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
