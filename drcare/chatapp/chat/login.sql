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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `practice` varchar(50) NOT NULL,
  `erxfac` varchar(50) NOT NULL,
  `telecon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `city`, `pincode`, `practice`, `erxfac`, `telecon`) VALUES
(1, 'johnsmith', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396', '', '', '', '', ''),
(2, 'peterParker', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396', '', '', '', '', ''),
(3, 'davidMoore', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396', '', '', '', '', ''),
(4, 'tejas', '$2y$10$FNm2jxhrJU.WIIWcqOaqh.4xeLd1d9MUj//Yg64IpOU9Ra.vSHHwG', '', '', '', '', ''),
(5, 'gajver', '$2y$10$3csLvr6aAKcr6M2vlu3w/./9quzAb2weUqueI9q1sbaqTgzSmbmgO', 'Thunder Bay', 'P7B3L7', 'gajver', 'Yes', 'Yes'),
(6, 'jugal', '$2y$10$jSJPpEek6NgyTJ/KDhe9w.S1f/EaUEQYS3h6roHmQMCT4Qe.aY3WK', 'thunder bay', 'p7b5e1', 'password', 'Yes', 'Yes'),
(8, 'harshkansara', '$2y$10$DHVbSKzSPSmnz0LjOuZaOezurR8UjkS7v6BoQPhRkjGDuHYo4Yxt6', 'utah', 'utah678', 'harshkansara', 'No', 'Yes'),
(9, 'vtrikha', '$2y$10$hGUY8Rg4RYRUTwysw25zr.qvoxuzu1204iAB9MOVn8zGueM6XRNvO', 'delhi', 'delhi6', 'password', 'No', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
