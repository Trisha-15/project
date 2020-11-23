-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_course`
--

CREATE TABLE `add_course` (
  `id` int(11) NOT NULL,
  `ImageName` blob NOT NULL,
  `SubjectName` varchar(255) NOT NULL,
  `SubjectCode` varchar(255) NOT NULL,
  `StartSchedule` date NOT NULL,
  `EndSchedule` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_course`
--

INSERT INTO `add_course` (`id`, `ImageName`, `SubjectName`, `SubjectCode`, `StartSchedule`, `EndSchedule`) VALUES
(66, 0x61707053706c6173682e706e67, 'Application Development', 'ICT-109826 - CS-501', '2020-11-01', '2020-12-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_course`
--
ALTER TABLE `add_course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_course`
--
ALTER TABLE `add_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
