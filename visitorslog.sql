-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 07:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitorslog`
--

-- --------------------------------------------------------

--
-- Table structure for table `invisit`
--
CREATE Database `visitorslog`;
CREATE TABLE `invisit` (
  `sname` varchar(30) NOT NULL,
  `rolno` varchar(15) NOT NULL,
  `vname` text NOT NULL,
  `pnum` int(15) NOT NULL,
  `date` datetime NOT NULL,
  `out_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invisit`
--

INSERT INTO `invisit` (`sname`, `rolno`, `vname`, `pnum`, `date`, `out_time`) VALUES
('AARAV', '191CS111', 'ABII', 2147483647, '2021-05-23 10:41:40', '0000-00-00 00:00:00'),
('ARAVINDHAN P', '191CS123', 'ARUN', 2147483647, '2021-05-23 10:40:44', '2021-05-23 10:42:52'),
('DEV', '191CS151', 'AJAY', 2147483647, '2021-05-23 10:41:11', '0000-00-00 00:00:00'),
('DIYA', '191EC163', 'DAYAL', 2147483647, '2021-05-23 10:42:44', '2021-05-23 10:42:55'),
('AMUL', '191IT121', 'DEVA', 2147483647, '2021-05-23 10:42:17', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invisit`
--
ALTER TABLE `invisit`
  ADD PRIMARY KEY (`rolno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
