-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 04:06 AM
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
-- Table structure for table `weeksched2`
--

CREATE TABLE `weeksched2` (
  `ID` int(11) NOT NULL,
  `Day` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Timefrom` time NOT NULL,
  `timeto` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeksched2`
--

INSERT INTO `weeksched2` (`ID`, `Day`, `Name`, `Timefrom`, `timeto`) VALUES
(1, 'Monday', 'jerry123', '11:11:00', '11:11:00'),
(2, 'Monday', 'sheela', '03:04:00', '15:44:00'),
(3, 'Tuesday', 'sheela', '15:04:00', '13:23:00'),
(4, 'Wednesday', 'sheela', '12:12:00', '12:32:00'),
(5, 'Thursday', 'sheela', '12:32:00', '00:58:00'),
(6, 'Friday', 'sheela', '14:31:00', '12:23:00'),
(7, 'Saturday', 'sheela', '00:23:00', '00:59:00'),
(8, 'Sunday', 'sheela', '12:23:00', '12:34:00'),
(9, 'Monday', 'sheela', '03:04:00', '15:44:00'),
(10, 'Tuesday', 'sheela', '15:04:00', '13:23:00'),
(11, 'Wednesday', 'sheela', '12:12:00', '12:32:00'),
(12, 'Thursday', 'sheela', '12:32:00', '00:58:00'),
(13, 'Friday', 'sheela', '14:31:00', '12:23:00'),
(14, 'Saturday', 'sheela', '00:23:00', '00:59:00'),
(15, 'Sunday', 'sheela', '12:23:00', '12:34:00'),
(16, 'Monday', 'sdq', '14:00:00', '14:00:00'),
(17, 'Tuesday', 'sdq', '02:00:00', '02:00:00'),
(18, 'Wednesday', 'sdq', '14:04:00', '12:32:00'),
(19, 'Thursday', 'sdq', '01:23:00', '12:34:00'),
(20, 'Friday', 'sdq', '00:23:00', '00:23:00'),
(21, 'Saturday', 'sdq', '00:13:00', '00:23:00'),
(22, 'Sunday', 'sdq', '00:33:00', '12:24:00'),
(23, 'Monday', 'sdq', '14:00:00', '14:00:00'),
(24, 'Tuesday', 'sdq', '02:00:00', '02:00:00'),
(25, 'Wednesday', 'sdq', '14:04:00', '12:32:00'),
(26, 'Thursday', 'sdq', '01:23:00', '12:34:00'),
(27, 'Friday', 'sdq', '00:23:00', '00:23:00'),
(28, 'Saturday', 'sdq', '00:13:00', '00:23:00'),
(29, 'Sunday', 'sdq', '00:33:00', '12:24:00'),
(30, 'Monday', 'sdq', '14:00:00', '14:00:00'),
(31, 'Tuesday', 'sdq', '02:00:00', '02:00:00'),
(32, 'Wednesday', 'sdq', '14:04:00', '12:32:00'),
(33, 'Thursday', 'sdq', '01:23:00', '12:34:00'),
(34, 'Friday', 'sdq', '00:23:00', '00:23:00'),
(35, 'Saturday', 'sdq', '00:13:00', '00:23:00'),
(36, 'Sunday', 'sdq', '00:33:00', '12:24:00'),
(37, 'Monday', 'sdq', '14:00:00', '14:00:00'),
(38, 'Tuesday', 'sdq', '02:00:00', '02:00:00'),
(39, 'Wednesday', 'sdq', '14:04:00', '12:32:00'),
(40, 'Thursday', 'sdq', '01:23:00', '12:34:00'),
(41, 'Friday', 'sdq', '00:23:00', '00:23:00'),
(42, 'Saturday', 'sdq', '00:13:00', '00:23:00'),
(43, 'Sunday', 'sdq', '00:33:00', '12:24:00'),
(44, 'Monday', 'sdq', '14:00:00', '14:00:00'),
(45, 'Tuesday', 'sdq', '02:00:00', '02:00:00'),
(46, 'Wednesday', 'sdq', '14:04:00', '12:32:00'),
(47, 'Thursday', 'sdq', '01:23:00', '12:34:00'),
(48, 'Friday', 'sdq', '00:23:00', '00:23:00'),
(49, 'Saturday', 'sdq', '00:13:00', '00:23:00'),
(50, 'Sunday', 'sdq', '00:33:00', '12:24:00'),
(51, 'Monday', 'sdq', '14:00:00', '14:00:00'),
(52, 'Tuesday', 'sdq', '02:00:00', '02:00:00'),
(53, 'Wednesday', 'sdq', '14:04:00', '12:32:00'),
(54, 'Thursday', 'sdq', '01:23:00', '12:34:00'),
(55, 'Friday', 'sdq', '00:23:00', '00:23:00'),
(56, 'Saturday', 'sdq', '00:13:00', '00:23:00'),
(57, 'Sunday', 'sdq', '00:33:00', '12:24:00'),
(58, 'Monday', 'kothari', '00:00:00', '00:00:00'),
(59, 'Tuesday', 'kothari', '00:00:00', '00:00:00'),
(60, 'Wednesday', 'kothari', '00:00:00', '00:32:00'),
(61, 'Thursday', 'kothari', '14:33:00', '00:00:00'),
(62, 'Friday', 'kothari', '00:00:00', '00:00:00'),
(63, 'Saturday', 'kothari', '00:00:00', '00:00:00'),
(64, 'Sunday', 'kothari', '00:00:00', '00:00:00'),
(65, 'Monday', 'atif', '00:31:00', '12:33:00'),
(66, 'Tuesday', 'atif', '12:34:00', '13:43:00'),
(67, 'Wednesday', 'atif', '15:04:00', '14:32:00'),
(68, 'Thursday', 'atif', '13:43:00', '14:35:00'),
(69, 'Friday', 'atif', '14:34:00', '03:43:00'),
(70, 'Saturday', 'atif', '15:43:00', '14:34:00'),
(71, 'Sunday', 'atif', '03:24:00', '15:24:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weeksched2`
--
ALTER TABLE `weeksched2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weeksched2`
--
ALTER TABLE `weeksched2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
