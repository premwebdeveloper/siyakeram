-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 02:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2017_12_16_114402_roles', 1),
(5, '2017_12_16_114439_user_roles', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('premsaini9602@gmail.com', '$2y$10$ysdHZwDtCnOqbEK4p26LJO7klnAEbuGIDV6luTPAxxACGHQBQJvqe', '2017-12-16 05:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `verify_token`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(28, 'prem', '9602947878', 'prem_saini@hotmail.com', '$2y$10$j2dlzsMMdWgI4ugLPyxs0.z7ub8FMHEw5EmS75NsiaUrMVN0xF9JC', 'cjuIug8UEPhj6XwYj2t3yibYcjVjy98CR0PbfsT0', NULL, '2017-12-18 09:05:27', '2017-12-18 09:05:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `email`, `phone`, `created_at`, `updated_at`, `status`) VALUES
(11, 19, 'prem', 'premsaini9602@gmail.com', '9602947878', '2017-12-18 08:13:59', '2017-12-18 08:13:59', 0),
(12, 20, 'prem', 'premsaini9602@gmail.com', '9602947878', '2017-12-18 08:29:44', '2017-12-18 08:29:44', 0),
(13, 21, 'prem', 'prem_saini@hotmail.com', '9602947878', '2017-12-18 08:33:56', '2017-12-18 08:33:56', 0),
(14, 22, 'prem', 'premsaini9602@gmail.com', '9602947878', '2017-12-18 08:58:24', '2017-12-18 08:58:24', 0),
(15, 23, 'prem', 'premsaini9602@gmail.com', '9602947878', '2017-12-18 08:58:38', '2017-12-18 08:58:38', 0),
(16, 24, 'prem', 'premsaini9602@gmail.com', '9602947878', '2017-12-18 08:58:55', '2017-12-18 08:58:55', 0),
(17, 25, 'prem', 'premsaini9602@gmail.com', '9602947878', '2017-12-18 09:00:13', '2017-12-18 09:00:13', 0),
(18, 26, 'prem', 'premsaini9602@gmail.com', '9602947878', '2017-12-18 09:00:33', '2017-12-18 09:00:33', 0),
(19, 27, 'prem', 'prem_saini@hotmail.com', '9602947878', '2017-12-18 09:04:23', '2017-12-18 09:04:23', 0),
(20, 28, 'prem', 'prem_saini@hotmail.com', '9602947878', '2017-12-18 09:05:27', '2017-12-18 09:05:27', 0);

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
(20, 2, 28, '2017-12-18 09:05:27', '2017-12-18 09:05:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
