-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 06:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` int(11) NOT NULL,
  `do_birth` date NOT NULL,
  `tech` varchar(100) NOT NULL,
  `sem` tinyint(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `do_birth`, `tech`, `sem`, `address`, `mobile`, `status`, `reg_date`) VALUES
(1, 'Jayed', 101, '2016-09-14', 'Computer', 6, 'tungipara, gopalgong.', '12345678941', 1, '2021-11-04 17:14:37'),
(2, 'Mohammad', 102, '1999-02-20', 'computer', 4, 'tungipara, gopalgong.', '01245975412', 1, '2021-11-06 17:30:19'),
(8, 'jayed', 110, '2021-11-04', 'Civil', 1, 'Tungipara, gopalgonj, Padma, Bangladesh', '12345678925', 1, '2021-11-04 15:44:11'),
(9, 'Tahoma', 100, '2021-11-24', 'RAC', 2, 'Bagerhat, Khulna, Bangladesh', '12345678925', 1, '2021-11-04 15:44:11'),
(10, 'abc', 111, '1990-08-01', 'RAC', 2, 'Khulna, Bangladesh', '01910457458', 0, '2021-11-06 14:21:37'),
(11, 'a', 501, '1997-05-05', 'Electrical', 2, 'Dhaka, Bangladesh', '45612387', 1, '2021-11-04 15:44:11'),
(12, 'ami', 1001, '2006-02-15', 'tech', 7, 'Dhaka, Bangladesh', '12345678925', 0, '2021-11-06 14:21:47'),
(13, 'Jayed', 414, '2021-11-01', 'Computer', 5, 'fafjafhh', '12345678925', 1, '2021-11-04 15:44:11'),
(20, 'Jayed Hosen', 201, '2001-05-05', 'Computer', 5, 'Tungipara, Gopalgonj, Dhaka', '01987375377', 1, '2021-11-04 16:50:08'),
(15, 'Jaye', 1452, '2021-11-16', 'Computer', 1, 'Dhaka, Bangladesh', '32165475351', 0, '2021-11-06 14:22:02'),
(16, 'Tahoma', 524, '2021-11-21', 'Electrical', 4, 'Bagerhat, Khulna, Bangladesh', '32165475351', 1, '2021-11-04 15:44:11'),
(17, 'Jayed', 333, '2021-12-04', 'Civil', 6, 'Bagerhat, Khulna, Bangladesh', '123455', 1, '2021-11-04 15:44:11'),
(18, 'Jayed Hoshen', 301, '2001-05-05', 'Civil', 5, 'Tungipara, Gopalgonj, Dhaka, Bangladesh', '01987375377', 1, '2021-11-04 15:44:11'),
(19, 'Jayed Hoshen', 100, '1997-05-01', 'Computer', 6, 'Tungipara, Gopalgonj, Dhaka, Bangladesh', '01987375377', 1, '2021-11-04 15:46:19'),
(21, 'Bangladesh', 8, '1971-12-16', 'IT', 1, 'Dhaka, Bangladesh', '00000000000', 1, '2021-11-04 17:25:33'),
(22, 'Jayed', 20, '2025-06-04', 'Computer', 3, 'Tungipara, Gopalgonj, Dhaka', '00000000000', 1, '2021-11-04 17:28:28'),
(23, 'Mehrab Hussain', 805, '2016-07-07', 'Textile', 4, 'Bagerhat, Khulna, Bangladesh', '01687375375', 1, '2021-11-06 14:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` int(10) NOT NULL,
  `f_mark` int(5) NOT NULL,
  `tc_mark` int(5) NOT NULL,
  `tf_mark` int(5) NOT NULL,
  `pc_mark` int(5) NOT NULL,
  `pf_mark` int(5) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `code`, `f_mark`, `tc_mark`, `tf_mark`, `pc_mark`, `pf_mark`, `add_date`) VALUES
(1, 'Web Development Project', 66654, 100, 0, 0, 50, 50, '2021-11-05 16:02:27'),
(2, 'Accounting Theory & Practice', 65851, 150, 40, 60, 25, 25, '2021-11-06 14:38:36'),
(3, 'Operating System', 68546, 150, 40, 60, 25, 25, '2021-11-05 16:24:17'),
(4, 'Programming In Java', 66651, 150, 40, 60, 25, 25, '2021-11-05 16:40:31'),
(5, 'Surveillance Security System', 66652, 150, 20, 30, 50, 50, '2021-11-05 16:48:47'),
(6, 'Sequential Logic System', 66653, 200, 60, 90, 25, 25, '2021-11-05 16:50:16'),
(7, 'PCB Design & Circuit Making', 66655, 100, 0, 0, 50, 50, '2021-11-05 17:10:27'),
(8, 'Construction Process-1', 67552, 150, 40, 60, 25, 25, '2021-11-06 14:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `create_date`) VALUES
(1, 'jayed', '12345', '2021-11-05 16:04:18'),
(2, 'admin', '123456', '2021-11-06 17:27:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
