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
-- Table structure for table `t_subjects`
--

CREATE TABLE `t_subjects` (
  `tid` varchar(6) NOT NULL,
  `sub_code` varchar(7) NOT NULL,
  `class` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_subjects`
--

INSERT INTO `t_subjects` (`tid`, `sub_code`, `class`) VALUES
('CSE301', '16CSC11', 'CSE3-2/4'),
('CSE302', '16CSC10', 'CSE3-2/4'),
('CSE303', '16CSC12', 'CSE3-2/4'),
('CSE304', '16CSC13', 'CSE3-2/4'),
('CSE305', '16CSE01', 'CSE3-2/4'),
('CSE306', '16MBC01', 'CSE3-2/4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
