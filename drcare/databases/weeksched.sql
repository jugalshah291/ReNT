-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 04:05 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `weeksched`
--

CREATE TABLE `weeksched` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Monday` varchar(100) DEFAULT NULL,
  `Tuesday` varchar(100) DEFAULT NULL,
  `Wednesday` varchar(100) DEFAULT NULL,
  `Thursday` varchar(100) DEFAULT NULL,
  `Friday` varchar(100) DEFAULT NULL,
  `Saturday` varchar(100) DEFAULT NULL,
  `Sunday` varchar(100) DEFAULT NULL,
  `Timeavailable_from` time NOT NULL,
  `Timeavailable_to` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeksched`
--

INSERT INTO `weeksched` (`ID`, `Name`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`, `Timeavailable_from`, `Timeavailable_to`) VALUES
(4001, 'Deanna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00:00:00', '00:00:00'),
(4002, 'Hayna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00:00:00', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weeksched`
--
ALTER TABLE `weeksched`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weeksched`
--
ALTER TABLE `weeksched`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
