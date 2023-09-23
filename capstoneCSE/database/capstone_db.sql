-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 12:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(50) NOT NULL,
  `outgoing_msg_id` int(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `message`) VALUES
(1, 14, 20, 'awdawd'),
(2, 14, 20, 'awdawd'),
(3, 14, 20, 'awdawd'),
(4, 14, 20, '123'),
(5, 19, 20, 'asdfsdf'),
(6, 19, 20, 'sdfsdf'),
(7, 19, 20, 'sdfsdf'),
(8, 19, 20, 'row'),
(9, 20, 21, 'awdawd'),
(10, 21, 20, 'awdawda'),
(11, 21, 20, 'sdfsdf'),
(12, 19, 20, 'sssadwasssssssssssssssssssssssssssssssssssssssssss'),
(13, 19, 20, 'awdawd'),
(14, 19, 20, 'awd'),
(15, 19, 20, 'wd'),
(16, 19, 20, 'awd'),
(17, 19, 20, 'awd'),
(18, 19, 20, 'awdadadawdad'),
(19, 19, 20, 'adwawd'),
(20, 14, 20, 'hello admin'),
(21, 20, 14, 'awdawd'),
(22, 14, 20, 'bakit admin'),
(23, 14, 20, 'bakit customer'),
(24, 20, 14, 'wala lang po'),
(25, 21, 22, 'awdaw'),
(26, 22, 20, 'aawdawdg'),
(27, 22, 20, 'dfgdgdf'),
(28, 19, 14, 'adawda'),
(29, 21, 14, 'adwadad'),
(30, 22, 20, 'awdawd'),
(31, 20, 22, 'adawda');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email_phone` varchar(50) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `first_name`, `last_name`, `age`, `gender`, `email_phone`, `permanent_address`, `updated`) VALUES
(1, 'ARJOHN', 'DAGALA', 22, 'm', '21124324', 'llc', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'customer',
  `classification` varchar(100) NOT NULL DEFAULT 'newUser',
  `status` varchar(100) NOT NULL DEFAULT 'Offline now',
  `created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role`, `classification`, `status`, `created`) VALUES
(14, 'rowser', 'rowrowamodia@gmail', '6c14da109e294d1e8155be8aa4b1ce8e', 'admin', 'oldUser', 'Offline now', '2023/09/11'),
(19, 'r1', 'r1@gmail.com', '6c14da109e294d1e8155be8aa4b1ce8e', 'customer', 'oldUser', 'Offline now', '2023/09/12'),
(20, 'r2', 'r2@gmail.com', 'd279186428a75016b17e4df5ea43d080', 'customer', 'newUser', 'Offline now', '2023/09/12'),
(21, 'r3', 'r3@gmail.com', '9d3e622df914d8de7f747b7b8b143c52', 'customer', 'newUser', 'Offline now', '2023/09/12'),
(22, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'oldUser', 'Offline now', '2023/09/18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
