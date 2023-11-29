-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 11:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silverplatter`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `contact`, `email`, `address`) VALUES
(1, 'j', 'kjkh', 'hh@mail.com', 'hh'),
(2, ',bhv', 'hvhyjf@mail.com', 'hvhyjf@mail.com', 'jgvjgcgj');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `viability` varchar(10) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `viability`, `price`) VALUES
(1, 'njkb', 'non-viable', 98);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `vtype` varchar(25) NOT NULL,
  `vnumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicleid`, `customerid`, `vtype`, `vnumber`) VALUES
(1, 1, 'kjnjkj', '99909'),
(2, 1, 'kjnjkj', '99909'),
(4, 1, '$vehiclename', '$vehiclenumber');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `visitid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `dateofvisit` date NOT NULL,
  `time` time NOT NULL,
  `detailsofvisit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workdone`
--

CREATE TABLE `workdone` (
  `workid` int(11) NOT NULL,
  `workerid` int(11) NOT NULL,
  `date` date NOT NULL,
  `descriptionofwork` varchar(250) NOT NULL,
  `hoursworked` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `vehicleid` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `workerid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL,
  `fixedsalary` int(11) NOT NULL,
  `allowance` int(11) NOT NULL,
  `bankaccount` varchar(35) NOT NULL,
  `nextofkin` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`workerid`, `name`, `contact`, `position`, `fixedsalary`, `allowance`, `bankaccount`, `nextofkin`, `username`, `password`) VALUES
(1, 'michael', 'dnwojn', 'human resources', 999, 0, 'kj k ', 'lnjnj', 'ljnkj ', 'nnj k'),
(2, 'ali', 'jlnjnk', 'sales manager', 999, 909, 'ink kh ', 'k kh  ', 'k khbbiub', 'ibibihb'),
(3, ' kh', 'hbkhb', 'human resources', 98, 0, 'uih ', 'bkjbk', 'bkbkhb', 'jnkjn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleid`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `productname` (`productid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleid`),
  ADD KEY `vehicle_ibfk_1` (`customerid`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`visitid`),
  ADD KEY `customerid` (`customerid`);

--
-- Indexes for table `workdone`
--
ALTER TABLE `workdone`
  ADD PRIMARY KEY (`workid`),
  ADD KEY `customerid` (`customerid`),
  ADD KEY `vehicleid` (`vehicleid`),
  ADD KEY `workerid` (`workerid`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`workerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `visitid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workdone`
--
ALTER TABLE `workdone`
  MODIFY `workid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `workerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `products` (`productid`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`);

--
-- Constraints for table `workdone`
--
ALTER TABLE `workdone`
  ADD CONSTRAINT `workdone_ibfk_1` FOREIGN KEY (`customerid`) REFERENCES `customers` (`customerid`),
  ADD CONSTRAINT `workdone_ibfk_2` FOREIGN KEY (`vehicleid`) REFERENCES `vehicle` (`vehicleid`),
  ADD CONSTRAINT `workdone_ibfk_3` FOREIGN KEY (`workerid`) REFERENCES `workers` (`workerid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
