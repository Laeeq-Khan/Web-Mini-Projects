-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 02:01 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Code` int(11) NOT NULL,
  `Img` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Code`, `Img`, `Type`, `Price`, `Details`) VALUES
(1, '1.jpg', 'Double', 6000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi and Full time Room service ,  Air Conditioned for Summers and Heater for winter ,  Fully Carpeted with decorate walls  Master Bed Room.  Beautiful luxurious  Room ,  '),
(2, '2.jpg', 'Double', 7000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi and Full time Room service ,  Air Conditioned for Summers and Heater for winter ,  Fully Carpeted with decorate walls  Master Bed Room.  Beautiful luxurious  Room ,  '),
(3, '3.jpg', 'Double Bed ', 8000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi and Full time Room service ,  Air Conditioned for Summers and Heater for winter ,  Fully Carpeted with decorate walls  Master Bed Room.  Beautiful luxurious  Room ,  '),
(5, '4.jpg', 'Double Bed', 10000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi and Full time Room service ,  Air Conditioned for Summers and Heater for winter ,  Fully Carpeted with decorate walls  Master Bed Room.  Beautiful luxurious  Room   Window View of Full Wall City Area . '),
(6, '5.jpg', '5 Bed Room', 12000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nFast Food available.\r\nWindow view\r\nFurnished with extra Furniture  \r\n\r\nBeautiful luxurious  Room .  '),
(7, '6.jpg', 'Two Single Bed Room', 6000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room ,  '),
(8, '7.jpg', 'Double Bed Room', 6500, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious Room  \r\nWindow View. '),
(9, '8.jpg', 'Double Room', 5000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nPink Lighting . '),
(10, '9.jpg', 'Single Bed Room', 5500, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\n'),
(11, '10.jpg', 'Double Bed ', 5000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nWindow View of River\r\n'),
(12, '11.jpg', '4 Bed Room ', 10000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nWindow View \r\nExtra Large and comfortable '),
(13, '12.jpg', 'Two Single Beds ', 9000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\n '),
(14, '13.jpg', 'Double Room', 6000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nWindow View\r\nExtra Area with Sofa Sitting \r\nFull Area Window View of Hills\r\n'),
(15, '14.jpg', 'Single Bed', 3500, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\n\r\nSimple'),
(16, '15.jpg', 'Double Bed', 6000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nWindow View of Half Wall\r\n'),
(17, '16.jpg', 'Double Bed with See View', 10000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nSee view with Extra outside sunny area for sitting'),
(18, '17.jpg', 'Double Bed', 7000, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nWindow View'),
(19, '18.jpg', 'Double Bed', 7200, 'Attach Bath  cool and hot water , LCD  TV , PTCL Free phone Service , WiFi\r\nand Full time Room service , \r\nAir Conditioned for Summers\r\nand Heater for winter , \r\nFully Carpeted with decorate walls \r\nMaster Bed Room. \r\nBeautiful luxurious  Room  \r\nBlack carpeted ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
