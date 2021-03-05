-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 02:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE `book_table` (
  `id` int(11) NOT NULL,
  `code` varchar(25) NOT NULL,
  `code_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `book` varchar(300) NOT NULL,
  `author` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `rack` varchar(25) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `count` varchar(20) NOT NULL,
  `total` varchar(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `timestamp` timestamp(6) NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`id`, `code`, `code_id`, `status`, `book`, `author`, `price`, `rack`, `arrival`, `count`, `total`, `class`, `timestamp`) VALUES
(1, 'AAAA', 'AAAA0', 'Available', 'Revoultionary Army', 'One Piece', '125', '5', 'Jan 06 2001', '3', '3', 'ANM', '2021-02-20 12:31:17.000000'),
(2, 'AAAA', 'AAAA1', 'Available', 'Revoultionary Army', 'One Piece', '125', '5', 'Jan 10 2021', '3', '3', 'ANM', '2021-02-20 12:31:14.000000'),
(3, 'AAAA', 'AAAA2', 'Available', 'Revolutionay Army', 'One Piece', '125', '5', 'Jan 06 2001', '3', '3', 'ANM', '2021-02-20 12:31:20.000000'),
(4, 'AAAB', 'AAAB0', 'Pending', 'Kara', 'Boruto', '105', '3', 'Jan 10 2001', '1', '2', 'ANM', '2021-02-20 12:31:11.000000'),
(5, 'AAAB', 'AAAB1', 'Available', 'Kara', 'Boruto', '105', '3', 'Jan 10 2001', '1', '2', 'ANM', '2021-02-20 12:31:04.000000'),
(36, 'FTAY', 'FTAY0', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 01:30:01.574631'),
(37, 'FTAY', 'FTAY1', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 01:30:01.574631'),
(38, 'FTAY', 'FTAY2', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 01:30:01.574631'),
(45, 'FTAY', 'FTAY3', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 02:19:14.334472'),
(46, 'FTAY', 'FTAY4', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 02:19:14.334472'),
(47, 'FTAY', 'FTAY5', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 02:24:28.842625'),
(48, 'FTAY', 'FTAY6', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 02:25:29.033520'),
(49, 'FTAY', 'FTAY7', 'Available', 'Rizal\'s Life', 'Jose Rizal', '85', '3', '2021-11-23', '8', '8', '3', '2021-02-22 02:25:29.033520');

-- --------------------------------------------------------

--
-- Table structure for table `class_table`
--

CREATE TABLE `class_table` (
  `id` int(11) NOT NULL,
  `code` varchar(25) NOT NULL,
  `categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_table`
--

INSERT INTO `class_table` (`id`, `code`, `categories`) VALUES
(1, 'MATH', 'Mathematics'),
(3, 'HIS', 'History'),
(4, 'ENG', 'English'),
(5, 'FIL', 'Filipino'),
(6, 'PE', 'Physical Education'),
(7, 'A&M', 'Arts and Music'),
(8, 'ENGR', 'Engineering'),
(9, 'TECH', 'Technology'),
(10, 'SCIFI', 'Science Fiction'),
(15, 'HOR', 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `issue_table`
--

CREATE TABLE `issue_table` (
  `id` int(11) NOT NULL,
  `member` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `issued` varchar(50) NOT NULL,
  `return` varchar(50) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_table`
--

INSERT INTO `issue_table` (`id`, `member`, `code`, `status`, `issued`, `return`, `timestamp`) VALUES
(29, 'QWER1234', 'AAAB0', 'Pending', '2021-02-23', '2021-02-28', '2021-02-24 05:07:11.578081');

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

CREATE TABLE `member_table` (
  `id` int(11) NOT NULL,
  `member_id` varchar(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `section` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`id`, `member_id`, `name`, `section`, `contact`) VALUES
(1, 'QWER1234', 'Tom N. Jerry', '7-Masipag', '09123456789');

-- --------------------------------------------------------

--
-- Table structure for table `return_table`
--

CREATE TABLE `return_table` (
  `id` int(11) NOT NULL,
  `member` varchar(25) NOT NULL,
  `code` varchar(25) NOT NULL,
  `release` varchar(50) NOT NULL,
  `expire` varchar(50) NOT NULL,
  `return` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_table`
--

INSERT INTO `return_table` (`id`, `member`, `code`, `release`, `expire`, `return`, `status`, `timestamp`) VALUES
(11, 'QWER1234', 'AAAA0', '2021-02-23', '2021-02-28', '2021-03-02', 'Late', '2021-03-02 17:41:52.588698'),
(12, 'QWER1234', 'FTAY0', '2021-03-02', '2021-03-10', '2021-03-02', 'Late', '2021-03-02 17:58:21.268268');

-- --------------------------------------------------------

--
-- Table structure for table `setting_table`
--

CREATE TABLE `setting_table` (
  `id` int(11) NOT NULL,
  `days_borrowed` varchar(11) NOT NULL,
  `book_categories` varchar(11) NOT NULL,
  `admin_population` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_table`
--

INSERT INTO `setting_table` (`id`, `days_borrowed`, `book_categories`, `admin_population`) VALUES
(1, '8', '15', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `status` varchar(55) NOT NULL,
  `admin_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `email`, `password`, `status`, `admin_level`) VALUES
(1, 'Aries Hachaso', 'lms-aries@gmail.com', '0192023a7bbd73250516f069df18b500', 'Librarian', 1),
(3, 'Ian Destura', 'idestura35@gmail.com', '0192023a7bbd73250516f069df18b500', 'Administrator', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_id` (`code_id`);

--
-- Indexes for table `class_table`
--
ALTER TABLE `class_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_table`
--
ALTER TABLE `issue_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_table_ibfk_1` (`member`),
  ADD KEY `issue_table_ibfk_2` (`code`);

--
-- Indexes for table `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `member_id` (`member_id`);

--
-- Indexes for table `return_table`
--
ALTER TABLE `return_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_table`
--
ALTER TABLE `setting_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_table`
--
ALTER TABLE `book_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `class_table`
--
ALTER TABLE `class_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `issue_table`
--
ALTER TABLE `issue_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `member_table`
--
ALTER TABLE `member_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `return_table`
--
ALTER TABLE `return_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `setting_table`
--
ALTER TABLE `setting_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue_table`
--
ALTER TABLE `issue_table`
  ADD CONSTRAINT `issue_table_ibfk_1` FOREIGN KEY (`member`) REFERENCES `member_table` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `issue_table_ibfk_2` FOREIGN KEY (`code`) REFERENCES `book_table` (`code_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
