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
-- Table structure for table `hospital_entries`
--

CREATE TABLE `hospital_entries` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `emailid` varchar(60) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `hosptype` enum('Private','Personal','Government','','') DEFAULT NULL,
  `erxfac` enum('yes','no','','') DEFAULT NULL,
  `free` enum('yes','no','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital_entries`
--

INSERT INTO `hospital_entries` (`user_id`, `username`, `emailid`, `pwd`, `city`, `pincode`, `hosptype`, `erxfac`, `free`) VALUES
(1, 'kots', 'kots@gmail.com', '$2y$10$iDH79E/0sP6UB5AyZsiuSu6bx6/Ubiq6.kYBqOSGdKO6bBiuMj.uq', NULL, NULL, NULL, NULL, NULL),
(2, 'kothari', 'kotharisucks@gmail.com', '$2y$10$qoB63xSk/3Rcoav4feqPJe.5rZloPOZ/qSorUv2f6QxQcFJ0Qy2Ka', 'Windsor', '789077', NULL, NULL, NULL),
(3, 'Regional centre', 'regional@gmail.com', 'regional', 'Thunder Bay', 'P7B7B7', 'Personal', 'yes', 'no'),
(4, 'Care', 'care@gmail.com', '$2y$10$nApLCMs2wQ/XnCc6K/gKCukLVmn9vV4K5IrVlBBHFQ.tgQcZoI8S2', 'Nipigon', 'ufjwebfb', 'Private', 'no', 'yes'),
(5, 'harshkansara', 'harsh@kansara.com', '$2y$10$NAnxrLQdntb6mj7Buo1t7OYgqIfsz9/cSITngWVaPfTSf9iAjfFNG', 'Thunder Bay', 'P98H567', 'Personal', 'yes', 'yes'),
(6, 'hospitala', 'hospitala@gmail.com', '$2y$10$.FIxNLJG0GaHKY05CIq7AOM3fpTr8hCj/1VcRl5Q7a4tKRB1KKQFS', 'Thunder Bay', 'hospitala', '', 'yes', 'yes'),
(7, 'kothari', 'kot@yopmail.com', 'kots123', 'Glaive', 'jhs8', '', '', ''),
(8, 'ada', 'adf', '123', 'smafn', 'dsfsd', '', '', ''),
(9, 'dv', 'h', '$2y$10$M8UfT.jv/TBB7JtGOLbMuOIUY9p0DBEEO/ey3UI/ZCXEmZnlldDoO', 'jb', 'jbsd', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospital_entries`
--
ALTER TABLE `hospital_entries`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospital_entries`
--
ALTER TABLE `hospital_entries`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
