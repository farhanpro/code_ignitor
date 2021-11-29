-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:32 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoping_bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `first_name` int(11) NOT NULL,
  `last_name` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 'ejaz8837@gmail.com', '9307616840', '$2y$10$ZzGg4tdkAXrK8NZq5qRRS.ooLSS9dPQR7nF5/DgbX8XQVT3c5Wl3q', '2021-04-26 14:49:01', '0000-00-00 00:00:00'),
(2, 0, 0, 'aliya@gmail.com', '658945872`', '$2y$10$4.OobCpnyFF6Ii7VtR0TLeY9HR5Z1XnAaYsvgPEjluiQYD35BOQ1y', '2021-04-26 14:57:12', '0000-00-00 00:00:00'),
(3, 0, 0, 'mohd@gmail.com', '8446931810', '$2y$10$eeTTrE69zKc0FbII194rkuwU7kp1vrkP9SlVsVpW1IMqvI0LyNpLi', '2021-04-26 15:02:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cust_users`
--

CREATE TABLE `cust_users` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_users`
--

INSERT INTO `cust_users` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ejaz', 'shaikh', '8446931810', 'ejaz8837@gmail.com', '$2y$10$rjCi0CjhuIIQ6QFiP738Ne35BXEXHu9ES4h0qK5mKExsxoplHmCyW', '2021-04-26 11:41:16', '0000-00-00 00:00:00'),
(2, 'anam', 'khan', '658941', 'anam@gmail.com', '$2y$10$4Wo1zUDrNivlmmMiEqRdAewN3rXWRilTTzfkzIHkViJuTW6V6Uh2S', '2021-04-26 11:48:01', '0000-00-00 00:00:00'),
(3, 'abdul', 'rehman', '65214563', 'abdul@gmail.com', '$2y$10$uZKc1O5yoKVTW2yB175kvuTzpPB3q58h0Wty0oqwy.xb5yqzF2vi.', '2021-04-26 11:49:25', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_users`
--
ALTER TABLE `cust_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cust_users`
--
ALTER TABLE `cust_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
