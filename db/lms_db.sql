-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 03:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
(53, 'DXLT', 'DXLT0', 'Available', 'Algebra 1', 'Mimiyuh', '230', '1', '2021-04-02', '2', '2', 'MATH', '2021-04-02 08:11:59.887807'),
(54, 'DXLT', 'DXLT1', 'Available', 'Algebra 1', 'Mimiyuh', '230', '1', '2021-04-02', '2', '2', 'MATH', '2021-04-02 08:11:59.887807'),
(56, 'SRYI', 'SRYI0', 'Pending', 'Makabayan', 'Jonh Doe', '120', '10', '2021-04-02', '4', '5', 'HIS', '2021-04-02 08:22:10.758815'),
(57, 'SRYI', 'SRYI1', 'Available', 'Makabayan', 'Jonh Doe', '120', '10', '2021-04-02', '4', '5', 'HIS', '2021-04-02 08:22:10.758815'),
(58, 'SRYI', 'SRYI2', 'Available', 'Makabayan', 'Jonh Doe', '120', '10', '2021-04-02', '4', '5', 'HIS', '2021-04-02 08:22:10.758815'),
(59, 'SRYI', 'SRYI3', 'Available', 'Makabayan', 'Jonh Doe', '120', '10', '2021-04-02', '4', '5', 'HIS', '2021-04-02 08:22:10.758815'),
(60, 'SRYI', 'SRYI4', 'Available', 'Makabayan', 'Jonh Doe', '120', '10', '2021-04-02', '4', '5', 'HIS', '2021-04-02 08:22:10.758815'),
(61, 'JRTI', 'JRTI0', 'Pending', 'Different Festival in the Phillipines ', 'Jose Makatarungan', '182', '7', '2021-04-03', '2', '3', 'ARTS', '2021-04-03 04:35:51.691706'),
(62, 'JRTI', 'JRTI1', 'Available', 'Different Festival in the Phillipines ', 'Jose Makatarungan', '182', '7', '2021-04-03', '2', '3', 'ARTS', '2021-04-03 04:35:51.691706'),
(63, 'JRTI', 'JRTI2', 'Available', 'Different Festival in the Phillipines ', 'Jose Makatarungan', '182', '7', '2021-04-03', '2', '3', 'ARTS', '2021-04-03 04:35:51.691706'),
(64, 'EOVS', 'EOVS0', 'Available', 'Biology', 'Julius Explorer', '300', '9', '2021-04-03', '2', '2', 'SCI', '2021-04-03 04:37:38.562829'),
(65, 'EOVS', 'EOVS1', 'Available', 'Biology', 'Julius Explorer', '300', '9', '2021-04-03', '2', '2', 'SCI', '2021-04-03 04:37:38.562829'),
(66, 'FNPM', 'FNPM0', 'Pending', 'Physics ', 'Mweton Drigder', '290', '9', '2021-04-03', '2', '3', 'SCI', '2021-04-03 04:38:59.967925'),
(67, 'FNPM', 'FNPM1', 'Available', 'Physics ', 'Mweton Drigder', '290', '9', '2021-04-03', '2', '3', 'SCI', '2021-04-03 04:38:59.967925'),
(68, 'FNPM', 'FNPM2', 'Available', 'Physics ', 'Mweton Drigder', '290', '9', '2021-04-03', '2', '3', 'SCI', '2021-04-03 04:38:59.967925'),
(69, 'UVOL', 'UVOL0', 'Pending', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(70, 'UVOL', 'UVOL1', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(71, 'UVOL', 'UVOL2', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(72, 'UVOL', 'UVOL3', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(73, 'UVOL', 'UVOL4', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(74, 'UVOL', 'UVOL5', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(75, 'UVOL', 'UVOL6', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(76, 'UVOL', 'UVOL7', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(77, 'UVOL', 'UVOL8', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(78, 'UVOL', 'UVOL9', 'Available', 'DOREMI', 'Regine Songer', '260', '8', '2021-04-03', '9', '10', 'MUS', '2021-04-03 04:41:08.463974'),
(79, 'UBHG', 'UBHG0', 'Available', 'Web Design and Development', 'ian Destura', '450', '11', '2021-04-03', '2', '2', 'TECH', '2021-04-03 05:02:15.061876'),
(80, 'UBHG', 'UBHG1', 'Available', 'Web Design and Development', 'ian Destura', '450', '11', '2021-04-03', '2', '2', 'TECH', '2021-04-03 05:02:15.061876');

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
(20, 'HIS', 'History'),
(21, 'MATH', 'Mathematics'),
(22, 'SCI', 'Science'),
(23, 'TECH', 'Computers and Technology'),
(24, 'BUSN', 'Business'),
(25, 'ENG', 'English Literature'),
(26, 'FIL', 'Filipino Literature'),
(27, 'MUS', 'Music'),
(28, 'PE', 'Physical Education'),
(29, 'ARTS', 'Arts'),
(30, 'ENGNR', 'Engineering');

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
(44, 'HSDZ5948', 'SRYI0', 'Pending', '2021-04-03', '2021-04-11', '2021-04-03 04:28:31.432796'),
(45, 'HSDZ5948', 'FNPM0', 'Pending', '2021-04-03', '2021-04-11', '2021-04-03 04:39:27.872563'),
(46, 'MGCE4851', 'JRTI0', 'Pending', '2021-04-03', '2021-04-11', '2021-04-03 04:40:17.920353'),
(47, 'MGCE4851', 'UVOL0', 'Pending', '2021-04-03', '2021-04-11', '2021-04-03 04:41:51.545264');

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
(3, 'MGCE4851', 'Boruto Uzumaki', '9-Aluminum', '09123456789'),
(4, 'HSDZ5948', 'Monkey D. Luffy', '10-Aristotle', '09123456789');

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
(13, 'HSDZ5948', 'DXLT0', '2021-04-03', '2021-04-11', '2021-04-03', 'On Time', '2021-04-03 04:45:44.692287');

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
(4, 'admin', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 'Super Administrator', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `class_table`
--
ALTER TABLE `class_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `issue_table`
--
ALTER TABLE `issue_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `member_table`
--
ALTER TABLE `member_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `return_table`
--
ALTER TABLE `return_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `setting_table`
--
ALTER TABLE `setting_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
