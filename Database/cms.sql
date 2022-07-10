-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 01:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `password`) VALUES
('A2305219303', '9818037464');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `fullname` varchar(100) NOT NULL,
  `enrollment_id` varchar(100) NOT NULL,
  `certificate_id` varchar(100) NOT NULL,
  `issued_by` varchar(100) NOT NULL,
  `doi` varchar(100) NOT NULL,
  `doe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`fullname`, `enrollment_id`, `certificate_id`, `issued_by`, `doi`, `doe`) VALUES
('Garv Pratap ', '382408', 'fdsf', 'fldjsfjds', '2022-06-09', '2022-06-10'),
('Shashikant Solanki', 'A2305219303', '23047302', 'Amity University', '2022-07-14', '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `enrollment_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`enrollment_id`, `name`, `message`) VALUES
('A2305219303', 'Shashikant Solanki', 'hello jfjds f fjsdjf dsjfjsdafjdsajf jfjdsajfljsd');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fullname` varchar(100) NOT NULL,
  `enrollment_id` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fullname`, `enrollment_id`, `email_id`, `gender`, `dob`, `password`) VALUES
('Garv Pratap Singh', 'A2305219302', 'garvpratapsingh.gps@gmail.com', 'Male', '2022-07-16', '1234five'),
('Shashikant Solanki', 'A2305219303', 'shashikantsolanki042@gmail.com', 'Male', '2022-06-06', '1234five'),
('Ashutosh Sharma', 'A2305219323', 'ashutoshsharma1@gmail.com', 'Male', '2022-07-09', '1234five');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `queryTitle` varchar(255) NOT NULL,
  `queryDetails` mediumtext NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `queryTitle`, `queryDetails`, `postingDate`) VALUES
(2, 'Update Password', 'Hello Admin Please Update my password\r\nShashikant Solanki\r\nA2305219303', '2022-06-30 18:39:03'),
(4, 'Certificate issue', 'There is issue in my certificate please fix it.', '2022-07-06 11:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `password`) VALUES
('A2305219302', '1234five'),
('A2305219303', '1234five'),
('A2305219337', '1234five');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`enrollment_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`enrollment_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enrollment_id`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
