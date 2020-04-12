-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 05:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `RollNo` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `obtain` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`RollNo`, `name`, `fathername`, `address`, `contact`, `email`, `department`, `program`, `obtain`, `total`) VALUES
('BSCSF15MM10', 'Laeeq khan', 'Mehr Zaman', 'dera hazary khel near sargodha morr', '03055466154', 'laiq0khasn00000@gmail.com', 'CS & IT', 'BS', '3.41', '4'),
('BSCSF15MM11', 'Laeeq khan', 'Mehr Zaman', 'dera hazary khel near sargodha morr', '03055466154', 'laiq0khasn00000@gmail.com', 'CS & IT', 'BS', '3.41', '4'),
('BSCSF15MM12', 'Laeeq khan', 'Mehr Zaman', 'dera hazary khel near sargodha morr', '04', 'laiq0khasn00000@gmail.com', 'CS & IT', 'BS', '3.41', '4'),
('BSCSF15MM122', 'Laeeq khan', 'Mehr Zaman', 'dera hazary khel near sargodha morr', '04', 'laiq0khasn00000@gmail.com', 'CS & IT', 'BS', '3.41', '4'),
('BSCSF15MM15', 'Laeeq khan', 'Mehr Zaman', 'dera hazary khel near sargodha morr', '03055466154', 'laiq0khasn00000@gmail.com', 'CS & IT', 'BS', '3.41', '4');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `St_Roll` varchar(50) NOT NULL,
  `Subject_ID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`St_Roll`, `Subject_ID`, `Name`, `Marks`) VALUES
('BSCSF15MM11', 1, 'asdf', 100),
('BSCSF15MM11', 2, 'Math', 50),
('BSCSF15MM11', 3, 'Math', 50),
('BSCSF15MM11', 4, 'Math', 50),
('BSCSF15MM11', 5, 'Math', 50),
('BSCSF15MM11', 6, 'Math', 50),
('BSCSF15MM11', 7, 'Math', 50),
('BSCSF15MM11', 8, 'Math', 50),
('BSCSF15MM11', 9, 'Math', 50),
('BSCSF15MM11', 10, 'Math', 50),
('', 11, 'sdf', 0),
('BSCSF15MM12', 12, 'Eng', 55),
('BSCSF15MM12', 13, '54', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`RollNo`,`department`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subject_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
