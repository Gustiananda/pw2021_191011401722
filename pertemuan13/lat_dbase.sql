-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 13 Mei 2022 pada 19.01
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lat_dbase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `mhsID` int(9) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Job_date` date NOT NULL,
  `Age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`mhsID`, `FirstName`, `LastName`, `Job_date`, `Age`) VALUES
(0, '', '', '0000-00-00', 0),
(1, 'Gusti', 'ananda', '2022-05-11', 22),
(2, 'ananda', 'gusti', '2022-05-11', 21),
(3, 'firdaus', 'gusti', '2022-05-10', 20),
(4, 'ananda', 'firdaus', '2022-05-12', 22),
(5, 'gusti ananda', 'firdaus', '2022-05-01', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbnilai`
--

CREATE TABLE `tbnilai` (
  `nim` varchar(9) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `matakuliah` varchar(20) NOT NULL,
  `uts` float(5,2) NOT NULL,
  `uas` float(5,2) NOT NULL,
  `tugas` float(5,2) NOT NULL,
  `jmlhadir` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbnilai`
--

INSERT INTO `tbnilai` (`nim`, `nama_mhs`, `matakuliah`, `uts`, `uas`, `tugas`, `jmlhadir`) VALUES
('', 'rere', 'pemro web 2', 85.00, 85.00, 85.00, 14),
('111', 'gusti ananda', 'pemro web 2', 85.00, 90.00, 90.00, 14),
('112', 'muhammad farhan', 'pemro web 2', 90.00, 85.00, 80.00, 14),
('113', 'rio yoga', 'pemro web 2', 75.00, 82.00, 78.00, 14),
('114', 'azriel hermansyah', 'pemro web 2', 90.00, 75.00, 75.00, 14),
('115', 'aji nur', 'pemro web 2', 86.00, 80.00, 80.00, 14),
('116', 'asdsa', 'sadsa', 99.00, 89.00, 80.00, 0),
('117', 'riri', 'pemrograman web 2', 90.00, 80.00, 75.00, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`mhsID`);

--
-- Indexes for table `tbnilai`
--
ALTER TABLE `tbnilai`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
