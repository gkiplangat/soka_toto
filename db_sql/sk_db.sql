-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 02:33 PM
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
-- Database: `sk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `category_name`) VALUES
(3, 'FLY-M100', 'FLY-M CHAIRPERSON'),
(4, 'FLY-M110', 'FLY-M TREASURER'),
(5, 'FLY-M120', 'FLY-M SECRETARY'),
(6, 'FLY-M130', 'FLY-M VICE CHAIRPERSON'),
(7, 'FLY-M140', 'FLY-M DESCIPLESHIP LEADER'),
(8, 'FLY-M150 ', 'FLY-M WORSHIP'),
(9, 'FLY-M160 ', 'FLY-M INTERCESSION'),
(10, 'FLY-M170 ', 'FLY-M WEFLFARE');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_id` varchar(100) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_id`, `department_name`, `year`) VALUES
(1, 'SK_1000', 'Young Mothers', '1987-01-02'),
(2, 'SK_1100', 'Children', '2017-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `department_assoc` varchar(100) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `department_assoc`, `event_title`, `event_description`, `venue`, `date`, `photo`, `event_time`) VALUES
(12, 'Young Mothers', 'Health Breastfeeding', 'The Event is designed specifically for young Mothers', 'Kibiria Chief\\\'s Office', '2025-04-09', '67ec8b05be445_CU-Holy Spirit-1.jpg', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `department_assoc` varchar(100) NOT NULL,
  `photo_one` varchar(100) NOT NULL,
  `photo_two` varchar(100) NOT NULL,
  `photo_three` varchar(100) NOT NULL,
  `photo_four` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `department_assoc`, `photo_one`, `photo_two`, `photo_three`, `photo_four`, `created_at`) VALUES
(13, 'LAMBS MINISRY', '1743554536_CU-Holy Spirit-1.jpg', '1743554536_CU-Holy Spirit-1.jpg', '1743554536_CU-Holy Spirit-1.jpg', '1743554536_CU-Holy Spirit-1.jpg', '2025-04-02 00:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `fullname`, `position`, `phone_number`, `profile_picture`) VALUES
(7, 'Brian Nathan Manywanda', 'Executive Director ', 746572082, 'jack.jpg'),
(8, 'Momanyi Oirere Dennis', 'Chief Administration Director', 715447224, 'jack.jpg'),
(9, 'John Gachoka Wangari', 'Partnerships & Fundraising manager', 717054040, 'jack.jpg'),
(10, 'Seline Atieno Odhiambo', 'Mentorship,Teen & Young Mother\'s Manager', 748297569, 'jack.jpg'),
(17, 'ks', 'CS', 786786543, 'jack.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'STMI', 'Administrator', 'STMI Admin', 'stmitrust@gmail.com', '82b4622327fecf2b06be583b1fc00cd7', 'admin'),
(2, 'GIDEON', 'KIPLANGAT', 'FLY-M Support', 'gideonkiplangat4@gmail.com', '75120fcfb267943b38b74078224a5360', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
