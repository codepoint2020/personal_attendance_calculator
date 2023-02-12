-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 06:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade_levels`
--

CREATE TABLE `grade_levels` (
  `id` int(11) NOT NULL,
  `grade_id_no` int(11) DEFAULT NULL,
  `grade_name` varchar(100) DEFAULT NULL,
  `gl_id_no` int(11) DEFAULT NULL,
  `no_attendance` int(11) DEFAULT NULL,
  `no_teachers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_levels`
--

INSERT INTO `grade_levels` (`id`, `grade_id_no`, `grade_name`, `gl_id_no`, `no_attendance`, `no_teachers`) VALUES
(1, 0, 'kinder', NULL, 4, 5),
(2, 1, 'grade I', NULL, 1, 9),
(3, 2, 'grade II', NULL, 6, 6),
(4, 3, 'grade III', NULL, 3, 9),
(5, 4, 'grade IV', NULL, 9, 9),
(6, 5, 'grade V', NULL, 8, 8),
(7, 6, 'grade VI', NULL, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_g1`
--

CREATE TABLE `tbl_g1` (
  `id` int(11) NOT NULL,
  `att_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_g1`
--

INSERT INTO `tbl_g1` (`id`, `att_count`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_g2`
--

CREATE TABLE `tbl_g2` (
  `id` int(11) NOT NULL,
  `att_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_g2`
--

INSERT INTO `tbl_g2` (`id`, `att_count`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_g3`
--

CREATE TABLE `tbl_g3` (
  `id` int(11) NOT NULL,
  `att_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_g3`
--

INSERT INTO `tbl_g3` (`id`, `att_count`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_g4`
--

CREATE TABLE `tbl_g4` (
  `id` int(11) NOT NULL,
  `att_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_g4`
--

INSERT INTO `tbl_g4` (`id`, `att_count`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_g5`
--

CREATE TABLE `tbl_g5` (
  `id` int(11) NOT NULL,
  `att_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_g5`
--

INSERT INTO `tbl_g5` (`id`, `att_count`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_g6`
--

CREATE TABLE `tbl_g6` (
  `id` int(11) NOT NULL,
  `att_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_g6`
--

INSERT INTO `tbl_g6` (`id`, `att_count`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_k`
--

CREATE TABLE `tbl_k` (
  `id` int(11) NOT NULL,
  `att_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_k`
--

INSERT INTO `tbl_k` (`id`, `att_count`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade_levels`
--
ALTER TABLE `grade_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_g1`
--
ALTER TABLE `tbl_g1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_g2`
--
ALTER TABLE `tbl_g2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_g3`
--
ALTER TABLE `tbl_g3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_g4`
--
ALTER TABLE `tbl_g4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_g5`
--
ALTER TABLE `tbl_g5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_g6`
--
ALTER TABLE `tbl_g6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_k`
--
ALTER TABLE `tbl_k`
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
-- AUTO_INCREMENT for table `grade_levels`
--
ALTER TABLE `grade_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_g1`
--
ALTER TABLE `tbl_g1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_g2`
--
ALTER TABLE `tbl_g2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_g3`
--
ALTER TABLE `tbl_g3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_g4`
--
ALTER TABLE `tbl_g4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_g5`
--
ALTER TABLE `tbl_g5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_g6`
--
ALTER TABLE `tbl_g6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_k`
--
ALTER TABLE `tbl_k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
