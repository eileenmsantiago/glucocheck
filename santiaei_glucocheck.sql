-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2019 at 12:15 AM
-- Server version: 10.3.21-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `santiaei_glucocheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg`
--

CREATE TABLE `bg` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `level` decimal(10,0) NOT NULL,
  `beforeAfter` enum('before','after') NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bg`
--

INSERT INTO `bg` (`id`, `userID`, `level`, `beforeAfter`, `time`, `date`) VALUES
(14, 9, 10, 'after', '11:45:00', '2019-12-16'),
(2, 8, 5, 'before', '12:00:00', '2019-12-13'),
(7, 8, 19, 'after', '08:40:00', '2019-12-15'),
(4, 8, 10, 'after', '01:21:00', '2019-12-13'),
(5, 8, 13, 'before', '11:48:00', '2019-12-14'),
(6, 8, 5, 'before', '12:00:00', '2019-12-17'),
(8, 8, 24, 'after', '09:54:00', '2019-12-15'),
(9, 2, 1, 'after', '11:45:00', '2019-12-15'),
(10, 8, 5, 'before', '11:45:00', '2019-12-18'),
(15, 9, 5, 'before', '11:45:00', '2019-12-17'),
(16, 9, 18, 'before', '11:45:00', '2019-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contactFullName` text NOT NULL,
  `contactEmail` varchar(50) NOT NULL,
  `contactQuestion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personalHealth`
--

CREATE TABLE `personalHealth` (
  `id` int(11) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('male','female','prefer','other') NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `diabetesType` enum('type1','type2','other') NOT NULL,
  `medication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(8, 'Eileen', 'Santiago', 'eileen@gmail.com', 'password'),
(9, 'John', 'Doe', 'john@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg`
--
ALTER TABLE `bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalHealth`
--
ALTER TABLE `personalHealth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg`
--
ALTER TABLE `bg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personalHealth`
--
ALTER TABLE `personalHealth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
