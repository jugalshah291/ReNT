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
-- Table structure for table `nursedb`
--

CREATE TABLE `nursedb` (
  `NurseID` int(10) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Age` int(10) DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `HospitalName` varchar(255) DEFAULT NULL,
  `Contact` varchar(28) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursedb`
--

INSERT INTO `nursedb` (`NurseID`, `Name`, `Age`, `Sex`, `HospitalName`, `Contact`) VALUES
(0, 'atif', 21, 'male', 'jnfjnf', '73487'),
(1001, 'Carmella', 32, 'Female', 'Regional Centre', '1400-2000'),
(1002, 'Fernandez', 25, 'Male', 'Dentalinic', '1400-2000'),
(1003, 'Debby', 26, 'Female', 'Regional centre', '2000-0200'),
(1004, 'Deborah', 34, 'Female', 'Nuwave', '0200-0800'),
(1005, 'Harry', 45, 'Male', 'Nuwave', '0200-0800'),
(1006, 'Harmoine', 56, 'Female', 'Dentalinic', '2000-0200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nursedb`
--
ALTER TABLE `nursedb`
  ADD PRIMARY KEY (`NurseID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
