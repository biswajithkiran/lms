-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2019 at 10:27 AM
-- Server version: 5.6.30
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(10) unsigned NOT NULL,
  `lead_id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camp_id` int(10) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `ip_address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('P','V','D','S','T','I') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'P',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `lead_id`, `camp_id`, `first_name`, `last_name`, `email`, `phone`, `home_area`, `address`, `ip_address`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 0, 'test', 'user', 'testuser@gmail.com', '1234567890', '1450 sq.ft', 'will add later', NULL, 'P', '2019-01-16 03:44:32', '2019-01-16 03:44:32'),
(6, '', 0, 'abcd', 'efgh', 'abcdefgh@ggg.com', '98765567890', '2345', NULL, NULL, 'V', '2019-01-16 04:06:51', '2019-01-16 04:06:51'),
(7, '', 4, 'kiran', 'p', 'test@gmail.com', '9876675234', '1590', NULL, '127.0.0.1', 'V', '2019-01-16 05:48:39', '2019-01-16 05:48:39'),
(8, '', 4, 'raj', 'kumar', 'rajkumar@test.com', '9227772323', '1890', 'will add later', '127.0.0.1', 'P', '2019-01-16 06:07:42', '2019-01-16 06:07:42'),
(9, '', 4, 'abhiram', 'ms', 'abhiram@testgmail.com', '9876567892', '2390', 'test address', '127.0.0.1', 'V', '2019-01-16 06:08:52', '2019-01-16 06:08:52'),
(10, '', 4, 'abhiram', 'ms', 'abhiram@testgmail.com', '9876567892', '2390', 'test address', '127.0.0.1', 'D', '2019-01-16 06:10:18', '2019-01-16 06:10:18'),
(11, '', 4, 'vinod', 'krishnan', 'vinodkrishnan@tester.com', '1234567890', '1780', NULL, '127.0.0.1', 'P', '2019-01-16 06:10:58', '2019-01-16 06:10:58'),
(12, '', 4, 'Jiji', 'alex', 'jijialex@testmail.com', '8943628104', '1860', 'will add later', '127.0.0.1', 'T', '2019-01-16 06:14:45', '2019-01-16 06:14:45'),
(13, '', 4, 'kabeer', 'ahamed', 'kabeerah@testers.com', '9245189351', '2890', 'kottayam,kerala', '127.0.0.1', 'P', '2019-01-16 06:15:36', '2019-01-16 06:15:36'),
(14, '', 4, 'umesh', 'pilla', 'umeshp@gmmm.com', '9825186241', '1846', 'vadakara,kozhikode', '127.0.0.1', 'S', '2019-01-16 06:16:27', '2019-01-16 06:16:27'),
(15, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, 'saji', 'varghese', 'sajivarghese@abcd.com', '9854327869', '2300', 'test address', '127.0.0.1', 'P', '2019-01-17 02:46:07', '2019-01-17 02:46:07'),
(16, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, 'daniel', 'george', 'danydany@testmail.com', '9865125209', '2900 sq ft', NULL, '127.0.0.1', 'P', '2019-01-17 02:48:32', '2019-01-17 02:48:32'),
(17, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, 'gerome', 'kv', 'kvgerome@ddd.com', '5678231456', '2500', 'abcd villa,tvm', '127.0.0.1', 'P', '2019-01-17 03:31:41', '2019-01-17 03:31:41'),
(18, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', 'P', '2019-01-17 03:37:25', '2019-01-17 03:37:25'),
(19, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, 'kareem', 'muhamad', 'kareemmuhamad@test.com', '9821760392', '2350 sq ft', 'kareem muhamad,plot no:30,rose gardens,kollam', '127.0.0.1', 'P', '2019-01-17 03:39:09', '2019-01-17 03:39:09'),
(21, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, NULL, NULL, NULL, NULL, NULL, NULL, '127.0.0.1', 'I', '2019-01-17 03:40:25', '2019-01-17 03:58:05'),
(22, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, 'arun', 'kumar', 'arunkumarkm@jmail.com', '4567232', '2490', 'testing', '127.0.0.1', 'P', '2019-01-17 03:55:37', '2019-01-17 03:55:37'),
(23, 'k2pLUExAGkHBQCyqaALkh7vigbVM6js4UEtdhU2L', 4, 'hari', 'kumar', 'kmharikumar@test.com', '872323671298', '2600', 'test', '127.0.0.1', 'P', '2019-01-17 03:58:01', '2019-01-17 03:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_01_16_054713_create_leads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test Agent', 'testagent@lms.com', '$2y$10$EDBekiofTmb1w0wtQbkap.ozmJImwpzfgmot7N3F4XFzyOkN6lARm', '3JQ2SflEGWDiNoekaw39wZ9E8XIvoVqYdTrG16mya72pXdGhLA7COG4Q2oZc', '2019-01-15 09:50:23', '2019-01-15 09:50:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
