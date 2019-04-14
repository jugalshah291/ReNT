-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 03:42 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `PatientID` int(11) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobileno` int(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `height` int(100) NOT NULL,
  `weight` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`PatientID`, `firstname`, `lastname`, `email`, `mobileno`, `gender`, `address`, `bloodgroup`, `height`, `weight`) VALUES
(1, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(2, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(3, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(4, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(5, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(6, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(7, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(8, 'Algebra', 'Almel', 'Chun Sa', 2007, '', '', '', 0, 0),
(9, 'as', 'as', 'sd', 0, '', '', '', 0, 0),
(10, 'er', 'ere', 'rewr', 0, '', '', '', 0, 0),
(32, 'ERE', 'ERER', 'ERER', 3445, 'DF', 'SADS', 'SD', 34, 3423),
(31, 'ABC', 'QEWR', 'SD', 34, 'EW', 'WW', 'WE', 234, 34),
(29, 'ABC', 'XUZ', 'XYZ@G.CO', 2147483647, 'MALE', '46GJ', 'A-', 178, 67),
(33, 'ERE', 'ERER', 'ERER', 3445, 'DF', 'SADS', 'SD', 34, 3423),
(26, 'mansi', 'patel', 'mansi@gmail.com', 807563422, 'female', '45 fren street', 'B+', 165, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `tbl_image_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `image_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`tbl_image_id`, `first_name`, `last_name`, `image_location`) VALUES
(1, 'John', 'Doe', 'Celebrity-hair-styles-men.jpg'),
(2, 'bansari', 'xyz', 'pic1.jpg'),
(3, 'xyz', 'abc', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`tbl_image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `PatientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `tbl_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
