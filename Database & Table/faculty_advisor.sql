-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `COMMENT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`NAME`, `EMAIL`, `COMMENT`) VALUES
('Kumaran Raja', 'kumaranraja777@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `YEAR` int(20) NOT NULL,
  `REG_NO` bigint(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `FACULTY_NAME` varchar(50) NOT NULL,
  `FATHER_NAME` varchar(50) NOT NULL,
  `MOTHER_NAME` varchar(50) NOT NULL,
  `MOBILE_NO` bigint(10) NOT NULL,
  `FATHER_NO` bigint(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `SEM_ATT` varchar(35) NOT NULL,
  `SEM_CGP` varchar(35) NOT NULL,
  `SEM_CIE_NO` varchar(35) NOT NULL,
  `SUB1_MARK` varchar(35) NOT NULL,
  `SUB2_MARK` varchar(35) NOT NULL,
  `SUB3_MARK` varchar(35) NOT NULL,
  `SUB4_MARK` varchar(35) NOT NULL,
  `SUB5_MARK` varchar(35) NOT NULL,
  `SUB6_MARK` varchar(35) NOT NULL,
  `CERTIFICATE_1` varchar(50) NOT NULL,
  `CERTIFICATE_2` varchar(50) NOT NULL,
  `CERTIFICATE_3` varchar(50) NOT NULL,
  `CERTIFICATE_4` varchar(50) NOT NULL,
  `CERTIFICATE_5` varchar(50) NOT NULL,
  `ACTIVITY_1` varchar(50) NOT NULL,
  `ACTIVITY_2` varchar(50) NOT NULL,
  `ACTIVITY_3` varchar(50) NOT NULL,
  `ACTIVITY_4` varchar(50) NOT NULL,
  `ACTIVITY_5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `email`, `password`) VALUES
('varun', 'varunv@gmail.com', '12345'),
('kumaran', 'kumaranraja777@gmail.com', '12345'),
('sabari', 'sabarishan05122000@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
