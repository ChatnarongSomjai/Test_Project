-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 05:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `Name`, `Location`, `CDate`, `ModDate`) VALUES
('a1001', 'Peter', 'Los Angeles', '2022-08-18', '2022-09-08'),
('a1002', 'Paul', 'Las Vegas', '2022-08-05', '2022-09-08'),
('a1003', 'Wesker', 'California', '2022-07-13', '2022-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cid` varchar(10) NOT NULL,
  `Products` varchar(20) NOT NULL,
  `Number of Products` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Total` float DEFAULT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cid`, `Products`, `Number of Products`, `Price`, `Total`, `CDate`, `ModDate`) VALUES
('cc1001', 'Champoo', 1, 199, 199, '2022-09-08', '2022-08-18'),
('cc1002', 'Condition', 2, 210, 210, '2022-09-05', '2022-09-08'),
('cc1003', 'detergent', 3, 120, 120, '2022-08-02', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Email` varchar(30) NOT NULL,
  `CustomerLocation` varchar(30) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `CustomerId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Email`, `CustomerLocation`, `CustomerName`, `DateOfBirth`, `CDate`, `ModDate`, `Postcode`, `CustomerId`) VALUES
('Streve@gmail.com', 'Los Angeles', 'Streve', '2001-09-14', '2022-08-02', '2022-09-08', '9001', 'c2001'),
('Jenny@yahoo.com', 'California', 'Jenny', '1998-08-16', '2022-08-16', '2022-09-08', '90210', 'c2002'),
('Alex@hotmail.com', 'Las Vegas', 'Alex', '2000-08-24', '2022-08-05', '2022-09-08', '88901', 'c2003'),
('Gogovar@gmail.com', 'India', 'Gogovar', '2022-09-14', '2022-09-13', '2022-09-29', '80560', 'c2004'),
('Oleo@hotmail.com', 'เยอรมัน', 'Oleo', '2022-06-14', '2022-09-23', '2022-09-27', '50689', 'c2005');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Iid` varchar(10) NOT NULL,
  `CustomerID` varchar(10) NOT NULL,
  `CardID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Iid`, `CustomerID`, `CardID`) VALUES
('', '', ''),
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2003', 'cc1002'),
('v1003', 'c2003', 'cc1003'),
('v1004', 'c2004', 'cc1004'),
('v1005', 'c2005', 'cc1005'),
('v1006', 'c2001', 'cc1001');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Lid` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Lid`, `Name`) VALUES
('c2001', 'Streve'),
('c2002', 'Jenny'),
('c2003', 'Alex');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PId` varchar(10) NOT NULL,
  `Deleted` date NOT NULL,
  `Price` int(11) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PId`, `Deleted`, `Price`, `ProductName`, `CDate`, `ModDate`) VALUES
('p1001', '2022-09-14', 179, 'แชมพู Dove', '2022-08-18', '2022-09-08'),
('p1002', '2022-09-30', 250, 'ครีมนวดผมSunsilk', '2022-08-18', '2022-09-08'),
('p1003', '2022-09-28', 89, 'Acqua Alle Rose ', '2022-08-18', '2022-09-08'),
('p1004', '2022-09-21', 149, 'สบู่เหลว Lux', '2022-08-29', '2022-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `PromotionID` varchar(10) NOT NULL,
  `PromotionName` varchar(20) NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`PromotionID`, `PromotionName`, `CDate`, `ModDate`) VALUES
('001', 'โปร1.1', '2022-01-01', '2022-01-02'),
('002', 'โปร2.2', '2022-02-02', '2022-02-03'),
('003', 'โปร3.3', '2022-03-03', '2022-03-04'),
('004', 'โปร 4.4', '2022-04-04', '2022-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Lid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`PromotionID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
