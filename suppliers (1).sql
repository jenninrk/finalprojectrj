-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 09:29 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(11) NOT NULL,
  `Provider_Name` varchar(100) NOT NULL,
  `Data` tinyint(1) NOT NULL,
  `Voice` tinyint(1) NOT NULL,
  `Wireless` tinyint(1) NOT NULL,
  `Software` tinyint(1) NOT NULL,
  `Hardware` tinyint(1) NOT NULL,
  `Infrastructure` tinyint(1) NOT NULL,
  `URL` text NOT NULL,
  `Logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `Provider_Name`, `Data`, `Voice`, `Wireless`, `Software`, `Hardware`, `Infrastructure`, `URL`, `Logo`) VALUES
(1, 'AT&T', 1, 1, 1, 0, 1, 0, 'http://www.att.com', 'att.png'),
(2, '01T', 1, 0, 0, 0, 0, 0, 'http://www.01t.co.uk', '01T.png'),
(3, 'Verizon', 1, 1, 1, 0, 1, 0, 'http://www.verizon.com', 'verizon.png'),
(4, '365 Data Centers', 0, 0, 0, 0, 0, 1, 'http://www.365datacenters.com', '365DataCenter.jfif'),
(5, 'MetTel', 1, 1, 1, 0, 1, 0, 'http://www.mettel.net', 'mettel.jfif'),
(6, '15Five', 0, 0, 0, 1, 0, 0, 'http://www.15five.com', '15five.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
