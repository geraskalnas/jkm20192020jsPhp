-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2020 at 11:34 AM
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
-- Table structure for table `pazymiai`
--

CREATE TABLE `pazymiai` (
  `id` int(5) NOT NULL,
  `pazymys` int(2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pazymiai`
--

INSERT INTO `pazymiai` (`id`, `pazymys`, `data`) VALUES
(1, 6, '2019-12-11'),
(1, 5, '2019-12-29'),
(1, 10, '2019-12-01'),
(2, 2, '2019-08-12'),
(2, 7, '2019-12-09'),
(5, 8, '2019-12-17'),
(3, 9, '2017-05-01'),
(4, 9, '2019-06-14'),
(4, 9, '2019-12-23'),
(4, 10, '2019-12-29'),
(8, 6, '2019-12-03'),
(7, 1, '2019-12-22'),
(9, 8, '2019-08-19'),
(6, 9, '2019-06-14'),
(6, 10, '2019-04-02'),
(6, 10, '2019-08-10'),
(1, 10, '2019-09-17'),
(8, 8, '2019-12-01'),
(6, 8, '2019-07-05'),
(2, 8, '2019-12-10'),
(2, 9, '2019-07-03'),
(2, 9, '2019-11-14'),
(4, 10, '2019-09-25'),
(5, 10, '2019-12-23'),
(7, 1, '2019-12-13'),
(8, 5, '2019-12-01'),
(8, 10, '2019-04-30'),
(8, 9, '2019-02-25'),
(7, 5, '2019-12-18'),
(1, 10, '2019-12-09'),
(3, 9, '2019-05-28'),
(2, 9, '2019-09-14'),
(5, 8, '2019-11-07'),
(5, 8, '2019-10-22'),
(4, 7, '2019-07-22'),
(2, 7, '2019-06-19'),
(3, 6, '2019-11-28'),
(3, 8, '2019-10-14'),
(4, 10, '2019-08-25'),
(6, 9, '2019-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `studentai`
--

CREATE TABLE `studentai` (
  `id` int(5) NOT NULL,
  `vardas` varchar(15) NOT NULL,
  `pavarde` varchar(20) NOT NULL,
  `metai` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentai`
--

INSERT INTO `studentai` (`id`, `vardas`, `pavarde`, `metai`) VALUES
(1, 'Gabijus', 'Kazlauskas', 2008),
(2, 'Jonas', 'Lukšys', 2002),
(3, 'Lukas', 'Kazlauskas', 1999),
(4, 'Gabijus', 'Rutkauskas', 2013),
(5, 'Gabijus', 'Kairys', 2019),
(6, 'Martynas', 'Kairys', 1996),
(7, 'Rugilė', 'Kavaliauskaitė', 2003),
(8, 'Gabijus', 'Butkus', 2015),
(9, 'Ieva', 'Mikaliauskaitė', 1976),
(10, 'Gabijus', 'Vasiliauskas', 1950);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentai`
--
ALTER TABLE `studentai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentai`
--
ALTER TABLE `studentai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
