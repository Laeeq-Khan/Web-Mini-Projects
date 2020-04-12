-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 08:32 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demas_jewellry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `items` varchar(30) NOT NULL,
  `price` varchar(40) NOT NULL,
  `username` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `name`) VALUES
(5, 'Ladies'),
(10, 'Men'),
(15, 'Kids'),
(17, 'Gifts');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`code`, `name`, `category`, `Image`, `price`, `details`) VALUES
('', '', '', '', '', ''),
('1', 'Faraak', 'Kids', '1kid1.jpg', '2500', 'No detials'),
('12', 'Kameez', 'Ladies', '12lad.jpg', '1200', 'aa'),
('2', 'Kinds smaal jeans', 'Kids', '2kid2.jpg', '2500', 'a'),
('22', 'Shirt Blue inon', 'Ladies', '22lad33.jpg', '1800', 'a'),
('3', 'Kids white faraak', 'Kids', '3kid3.jpg', '1400', 'a'),
('4', 'Faraak ok White Color', 'Kids', '4kind.jpg', '1200', 'a'),
('44', 'Red Gown', 'Ladies', '44lad22.jpg', '1400', 'a'),
('5', 'Golden Farak', 'Kids', '5kid8.jpg', '800', 'a'),
('55', 'Koi b nhe', 'Ladies', '55lad55.jpg', '1222', 'a'),
('558', 'Simple Shalwar Kameez', 'Ladies', '558ladd.jpg', '22', 'asdaf'),
('6', 'Both in one pack', 'Ladies', '6kid1.jpg', '2800', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(4) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`, `name`, `contact`, `email`, `address`) VALUES
(1, 'khan', '123', 'admin', 'khan', '', '', ''),
(2, 'abc1', '123', 'Subscriber', 'adsf', 'adf', 'abcniazi@gmail.com', ' adsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
