-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 07:41 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CID`, `CNAME`) VALUES
(1, 'Tanzania'),
(2, 'South Africa'),
(3, 'Germany');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `DID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `RID` int(11) DEFAULT NULL,
  `AMOUNT` decimal(9,2) DEFAULT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ITEM_ID` int(11) DEFAULT NULL,
  `QUANTITY` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `HID` int(11) NOT NULL,
  `HNAME` varchar(100) NOT NULL,
  `REG_NO` varchar(50) NOT NULL,
  `PHY_ADDRESS` varchar(100) DEFAULT NULL,
  `RID` int(11) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `PROF_IMG` varchar(200) DEFAULT NULL,
  `REG_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`HID`, `HNAME`, `REG_NO`, `PHY_ADDRESS`, `RID`, `EMAIL`, `PASSWORD`, `PHONE`, `STATUS`, `PROF_IMG`, `REG_DATE`) VALUES
(1, 'Venda Hospital', '123456', NULL, 1, 'venda@univen.ac.za', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '+255787000122', 'active', NULL, '2019-02-21 21:28:18'),
(2, 'Muhimbili Hospital', '123344', 'ass', 1, 'muhimbili@hospital.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '1234567890', 'active', NULL, '2019-02-21 21:28:18'),
(3, 'DSM hospital', '33224', 'lsdlsd', 1, 'dsm@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '1234554321', 'active', NULL, '2019-02-21 21:28:18'),
(4, 'DSM hospital1', '1233448', 'lsdlsd', 1, 'dsm1@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '1234567897', 'active', NULL, '2019-02-21 21:28:18'),
(5, 'Muhimbili Hospital11', '12334482', 'jhaahjjh', 18, 'muhimbili@hospital1.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '1222333333', 'active', NULL, '2019-02-22 08:38:11'),
(6, 'UML', '1234556', 'kIMARA', 18, 'uml@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '0788444555', 'active', NULL, '2019-02-22 08:42:46'),
(7, 'University hospital ulm', '434545434', 'Furstenstr. 4', 17, 'ulm@gmail.de', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '0151234677', 'active', NULL, '2019-02-22 08:48:34'),
(8, 'Univen Hospital', '7676346', 'Venda', 4, 'univen@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '1234567895', 'active', NULL, '2019-02-22 13:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ITEM_ID` int(11) NOT NULL,
  `INAME` varchar(100) NOT NULL,
  `CATEGORY` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ITEM_ID`, `INAME`, `CATEGORY`, `DESCRIPTION`) VALUES
(1, 'MRI', 'Equipment', NULL),
(2, 'X-Ray', 'Equipment', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `needs`
--

CREATE TABLE `needs` (
  `HID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  `QUANTITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needs`
--

INSERT INTO `needs` (`HID`, `ITEM_ID`, `QUANTITY`) VALUES
(1, 1, 5),
(1, 2, 3),
(7, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `RID` int(11) NOT NULL,
  `RNAME` varchar(50) NOT NULL,
  `CID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`RID`, `RNAME`, `CID`) VALUES
(1, 'Arusha', 1),
(2, 'Mwanza', 1),
(3, 'Kilimanjaro', 1),
(4, 'Dodoma', 1),
(5, 'Simiyu', 1),
(6, 'Tabora', 1),
(7, 'Kigoma', 1),
(8, 'Mbeya', 1),
(9, 'Iringa', 1),
(10, 'Njombe', 1),
(11, 'Rukwa', 1),
(14, 'Morogoro', 1),
(15, 'Mtwara', 1),
(17, 'Lindi', 1),
(18, 'DSM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `CATEGORY` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PROF_IMG` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `REG_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PHONE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `FNAME`, `LNAME`, `CATEGORY`, `EMAIL`, `PROF_IMG`, `PASSWORD`, `STATUS`, `REG_DATE`, `PHONE`) VALUES
(1, 'Joshua', 'Ngowi', 'Sponsor', 'joshuangowi9@gmail.com', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'active', '2019-02-21 10:43:09', NULL),
(2, 'Habibu', 'Godo', 'Donor', 'godo@gmail.com', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'active', '2019-02-21 18:45:18', '1234567899'),
(3, 'Habibu', 'Godo', 'Donor', 'godo1@gmail.com', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'active', '2019-02-21 18:47:13', '1234567896'),
(4, 'Zainab', 'Juma', 'Volunteer', 'zainab@gmail.com', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'active', '2019-02-21 19:15:19', '1234567898'),
(5, 'Abdul', 'Mtoro', 'Donor', 'abdul@gmail.com', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'active', '2019-02-22 08:45:00', '1234567891'),
(6, 'Leonie', 'Scholz', 'Volunteer', 'leoniesch@web.de', NULL, 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'active', '2019-02-22 08:46:51', '0151234672'),
(7, 'poppy', 'm', 'Donor', 'mnhb@g.cpo', NULL, 'bb49ab7b89b53bbdfc65c442bab85e993c00f9bb07ad62d0cd66a6c9d391c763', 'active', '2019-02-22 13:29:14', '0743276128'),
(8, 'wiseman', 'ndlovu', 'Donor', 'wiseman.ndlovu@outlook.com', NULL, '452d93198c0cc76bb49a6194f66aec90ae32d91e9dd30107250d3d0f6e5b0d3e', 'active', '2019-02-22 14:13:57', '0736000807'),
(9, 'Zainab', 'Adam', 'Volunteer', 'xainab157@gmail.com', NULL, '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 'active', '2019-02-22 14:36:02', '0736000801');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `VID` int(11) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `LNAME` varchar(100) NOT NULL,
  `DURATION` int(11) DEFAULT NULL,
  `OCCUPATION` varchar(50) NOT NULL,
  `RID` int(11) NOT NULL,
  `VDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(30) DEFAULT NULL,
  `VSTART` timestamp NULL DEFAULT NULL,
  `VEND` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`DID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`HID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ITEM_ID`);

--
-- Indexes for table `needs`
--
ALTER TABLE `needs`
  ADD PRIMARY KEY (`HID`,`ITEM_ID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `PHONE` (`PHONE`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`VID`),
  ADD KEY `RID` (`RID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ITEM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `VID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `country` (`CID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
