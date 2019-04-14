-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 06:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2019-04-06 01:50:46', 'no'),
(2, 1, '2019-04-06 01:51:05', 'no'),
(3, 1, '2019-04-06 01:53:57', 'no'),
(4, 2, '2019-04-06 01:54:30', 'no'),
(5, 2, '2019-04-06 16:21:53', 'no'),
(6, 1, '2019-04-06 16:21:44', 'no'),
(7, 1, '2019-04-06 17:15:06', 'no'),
(8, 2, '2019-04-06 17:22:59', 'no'),
(9, 1, '2019-04-06 17:47:44', 'no'),
(10, 2, '2019-04-06 17:33:37', 'no'),
(11, 2, '2019-04-06 20:02:26', 'no'),
(12, 4, '2019-04-06 23:03:05', 'no'),
(13, 1, '2019-04-06 22:44:40', 'no'),
(14, 5, '2019-04-09 16:22:27', 'no'),
(15, 5, '2019-04-06 23:16:20', 'no'),
(16, 5, '2019-04-06 23:20:30', 'no'),
(17, 5, '2019-04-07 14:49:59', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
