-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 08:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `deleted_accounts`
--

CREATE TABLE `deleted_accounts` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deleted_accounts`
--

INSERT INTO `deleted_accounts` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(0, 635087894, 'sa', 'sa', 'sa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1673416161photo.jpg', 'Active now'),
(0, 175600551, 'asd', 'ds', 'sa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1673441658photo.jpg', 'Active now'),
(0, 175600551, 'asd', 'ds', 'sa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1673441658photo.jpg', 'Active now'),
(0, 719619929, '1', '9', 'aa@a.com', '4124bc0a9335c27f086f24ba207a4912', '1673512832photo.jpg', 'Active now'),
(0, 960176002, 'as', 'sa', 'sa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1673442130photo.jpg', 'Active now'),
(0, 953036698, 'saiiiii', 'ss', 'ss@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1673411549aj.jpeg', 'Active now'),
(0, 430146408, 'ajay', 'kumar', 'aj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1673618565lights.jpg', 'Active now'),
(0, 907154392, 'Akshay', 'kumar', 'akshay@gmail.com', '50977d6b4d7d7b056427ae04b90b251d', '1673692400pexels-joshua-welch-1624600.jpg', 'Active now'),
(0, 904188537, 'sai', 'kiran', 'ss@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1675314416lights.jpg', 'Active now');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(0, 543142861, 719619929, 'hello'),
(0, 543142861, 960176002, 'aa'),
(0, 1221326856, 960176002, 'at'),
(0, 608184478, 386883031, 'hi'),
(0, 386883031, 608184478, 'hlo'),
(0, 608184478, 386883031, 'ok'),
(0, 541699778, 904188537, 'hello'),
(0, 608184478, 522588688, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `public` tinyint(1) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `unique_id`, `public`, `file_name`, `file_path`) VALUES
(8, 386883031, 1, 'socv1.html', 'upload/63db282f1e5932.00553352.html');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(9, 541699778, '1222', '24455', 'aj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1673692555avatar.png', 'Offline now'),
(10, 994032804, 'ajju', 'a', 'aarfssdd@gmail.com', 'bb2b996993e483f1416c221d4f4fe379', '1675269781avatar.png', 'Active now'),
(11, 608184478, 'sai', 'kiran', 'kiran@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1675306807Screenshot (2).png', 'Active now'),
(12, 386883031, 'raj', 'k', 'k@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1675306872Screenshot (3).png', 'Active now'),
(13, 1520033371, 'Ajay', 'kumar', 'aajju@gamil.com', 'e10adc3949ba59abbe56e057f20f883e', '1675314254avatar.png', 'Offline now'),
(15, 156625488, 'sai', 'kiran', 'ss@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1675314751Wallpaper.png', 'Active now'),
(16, 522588688, 'shravani', 'b', 's@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1675319038Screenshot (1).png', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
