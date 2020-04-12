-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 04:40 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_place`
--

CREATE TABLE `order_place` (
  `Order_ID` int(10) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `town` varchar(60) NOT NULL,
  `street` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_place`
--

INSERT INTO `order_place` (`Order_ID`, `model`, `price`, `name`, `cnic`, `contact`, `email`, `town`, `street`, `city`, `zip`, `country`) VALUES
(1, ' ADEAE32', '35000', 'Laeeq khan ', '3830225342463', '03055466154', 'laiq0khasn00000@gmail.com', 'Mianwali', 'Sargodha Morr', 'Mianwali', '42200', 'India');

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
(1, 'Model : 58PLDAE', 550, 20, 's1.jpg', 'Search details by Model No', 5),
(2, 'Model : PDFAE5865', 620, 20, 's2.jpg', 'Search details by Model No', 10),
(3, 'Model : PLOIA575-34ad', 1200, 10, 's3.jpg', 'Search details by Model No', 5),
(4, 'Model : PLKE5885', 1400, 12, 's4.jpg', 'Search details by Model No', 10),
(5, 'Model : 43PLADee55', 2300, 12, 's5.jpg', 'Search details by Model No', 10),
(6, 'Model : 434PLKA', 1300, 12, 's6.jpg', 'Search details by Model No', 12),
(7, 'Model : 42-adr5426LLLP', 1300, 5, 's7.png', 'Search details by Model No', 23),
(8, 'Model : 452ADGR', 800, 10, 's8.jpg', 'Search details by Model No', 5),
(9, 'Model : LLKIP5564', 2500, 10, 's9.jpg', 'Search details by Model No', 5),
(10, 'Model : ADEAE32', 35000, 3, 'J1.jpg', 'Search details by Model No', 2),
(11, 'Model : 577742ADR', 15000, 4, 'j2.jpg', 'Search details by Model No', 5),
(12, 'Model : 432DADDDeae4', 3000, 4, 'j3.jpg', 'Search details by Model No', 0),
(13, 'Model : PHD5868', 3500, 5, 'j5.jpg', 'View all detail by Model no', 2),
(14, 'Model : 5879PJKE', 3200, 2, 'j6.jpg', 'Search all detail by model', 1),
(15, 'Model: 589dkr-pr', 2500, 7, 'j7.jpg', 'Search by model', 3),
(16, 'Model : LOPE58899-98', 4500, 3, 'j8.jpg', 'Search by Model', 2),
(17, 'Model : 589-875PHD', 3900, 4, 'j9.jpg', 'Search by model', 5),
(18, 'Model : JPE4878', 50000, 2, 'b1.jpg', 'Search by model', 2),
(19, 'Model : 2312-34pK', 45000, 3, 'b2.jpg', 'Search by model', 3),
(20, 'Model : 25458-Plaas98', 52000, 1, 'b3.jpg', 'Search by model', 0),
(21, 'Model : JPEG323-231', 35000, 2, 'b4.jpg', 'Search by model', 2),
(22, 'Model : 231PLK23-12', 44000, 3, 'b5.jpg', 'Search by detail', 5),
(23, 'Model : LKIP-2320P', 45000, 4, 'b6.jpg', 'Search by model', 4),
(24, 'Model : 23oPODKL-431', 600000, 4, 'b7.jpg', 'Search By Model', 2),
(25, 'Model : 265-POLK', 78500, 1, 'b8.jpg', 'Search by detail', 2),
(26, 'Model : 25POL9867-968', 35000, 3, 'b9.jpg', 'Search by model', 2);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_place`
--
ALTER TABLE `order_place`
  MODIFY `Order_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
