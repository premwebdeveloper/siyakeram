-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 03:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siyakeram`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 9, '2017-12-16 07:55:02', '2017-12-16 07:55:02'),
(2, 2, 10, '2017-12-18 07:18:30', '2017-12-18 07:18:30'),
(3, 2, 11, '2017-12-18 07:29:35', '2017-12-18 07:29:35'),
(4, 2, 12, '2017-12-18 07:34:03', '2017-12-18 07:34:03'),
(5, 2, 13, '2017-12-18 07:41:20', '2017-12-18 07:41:20'),
(6, 2, 14, '2017-12-18 07:47:39', '2017-12-18 07:47:39'),
(7, 2, 15, '2017-12-18 07:49:55', '2017-12-18 07:49:55'),
(8, 2, 16, '2017-12-18 07:51:20', '2017-12-18 07:51:20'),
(9, 2, 17, '2017-12-18 08:08:13', '2017-12-18 08:08:13'),
(10, 2, 18, '2017-12-18 08:13:14', '2017-12-18 08:13:14'),
(11, 2, 19, '2017-12-18 08:13:59', '2017-12-18 08:13:59'),
(12, 2, 20, '2017-12-18 08:29:44', '2017-12-18 08:29:44'),
(13, 2, 21, '2017-12-18 08:33:56', '2017-12-18 08:33:56'),
(14, 2, 22, '2017-12-18 08:58:24', '2017-12-18 08:58:24'),
(15, 2, 23, '2017-12-18 08:58:38', '2017-12-18 08:58:38'),
(16, 2, 24, '2017-12-18 08:58:55', '2017-12-18 08:58:55'),
(17, 2, 25, '2017-12-18 09:00:13', '2017-12-18 09:00:13'),
(18, 2, 26, '2017-12-18 09:00:33', '2017-12-18 09:00:33'),
(19, 2, 27, '2017-12-18 09:04:23', '2017-12-18 09:04:23'),
(20, 2, 28, '2017-12-18 09:05:27', '2017-12-18 09:05:27'),
(21, 2, 29, '2017-12-19 07:58:29', '2017-12-19 07:58:29'),
(22, 2, 30, '2017-12-20 09:00:50', '2017-12-20 09:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
