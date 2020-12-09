-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 11:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camellia`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidatesresult`
--

CREATE TABLE `candidatesresult` (
  `CandidateNationalId` int(25) NOT NULL,
  `FirstName` varchar(60) NOT NULL,
  `LastName` varchar(60) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `PostId` int(10) NOT NULL,
  `ExamDate` date NOT NULL,
  `PhoneNumber` varchar(16) NOT NULL,
  `Marks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidatesresult`
--

INSERT INTO `candidatesresult` (`CandidateNationalId`, `FirstName`, `LastName`, `Gender`, `DateOfBirth`, `PostId`, `ExamDate`, `PhoneNumber`, `Marks`) VALUES
(45555, 'h', 'm', 'Male', '2019-10-08', 3, '2019-10-23', '95489', 97),
(4555599, 'h', 'm', 'Male', '2019-10-08', 3, '2019-10-23', '954890', 30),
(19999999, 'NIYIBIGENA', 'Jean Paul', 'Male', '1994-10-05', 11, '2019-01-01', '0722643096', 99.2),
(1199489349, 'Hubert', 'NSHIZE', 'Male', '1999-01-01', 4, '2019-09-01', '0784102075', 81),
(2147483647, 'Hubert', 'NSHIZE', 'Male', '1999-01-01', 4, '2019-09-01', '0784102075', 75);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostId` int(10) NOT NULL,
  `PostName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostId`, `PostName`) VALUES
(3, 'Manager  '),
(4, 'waiter'),
(7, 'security'),
(9, 'nurse'),
(10, 'cooker'),
(11, 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(10) NOT NULL,
  `UserName` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Password`) VALUES
(1, 'niyibigena', 'jeanpaul1'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatesresult`
--
ALTER TABLE `candidatesresult`
  ADD UNIQUE KEY `CandidateNationalId` (`CandidateNationalId`),
  ADD KEY `PostId` (`PostId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidatesresult`
--
ALTER TABLE `candidatesresult`
  ADD CONSTRAINT `candidatesresult_ibfk_1` FOREIGN KEY (`PostId`) REFERENCES `post` (`PostId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
