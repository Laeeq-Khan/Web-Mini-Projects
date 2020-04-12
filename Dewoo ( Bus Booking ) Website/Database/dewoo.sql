-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 03:43 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `bus_no` varchar(60) NOT NULL,
  `seat` int(11) NOT NULL,
  `Datee` varchar(50) NOT NULL,
  `other` int(11) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`bus_no`, `seat`, `Datee`, `other`, `cnic`, `Name`, `Contact`) VALUES
('BC5898', 15, '2017-12-18', 0, '3830225342463', 'Laeeq khan', '030110747578'),
('BC5898', 38, '2017-12-18', 0, '654654', 'Laeeq Khan', '514654'),
('ML22', 1, '2017-12-18', 0, '1', '', ''),
('ML22', 2, '2017-12-18', 0, '2', '', ''),
('ML25', 5, '2017-12-18', 0, '3830225342463', 'Laeeq UZ Zaman ', '03055466154'),
('ML25', 19, '2017-12-18', 0, '54862', 'Ali', '030110747578'),
('ML25', 20, '2017-12-18', 0, '3', '', ''),
('ML25', 21, '2017-12-18', 0, '698', 'Khan', '321'),
('ML25', 34, '2017-12-18', 0, '34', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BusNo` varchar(30) NOT NULL,
  `Driver_Name` varchar(50) NOT NULL,
  `From1` varchar(50) NOT NULL,
  `To1` varchar(50) NOT NULL,
  `Start1` varchar(30) NOT NULL,
  `Reach1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BusNo`, `Driver_Name`, `From1`, `To1`, `Start1`, `Reach1`) VALUES
('BC5898', 'Kamram ', 'Lahore', 'Mianwali', '9 AM', '2 PM'),
('BH689', 'Nasir Rehman', 'Mianwali', 'Islamabad', '6 AM', '10:30 AM'),
('DBC958', 'Waseem Akbar', 'Lahore', 'Mianwali', '5 PM ', '10 PM'),
('GT7898', 'Wasif Ali ', 'Pindi', 'Mianwali', '2 PM', '6:30 PM'),
('HT5898', 'Asmat Ullah Malik', 'Islamabad', 'Mianwali', '9 AM', '11 AM'),
('ML22', 'Majid Hussain', 'Mianwali', 'Lahore', '5:Am', '10 AM'),
('ML25', 'Yasir Hameed', 'Mianwali', 'Lahore', '1 PM', '6 PM'),
('TE4445', 'Nabeel Khan', 'Lahore', 'Islamabad', '11 PM', '2 AM'),
('TE589', 'Basheer Ahemad', 'Lahore', 'Islamabad', '9 AM', '12 AM'),
('TYR898', 'Imran Bhati', 'Islamabad', 'Lahore', '12 AM', '3 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`bus_no`,`seat`,`Datee`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BusNo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
