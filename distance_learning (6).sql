-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 06:11 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distance_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `iid` int(11) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` varchar(255) NOT NULL,
  `answer4` varchar(255) NOT NULL,
  `answer5` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`iid`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `user_id`) VALUES
(14, 'yes', 'maybe', 'no', 'pwede', 'dipende', 3293935),
(21, 'Yvan 1', 'Yvan 2', 'Yvan 3', 'Yvan 4', 'Yvan 5', 1782629),
(22, 'kriz cabello 1', 'kriz cabello 2', 'kriz cabello 3', 'kriz cabello 4', 'kriz cabello 5', 3719053),
(23, 'Jason 1', 'Jason 2', 'Jason 3', 'Jason 4', 'Jason 5', 6358985);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_applied` date NOT NULL,
  `date_approved` date NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `program`, `status`, `date_applied`, `date_approved`, `user_id`) VALUES
(12, 'Nursing', 'approved', '2022-03-13', '0000-00-00', 3293935),
(19, 'Education', 'approved', '2022-03-27', '0000-00-00', 1782629),
(20, 'Nursing', 'admission', '2022-03-29', '0000-00-00', 3719053),
(21, 'Nursing', 'declined', '2022-03-29', '0000-00-00', 6358985);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(255) NOT NULL,
  `otp` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `expired` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` int(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `app_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`id`, `reason`, `app_id`, `date`) VALUES
(8, 'Wala lang', 12, '2022-03-29'),
(9, 'sorry sis', 20, '2022-03-29'),
(10, 'sorry', 21, '2022-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'program',
  `verified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `status`, `verified`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '--', 0),
(1782629, 'lyvanjoe@gmail.com', 'yvan', 'student', 'pending', 1),
(3237481, 'ad.edu@gmail.com', 'education', 'Education', '--', 0),
(3293935, 'joanafrancisco19.jf@gmail.com', 'joana', 'student', 'approved', 1),
(3719053, 'krizcabello@gmail.com', '12345', 'student', 'pending', 1),
(6358985, 'lyvanjoe@gmail.com', 'jason', 'student', 'pending', 1),
(7154753, 'ad.nursing@gmail.com', 'adnursing', 'Nursing', '--', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_stat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `program` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `first_name`, `last_name`, `birthdate`, `gender`, `civil_stat`, `email`, `mobile`, `tel`, `barangay`, `city`, `country`, `university`, `degree`, `program`) VALUES
(1782629, 'Yvan', 'Tinguha', '2022-03-01', 'Male', 'Female', 'lyvanjoe@gmail.com', '0965235874', '1111111', 'Upper', 'ZC', 'Phillipines', 'ZCSPC', 'BSCS', 'Education'),
(3293935, 'Joana', 'Francisco', '2000-03-19', 'Female', 'Single', 'bg201803052@wmsu.edu.ph', '09555839174', '986786', 'Culianan', 'Zamboanga City', 'Phillipines', 'Western Mindanao State University', 'Bachelor of Science in Information Technology', 'Nursing'),
(3719053, 'Kriz', 'Cabello', '2000-03-19', 'Female', 'Single', 'krizcabello@gmail.com', '09123456789', '1111111', 'Tetuan', 'Zamboanga City', 'Phillipines', 'WMSU', 'BS Nursing', 'Nursing'),
(6358985, 'Jason', 'Catadman', '2021-06-30', 'Male', 'Single', 'lyvanjoe@gmail.com', '0965235874', '1111111', 'Culianan', 'Zamboanga City', 'Phillipines', 'WMSU', 'BS Nursing', 'Nursing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9929346;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
