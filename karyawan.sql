-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 04:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `Karyawan` (
  `No` int(50) NOT NULL AUTO_INCREMENT,
  `NIK` varchar(255) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Gaji` int(255) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`No`, `NIK`, `Nama`, `Alamat`, `Jabatan`, `Gaji`) VALUES
(1, '22201050', 'Panji Tri Wahyudi', 'Kavling Kendedes', 'CEO', 500000000),
(2, '22201051', 'Kenan Ars', 'Jl. Singapore', 'Chief Business Operation Manager', 30000000),
(3, '22201052', 'Jojo Ornando', 'Jl. Malboro', 'Chief Sales Manager', 45000000),
(4, '22201053', 'Ling Yue', 'Jl. Chinatown', 'Branch Manager', 10000000),
(5, '22201054', 'ALbert Noa', 'Jl. Soraya', 'Chief Logistic Manager', 30000000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
