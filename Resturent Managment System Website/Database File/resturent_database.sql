-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 03:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturent_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `Sr` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `product_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pID` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` int(10) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pID`, `pname`, `pprice`, `size`) VALUES
(22, 'Pizza Alla Napoletana (Napoli) ', 885, 'Large'),
(23, 'Pizza Marinara ', 885, 'Large'),
(24, 'Sicilian Pizzas ', 885, 'Large'),
(25, 'Pizza Ai Quattro Formagi', 950, 'Large'),
(26, 'Italian Tuna', 1500, 'Extra L'),
(27, 'Dessert Pizzas', 880, 'Large'),
(28, 'Liguria Pizza', 880, 'Large'),
(29, 'Zinger Burger', 350, 'Stander'),
(30, 'Chicken Burger', 350, 'Stander'),
(31, 'Taco Bell Cemita', 650, 'Standar'),
(32, 'Better Than Chipotle''s Beef Barbacoa', 850, 'Stander'),
(33, 'Takeout-Style Kung Pao Chicken', 1200, 'Stander'),
(34, 'Thai Chicken Satay', 900, '5 Pieces'),
(35, 'Foolproof Pan Pizza', 1500, 'Extra L'),
(36, 'Stir-Fried Chow Mein With Four Vegetables', 1250, '300g');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `Sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
