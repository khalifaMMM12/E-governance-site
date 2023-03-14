-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 04:50 PM
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
-- Database: `bago_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`id`, `user_id`, `password`, `name`) VALUES
(1, 'HON-BAGO', '12345', 'BAGO'),
(2, 'DEV-MMM', '1234', 'KHALIFA');

-- --------------------------------------------------------

--
-- Table structure for table `anonymous`
--

CREATE TABLE `anonymous` (
  `id` int(11) NOT NULL,
  `local government` varchar(255) NOT NULL,
  `ministry` varchar(255) NOT NULL,
  `complain` mediumtext NOT NULL,
  `date` datetime NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anonymous`
--

INSERT INTO `anonymous` (`id`, `local government`, `ministry`, `complain`, `date`, `images`) VALUES
(24, 'Suleja', 'Education', 'this', '2022-10-11 12:18:49', ''),
(29, 'Minna', 'Health', 'testing', '2022-10-17 02:19:07', 'feed.jpg'),
(30, 'Minna', 'Transport', 'this id for mages\r\n', '2022-10-17 02:47:54', 'feed.jpg'),
(31, 'Suleja', 'Transport', 'qssa', '2022-10-17 02:53:27', 'feed - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `identify`
--

CREATE TABLE `identify` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `local government` varchar(255) NOT NULL,
  `ministry` varchar(255) NOT NULL,
  `complain` varchar(10000) NOT NULL,
  `date` datetime NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `identify`
--

INSERT INTO `identify` (`id`, `name`, `number`, `local government`, `ministry`, `complain`, `date`, `images`) VALUES
(3, 'khalifa muhammad', '33333', 'Suleja', 'Transport', 'dssss', '2022-10-11 12:35:34', '0000-00-00 00:00:00'),
(4, 'khalifa muhammad', '233232', 'Minna', 'Health', 'ewedsdsd', '2022-10-11 12:41:06', 'feed.jpg'),
(5, 'khalifa muhammad', '07065419600', 'Suleja', 'Transport', 'testing database to see if its working properly', '2022-10-11 12:42:28', 'IMG_0366.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anonymous`
--
ALTER TABLE `anonymous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identify`
--
ALTER TABLE `identify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anonymous`
--
ALTER TABLE `anonymous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `identify`
--
ALTER TABLE `identify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
