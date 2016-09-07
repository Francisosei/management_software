-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2016 at 09:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `microsysgh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(10) unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `condition_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committees`
--

CREATE TABLE IF NOT EXISTS `committees` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fellowship`
--

CREATE TABLE IF NOT EXISTS `fellowship` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `names` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fellowship`
--

INSERT INTO `fellowship` (`id`, `user_id`, `names`, `created_at`, `updated_at`) VALUES
(1, 2, 'Women Fellowship', '2016-08-21 07:00:00', '2016-08-21 07:00:00'),
(2, 1, 'Men Fellowship', '2016-08-21 07:00:00', '2016-08-21 07:00:00'),
(3, 5, 'Royal Generation', NULL, NULL),
(6, 7, 'Junior Youth Choir', NULL, NULL),
(8, 7, 'Youth Fellowship', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fellowship_profiles`
--

CREATE TABLE IF NOT EXISTS `fellowship_profiles` (
  `id` int(10) unsigned NOT NULL,
  `fellowship_id` int(11) DEFAULT NULL,
  `profiles_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(3, 2, 'Choir', '2016-08-21 07:00:00', '2016-08-21 07:00:00'),
(4, 1, 'Singer', '2016-08-21 07:00:00', '2016-08-21 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_05_074002_create_employee_table', 1),
('2016_07_18_232211_create_tithe_table', 1),
('2016_07_18_232309_create_sermon_table', 1),
('2016_07_18_232533_create_assets_table', 1),
('2016_07_18_232912_create_groups_tabble', 1),
('2016_07_18_233010_create_fellowship_table', 1),
('2016_07_18_233131_create_committees_table', 1),
('2016_07_21_053941_create_subscribe_table', 1),
('2016_07_24_070907_create_messages_table', 1),
('2016_09_06_051054_create_membership_models_table', 2),
('2016_09_06_053542_create_profile_models_table', 3),
('2016_09_06_071703_create_profiles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `paid_by` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_type`, `amount_paid`, `paid_by`, `created_at`, `updated_at`) VALUES
(1, 'Tithe', '', '', '2016-09-07 06:13:23', '0000-00-00 00:00:00'),
(2, 'Offering', '', '', '2016-09-07 06:13:23', '0000-00-00 00:00:00'),
(3, 'Kofi AND Ama', '', '', '2016-09-07 06:14:21', '0000-00-00 00:00:00'),
(4, 'Mini Harvest', '', '', '2016-09-07 06:14:21', '0000-00-00 00:00:00'),
(5, 'Main harvest', '', '', '2016-09-07 06:14:58', '0000-00-00 00:00:00'),
(6, 'Dues', '', '', '2016-09-07 06:14:58', '0000-00-00 00:00:00'),
(7, 'Sunday School', '', '', '2016-09-07 06:15:32', '0000-00-00 00:00:00'),
(8, 'Pleges', '', '', '2016-09-07 06:15:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `marriage_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `groups` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fellowship` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `residential_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_town` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NOK` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `health_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `baptism_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `Fullname`, `marriage_status`, `groups`, `fellowship`, `residential_address`, `contact`, `home_town`, `NOK`, `profession`, `health_status`, `image`, `baptism_status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Osei', 'Single', '', '', ' P>O>BOX 5', '(023) 165-4545', '', '', 'Tee', 'Yes', '', 'Not Confrimed', '2016-09-08 01:23:52', '2016-09-08 01:23:52'),
(2, 4, '', 'Single', '', '', ' P>O>BOX 5', '(023) 165-4545', '', '', 'Tee', 'Yes', '', 'Not Confrimed', '2016-09-08 01:41:01', '2016-09-08 01:41:01'),
(3, 4, '', 'Single', '', '', ' P>O>BOX 4', '(023) 165-4545', '', '', 'Tee', 'Yes', '', 'Not Confrimed', '2016-09-08 01:41:56', '2016-09-08 01:41:56'),
(4, 4, '', 'Married', '', '', ' P>O>BOX 3', '(000) 000-0000', '', '', 'Doctor', 'No', '', 'Not Confrimed', '2016-09-08 01:43:56', '2016-09-08 01:43:56'),
(5, 4, '', 'Single', '', '', ' P>O>BOX 5', '(023) 165-4545', '', '', 'Tee', 'Yes', '', 'Not Confrimed', '2016-09-08 01:44:54', '2016-09-08 01:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `sermon`
--

CREATE TABLE IF NOT EXISTS `sermon` (
  `id` int(10) unsigned NOT NULL,
  `preacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tithe`
--

CREATE TABLE IF NOT EXISTS `tithe` (
  `id` int(10) unsigned NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paid_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `birthdate`, `gender`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Francis', NULL, NULL, 'francis.oseiowusu@yahoo.com', '12345678', NULL, '2016-08-21 07:00:00', '2016-08-21 07:00:00'),
(2, 'Gladys', NULL, NULL, 'gladys@gmail.com', '12345678', NULL, '2016-08-21 07:00:00', '2016-08-21 07:00:00'),
(3, 'Peter', NULL, NULL, 'p@gmail.ccom', '$2y$10$YgpJ.T3CJaolawdeaEZJkOjWKLW0rkPbK0txA2.NkV/1LbpbAGwwi', NULL, '2016-08-22 04:45:59', '2016-08-22 04:45:59'),
(4, 'Osei', '1998-06-01', NULL, 'j@gmail.com', '$2y$10$X6k5UqccYEoj0pDwiBktB.C2z9NEehDiNsegfjmYSKNLdWrN8G.Sm', 'Ah7RKeYPSArhDGglvHkCHjtsBKY4axGMZz1MwMK3vWRqvaLrmRulCg8dr2pO', '2016-08-23 17:41:22', '2016-09-08 01:44:54'),
(5, 'nbhjhjvhj', NULL, NULL, 'bnbjb@gmail.com', '', NULL, '2016-08-25 03:50:04', '2016-08-25 03:50:04'),
(7, 'nbhjhjvhj', NULL, NULL, 'nbjb@gmail.com', '', NULL, '2016-08-25 04:17:50', '2016-08-25 04:17:50'),
(9, 'nbhjhjvhj', NULL, NULL, 'b@gmail.com', '', NULL, '2016-08-25 04:19:10', '2016-08-25 04:19:10'),
(11, 'nbhjhjvhj', NULL, NULL, 'kb@gmail.com', '', NULL, '2016-08-25 04:22:18', '2016-08-25 04:22:18'),
(13, 'nbhjhjvhj', NULL, NULL, 'llkb@gmail.com', '', NULL, '2016-08-25 04:23:25', '2016-08-25 04:23:25'),
(15, 'nbhjhjvhj', NULL, NULL, 'ffb@gmail.com', '', NULL, '2016-08-25 04:29:05', '2016-08-25 04:29:05'),
(17, 'nbhjhjvhj', NULL, NULL, 'kkk@gmail.com', '', NULL, '2016-08-25 04:33:39', '2016-08-25 04:33:39'),
(19, 'nbhjhjvhj', NULL, NULL, 'kkok@gmail.com', '', NULL, '2016-08-25 05:29:24', '2016-08-25 05:29:24'),
(21, 'nbhjhjvhj', NULL, NULL, 'kkkok@gmail.com', '', NULL, '2016-08-25 05:31:57', '2016-08-25 05:31:57'),
(22, 'nbhjhjvhj', NULL, NULL, 'kklkok@gmail.com', '', NULL, '2016-08-25 05:32:39', '2016-08-25 05:32:39'),
(23, 'nbhjhjvhj', NULL, NULL, 'kpklkok@gmail.com', '', NULL, '2016-08-25 05:36:01', '2016-08-25 05:36:01'),
(24, 'nbhjhjvhj', NULL, NULL, 'lkpklkok@gmail.com', '', NULL, '2016-08-25 05:37:33', '2016-08-25 05:37:33'),
(25, 'nbhjhjvhj', NULL, NULL, 'lkpklkolk@gmail.com', '', NULL, '2016-08-25 05:38:35', '2016-08-25 05:38:35'),
(26, 'nbhjhjvhj', NULL, NULL, 'lmkpklkolk@gmail.com', '', NULL, '2016-08-25 05:43:19', '2016-08-25 05:43:19'),
(27, 'nbhjhjvhj', NULL, NULL, 'mlmkpklkolk@gmail.com', '', NULL, '2016-08-25 05:44:03', '2016-08-25 05:44:03'),
(28, 'nbhjhjvhj', NULL, NULL, 'mlkmkpklkolk@gmail.com', '', NULL, '2016-08-25 05:47:43', '2016-08-25 05:47:43'),
(29, 'nbhjhjvhj', NULL, NULL, 'mlkmkplklkolk@gmail.com', '', NULL, '2016-08-25 05:48:49', '2016-08-25 05:48:49'),
(31, 'nbhjhjvhj', NULL, NULL, 'mlkmkplklklolk@gmail.com', '', NULL, '2016-08-25 05:49:31', '2016-08-25 05:49:31'),
(32, 'hvhvhjv', NULL, NULL, 'hgghhh@gmail.com', '', NULL, '2016-08-26 05:19:26', '2016-08-26 05:19:26'),
(33, 'hvhvhjv', NULL, NULL, 'hggbghhh@gmail.com', '', NULL, '2016-08-26 05:20:37', '2016-08-26 05:20:37'),
(35, 'hvhvhjv', NULL, NULL, 'ghhh@gmail.com', '', NULL, '2016-08-26 05:36:57', '2016-08-26 05:36:57'),
(36, 'hvhvhjv', NULL, NULL, 'ghffhh@gmail.com', '', NULL, '2016-08-26 05:38:01', '2016-08-26 05:38:01'),
(37, 'hvhvhjv', NULL, NULL, 'ghiiiffhh@gmail.com', '', NULL, '2016-08-26 05:39:31', '2016-08-26 05:39:31'),
(38, 'hvhvhjv', NULL, NULL, 'glhiiiffhh@gmail.com', '', NULL, '2016-08-26 05:40:11', '2016-08-26 05:40:11'),
(39, '', NULL, NULL, '', '', NULL, '2016-08-26 05:40:11', '2016-08-26 05:40:11'),
(40, 'hvhvhjv', NULL, NULL, 'glhiiiffggghh@gmail.com', '', NULL, '2016-08-26 05:41:13', '2016-08-26 05:41:13'),
(42, 'hvhvhjv', NULL, NULL, 'glhiiiffggghkh@gmail.com', '', NULL, '2016-08-26 05:41:29', '2016-08-26 05:41:29'),
(44, 'hvhvhjv', NULL, NULL, 'peter@gmail.com', '', NULL, '2016-08-26 05:41:55', '2016-08-26 05:41:55'),
(46, 'hvhvhjvhhhh', NULL, NULL, 'pet@gmail.com', '', NULL, '2016-08-26 05:43:14', '2016-08-26 05:43:14'),
(48, 'gjjgjj', NULL, NULL, 'gg@gmail.com', '', NULL, '2016-08-26 05:59:28', '2016-08-26 05:59:28'),
(50, 'gjjgjj', NULL, NULL, 'fgg@gmail.com', '', NULL, '2016-08-26 06:00:47', '2016-08-26 06:00:47'),
(51, 'chgcghcghc', NULL, NULL, 'gfhghg@gmail.com', '', NULL, '2016-08-27 17:54:39', '2016-08-27 17:54:39'),
(52, 'hjbjhvhjvhj', NULL, NULL, 'jhbjh@gmail.com', '', NULL, '2016-09-02 05:55:13', '2016-09-02 05:55:13'),
(53, 'Akoffo', '1993-09-04', 'MALE', 'akoffo@hotmail.com', '$2y$10$V77.KV/j0IuXhCrqmipCAecJ78dJ.liag68obJVOPZ/TLfa5oiwCa', 'E7UuoDsyF6gdEYWsoo4pIgy5MtCbp9IDrKewhtOMWGik1z6fenElMorTJTYK', '2016-09-06 13:00:25', '2016-09-06 13:34:01'),
(54, '', '1234-8-09', 'FEMALE', 'fb@gmail.com', '$2y$10$.A0Z5SiMFO8z8BX6DQTAhOcNVQnfa3IErvbjdhm08LNQgDmkoogwu', 'j8nroNaF9yOvN73s9Eu2XQ90tDywX21xrqWjWggfgVh8QjwGDKobuKHw8L9x', '2016-09-06 13:37:06', '2016-09-06 14:37:06'),
(55, 'Francis Osei', '1080-08-02', 'MALE', 'os@hotmail.com', '$2y$10$K9/HDfMT0NbOyFa.vGWwJutxuYFD2M6xCm5Oym/iydRrCY5/mF0Pa', 'mwtRbRtAsejX9lmcyTux0plZEtLRkO1AqsLoBy1FIbBKI9HaTO416vxwpZn2', '2016-09-06 14:38:03', '2016-09-07 07:08:49'),
(56, '', 'hhghghghgh', 'FEMALE', 'nhh@yahoo.com', '$2y$10$REtzbXrUdu.iCAFrp/jaLuwzKRUz.Z8jhxPuAnAza0pOCGJI81opG', NULL, '2016-09-06 14:55:56', '2016-09-06 14:55:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committees`
--
ALTER TABLE `committees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `employee_email_unique` (`email`);

--
-- Indexes for table `fellowship`
--
ALTER TABLE `fellowship`
  ADD PRIMARY KEY (`id`), ADD KEY `fellowship_user_id_foreign` (`user_id`);

--
-- Indexes for table `fellowship_profiles`
--
ALTER TABLE `fellowship_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`), ADD KEY `groups_user_id_foreign` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `messages_email_unique` (`email`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`), ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `sermon`
--
ALTER TABLE `sermon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tithe`
--
ALTER TABLE `tithe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `committees`
--
ALTER TABLE `committees`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fellowship`
--
ALTER TABLE `fellowship`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fellowship_profiles`
--
ALTER TABLE `fellowship_profiles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sermon`
--
ALTER TABLE `sermon`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tithe`
--
ALTER TABLE `tithe`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fellowship`
--
ALTER TABLE `fellowship`
ADD CONSTRAINT `fellowship_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
ADD CONSTRAINT `groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
