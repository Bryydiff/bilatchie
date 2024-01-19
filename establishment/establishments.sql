-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 05:57 AM
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
-- Database: `establishment`
--

-- --------------------------------------------------------

--
-- Table structure for table `establishments`
--

CREATE TABLE `establishments` (
  `id` int(11) NOT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `proprietor` varchar(255) DEFAULT NULL,
  `purok` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `establishmentName` varchar(255) DEFAULT NULL,
  `nationalID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `establishments`
--

INSERT INTO `establishments` (`id`, `barangay`, `proprietor`, `purok`, `address`, `establishmentName`, `nationalID`) VALUES
(12, 'Sto. Thomas', 'lida', '4', '1 Caliwag, Pinagbuhatan, Pasig City', 'shabu shabu', '11'),
(13, 'Sto. Thomas', 'lida', '4', '1 Caliwag, Pinagbuhatan, Pasig City', 'shabu shabu', '11'),
(14, 'Sto. Thomas', 'lida', '4', '1 Caliwag, Pinagbuhatan, Pasig City', 'shabu shabu', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `establishments`
--
ALTER TABLE `establishments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `establishments`
--
ALTER TABLE `establishments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
