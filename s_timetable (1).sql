-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 08:51 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_timetable`
--

CREATE TABLE `s_timetable` (
  `class` varchar(8) NOT NULL,
  `day` varchar(10) NOT NULL,
  `p1` varchar(30) NOT NULL,
  `p2` varchar(30) NOT NULL,
  `p3` varchar(30) NOT NULL,
  `p4` varchar(30) NOT NULL,
  `p5` varchar(30) NOT NULL,
  `p6` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_timetable`
--

INSERT INTO `s_timetable` (`class`, `day`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
('CSE1-2/4', 'Mon', '16CSC11', '16CSE01', '16CSE01', '16CSC12', '16CSC13', '16MBC01'),
('CSE1-2/4', 'Tue', '16CSC12', '16CSC11', '16CSC10', '161CAC10', '16CSC13', '16CSC12'),
('CSE1-2/4', 'Wed', '16CSC12', '16MBC01', '16CSC10', '16CSC11', '16CSC12', '16CSC10'),
('CSE1-2/4', 'Thu', '16CSC10', '16CSC12', '16MBC01', '16CSC11', '16CSC13', 'null'),
('CSE1-2/4', 'Fri', '16CSC10', '16CSC11', '16CSC12', '16CSC11', '16CSE01', 'null'),
('CSE1-2/4', 'Sat', 'null', 'null', 'null', 'null', 'null', 'null'),
('CSE1-2/4', 'Sun', 'null', 'null', 'null', 'null', 'null', 'null'),
('CSE2-2/4', 'Mon', '16CSC10', '16CSC11', '16CSC12', '16CSC11', '16CSE01', 'null'),
('CSE2-2/4', 'Tue', '16CSC10', '16CSC12', '16MBC01', '16CSC11', '16CSC13', 'null'),
('CSE2-2/4', 'Wed', '16CSC11', '16CSE01', '16CSE01', '16CSC12', '16CSC13', '16MBC01'),
('CSE2-2/4', 'Thu', '16CSC12', '16CSC11', '16CSC10', '161CAC10', '16CSC13', '16CSC12'),
('CSE2-2/4', 'Fri', '16CSC12', '16MBC01', '16CSC10', '16CSC11', '16CSC12', '16CSC10'),
('CSE2-2/4', 'Sat', 'null', 'null', 'null', 'null', 'null', 'null'),
('CSE2-2/4', 'Sun', 'null', 'null', 'null', 'null', 'null', 'null'),
('CSE3-2/4', 'Mon', '16CSC12', '16MBC01', '16CSC10', '16CSC11', '16CSC12', '16CSC10'),
('CSE3-2/4', 'Tue', '16CSC10', '16CSC11', '16CSC12', '16CSC11', '16CSE01', 'null'),
('CSE3-2/4', 'Wed', '16CSC12', '16CSC11', '16CSC10', '161CAC10', '16CSC13', '16CSC12'),
('CSE3-2/4', 'Thu', '16CSC10', '16CSC12', '16MBC01', '16CSC11', '16CSC13', 'null'),
('CSE3-2/4', 'Fri', '16CSC11', '16CSE01', '16CSE01', '16CSC12', '16CSC13', '16MBC01'),
('CSE3-2/4', 'Sat', 'null', 'null', 'null', 'null', 'null', 'null'),
('CSE3-2/4', 'Sun', 'null', 'null', 'null', 'null', 'null', 'null');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
