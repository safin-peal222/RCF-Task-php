-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 07:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rcf_task`
--
CREATE DATABASE IF NOT EXISTS `rcf_task` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rcf_task`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(200) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` int(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(10) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `email`, `mobile`, `password`, `cpassword`, `token`, `status`) VALUES
('safin Mahmud', 'pealmhmd222@gmail.com', 1727889667, '123', '123', 'ef8864ac796a4d54fb25c89b35a818', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `dev_pealece'17`
--

CREATE TABLE `dev_pealece'17` (
  `gfdfg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donorlist`
--

CREATE TABLE `donorlist` (
  `Name` text NOT NULL,
  `Blood_Group` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `Address` varchar(10) NOT NULL,
  `count` int(10) NOT NULL,
  `serial` int(11) NOT NULL,
  `DEL` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorlist`
--

INSERT INTO `donorlist` (`Name`, `Blood_Group`, `email`, `phone`, `Address`, `count`, `serial`, `DEL`) VALUES
('safin', 'B+', '2222@gmail.com', 'afadfdsfsdf', 'dasfdfdsf4', 5, 22, 1),
('safin', 'A+', 'balohoia@gmail.com', '12343554', 'fgfggfrdet', 0, 46, NULL),
('anamika', 'AB+', 'faysaltorun@gmail.com', '01912901379', 'dhaka', 2, 26, NULL),
('safin', 'A+', 'OTHOI@gmail.com', '01868981975', 'fdgdfgdfgd', 0, 38, NULL),
('anamikargtr', 'B-', 'safinh@gmail.com', '948234723845', 'fsdssdfsd', 0, 23, 1),
('peal', 'A+', 'safinpeal222@gmail.com', '01727889667', 'Demra,Dhak', 0, 29, 1),
('Ahsan Mahmud', 'B+', 'sazid@gmail.com', '01680775529', 'Farmgate,D', 0, 27, NULL),
('safin', 'A+', 'shila@gmail.com', '123', 'fgfdgdfg', 0, 44, NULL),
('safin', 'B+', 'taz@gmail.com', '6756756756', 'gfhgfhfg', 1, 25, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donorlist`
--
ALTER TABLE `donorlist`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donorlist`
--
ALTER TABLE `donorlist`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
