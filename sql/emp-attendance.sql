-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 12:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp-attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(255) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `time` time(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `attendance` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_id`, `time`, `date`, `attendance`) VALUES
(1, 'Jr-101', '09:00:00.000000', '04/03/2020', 'Present'),
(2, 'Jr-102', '09:00:00.000000', '04/03/2020', 'Present'),
(6, 'Jr-101', '09:00:00.000000', '07/03/2020', 'Present'),
(7, 'Jr-102', '09:00:00.000000', '07/03/2020', 'Present'),
(8, 'Jr-103', '09:00:00.000000', '07/03/2020', 'Present'),
(9, 'Jr-104', '09:00:00.000000', '07/03/2020', 'Present'),
(10, 'Sr-101', '09:15:00.000000', '07/03/2020', 'Absent'),
(11, 'Jr-101', '09:00:00.000000', '08/03/2020', 'Present'),
(12, 'Jr-102', '09:00:00.000000', '08/03/2020', 'Present'),
(13, 'Jr-103', '09:00:00.000000', '08/03/2020', 'Present'),
(14, 'Jr-104', '09:00:00.000000', '08/03/2020', 'Present'),
(15, 'Sr-101', '00:00:00.000000', '08/03/2020', 'Present'),
(16, 'Jr-101', '09:00:00.000000', '09/03/2020', 'Present'),
(17, 'Jr-102', '09:00:00.000000', '09/03/2020', 'Present'),
(18, 'Jr-103', '09:00:00.000000', '09/03/2020', 'Present'),
(19, 'Jr-104', '09:00:00.000000', '09/03/2020', 'Present'),
(20, 'Sr-101', '09:00:00.000000', '09/03/2020', 'Present'),
(21, 'Jr-101', '09:00:00.000000', '11/03/2020', 'Present'),
(22, 'Jr-102', '09:00:00.000000', '11/03/2020', 'Present'),
(23, 'Jr-103', '09:00:00.000000', '11/03/2020', 'Present'),
(24, 'Jr-104', '09:00:00.000000', '11/03/2020', 'Present'),
(25, 'Sr-101', '09:00:00.000000', '11/03/2020', 'Present'),
(26, 'Jr-101', '09:00:00.000000', '12/03/2020', 'Present'),
(27, 'Jr-102', '09:00:00.000000', '12/03/2020', 'Present'),
(28, 'Jr-103', '09:00:00.000000', '12/03/2020', 'Present'),
(29, 'Jr-104', '09:00:00.000000', '12/03/2020', 'Present'),
(30, 'Sr-101', '09:00:00.000000', '12/03/2020', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `dob` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `supervisor` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `joining_date` text NOT NULL,
  `salary` int(20) NOT NULL,
  `phn_no` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `image`, `first_name`, `last_name`, `employee_id`, `designation`, `dob`, `gender`, `supervisor`, `address`, `joining_date`, `salary`, `phn_no`, `email`) VALUES
(4, 'f7afa86f16010a185982b9474231d53f.jpg', 'Amit', 'Chakraboti', 'Jr-103', 'Jr. Software Engineer', '20-11-1996', 'Male', 'Pranto Kumer', 'Rajshahi', '01-03-2020', 6000, '01748789456', 'amitkumer.cse@gmail.com'),
(5, 'e8cad3a0257a628d63c0ad2f1866abfe.jpg', 'Atik', 'Mahmud', 'Jr-102', 'Jr. Software Engineer', '15-11-1996', 'Female', 'Pranto Kumer', 'Rajshahi', '01-03-2020', 6000, '01749941982', 'atiikmahmud@gmail.com'),
(6, 'dd4f11e177e62624c75929cd1e4e8a1e.jpg', 'Md. Sayem', 'Basar', 'Jr-101', 'Jr. Software Engineer', '20-11-1996', 'Male', 'Pranto Kumer', 'Rajshahi', '01-03-2020', 6000, '01773367190', 'sayemb.cse@gmail.com'),
(8, 'aa0184de3331f840c5d578bdccc326bb.jpg', 'Sayeed', 'Anwar', 'Jr-104', 'Jr. Software Engineer', '03-08-1995', 'Male', 'Pranto Kumer', 'Rajshahi', '04-03-2020', 6000, '01734134418', 'anwarsobuj007@gmail.com'),
(9, '444d9795f1d1e2c63cbf9f55db0316b2.jpg', 'Pranto', 'Kumer', 'Sr-101', 'Software Engineer', '01-01-1995', 'Male', 'Md. Mohaiminul Islam', 'Rajshahi', '01-03-2020', 20000, '01777777778', 'prantok104@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `usersname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `usersname`, `email`, `password`, `status`) VALUES
(1, 'e8cad3a0257a628d63c0ad2f1866abfe.jpg', 'Atik Mahmud', 'atiikmahmud@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jr. Software Engineer'),
(2, '444d9795f1d1e2c63cbf9f55db0316b2.jpg', 'Pranto  Kumer', 'pranto@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Software Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
