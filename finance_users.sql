-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `namaDepan` varchar(50) NOT NULL,
  `namaTengah` varchar(50) NOT NULL,
  `namaBelakang` varchar(50) NOT NULL,
  `tempatLahir` varchar(50) NOT NULL,
  `tglLahir` date NOT NULL,
  `nik` char(16) NOT NULL,
  `wargaNegara` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kodePos` char(5) NOT NULL,
  `fotoProfil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tglLahir`, `nik`, `wargaNegara`, `email`, `noHp`, `username`, `password`, `alamat`, `kodePos`, `fotoProfil`) VALUES
('Seok', 'Jin', 'Kim', 'Korea', '2022-04-01', '1234567812341234', 'Kore', 'Jin@gmail.com', '087812341324', 'jiniejin', '12341234', 'asdasdad', '12345', 'seokjin 1.jpg'),
('Ji', 'Eun', 'Lee', 'Seoul', '2022-04-01', '7890123445671234', 'Korea', 'Jieun@gmail.com', '087812364328', 'Jieuni', 'solo1234', 'Seoul, Korea Selatan', '12338', 'IU 1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
