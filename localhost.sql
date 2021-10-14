-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2021 at 08:48 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `changwei_mydatabase`
--
CREATE DATABASE IF NOT EXISTS `changwei_mydatabase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `changwei_mydatabase`;

-- --------------------------------------------------------

--
-- Table structure for table `MusicStore`
--

CREATE TABLE `MusicStore` (
  `id` int(3) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `priceTag` decimal(9,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MusicStore`
--

INSERT INTO `MusicStore` (`id`, `productName`, `priceTag`) VALUES
(1, 'Violin', 3000.00),
(3, 'Piano', 8000.00),
(4, 'Cello', 2800.00),
(5, 'Guitar', 200.50),
(6, 'Keyboard', 1000.00),
(7, 'Speaker', 120.00);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `productID` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ProductInfo`
--

CREATE TABLE `ProductInfo` (
  `prod_ID` int(6) NOT NULL,
  `prod_Name` varchar(15) NOT NULL,
  `prod_Price` decimal(8,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ProductInfo`
--

INSERT INTO `ProductInfo` (`prod_ID`, `prod_Name`, `prod_Price`) VALUES
(3, 'TV', 300),
(4, 'Phone', 200),
(5, 'Keyboard', 40),
(12, 'Speaker', 69),
(11, 'toy', 56),
(13, 'love', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `userid` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`userid`, `username`, `password`) VALUES
(1, 'abc', '$2y$10$waDmheZWXD8kJAtpwdCUN.dBaW64c1soyznD91o1uMZfNE1smpteK'),
(2, 'Michael', '$2y$10$MIdIfV0wOOVhzVYyitQPwuwVGYUomYrJ3A8sj6/RJqwdD1FROsii.'),
(3, 'zz', '$2y$10$dvcHIvETsFQhG.uHAu6wHO9Za9KD30aICyLq1pW43DZCuH9e6IJoq'),
(4, 'mmm', '$2y$10$1OFl7macqspAXvjiLS.StOH9RyPar28JdIiEPude3GzWa5B8EKlKO'),
(5, '', '$2y$10$Ko59uELPSsDONs2BPR3t3uh7VtW8Eis3W/n4y0aVsWz.1Ha7AUtrm'),
(6, 'Lisa', '$2y$10$EoFVrzbzw55D4gpYcO5wYOq3y6p7/s6sfp9mC3f5rtw5/CjprX5Xi'),
(7, 'zxc', '$2y$10$8OU4fpHX3GClRtbC.ggA2uP91s4zXJQXiIKRneBxJxaqLNkCVmcpK'),
(8, 'qqq', '$2y$10$TwlIXJMowhgIcBqt2hkpWeynaLrtU9N7GGkbc83cEg46lLM/7aNvy'),
(9, 'ttt', '$2y$10$AfbFqISazTMexG0Mkskm3.p5E6W774BtXeprvom7reeNjDiLey3rG'),
(10, 'ooo', '$2y$10$N07/1XKjEFiGDXZtVhhbQOQhiX0ZI8AZku4ChcXCZ/RDF.Gb5bZz.'),
(11, 'vv', '$2y$10$qUzUZDI/R7IJ6ZCnUnkYH.HGKezEQ4phfgnJo1ZQ.woP8L.pM.4EC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MusicStore`
--
ALTER TABLE `MusicStore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ProductInfo`
--
ALTER TABLE `ProductInfo`
  ADD PRIMARY KEY (`prod_ID`);

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MusicStore`
--
ALTER TABLE `MusicStore`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
