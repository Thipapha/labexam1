-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 12:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `actors_id` varchar(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `performance` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`actors_id`, `firstname`, `lastname`, `birthdate`, `performance`) VALUES
('ac001', 'Keanu', 'Reeves', '2 September 1964', 'The Matrix, John Wick'),
('ac002', 'Laurence', 'Reeves', '30 July 1961', 'The Matrix, John Wick'),
('ac003', 'Carrie-Anne', 'Moss ', '21 August 1967', 'The Matrix'),
('ac004', 'Leonardo', 'DiCaprio', '11 October 1974', 'John Wick, The Revenant'),
('ac005', 'Tom', 'Hardy', '15 September 1977', 'The Revenant'),
('ac006', 'Domhnall', 'Gleeson', '12 May 1983', 'The Revenant');

-- --------------------------------------------------------

--
-- Table structure for table `actors_performance`
--

CREATE TABLE `actors_performance` (
  `actors_id` varchar(5) NOT NULL,
  `movies_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors_performance`
--

INSERT INTO `actors_performance` (`actors_id`, `movies_id`) VALUES
('ac001', 'mv001'),
('ac001', 'mv002'),
('ac002', 'mv001'),
('ac002', 'mv002'),
('ac003', 'mv001'),
('ac004', 'mv002'),
('ac004', 'mv003'),
('ac005', 'mv003'),
('ac006', 'mv003');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `members_id` varchar(4) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member informetion';

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`members_id`, `firstname`, `lastname`, `address`, `phone`) VALUES
('m001', 'ทิพย์อาภา', 'จินดารักษ์', '18/30 หมู่13 ซ.เทพกุญชร39 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 12120', '0917047129'),
('m002', 'นิชา', 'สินธปกรณ์', '15/44 หมู่13 ซ.ไอยรา12 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 12120', '0654552315'),
('m003', 'วิมลวรรณ', 'แสงสว่าง', '44/2 เอื้ออาทร รังสิต คลองหนึ่ง ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 12120', '0859646632'),
('m004', 'สุรเชษฐ์', 'แสนสุวรรณวงศ์', '55/32 ซ.เทพกุญชร45 ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 12120', '0823394685');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movies_id` varchar(5) NOT NULL,
  `movie_title` varchar(50) NOT NULL,
  `release_year` year(4) NOT NULL,
  `cast` varchar(80) NOT NULL,
  `price` varchar(3) NOT NULL,
  `time` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member informetion';

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movies_id`, `movie_title`, `release_year`, `cast`, `price`, `time`) VALUES
('mv001', 'The Matrix', '1999', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', '327', '134'),
('mv002', 'John Wick', '2014', 'Keanu Reeves, \r\nLaurence Fishburne, \r\nLeonardo DiCaprio', '354', '101'),
('mv003', 'The Revenant', '2015', 'Leonardo DiCaprio, \r\nTom Hardy, \r\nDomhnall Gleeson', '389', '156');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` varchar(8) NOT NULL,
  `member_id` varchar(4) NOT NULL,
  `movie_id` varchar(5) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `member_id`, `movie_id`, `purchase_date`) VALUES
('58641256', 'm001', 'mv002', '2024-09-03'),
('64859214', 'm002', 'mv003', '2024-07-31'),
('65452339', 'm003', 'mv002', '2024-08-15'),
('75436529', 'm004', 'mv001', '2024-09-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actors_id`);

--
-- Indexes for table `actors_performance`
--
ALTER TABLE `actors_performance`
  ADD PRIMARY KEY (`actors_id`,`movies_id`),
  ADD KEY `movies_id` (`movies_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movies_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actors_performance`
--
ALTER TABLE `actors_performance`
  ADD CONSTRAINT `actors_performance_ibfk_1` FOREIGN KEY (`actors_id`) REFERENCES `actors` (`actors_id`),
  ADD CONSTRAINT `actors_performance_ibfk_2` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`movies_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
