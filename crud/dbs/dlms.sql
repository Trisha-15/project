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
-- Database: `dlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_list`
--

CREATE TABLE `students_list` (
  `id` int(11) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_lname` varchar(255) NOT NULL,
  `student_pass` varchar(250) NOT NULL,
  `student_course` varchar(250) NOT NULL,
  `student_section` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_list`
--

INSERT INTO `students_list` (`id`, `student_number`, `student_fname`, `student_lname`, `student_pass`, `student_course`, `student_section`) VALUES
(1, '7070001', 'Jhon Paul', 'Riopay', '00000', 'BSCS', 'CS_501'),
(2, '7070000', 'Ismael', 'Bayor III', '00000', 'BSCS', 'CS-501');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_list`
--

CREATE TABLE `teachers_list` (
  `id` int(11) NOT NULL,
  `teacher_number` varchar(250) NOT NULL,
  `teacher_fname` varchar(255) DEFAULT NULL,
  `teacher_lname` varchar(255) DEFAULT NULL,
  `teacher_pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers_list`
--

INSERT INTO `teachers_list` (`id`, `teacher_number`, `teacher_fname`, `teacher_lname`, `teacher_pass`) VALUES
(1, '870001', 'John Cyrus', 'Guevarra', '00000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_list`
--
ALTER TABLE `students_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_number` (`student_number`);

--
-- Indexes for table `teachers_list`
--
ALTER TABLE `teachers_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_number` (`teacher_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_list`
--
ALTER TABLE `students_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers_list`
--
ALTER TABLE `teachers_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
