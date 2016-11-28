-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2016 at 12:09 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `membermanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientinfo`
--

CREATE TABLE `clientinfo` (
  `Username` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Birthday` varchar(50) NOT NULL,
  `Team` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientinfo`
--

INSERT INTO `clientinfo` (`Username`, `Name`, `Email`, `Birthday`, `Team`, `Position`) VALUES
('a1111', 'Shovon', 'mislam543@gmail.com', '31 oct ', 'Team A', 'Head'),
('a2222', 'Mohidul', 'mislam543@gmail.com', '15061994', 'Team B', 'Head'),
('a3333', 'Islam', 'bjsdad@hjga.com', '21 may', 'Team C', 'Head'),
('a4444', 'Sam', 'jdskjhfjksb@dskjhkjah.vjkj', 'a', 'Team A', 'Head'),
('a5555', 'Rafi', '', '26 oct', 'Team E', 'Head'),
('a6666', 'Nabila', 'hdsgfb@shd.cdsj', '01-12-1994', 'Team D', 'Head'),
('a7777', 'William', 'hsagdhgh@ghsadgh.com', '', 'Team B', 'Sr Programmer'),
('a8888', 'Avijit', 'ghfsahg@bsd.com', '25 sep 1994', 'Team B', 'Analyzer'),
('a9999', 'Diponkor', '', '2008-02-29', 'Team A', 'Head');

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`Username`, `Password`) VALUES
('a1111', '1111'),
('a2222', '2222'),
('a3333', '3333'),
('a4444', '4444'),
('a5555', '5555'),
('a6666', '6666'),
('a7777', '7777'),
('a8888', '8888'),
('a9999', '9999');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Team_Name` varchar(10) NOT NULL,
  `Project` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Team_Name`, `Project`) VALUES
('Team A', 'Storage/Energy efficient Cloud Computing'),
('Team B', 'Visual Cryptography (Image encryption and decryption)'),
('Team C', 'Monitoring Suspicious Discussions On Online Forums Using Data Mining'),
('Team D', 'Android Patient Tracker'),
('Team E', 'Online Bookstore System On Cloud Infrastructure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientinfo`
--
ALTER TABLE `clientinfo`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `logindb`
--
ALTER TABLE `logindb`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Team_Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
