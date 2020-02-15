-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 12, 2020 at 02:15 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `doctor_lagbe`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualifications` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_qualifications` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chamber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_chamber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_chamber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_other_chamber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(10) UNSIGNED DEFAULT NULL,
  `visiting_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lat` double UNSIGNED NOT NULL,
  `long` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `b_name`, `qualifications`, `b_qualifications`, `designation`, `b_designation`, `expertise`, `b_expertise`, `chamber`, `b_chamber`, `other_chamber`, `b_other_chamber`, `address`, `b_address`, `phone`, `visiting_hours`, `created_at`, `updated_at`, `lat`, `long`) VALUES
(2, 'dr hamid ullah', 'হামিদুল্লাহ', NULL, NULL, 'Assistant Doctor', 'সহকারী ডাক্তার', 'gynologist', 'স্ত্রীরোগবিশারদ', 'MIrpur, Dhaka', 'মিরপুর', NULL, NULL, NULL, NULL, 1810000771, '7AM - 5PM', '2020-02-06 10:59:10', '2020-02-06 10:59:10', 0, 0),
(3, 'Kabir SIngh', NULL, NULL, NULL, 'Assistant Doctor', 'সহকারী ডাক্তার', 'gynologist', 'স্ত্রীরোগবিশারদ', 'MIrpur, Dhaka', 'মিরপুর', NULL, NULL, NULL, NULL, 15151515, '7AM - 5PM', '2020-02-12 07:53:34', '2020-02-12 07:53:34', 30.121221511, 27.323223232),
(4, 'Kabir SIngh aka MC', NULL, NULL, NULL, 'Assistant Doctor', 'সহকারী ডাক্তার', 'gynologist', 'স্ত্রীরোগবিশারদ', 'MIrpur, Dhaka', 'মিরপুর', NULL, NULL, NULL, NULL, 15151515, '7AM - 5PM', '2020-02-12 08:03:42', '2020-02-12 08:03:42', 30.121221511, 27.323223232);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_05_150918_create_doctors_table', 1),
(4, '2020_02_10_162125_add_column_in_doctors_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
