-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 04:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_pasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `pass`) VALUES
(1, 'Akbar Ginanjar', 'akbar', 'akbar'),
(2, 'aa', 'aa', 'aa'),
(7, 'Devin Ferdynand', 'devin', 'asu'),
(8, 'Rio Fadli', 'rio', 'rio'),
(9, 'Bayu Prima Yuda', 'bayu', 'aa'),
(10, 'Redi Nurahmat', 'redi', 'redi'),
(11, 'Riki Gusti Fernanda', 'riki', 'riki'),
(12, 'Yoga Novrian Gandara Putra', 'yoga', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `no_antrian` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `nama_pasien` varchar(60) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `nama_dokter` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(60) NOT NULL,
  `spesialis` varchar(60) NOT NULL,
  `shift` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `shift`) VALUES
(4, 'Pep Guardiola', 'spesialis saraf', ''),
(5, 'Djajang Nurjaman', 'spesialis mata', ''),
(6, 'Jekichan', 'spesialis anak', ''),
(7, 'Dr. Yanto Haryanto', 'spesialis gigi', ''),
(8, 'Dr. Andi Junaedi', 'spesialis bedah', '');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(60) NOT NULL,
  `umur` int(11) NOT NULL,
  `jenis_kelamin` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_telp` varchar(60) NOT NULL,
  `keluhan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `umur`, `jenis_kelamin`, `alamat`, `no_telp`, `keluhan`) VALUES
(4, 'Agus', 20, 'laki-laki', 'Bandung', '083180112238', 'Gatal-gatal'),
(5, 'Doni', 20, 'laki-laki', 'Bandung', '083180112238', 'Demam'),
(7, 'Neymar', 30, 'laki-laki', 'Bandung', '083180112238', 'patah tulang'),
(13, 'Udin', 20, 'laki-laki', 'Bandung', '083180112238', 'Gatal-gatal'),
(14, 'Bima', 20, 'laki-laki', 'Bandung', '083180112238', 'Batuk'),
(15, 'Putri', 30, 'perempuan', 'Cibaduyut', '083180112238', 'Batuk, pilek'),
(16, 'Yono', 20, 'laki-laki', 'Bandung', '083180112238', 'Sakit Gigi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`no_antrian`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `no_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `antrian_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `antrian_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
