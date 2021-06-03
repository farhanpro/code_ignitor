-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 04:44 PM
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
-- Database: `worldofdresses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ejaz', 'Shaikh', 2147483647, 'ejaz8837@gmail.com', '$2y$10$rUU8.REYLk8RTzLUNdeW1.cJilqOBOgEHXLsCvHMzxCUfrAGjHbtG', '2021-05-28 15:42:16', '0000-00-00 00:00:00'),
(2, 'Aliya', 'Chopdar', 935635625, 'aliya@gmail.com', '$2y$10$xW5AMraEQfaWLFOXcpvrNePx9.8zuj0x.DG8WbwH3ailPrGeIs5Rm', '2021-05-28 15:43:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Party  Wear ', '2021-05-29 15:18:59', '2021-05-29 15:18:59'),
(2, 'casual Wear', '2021-05-29 15:24:09', '2021-05-29 15:24:09'),
(3, 'Silk', '2021-05-29 19:35:06', '2021-05-29 19:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  `product_unit_price` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `cat_name`, `product_quantity`, `product_unit_price`, `product_image`, `created_at`, `updated_at`) VALUES
(3, 'Kurti', 'casual Wear', 1, 1200, '', '2021-05-29 19:31:22', '2021-05-29 19:31:22'),
(4, 'Sana Collection', 'Casual Wear', 2, 1200, '', '2021-05-29 19:38:33', '2021-05-29 19:38:33'),
(5, 'kurta', 'kapde', 2, 6000, '', '2021-06-02 16:43:33', '2021-06-02 16:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subcat_id` int(255) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subcat_id`, `subcat_name`, `cat_name`, `created_at`, `updated_at`) VALUES
(2, 'Dress Material', 'casual Wear', '2021-05-29 15:53:04', '2021-05-29 15:53:04'),
(3, 'Kurtis', 'Party  Wear', '2021-05-29 16:02:48', '2021-05-29 16:02:48'),
(4, 'Cotton', 'Casual Wear', '2021-05-29 19:37:28', '2021-05-29 19:37:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subcat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
