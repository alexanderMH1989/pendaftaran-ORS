-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 06:07 AM
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
-- Database: `ors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_mendeley`
--

CREATE TABLE `data_mendeley` (
  `id_mendeley` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mendeley`
--

INSERT INTO `data_mendeley` (`id_mendeley`, `nim`, `nama`, `jurusan`, `semester`, `gender`, `tanggal`, `email`, `no_wa`) VALUES
(1, '16650012', 'Linda Rohmawati', 'Hukum Tata Negara', '8', 'Perempuan', '2020-03-26', 'lindarohma@gmail.com', '08155556777');

-- --------------------------------------------------------

--
-- Table structure for table `data_pagi`
--

CREATE TABLE `data_pagi` (
  `id_pagi` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pagi`
--

INSERT INTO `data_pagi` (`id_pagi`, `nim`, `nama`, `jurusan`, `semester`, `gender`, `tanggal`, `email`, `no_wa`) VALUES
(1, '16650009', 'farah', 'Biologi', '8', 'Perempuan', '2020-03-03', 'farah@gmail.com', '09876543'),
(2, '16650009', 'farah', 'Psikologi', '8', 'Perempuan', '2020-03-10', 'farah@gmail.com', '09876543');

-- --------------------------------------------------------

--
-- Table structure for table `data_siang`
--

CREATE TABLE `data_siang` (
  `id_siang` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siang`
--

INSERT INTO `data_siang` (`id_siang`, `nim`, `nama`, `jurusan`, `semester`, `gender`, `tanggal`, `email`, `no_wa`) VALUES
(1, '16650009', 'admin', 'Kimia', '8', 'Laki-laki', '2020-03-10', 'farah@gmail.com', '09876543'),
(2, '16650009', 'farah', 'Matematika', '8', 'Perempuan', '2020-03-10', 'eka@gmail.com', '09876543'),
(3, '16650009', 'admin', 'Hukum Tata Negara', '2', 'Perempuan', '2020-03-10', 'eka@gmail.com', '09876543'),
(4, '16650009', 'admin', 'Manajemen', '7', 'Laki-laki', '2020-03-10', 'farah@gmail.com', '09876543');

-- --------------------------------------------------------

--
-- Table structure for table `data_zotero`
--

CREATE TABLE `data_zotero` (
  `id_zotero` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_zotero`
--

INSERT INTO `data_zotero` (`id_zotero`, `nim`, `nama`, `jurusan`, `semester`, `gender`, `tanggal`, `email`, `no_wa`) VALUES
(1, '16650011', 'Eka Puji', 'Teknik Informatika', '8', 'Perempuan', '2020-04-02', 'ekapuji@gmail.com', '08155556777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_mendeley`
--
ALTER TABLE `data_mendeley`
  ADD PRIMARY KEY (`id_mendeley`);

--
-- Indexes for table `data_pagi`
--
ALTER TABLE `data_pagi`
  ADD PRIMARY KEY (`id_pagi`);

--
-- Indexes for table `data_siang`
--
ALTER TABLE `data_siang`
  ADD PRIMARY KEY (`id_siang`);

--
-- Indexes for table `data_zotero`
--
ALTER TABLE `data_zotero`
  ADD PRIMARY KEY (`id_zotero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_mendeley`
--
ALTER TABLE `data_mendeley`
  MODIFY `id_mendeley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pagi`
--
ALTER TABLE `data_pagi`
  MODIFY `id_pagi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_siang`
--
ALTER TABLE `data_siang`
  MODIFY `id_siang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_zotero`
--
ALTER TABLE `data_zotero`
  MODIFY `id_zotero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
