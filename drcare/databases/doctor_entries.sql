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
-- Table structure for table `doctor_entries`
--

CREATE TABLE `doctor_entries` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `firstname` varchar(228) NOT NULL,
  `lastname` varchar(228) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `practice_type` enum('Private','Personal','Government') DEFAULT NULL,
  `erx_facility` enum('Yes','No') DEFAULT NULL,
  `teleconsultation` enum('Yes','No') DEFAULT NULL,
  `chat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_entries`
--

INSERT INTO `doctor_entries` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`, `city`, `pincode`, `practice_type`, `erx_facility`, `teleconsultation`, `chat`) VALUES
(1, 'kots', '', '', 'kots@gmail.com', '$2y$10$iDH79E/0sP6UB5AyZsiuSu6bx6/Ubiq6.kYBqOSGdKO6bBiuMj.uq', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'kothari', '', '', 'kotharisucks@gmail.com', '$2y$10$qoB63xSk/3Rcoav4feqPJe.5rZloPOZ/qSorUv2f6QxQcFJ0Qy2Ka', 'Windsor', '789077', NULL, NULL, NULL, NULL),
(3, 'octopus', '', '', 'octo@gmail.com', '$2y$10$eCS.ySU3xWT1xVPDUnkDd.zbfQJmwRfVRuBHiiaTqQeU4eLc7Ob8i', 'Nipigon', 'kh7362', 'Personal', 'Yes', 'Yes', NULL),
(4, 'pepsi', '', '', 'pepsi@gmail.com', '$2y$10$Ex5LE65wORTqiORs6J4bbOgFDoY.XZ9A09ZrRAoJtJRnyKhmQSAJu', 'Thunder Bay', 'pepsi', '', 'Yes', 'Yes', NULL),
(9, 'gajver', 'Tejas', 'Tejas', 'gajver', '$2y$10$ogiQ1OlMyYpagnUvDphIQ.4A2LI2qz/EzBcQpTK5vy.XrQKwegTgO', 'gajver', 'gajver', 'Private', 'No', 'Yes', NULL),
(10, 'skothar', '', '', 'skothar@yopmail.com', '$2y$10$ZsO7fpKF97J/BrFv2IDgbeOARvdZpss2BzQwMXqenspvLcmnDDWpG', 'Regina', '763472374', 'Government', 'Yes', 'No', NULL),
(11, 'twadi', '', '', 'twadi@gmail.com', '$2y$10$R3ei03hC2H9Sdhm4hirOMOT2jigzLXzknzoCIOKxp7fsQOk5QHUR2', '', 'hd638', 'Personal', 'No', 'Yes', NULL),
(12, 'jshah', '', '', 'jugal@yopmail.com', '$2y$10$xD1aOJ7y6XImQnFhyQAExe6EQjEu2d9e6G5c9R4aE1RbnnEuslWH.', 'Thunderbay', 'P7C5M7', 'Private', 'Yes', 'Yes', NULL),
(13, 'tj', 'Tejas', 'Shah', 'tj@gmail', '$2y$10$c5cxvBHMjrL9J3zYee2eq.WjXXpLUA5Z56eRWDBQ8dNu.sS1t8heG', 'Thunderbay', 'P7C5M7', 'Personal', 'No', 'Yes', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_entries`
--
ALTER TABLE `doctor_entries`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_entries`
--
ALTER TABLE `doctor_entries`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
