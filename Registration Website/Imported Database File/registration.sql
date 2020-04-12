-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 03:28 PM
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
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`cnic`, `fullname`, `fathername`, `dob`, `contact`, `email`, `gender`, `shadi`, `board1`, `rollno1`, `year1`, `group1`, `obtain1`, `total1`, `board2`, `rollno2`, `year2`, `group2`, `obtain2`, `total2`, `program`, `discipline`, `SrNo`, `Image`) VALUES
('3830225342463', 'laeeeq', 'Mehr zaman khan', '3221', '03055466154', 'laiqkhan0000@gmail.com', 'on', 'on', 'BISE Sargodha', '335', '2017', 'FSc', 400, 500, 'BISE Lahore', '255', '2017', 'Science', 4, 245, 'BS', 'CS', 92, '3830225342463CSBS1.jpg'),
('383022568999', 'laiqkhaninia', 'alilkajdf', '20/325/502', '030110747578', 'laiqkhan0000@gmail.com', 'on', 'on', 'BISE Sargodha', '654', '2017', 'FSc', 54, 54, 'BISE Lahore', '654', '2017', 'Science', 65, 654, 'BS', 'CS', 93, '383022568999CSBS2.jpg'),
('34324', 'sdf', 'asdf', 'asdf', '234', '', 'female', 'marid', 'Select Board', '324', 'Completion Year', 'Select Group', 234, 234, 'BISE Sargodha', '234', 'Completion Year', 'Select Group', 234, 234, 'Select your program', 'Select your Discipline', 94, '34324Select your DisciplineSelect your programlogo.png');

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
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
