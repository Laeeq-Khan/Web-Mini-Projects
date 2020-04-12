-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 05:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attandance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `name` varchar(30) NOT NULL,
  `teacher_code` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`name`, `teacher_code`, `status`, `date`) VALUES
('Ali khan', '3333', 'P', ''),
('Ali khan', '3333', 'A', '2017-12-01'),
('Ali khan', '3333', 'P', '2017-12-13'),
('Ali khan', '3333', 'P', '2017-12-21'),
('Ali khan', '3333', 'P', '2017-12-22'),
('Ali khan', '3333', 'P', '2017-12-25'),
('Ali khan', '3333', 'A', '2017-12-29'),
('Ali khan', '3333', 'A', '2018-01-06'),
('asdf', '0', 'P', ''),
('asdf', '0', 'A', '2017-12-01'),
('asdf', '0', 'P', '2017-12-13'),
('asdf', '0', 'P', '2017-12-21'),
('asdf', '0', 'P', '2017-12-22'),
('asdf', '0', 'P', '2017-12-25'),
('asdf', '0', 'A', '2017-12-29'),
('asdf', '0', 'A', '2018-01-06'),
('Asia Bibi', '1111', 'A', ''),
('Asia Bibi', '1111', 'A', '2017-12-01'),
('Asia Bibi', '1111', 'A', '2017-12-13'),
('Asia Bibi', '1111', 'A', '2017-12-21'),
('Asia Bibi', '1111', 'A', '2017-12-22'),
('Asia Bibi', '1111', 'A', '2017-12-25'),
('Asia Bibi', '1111', 'P', '2017-12-29'),
('Asia Bibi', '1111', 'P', '2018-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `cnic` varchar(33) NOT NULL,
  `contact` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `cnic`, `contact`) VALUES
(0, 'asdf', 'adsf', 'adsf'),
(1111, 'Asia Bibi', 'adsf', '03055466154'),
(3333, 'Ali khan', 'asdf', '34535354');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`name`,`date`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
