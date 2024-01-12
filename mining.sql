-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 09:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mining`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departid` int(11) NOT NULL,
  `department_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departid`, `department_name`) VALUES
(4, 'gasabo departemet'),
(5, 'ange rutwe mananger');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productDescription` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `purity` varchar(50) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `product_image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productDescription`, `quantity`, `purity`, `origin`, `price`, `product_image`) VALUES
(10040, 'zahabu', 'wapipeeeee', 123, 'high', '10040', 10040.00, NULL),
(123987, 'ibuyee', 'korooo', 34, 'high', 'Rwimbogo', 9876.00, 0x646f776e6c6f616473646f776e6c6f61642e6a706567),
(2345678, 'korotadfgnjfhmfm', 'k    kj', 234, 'high', 'Gatumba', 134678.00, 0x646f776e6c6f616473696d616765732e706e67),
(23456789, 'aluminium', 'This method is used to move a specified file (that has already been uploaded) to a new location. This method first validates the specified file, and if it is valid, then moves it to the destination location. If there is already a file in the destination l', 234, 'high', 'Mayange', 12345.00, 0x646f776e6c6f616473636173362e4a5047),
(123456789, 'now test', 'sdfbgnv', 34, 'high', 'Gatumba', 6789.00, 0x646f776e6c6f6164736a657368692e504e47),
(1234567890, 'korotaa', 'now and no anda gain', 1234567, 'high', 'Rwimbogo', 99999999.99, 0x646f776e6c6f616473332e504e47);

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `siteid` int(11) NOT NULL,
  `sitename` varchar(255) DEFAULT NULL,
  `sitelocation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `departement` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `address`, `password`, `departement`, `phonenumber`) VALUES
(2, 'Iradukunda', 'Rehoboth', 'habimana@gmail.com', 'kigali@gamil.com', '', 'department1', '5078885858'),
(7, 'Byiringiro', 'kirehe', 'dieudonnebyiringiro2020@gmail.com', 'kayonza', '4848494', 'department1', '95959');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`siteid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567891;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `siteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
