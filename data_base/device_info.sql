-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 09:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `device_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedroom`
--

CREATE TABLE `bedroom` (
  `device_id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `gpio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bedroom`
--

INSERT INTO `bedroom` (`device_id`, `email`, `name`, `dis`, `gpio`) VALUES
(1, 'aafd@gmail.com', 'pankho', 'pankho bedroom', 0),
(2, 'aafd@gmail.com', 'mixer', 'adadfwefwe', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `device_id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `gpio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`device_id`, `email`, `name`, `dis`, `gpio`) VALUES
(1, 'aafd@gmail.com', 'pankho', 'pankho hall mate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `device_id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `gpio` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`device_id`, `email`, `name`, `dis`, `gpio`) VALUES
(1, 'aafd@gmail.com', 'pankho', 'pankho kitchen mate', 2),
(2, 'aafd@gmail.com', 'mixer', 'mixer hall mate', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bedroom`
--
ALTER TABLE `bedroom`
  ADD PRIMARY KEY (`device_id`),
  ADD UNIQUE KEY `gpio` (`gpio`),
  ADD UNIQUE KEY `gpio_2` (`gpio`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`device_id`),
  ADD UNIQUE KEY `gpio` (`gpio`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`device_id`),
  ADD UNIQUE KEY `gpio` (`gpio`),
  ADD UNIQUE KEY `gpio_2` (`gpio`),
  ADD UNIQUE KEY `gpio_3` (`gpio`),
  ADD UNIQUE KEY `gpio_4` (`gpio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bedroom`
--
ALTER TABLE `bedroom`
  MODIFY `device_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `device_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `device_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
