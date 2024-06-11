-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 03:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Điện thoại di động'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_thumbnail` varchar(255) DEFAULT NULL,
  `overview` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `img_thumbnail`, `overview`, `content`, `created_at`, `updated_at`) VALUES
(18, 1, 'Đồng Hồ 1', 'assets/uploads/171766499901.jpg', '200', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:41:58', '2024-06-06 08:41:58'),
(19, 1, 'Đồng Hồ 2', 'assets/uploads/171766502302.jpg', '100', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:42:29', '2024-06-06 08:42:29'),
(20, 1, 'Đồng Hồ 3', 'assets/uploads/171766504603.jpg', '200', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:42:49', '2024-06-06 08:42:49'),
(21, 1, 'Đồng Hồ 4', 'assets/uploads/171766506704.jpg', '200', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:43:18', '2024-06-06 08:43:18'),
(22, 1, 'Đồng Hồ 5', 'assets/uploads/171766512605.jpg', '200', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:43:37', '2024-06-06 08:43:37'),
(23, 1, 'Đồng Hồ 6', 'assets/uploads/171766516709.jpg', '150', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:44:04', '2024-06-06 08:44:04'),
(24, 1, 'Đồng Hồ 7', 'assets/uploads/171766520010.jpg', '160', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:45:14', '2024-06-06 08:45:14'),
(25, 1, 'Đồng Hồ 8', 'assets/uploads/171766522712.jpg', '170', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-06 08:45:35', '2024-06-06 08:45:35'),
(27, 2, 'Đồng Hồ 9', 'assets/uploads/171781515901.jpg', '200', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:52:39', '2024-06-08 02:52:39'),
(28, 2, 'Đồng Hồ 10', 'assets/uploads/171781518402.jpg', '100', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:53:04', '2024-06-08 02:53:04'),
(29, 2, 'Đồng Hồ 11', 'assets/uploads/171781521703.jpg', '200', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:53:37', '2024-06-08 02:53:37'),
(30, 2, 'Đồng Hồ 12', 'assets/uploads/171781523704.jpg', '300', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:53:57', '2024-06-08 02:53:57'),
(31, 2, 'Đồng Hồ 13', 'assets/uploads/171781526305.jpg', '201', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:54:23', '2024-06-08 02:54:23'),
(32, 2, 'Đồng Hồ 14', 'assets/uploads/171781529711.jpg', '200', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:54:57', '2024-06-08 02:54:57'),
(33, 2, 'Đồng Hồ 15', 'assets/uploads/171781532012.jpg', '100', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:55:20', '2024-06-08 02:55:20'),
(34, 2, 'Đồng Hồ 16', 'assets/uploads/171781534106.jpg', '100', 'Cập nhật tin tức mới nhất về các sự kiện và xu hướng trong ngành công nghiệp điện thoại di động.', '2024-06-08 02:55:41', '2024-06-08 02:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('admin','member') NOT NULL DEFAULT 'member',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `type`, `created_at`, `updated_at`) VALUES
(112, 'Hoàng', 'assets/uploads/171803051712.jpg', 'behoang469@gmail.com', '$2y$10$6PYrr5FtdJRF2Hyr/8GnJe8MJoXhk594fz3DbP/g5jTa5FxA4gxO2', 'admin', '2024-06-10 14:41:57', '2024-06-10 14:41:57'),
(113, 'Thọ', 'assets/uploads/171803056411.jpg', 'hoang@gmail.com', '$2y$10$FSM3NvgZWQ.uwCpz79RGfO1z46hu20mwEHgcOvfsEZSdO6vPYRxGu', 'member', '2024-06-10 14:42:44', '2024-06-10 14:42:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
