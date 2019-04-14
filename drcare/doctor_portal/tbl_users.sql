-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 07:33 PM
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
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `practice_type` enum('Private','Personal','Government','') DEFAULT NULL,
  `erx_facility` enum('yes','no','','') DEFAULT NULL,
  `teleconsultation` enum('yes','no','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`, `city`, `pincode`, `practice_type`, `erx_facility`, `teleconsultation`) VALUES
(1, 'kots', 'kots@gmail.com', '$2y$10$iDH79E/0sP6UB5AyZsiuSu6bx6/Ubiq6.kYBqOSGdKO6bBiuMj.uq', NULL, NULL, NULL, NULL, NULL),
(2, 'kothari', 'kotharisucks@gmail.com', '$2y$10$qoB63xSk/3Rcoav4feqPJe.5rZloPOZ/qSorUv2f6QxQcFJ0Qy2Ka', 'Windsor', '789077', NULL, NULL, NULL),
(3, 'octopus', 'octo@gmail.com', '$2y$10$eCS.ySU3xWT1xVPDUnkDd.zbfQJmwRfVRuBHiiaTqQeU4eLc7Ob8i', 'Nipigon', 'kh7362', 'Personal', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
