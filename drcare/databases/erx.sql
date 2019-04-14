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
-- Table structure for table `erx`
--

CREATE TABLE `erx` (
  `erx_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `patient_name` varchar(50) NOT NULL,
  `patient_id` int(50) NOT NULL,
  `patient_to` datetime NOT NULL,
  `patient_from` datetime NOT NULL,
  `medication` varchar(255) NOT NULL,
  `sig` varchar(255) NOT NULL,
  `dispense` varchar(255) NOT NULL,
  `dispense_unit` varchar(50) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erx`
--

INSERT INTO `erx` (`erx_id`, `date`, `patient_name`, `patient_id`, `patient_to`, `patient_from`, `medication`, `sig`, `dispense`, `dispense_unit`, `hospital_name`, `hospital_id`) VALUES
(33, '2019-04-11 21:57:22', 'Tom', 22, '2019-04-17 12:12:00', '2019-04-19 11:11:00', 'crw', 'Pradeep Reddy CH', '12', 'saab', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(34, '2019-04-11 22:07:07', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(35, '2019-04-11 22:47:23', 'Tom Hill', 22, '2019-04-11 11:11:00', '2019-04-26 11:01:00', 'my', 'Sumit Arun Hirve', '2', 'saab', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(36, '2019-04-11 23:12:50', 'Jerry Hill', 23, '2019-04-18 12:12:00', '2019-04-25 12:12:00', 'crw', 'Pradeep Reddy CH', '1', 'saab', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(37, '2019-04-11 23:15:05', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(38, '2019-04-11 23:20:51', 'Tom Hill', 22, '2019-04-25 12:12:00', '2019-04-26 12:12:00', '1212', '11', '1', 'saab', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(39, '2019-04-11 23:48:34', 'Tom Hill', 22, '2019-04-20 12:12:00', '2019-04-26 12:12:00', 'jugal', 'Pradeep Reddy CH', '12', 'volvo', 'NORWOOD HOSPITAL', 4002062),
(40, '2019-04-12 00:15:41', 'Tom Hill', 22, '2019-04-05 03:04:00', '2019-04-12 03:43:00', '2', '324', '34', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(41, '2019-04-12 00:16:29', 'Tom Hill', 22, '2019-04-05 03:04:00', '2019-04-12 03:43:00', '2', '324', '34', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(42, '2019-04-12 00:20:59', 'Tom Hill', 22, '2019-04-05 03:04:00', '2019-04-12 03:43:00', '2', '324', '34', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(43, '2019-04-12 00:21:19', 'Tom Hill', 22, '2019-04-05 03:04:00', '2019-04-12 03:43:00', '2', '324', '34', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(44, '2019-04-12 00:23:44', 'Tom Hill', 22, '2019-04-05 03:04:00', '2019-04-12 03:43:00', '2', '324', '34', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(45, '2019-04-12 00:23:56', 'Tom Hill', 22, '2019-04-05 03:04:00', '2019-04-12 03:43:00', '2', '324', '34', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(46, '2019-04-12 00:24:22', 'Tom Hill', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(47, '2019-04-12 00:25:14', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(48, '2019-04-12 00:29:44', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(49, '2019-04-12 00:30:34', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', 0),
(50, '2019-04-12 00:33:54', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(51, '2019-04-12 00:36:19', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(52, '2019-04-12 00:37:45', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(53, '2019-04-12 00:40:13', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(54, '2019-04-12 00:41:30', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(55, '2019-04-12 00:43:29', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(56, '2019-04-12 00:44:51', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(57, '2019-04-12 00:45:13', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(58, '2019-04-12 00:48:18', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', 0),
(59, '2019-04-12 00:48:38', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', 0),
(60, '2019-04-12 00:48:47', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302),
(61, '2019-04-12 00:51:06', ' ', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', 0),
(62, '2019-04-12 00:51:19', 'Harsh kansara', 21, '2019-04-10 12:12:00', '2019-04-17 12:12:00', 'a', 'a', '1', 'volvo', 'SIGNATURE HEALTHCARE BROCKTON HOSPITAL', 2502302);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `erx`
--
ALTER TABLE `erx`
  ADD PRIMARY KEY (`erx_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `erx`
--
ALTER TABLE `erx`
  MODIFY `erx_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
