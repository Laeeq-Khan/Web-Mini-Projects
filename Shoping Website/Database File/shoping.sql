-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 04:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Sr` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `product_ID` varchar(20) NOT NULL,
  `extra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Sr`, `email`, `product_ID`, `extra`) VALUES
(1, 'laiqkhan0000@gmail.com', '8', 0),
(2, 'laiqkhan0000@gmail.com', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_place`
--

CREATE TABLE `order_place` (
  `Order_ID` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `items` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pID` int(10) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` int(10) NOT NULL,
  `pitems` int(10) NOT NULL,
  `ppicture` varchar(255) NOT NULL,
  `pdetails` varchar(255) NOT NULL,
  `pdiscount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pID`, `pname`, `pprice`, `pitems`, `ppicture`, `pdetails`, `pdiscount`) VALUES
(1, 'Casual Shoes', 550, 20, 's1.jpg', 'This product is original made by CAT industrial . 37 to 48 SIZE , Color as shownen in picture. Thanks ', 5),
(2, 'Casual Shoes', 620, 20, 's2.jpg', 'This is product is originally manufacture by CAT Brand. color same in pictrue, Size available 35 to 47 Stander', 10),
(3, 'Party Shoes', 1200, 10, 's3.jpg', 'Original CAT Brad product. Size Available in 35 to 45 number. Color black and brown  ', 5),
(4, 'Party B5 Shoes', 1400, 12, 's4.jpg', 'Original Product of BATA Barand. Size available in Stander 35 to 45 . Color red and black. ', 10),
(5, 'Black hot Shoes.', 2300, 12, 's5.jpg', 'Brand : CAT\r\nSize : 35 to 37\r\nColor: Black and Blue\r\nType : Ladies', 10),
(6, 'Joghar', 1300, 12, 's6.jpg', 'Brand : BATA\r\nColor: Same in picture\r\nSize: 34 to 43\r\n', 12),
(7, 'Party Ladies Shoes', 1300, 5, 's7.jpg', 'Brand : Obzaar', 23),
(8, 'Fashion Shoes', 800, 10, 's8.jpg', 'Brand : Style\r\nColor: As showen in picture\r\nSize: 35 to 42\r\n', 5),
(9, 'Style of Shoes B4', 2500, 10, 's9.jpg', 'Brand: ZARA\r\nColor: as in picture\r\nSize: Stander size fit on 42 and 41 size foot. ', 5),
(10, 'Neckless Gold ', 35000, 3, 'J1.jpg', 'Original Gold....', 2),
(11, 'Artificial  Neckless ', 15000, 4, 'j2.jpg', 'Original production of Koolza Baran', 5);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `name`, `contact`, `address`, `type`) VALUES
('laiq0khan00000@gmail.com', '12345', 'ALli', 'adsf', 'dfs', ''),
('laiq0khan0000@gmail.com', '12345', 'Khan', '0300', 'Mianwali', ''),
('laiq0khasn00000@gmail.com', '12345', 'ALli', 'adsf', 'dfs', ''),
('laiqkhan0000@gmail.com', '12345', 'laiq', '34535354', 'dfgdfljgdsklfkjgk;ldsfjg;lj', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `order_place`
--
ALTER TABLE `order_place`
  ADD PRIMARY KEY (`Order_ID`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_place`
--
ALTER TABLE `order_place`
  MODIFY `Order_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
