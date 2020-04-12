-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 09:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `cnic` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `shadi` varchar(10) NOT NULL,
  `board1` varchar(100) NOT NULL,
  `rollno1` varchar(50) NOT NULL,
  `year1` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL,
  `obtain1` int(20) NOT NULL,
  `total1` int(20) NOT NULL,
  `board2` varchar(100) NOT NULL,
  `rollno2` varchar(100) NOT NULL,
  `year2` varchar(20) NOT NULL,
  `group2` varchar(20) NOT NULL,
  `obtain2` int(20) NOT NULL,
  `total2` int(20) NOT NULL,
  `program` varchar(50) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `SrNo` int(11) NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
