-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 09:22 PM
-- Server version: 10.3.16-MariaDB
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
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `bus_no` int(11) DEFAULT NULL,
  `pickup` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_no`, `pickup`, `destination`) VALUES
(1, 12, 'buldi', 'trupti'),
(2, 45, 'buldi', 'butibori');

-- --------------------------------------------------------

--
-- Table structure for table `intermediate`
--

CREATE TABLE `intermediate` (
  `source` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `table_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intermediate`
--

INSERT INTO `intermediate` (`source`, `destination`, `table_name`) VALUES
('buldi', 'trupti', 'station'),
('buldi', 'butibori', 'station1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ORDERID` text NOT NULL,
  `MID` text NOT NULL,
  `TXNID` text NOT NULL,
  `TXNAMOUNT` text NOT NULL,
  `PAYMENTMODE` text NOT NULL,
  `CURRENCY` text NOT NULL,
  `TXNDATE` text NOT NULL,
  `STATUS` text NOT NULL,
  `RESPCODE` text NOT NULL,
  `RESPMSG` text NOT NULL,
  `GATEWAYNAME` text NOT NULL,
  `BANKTXNID` text NOT NULL,
  `BANKNAME` text NOT NULL,
  `CHECKSUMHASH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ORDERID`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `STATUS`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`) VALUES
('ELOK14486910', 'BvuNYX16485310423471', '20200319111212800110168283101374977', '80.00', 'NB', 'INR', '2020-03-19 00:58:27.0', 'TXN_SUCCESS', '01', 'Txn Success', 'HDFC', '18473112083', 'HDFC', 'eeMb0J85TIepxQcrzim1bg0LjlekCZzC/0Nuay97t9NH/REDyCn3qTdYhhkx633WirU7f6b+FJdTQ2ze/cgsdy906WXUjY36sFAcJPWwD0o=');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `pickup` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `fare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `pickup`, `destination`, `fare`) VALUES
(1, 'panchsheel chowk', 'lokmat', 10),
(2, 'BARDI', 'TRUPTI', 80),
(3, 'BARDI', 'PALLOTI', 100),
(4, 'LOKMAT', 'TRUPTI', 150),
(5, 'LOKMAT', 'PALLOTI', 200);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `places` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `places`) VALUES
(0, 'panchsheel chowk'),
(1, 'lokmat'),
(2, 'rahate'),
(3, 'ajni'),
(4, 'sai mandir'),
(5, 'chhatrapati'),
(6, 'sneh nagar'),
(7, 'rajiv nagar'),
(8, 'somalvada'),
(9, 'ujjval nagar'),
(10, 'airport'),
(11, 'chinchbhavan'),
(12, 'khapri naka'),
(13, 'trupti');

-- --------------------------------------------------------

--
-- Table structure for table `station1`
--

CREATE TABLE `station1` (
  `id` int(11) NOT NULL,
  `places` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station1`
--

INSERT INTO `station1` (`id`, `places`) VALUES
(1, 'panchsheel chowk'),
(2, 'lokmat'),
(3, 'rahate'),
(4, 'ajni'),
(5, 'sai mandir'),
(6, 'chhatrapati'),
(7, 'sneh nagar'),
(8, 'somalvada'),
(9, 'airport'),
(10, 'chinchbhavan'),
(11, 'trupti'),
(12, 'palloti'),
(13, 'dongar gaonn'),
(14, 'gaikvad patil'),
(15, 'butibori');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'radhapm', '$2y$10$oaclO6L32IWrwHfgGajJVOxCZeU3k/lxNGZ.7TVFzoWQlxdaY.1.6', '0000-00-00 00:00:00'),
(2, 'bharat', '$2y$10$/rd/.57pSqq6BcSG9myJM.RpE4V0xUqQpifjeDMvFIIA7U0TUPQXe', '0000-00-00 00:00:00'),
(3, 'aman05382', '$2y$10$TRSSnMWI3PJr.BeymDNsNeTqzsKRzs9M5A.ynw3u3OoTfXSy7WZxW', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intermediate`
--
ALTER TABLE `intermediate`
  ADD PRIMARY KEY (`table_name`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `station1`
--
ALTER TABLE `station1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
