-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 09:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_poll_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `option_tbl`
--

CREATE TABLE `option_tbl` (
  `option_id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `option_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `option_tbl`
--

INSERT INTO `option_tbl` (`option_id`, `poll_id`, `option_text`) VALUES
(45, 18, 'Mier'),
(46, 18, 'Abalde'),
(47, 18, 'Sisican'),
(48, 18, 'Terante');

-- --------------------------------------------------------

--
-- Table structure for table `polls_tbl`
--

CREATE TABLE `polls_tbl` (
  `poll_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polls_tbl`
--

INSERT INTO `polls_tbl` (`poll_id`, `user_id`, `question`, `created_at`, `ends_at`) VALUES
(18, 10, 'Kinsay Gwapo?', '2024-12-11 08:10:54', '2024-12-12 08:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `username`, `password`, `created_at`) VALUES
(2, 'abalde', '1234', '2024-12-11 08:46:03'),
(10, 'romeo', '123456', '2024-12-11 11:47:16'),
(12, 'admin', '123', '2024-12-11 18:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `votes_tbl`
--

CREATE TABLE `votes_tbl` (
  `vote_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `option_id` int(11) DEFAULT NULL,
  `voted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `poll_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes_tbl`
--

INSERT INTO `votes_tbl` (`vote_id`, `user_id`, `option_id`, `voted_at`, `poll_id`) VALUES
(9, 10, 46, '2024-12-11 15:22:49', 18),
(11, 2, 47, '2024-12-11 17:30:00', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `option_tbl`
--
ALTER TABLE `option_tbl`
  ADD PRIMARY KEY (`option_id`),
  ADD KEY `poll_id` (`poll_id`);

--
-- Indexes for table `polls_tbl`
--
ALTER TABLE `polls_tbl`
  ADD PRIMARY KEY (`poll_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `votes_tbl`
--
ALTER TABLE `votes_tbl`
  ADD PRIMARY KEY (`vote_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `option_id` (`option_id`),
  ADD KEY `poll_id` (`poll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `option_tbl`
--
ALTER TABLE `option_tbl`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `polls_tbl`
--
ALTER TABLE `polls_tbl`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `votes_tbl`
--
ALTER TABLE `votes_tbl`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `votes_tbl`
--
ALTER TABLE `votes_tbl`
  ADD CONSTRAINT `votes_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users_tbl` (`user_id`),
  ADD CONSTRAINT `votes_tbl_ibfk_3` FOREIGN KEY (`option_id`) REFERENCES `option_tbl` (`option_id`),
  ADD CONSTRAINT `votes_tbl_ibfk_4` FOREIGN KEY (`poll_id`) REFERENCES `polls_tbl` (`poll_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
