-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 07:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `page_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `page_id`, `name`, `link`) VALUES
(1, '1', 'Indian new Movies', 'https://www.hostinger.com/special/000webhost?utm_source=000&utm_medium=website-temp-sleeping&utm_campaign=pages'),
(2, '1', 'Sport', 'http://www.di.ase.md/~aursu/ClientServerThreads.html'),
(3, '1', 'Sport', 'http://www.di.ase.md/~aursu/ClientServerThreads.html'),
(4, '1', 'Sport', 'http://www.di.ase.md/~aursu/ClientServerThreads.html'),
(5, '1', 'Sport', 'http://www.di.ase.md/~aursu/ClientServerThreads.html'),
(6, '1', 'Australia - The Land Down Under', 'https://www.facebook.com/'),
(7, '1', 'Wesdaflk', 'lasdkfjadsl'),
(8, '3', 'ADSF', 'asdf'),
(9, '3', 'adsfasdf', 'https://www.google.com.pk/search?q=how+to+open+link+in+new+tab+html&oq=how+to+open+link+in+new+tab&aqs=chrome.1.69i57j0l5.6288j0j7&sourceid=chrome&ie=UTF-8'),
(10, '3', 'asdfasd', 'header("Location:admin_panel.php");'),
(11, '3', 'asdfasd', 'header("Location:admin_panel.php");'),
(12, '3', 'ad', 'sadfasdf'),
(13, '3', 'ad', 'sadfasdf'),
(14, '4', 'asdf', 'asdfadsfadsf'),
(15, '1', 'Youtube', 'https://www.youtube.com/'),
(16, '4', 'Socket programming', 'http://www.di.ase.md/~aursu/ClientServerThreads.html');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(1, 'Entertainment'),
(2, 'Business'),
(3, 'Sports'),
(4, 'Education');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
