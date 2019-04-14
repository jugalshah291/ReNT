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
-- Table structure for table `phr`
--

CREATE TABLE `phr` (
  `user_id` int(11) NOT NULL,
  `loginid` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `gender` varchar(28) DEFAULT NULL,
  `ethnicity` varchar(255) DEFAULT NULL,
  `sin` varchar(255) DEFAULT NULL,
  `med` varchar(255) DEFAULT NULL,
  `medhmo` varchar(255) DEFAULT NULL,
  `hmoid` varchar(255) DEFAULT NULL,
  `medcare` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `insid` varchar(255) DEFAULT NULL,
  `relation` varchar(255) DEFAULT NULL,
  `emergency` varchar(255) DEFAULT NULL,
  `econtact` varchar(255) DEFAULT NULL,
  `eaddress` varchar(255) DEFAULT NULL,
  `epincode` varchar(255) DEFAULT NULL,
  `pcpname` varchar(255) DEFAULT NULL,
  `pcpcontact` varchar(255) DEFAULT NULL,
  `pcpaddress` varchar(255) DEFAULT NULL,
  `pcppincode` varchar(255) DEFAULT NULL,
  `diknown` varchar(255) DEFAULT NULL,
  `distype` varchar(255) DEFAULT NULL,
  `ambulation` varchar(255) DEFAULT NULL,
  `vision` varchar(255) DEFAULT NULL,
  `methodofcom` varchar(255) DEFAULT NULL,
  `lanofcom` varchar(255) DEFAULT NULL,
  `hearingprob` varchar(255) DEFAULT NULL,
  `Bladdercontrol` varchar(255) DEFAULT NULL,
  `dentures` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phr`
--

INSERT INTO `phr` (`user_id`, `loginid`, `firstname`, `lastname`, `middlename`, `email`, `contact`, `address`, `city`, `pincode`, `gender`, `ethnicity`, `sin`, `med`, `medhmo`, `hmoid`, `medcare`, `provider`, `insid`, `relation`, `emergency`, `econtact`, `eaddress`, `epincode`, `pcpname`, `pcpcontact`, `pcpaddress`, `pcppincode`, `diknown`, `distype`, `ambulation`, `vision`, `methodofcom`, `lanofcom`, `hearingprob`, `Bladdercontrol`, `dentures`) VALUES
(21, 'gajver', 'Harsh', 'kansara', 'halo', 'hkansara@lakeheadu.ca', '+1', 'ho', 'Thunder', 'P7B', 'Female', '', '', 'hq', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'known', 'autism', '', '', '', '', '', '', ''),
(22, 'tom@gmail.com', 'Tom', 'Hill', 'odin', 'tom@gmail.com', '8073577201', 'high', 'Thunder', 'P7C', 'female', 'Human', '1234', '123', 'Navdeep', '123', 'Navdeep', 'Navdeep', '123', 'father', '8073577201', '123', 'High', 'P7C', 'Navdeep', '123', '741', 'P7C', 'unknown', 'autism', 'braces', 'braces', 'signs', 'other', 'no', 'yes', 'no'),
(23, 'jerry@gmail.com', 'Jerry', 'Hill', 'Worthy', 'jerry@gmail.com', '1234567890', '741', 'Thunderbay', 'P7C5M7', 'female', 'Human', '123', '123', 'Sumit', '123', 'Pradeep', 'Navdeep', '123', 'Father', 'Nv', '123', 'ascasd', 'P7C5M7', 'Pradeep', '123', 'Inavolu', '522237', 'unknown', 'autism\"', 'braces', 'legally', 'comdevice', 'spanish', 'no', 'yes', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phr`
--
ALTER TABLE `phr`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phr`
--
ALTER TABLE `phr`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
