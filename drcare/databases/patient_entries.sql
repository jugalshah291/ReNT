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
-- Table structure for table `patient_entries`
--

CREATE TABLE `patient_entries` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_entries`
--

INSERT INTO `patient_entries` (`user_id`, `username`, `email`, `password`, `city`, `pincode`) VALUES
(2, 'kothari', 'kotharisucks@gmail.com', '$2y$10$qoB63xSk/3Rcoav4feqPJe.5rZloPOZ/qSorUv2f6QxQcFJ0Qy2Ka', 'Windsor', '789077'),
(3, 'tejas', 'tejas@gmail.com', '$2y$10$4SbVK1hUITJxe2yeAeBkrOttdwBnMW/twY7yalfHmVsvDpDtUEpPm', 'Thunder Bay', 'P98774'),
(4, 'jugal', 'jugal@gmail.com', '$2y$10$l9JpMs4RzvkbKmAj.iPpU.uUNgpRobuqYwvTxLaNfeIDdGCc1K04.', 'Mumbai', '63847328'),
(5, 'cocacola', 'cocacola@gmail.com', '$2y$10$L3DQX1DEZBT.Q/r8BqbyTOj9RXpe5to2S1.ceOmfv/zXGydzzmrAW', 'Thunder Bay', 'cocacola'),
(7, 'gajver', 'gajver', '$2y$10$Wc3MXzsCjL0uAii7KO5eQONLXgs0yMUaW3Y50iQosMSxdOZQ08AeG', 'gajver', 'gajver'),
(8, 'pondsfreshness', 'talc', '$2y$10$blwUE3L3AdA79UrN4UVArO5d9tvUMz6wKU90Ko467Itg/uX99GBLO', 'Mumbai', 'ponds'),
(9, 'qdmvbdsmb', 'qmbvsm', '$2y$10$YMb7hF.fduukm1.FsenjE.jnpEYvfWLn2OONPuBpNUX6bVYM0LcLa', 'admvb', 'dmsvnm'),
(10, 'sdca', 'cacs', '$2y$10$L1yQZwMJf1NNcyudnx5yZehLxojXkToFbhDj1k.U82rGzgy2.qQWS', 'pdjf', 'sdvsdv'),
(11, 'chrisevans', 'chris@yopmail.com', '$2y$10$HDC/RR./rat7gPR0AWFA2.kH85lp0KeurELtEayHO16BHmZrQno5O', 'Vaughan', 'P73G7'),
(14, 'tom123', 'tom@123', '$2y$10$fdmFeDNd4JH/oG5qSTG0kuQI0F8c8biwkpDvsm41YvEM2I3hXpy8K', 'Thunderbay', 'P7C5M7'),
(15, 'jerry123', 'jerry@gmail.com', '$2y$10$zGP84m8Ef5T2y9HgpREBHeMGGGwsmAjZBmNwMB1zFdOo/nVgbrDV6', 'Thunderbay', 'P7C5M7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_entries`
--
ALTER TABLE `patient_entries`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_entries`
--
ALTER TABLE `patient_entries`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
