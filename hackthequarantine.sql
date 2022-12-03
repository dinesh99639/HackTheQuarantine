-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 06:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackthequarantine`
--

-- --------------------------------------------------------

--
-- Table structure for table `round2`
--

CREATE TABLE `round2` (
  `userid` int(11) NOT NULL,
  `q1` int(10) NOT NULL,
  `q2` int(10) NOT NULL,
  `q3` int(10) NOT NULL,
  `q4` int(10) NOT NULL,
  `q5` int(10) NOT NULL,
  `q6` int(10) NOT NULL,
  `q7` int(10) NOT NULL,
  `q8` int(10) NOT NULL,
  `q9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `round2`
--

INSERT INTO `round2` (`userid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`) VALUES
(1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `college` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `rollno` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `hackerrank` varchar(255) NOT NULL,
  `round1` tinyint(1) NOT NULL DEFAULT 1,
  `round2` tinyint(1) NOT NULL DEFAULT 0,
  `round3` tinyint(1) NOT NULL DEFAULT 0,
  `round4` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `name`, `password`, `usertype`, `college`, `year`, `department`, `rollno`, `mobile`, `hackerrank`, `round1`, `round2`, `round3`, `round4`) VALUES
(-1, 'participant', 'Participant', 'z', 'participant', '-', 0, '-', '-', '-', '-', 1, 0, 0, 0),
(0, 'admin', 'Admin', 'z', 'admin', '-', 0, '-', '-', '-', '-', 1, 0, 0, 0),
(1, 'participant@gmail.com', 'Participant', 'htq2020', 'participant', 'Anil neerukonda institute of technology and sciences', 3, 'CSE', '', '9999999999', '', 1, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `round2`
--
ALTER TABLE `round2`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
