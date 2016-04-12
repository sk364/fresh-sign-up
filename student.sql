-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2016 at 06:21 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `NAME` varchar(25) NOT NULL,
  `ROLLNO` int(7) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `DATEOFBIRTH` date NOT NULL,
  `SEX` char(1) NOT NULL,
  `BRANCH` varchar(5) NOT NULL,
  `DISCIPLINE` varchar(7) NOT NULL,
  `YEAR` year(4) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`ROLLNO`),
  UNIQUE KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NAME`, `ROLLNO`, `USERNAME`, `DATEOFBIRTH`, `SEX`, `BRANCH`, `DISCIPLINE`, `YEAR`, `PASSWORD`) VALUES
('Aman', 2014017, 'amanagarwal', '1995-02-09', 'M', 'CSE', 'B.Tech', 2014, '$2y$11$HHCwkzv0JUFmHU8StIpt1uAUJ/4kPp026M/CRQ2Ecat'),
('sachin', 2014149, 'sachinkukreja', '1996-06-03', 'M', 'CSE', 'B.Tech', 2014, '$2y$11$zQ7.ZLtn.k6c6Ir3FojTLeFpAabCCUVtchJZAtPzOm/'),
('Utsav', 2014196, 'utsavpoddar', '1996-02-05', 'M', 'CSE', 'B.Tech', 2014, '$2y$11$724pqdwcS5ffUpxBDvWTOeDgG05.r.KOZhCC2LCMDsR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
