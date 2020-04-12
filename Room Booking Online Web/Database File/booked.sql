-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 06:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `idd` int(11) NOT NULL,
  `code` varchar(60) NOT NULL,
  `from1` varchar(80) NOT NULL,
  `too` varchar(80) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `CNIC` varchar(60) NOT NULL,
  `Contact` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`idd`, `code`, `from1`, `too`, `Name`, `CNIC`, `Contact`) VALUES
(2, '1', '2018-01-03', '2018-01-05', '', '', ''),
(3, '1', '2018-01-03', '2018-01-05', '', '', ''),
(4, '2', '2017-12-24', '2017-12-27', '', '', ''),
(5, '6', '2017-12-24', '2017-12-25', '', '', ''),
(6, '5', '2017-12-25', '2017-12-26', 'Ali Khan', '3830225342463', '03055466154'),
(7, '5', '2017-12-25', '2017-12-26', 'Ali Khan', '3830225342463', '03055466154'),
(8, '5', '2017-12-25', '2017-12-26', 'Ali Khan', '3830225342463', '03055466154'),
(11, '15', '2017-12-25', '2017-12-27', 'asfadsf', '345345345', '345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`idd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
