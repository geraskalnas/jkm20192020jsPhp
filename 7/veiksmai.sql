-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2019 at 08:08 AM
-- Server version: 5.7.24-27-log
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PG4339LA`
--

-- --------------------------------------------------------

--
-- Table structure for table `veiksmai`
--

CREATE TABLE `veiksmai` (
  `atsakymas` int(11) NOT NULL,
  `rezultatas` float NOT NULL,
  `veiksmas` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `veiksmai`
--

INSERT INTO `veiksmai` (`atsakymas`, `rezultatas`, `veiksmas`) VALUES
(1, 56, '+'),
(2, 48, '*'),
(3, 48, '*'),
(4, 50, '-'),
(5, 54, '*'),
(6, 2116, '*'),
(7, 4, '+'),
(8, 54, '*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `veiksmai`
--
ALTER TABLE `veiksmai`
  ADD PRIMARY KEY (`atsakymas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `veiksmai`
--
ALTER TABLE `veiksmai`
  MODIFY `atsakymas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
