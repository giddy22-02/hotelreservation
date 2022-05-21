-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 03:18 PM
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
-- Database: `eagle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'aziiza', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `roomtype` enum('Regular','Executive','VIP','VVIP') NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `card_number` int(100) NOT NULL,
  `security_code` int(100) NOT NULL,
  `exp_month` enum('01','02','03','04','05','06','07','08','09','10','11','12') NOT NULL,
  `exp_year` enum('2021','2022','2023','2024','2025','2026','2027','2028','2029','2030','2031','2032') NOT NULL,
  `name_on_card` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `fullname`, `email`, `phone`, `roomtype`, `checkin`, `checkout`, `card_number`, `security_code`, `exp_month`, `exp_year`, `name_on_card`) VALUES
(1, '', '', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', '', ''),
(2, '', '', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', '', ''),
(3, '', '', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', '', ''),
(4, '', '', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', '', ''),
(5, '', '', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', '', ''),
(6, '', '', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fullname`, `email`, `phone`, `subject`, `message`) VALUES
(1, 'Aziiza Ahmed', 'aziiza.ahmed@riarauniversity.ac.ke', 702499324, 'Problem in Booking', 'Hello, I have tried to book, but the system is not responding.\r\nKindly Help.'),
(2, 'test 1', ' test@gmail.com', 705647867, 'kjh', ''),
(3, 'Ahmed Mohammed', ' ahmed@gmail.com', 705647867, 'Booking', 'oiuyt'),
(4, 'Ahmed Mohammed', ' ahmed@gmail.com', 705647867, 'Booking', 'oiuyt'),
(5, 'Ahmed Mohammed', ' ahmed@gmail.com', 705647867, 'Booking', 'uytfdsdfghjklkjhgfdsdfghjnbvcxzdfghjkjhgfd'),
(6, 'Ahmed Mohammed', ' ahmed@gmail.com', 705647867, 'Booking', 'sfshherfjfmfn'),
(7, 'Ahmed Mohammed', ' ahmed@gmail.com', 705647867, 'Booking', 'lkjhgfdsfj'),
(8, 'aziiza', ' aziiza@gmail.com', 705647867, 'Booking', 'I have a problem in booking.'),
(9, 'Ahmed Mohammed', ' ahmedgmail.com', 705647867, 'Booking', 'sdfgh'),
(10, 'Ahmed Mohammed', ' ahmed@gmail.com', 705647867, 'kjh', 'hgfds'),
(11, 'gideon', ' gideonkiplangat4@gmail.com', 705647867, 'Booking', 'now'),
(12, 'lilian', ' lilian@gmail.com', 713197097, 'enquire', 'hi'),
(13, 'Gideon Kiplangat', ' gideonkiplangat4@gmail.com', 713197097, 'enquire', 'deno ananisumbua'),
(14, 'tony', ' tony@gmail.com', 705647867, 'Booking', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `password`) VALUES
(1, 'Ahmed Mohammed', 'ahmed@gmail.com', 705647867, '123'),
(2, 'Aziiza Ahmed', 'aziiza@gmail.com', 713197097, '123'),
(3, 'gideon', 'gideonkiplangat4@gmail.com', 705647867, '123'),
(4, 'test 1', 'test@gmail.com', 705647867, '123'),
(5, 'lilian', 'lilian@gmail.com', 713197097, '123'),
(6, 'Anisa Odhiambo', 'anisa@gmail.com', 705789654, '123'),
(7, 'tony', 'tony@gmail.com', 705647867, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
