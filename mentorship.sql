-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 11:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentorship`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'created', 2, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 14:39:25', '2019-10-13 14:39:25'),
(2, 'default', 'created', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 14:39:55', '2019-10-13 14:39:55'),
(3, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 14:40:46', '2019-10-13 14:40:46'),
(4, 'default', 'updated', 2, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 14:42:23', '2019-10-13 14:42:23'),
(5, 'default', 'updated', 2, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 14:47:39', '2019-10-13 14:47:39'),
(6, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 14:51:10', '2019-10-13 14:51:10'),
(7, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 14:51:33', '2019-10-13 14:51:33'),
(8, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 14:51:46', '2019-10-13 14:51:46'),
(9, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 14:55:11', '2019-10-13 14:55:11'),
(10, 'default', 'updated', 2, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 14:56:15', '2019-10-13 14:56:15'),
(11, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:04:24', '2019-10-13 15:04:24'),
(12, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:04:54', '2019-10-13 15:04:54'),
(13, 'default', 'updated', 2, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:05:31', '2019-10-13 15:05:31'),
(14, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:05:54', '2019-10-13 15:05:54'),
(15, 'default', 'updated', 4, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:06:11', '2019-10-13 15:06:11'),
(16, 'default', 'created', 3, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:10:16', '2019-10-13 15:10:16'),
(17, 'default', 'created', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:10:48', '2019-10-13 15:10:48'),
(18, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:11:56', '2019-10-13 15:11:56'),
(19, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:12:23', '2019-10-13 15:12:23'),
(20, 'default', 'created', 4, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:15:08', '2019-10-13 15:15:08'),
(21, 'default', 'created', 6, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:15:37', '2019-10-13 15:15:37'),
(22, 'default', 'created', 5, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:17:09', '2019-10-13 15:17:09'),
(23, 'default', 'created', 7, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:17:40', '2019-10-13 15:17:40'),
(24, 'default', 'deleted', 3, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:19:30', '2019-10-13 15:19:30'),
(25, 'default', 'deleted', 2, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:19:52', '2019-10-13 15:19:52'),
(26, 'default', 'deleted', 1, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:20:06', '2019-10-13 15:20:06'),
(27, 'default', 'created', 8, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:20:34', '2019-10-13 15:20:34'),
(28, 'default', 'created', 6, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:22:21', '2019-10-13 15:22:21'),
(29, 'default', 'created', 9, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:22:46', '2019-10-13 15:22:46'),
(30, 'default', 'created', 7, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:24:07', '2019-10-13 15:24:07'),
(31, 'default', 'created', 10, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:25:00', '2019-10-13 15:25:00'),
(32, 'default', 'updated', 10, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:25:54', '2019-10-13 15:25:54'),
(33, 'default', 'created', 8, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:30:11', '2019-10-13 15:30:11'),
(34, 'default', 'created', 11, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:30:43', '2019-10-13 15:30:43'),
(35, 'default', 'created', 9, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:35:32', '2019-10-13 15:35:32'),
(36, 'default', 'created', 12, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:36:01', '2019-10-13 15:36:01'),
(37, 'default', 'created', 10, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:37:30', '2019-10-13 15:37:30'),
(38, 'default', 'created', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:38:20', '2019-10-13 15:38:20'),
(39, 'default', 'created', 11, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:39:47', '2019-10-13 15:39:47'),
(40, 'default', 'created', 12, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-10-13 15:40:01', '2019-10-13 15:40:01'),
(41, 'default', 'created', 14, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:41:25', '2019-10-13 15:41:25'),
(42, 'default', 'created', 15, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:42:11', '2019-10-13 15:42:11'),
(43, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-13 15:55:54', '2019-10-13 15:55:54'),
(44, 'default', 'updated', 6, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 09:39:56', '2019-10-16 09:39:56'),
(45, 'default', 'updated', 6, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 09:40:01', '2019-10-16 09:40:01'),
(46, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:01:21', '2019-10-16 11:01:21'),
(47, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:01:26', '2019-10-16 11:01:26'),
(48, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:44:11', '2019-10-16 11:44:11'),
(49, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:45:43', '2019-10-16 11:45:43'),
(50, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:46:39', '2019-10-16 11:46:39'),
(51, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:50:50', '2019-10-16 11:50:50'),
(52, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:51:17', '2019-10-16 11:51:17'),
(53, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:51:21', '2019-10-16 11:51:21'),
(54, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:53:02', '2019-10-16 11:53:02'),
(55, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:54:20', '2019-10-16 11:54:20'),
(56, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:58:41', '2019-10-16 11:58:41'),
(57, 'default', 'updated', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-10-16 11:59:22', '2019-10-16 11:59:22'),
(58, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-12 18:36:04', '2019-11-12 18:36:04'),
(59, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-12 18:37:25', '2019-11-12 18:37:25'),
(60, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-12 18:59:07', '2019-11-12 18:59:07'),
(61, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-12 19:01:36', '2019-11-12 19:01:36'),
(62, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-12 20:51:07', '2019-11-12 20:51:07'),
(63, 'default', 'updated', 22, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-14 20:42:11', '2019-11-14 20:42:11'),
(64, 'default', 'updated', 17, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 08:59:14', '2019-11-21 08:59:14'),
(65, 'default', 'updated', 19, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 09:00:26', '2019-11-21 09:00:26'),
(66, 'default', 'updated', 19, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 09:00:47', '2019-11-21 09:00:47'),
(67, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 09:02:01', '2019-11-21 09:02:01'),
(68, 'default', 'updated', 11, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 09:02:51', '2019-11-21 09:02:51'),
(69, 'default', 'created', 5, 'Litecms\\Page\\Models\\Page', 1, 'App\\User', '[]', '2019-11-21 14:30:48', '2019-11-21 14:30:48'),
(70, 'default', 'deleted', 8, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:39:27', '2019-11-21 14:39:27'),
(71, 'default', 'deleted', 5, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:40:10', '2019-11-21 14:40:10'),
(72, 'default', 'deleted', 7, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:40:43', '2019-11-21 14:40:43'),
(73, 'default', 'deleted', 9, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:41:06', '2019-11-21 14:41:06'),
(74, 'default', 'deleted', 6, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:41:40', '2019-11-21 14:41:40'),
(75, 'default', 'deleted', 12, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:42:02', '2019-11-21 14:42:02'),
(76, 'default', 'deleted', 14, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:43:03', '2019-11-21 14:43:03'),
(77, 'default', 'deleted', 15, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-21 14:43:41', '2019-11-21 14:43:41'),
(78, 'default', 'deleted', 1, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:45:46', '2019-11-21 14:45:46'),
(79, 'default', 'deleted', 5, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:46:12', '2019-11-21 14:46:12'),
(80, 'default', 'deleted', 9, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:46:28', '2019-11-21 14:46:28'),
(81, 'default', 'deleted', 11, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:46:46', '2019-11-21 14:46:46'),
(82, 'default', 'deleted', 6, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:46:59', '2019-11-21 14:46:59'),
(83, 'default', 'deleted', 3, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:47:14', '2019-11-21 14:47:14'),
(84, 'default', 'deleted', 12, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:47:44', '2019-11-21 14:47:44'),
(85, 'default', 'deleted', 4, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-21 14:48:02', '2019-11-21 14:48:02'),
(86, 'default', 'updated', 22, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-22 09:19:54', '2019-11-22 09:19:54'),
(87, 'default', 'created', 22, 'Litecms\\Block\\Models\\Category', 1, 'App\\User', '[]', '2019-11-22 09:20:27', '2019-11-22 09:20:27'),
(88, 'default', 'created', 24, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-22 09:20:59', '2019-11-22 09:20:59'),
(89, 'default', 'updated', 13, 'Litecms\\Block\\Models\\Block', 1, 'App\\User', '[]', '2019-11-22 09:21:22', '2019-11-22 09:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci DEFAULT 'hide',
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `category_id`, `name`, `url`, `icon`, `order`, `description`, `image`, `images`, `slug`, `status`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Powered by Laravel', '', 'fab fa-laravel', 0, 'We have tried to make use of all features of <a href=\"http://laravel.com\" target=\"_balnk\">Laravel</a> which help you to develop the website with all resources available online.​ ', '', NULL, 'powered-by-laravel-5-5', 'show', 1, 'App\\User', '2016/07/21/104902202', '2019-10-13 15:20:06', NULL, '2019-10-13 15:20:06'),
(2, 1, 'Configure to your project', '', 'fas fa-sliders-h', 0, 'Lavalite helps you to <a href=\"https://lavalite.org/docs\" target=\"_balnk\">configure</a> your Laravel projects easily. It acts as a bootstrapper for your Laravel Content Management System.', '', NULL, 'configure-to-your-project', 'show', 1, 'App\\User', '2016/07/21/104854884', '2019-10-13 15:19:52', NULL, '2019-10-13 15:19:52'),
(3, 1, 'Online package builder', '', 'fas fa-box', 0, 'The online package builder helps you to build <a href=\"https://lavalite.org/packages\" target=\"_balnk\"> Lavalite packages</a> easily, The downloaded package with basic required files help you to finish your projects quickly.', '', NULL, 'online-package-builder', 'show', 1, 'App\\User', '2016/07/21/104846403', '2019-10-13 15:19:30', NULL, '2019-10-13 15:19:30'),
(4, 2, 'AboutUs', NULL, NULL, 0, '<style>\n  .list-view-item h5{\n  	max-width:100% !important;\n  }\n</style>\n<section id=\"about\">\n\n        <div class=\"container\">\n            <div class=\"row\">\n\n                <div class=\"col-lg-5 col-md-6\">\n                    <div class=\"about-img\">\n                        <img src=\"themes/public/assets/custom/img/about-img.jpg\" alt=\"\">\n                    </div>\n                </div>\n\n                <div class=\"col-lg-7 col-md-6\">\n                    <div class=\"about-content\">\n                        <h2>About Us</h2>\n                        <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n                        <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>\n                        <ul>\n                            <li><i class=\"ion-android-checkmark-circle\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>\n                            <li><i class=\"ion-android-checkmark-circle\"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>\n                            <li><i class=\"ion-android-checkmark-circle\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>\n                        </ul>\n                    </div>\n                </div>\n            </div>\n        </div>\n\n    </section>', NULL, '[]', 'about-us', 'show', 1, 'App\\User', '2019/10/13/163934345', '2019-11-14 08:03:06', '2019-10-13 14:39:55', '2019-11-14 08:03:06'),
(5, 3, 'How it Works', NULL, NULL, NULL, '<section id=\"services\" class=\"section-bg\">\n        <div class=\"container\">\n\n            <header class=\"section-header\">\n                <h3>How it works</h3>\n                <p>Our Mentorship Scheme offers a smooth and insightful journey to become a mentor to the youngsters working for social good in three simple steps:</p>\n            </header>\n\n            <div class=\"row\">\n\n                <div class=\"col-md-6 col-lg-4 wow bounceInUp\" data-wow-duration=\"1.4s\">\n                    <div class=\"box\">\n                        <div class=\"icon\" style=\"background: #fceef3;\"><i class=\"ion-ios-analytics-outline\" style=\"color: #ff689b;\"></i></div>\n                        <h4 class=\"title\">Apply</h4>\n                        <p class=\"description\">\n\n\n\n\n<style type=\"text/css\">\np.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px \'Helvetica Neue\'}\n</style>\n\n\n</p><h6 style=\"text-align: center; \"><span style=\"font-family: Tahoma;\">1. Firstly, we must get to know you. When applying to become a mentor, you\'ll need to provide basic information about yourself and your CV. Your application will be reviewed and you\'ll be notified about your status.</span></h6>\n                    </div>\n                </div>\n                <div class=\"col-md-6 col-lg-4 wow bounceInUp\" data-wow-duration=\"1.4s\">\n                    <div class=\"box\">\n                        <div class=\"icon\" style=\"background: #fff0da;\"><i class=\"ion-ios-bookmarks-outline\" style=\"color: #e98e06;\"></i></div>\n                        <h4 class=\"title\">Learn</h4>\n                        <p class=\"description\">\n\n\n\n\n<style type=\"text/css\">\np.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px \'Helvetica Neue\'}\n</style>\n\n\n</p><h6 style=\"text-align: center; \"><span style=\"font-family: Tahoma;\">&nbsp;2. Once you pass Step 1, you will get the opportunity to complete three courses which ensure you have all the needed skills and tools to mentor the youngsters. The courses you will be taking are: Course 1, Course 2 and Course 3.&nbsp;</span></h6>\n                    </div>\n                </div>\n\n                <div class=\"col-md-6 col-lg-4 wow bounceInUp\" data-wow-delay=\"0.1s\" data-wow-duration=\"1.4s\">\n                    <div class=\"box\">\n                        <div class=\"icon\" style=\"background: #e6fdfc;\"><i class=\"ion-ios-paper-outline\" style=\"color: #3fcdc7;\"></i></div>\n                        <h4 class=\"title\">Mentor</h4>\n                        <p class=\"description\">\n\n\n\n\n<style type=\"text/css\">\np.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px \'Helvetica Neue\'}\n</style>\n\n\n</p><h6 style=\"text-align: center; \"><span style=\"font-family: Tahoma;\">Step 3. Finally, it is your turn to mentor the youngsters which are implementing projects supported by our implementing partners. You will have the chance to help them in their journey to become social changers.&nbsp;</span></h6></div></div>\n\n            </div>\n\n        </div>\n    </section>', NULL, '[]', 'services', 'show', 1, 'App\\User', '2019/10/13/171028337', '2019-11-21 14:40:10', '2019-10-13 15:10:48', '2019-11-21 14:40:10'),
(6, 4, 'Why Choose Us', NULL, NULL, NULL, '<section id=\"why-us\" class=\"wow fadeIn\">\n        <div class=\"container-fluid\">\n\n            <header class=\"section-header\">\n                <h3>Whyy choose us?</h3>\n                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>\n            </header>\n\n            <div class=\"row\">\n\n                <div class=\"col-lg-6\">\n                    <div class=\"why-us-img\">\n                        <img src=\"themes/public/assets/custom/img/why-us.jpg\" alt=\"\" class=\"img-fluid\">\n                    </div>\n                </div>\n\n                <div class=\"col-lg-6\">\n                    <div class=\"why-us-content\">\n                        <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>\n                        <p>\n                            Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur\n                            et temporibus. Labore est odio.\n\n                            Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..\n                        </p>\n\n                        <div class=\"features wow bounceInUp clearfix\">\n                            <i class=\"fa fa-diamond\" style=\"color: #f058dc;\"></i>\n                            <h4>Corporis dolorem</h4>\n                            <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>\n                        </div>\n\n                        <div class=\"features wow bounceInUp clearfix\">\n                            <i class=\"fa fa-object-group\" style=\"color: #ffb774;\"></i>\n                            <h4>Eum ut aspernatur</h4>\n                            <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>\n                        </div>\n\n                        <div class=\"features wow bounceInUp clearfix\">\n                            <i class=\"fa fa-language\" style=\"color: #589af1;\"></i>\n                            <h4>Voluptates dolores</h4>\n                            <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>\n                        </div>\n\n                    </div>\n\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class=\"container\">\n            <div class=\"row counters\">\n\n                <div class=\"col-lg-3 col-6 text-center\">\n                    <span data-toggle=\"counter-up\">274</span>\n                    <p>Clients</p>\n                </div>\n\n                <div class=\"col-lg-3 col-6 text-center\">\n                    <span data-toggle=\"counter-up\">421</span>\n                    <p>Projects</p>\n                </div>\n\n                <div class=\"col-lg-3 col-6 text-center\">\n                    <span data-toggle=\"counter-up\">1,364</span>\n                    <p>Hours Of Support</p>\n                </div>\n\n                <div class=\"col-lg-3 col-6 text-center\">\n                    <span data-toggle=\"counter-up\">18</span>\n                    <p>Hard Workers</p>\n                </div>\n\n            </div>\n\n        </div>\n    </section>', NULL, '[]', 'why-choose-us', 'show', 1, 'App\\User', '2019/10/13/171515591', '2019-11-21 14:41:40', '2019-10-13 15:15:37', '2019-11-21 14:41:40'),
(7, 5, 'Call to Action', NULL, NULL, NULL, '<section id=\"call-to-action\" class=\"wow fadeInUp\">\n        <div class=\"container\">\n            <div class=\"row\">\n                <div class=\"col-lg-9 text-center text-lg-left\">\n                    <h3 class=\"cta-title\">Call To Action</h3>\n                    <p class=\"cta-text\"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n                <div class=\"col-lg-3 cta-btn-container text-center\">\n                    <a class=\"cta-btn align-middle\" href=\"#\">Call To Action</a>\n                </div>\n            </div>\n\n        </div>\n    </section>', NULL, '[]', 'call-to-action', 'hide', 1, 'App\\User', '2019/10/13/171725135', '2019-11-21 14:40:43', '2019-10-13 15:17:40', '2019-11-21 14:40:43'),
(8, 1, 'Features', NULL, NULL, NULL, '<section id=\"features\">\n        <div class=\"container\">\n\n            <div class=\"row feature-item\">\n                <div class=\"col-lg-6 wow fadeInUp\">\n                    <img src=\"themes/public/assets/custom/img/features-1.svg\" class=\"img-fluid\" alt=\"\">\n                </div>\n                <div class=\"col-lg-6 wow fadeInUp pt-5 pt-lg-0\">\n                    <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>\n                    <p>\n                        Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.\n                    </p>\n                    <p>\n                        Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.\n                    </p>\n                </div>\n            </div>\n\n            <div class=\"row feature-item mt-5 pt-5\">\n                <div class=\"col-lg-6 wow fadeInUp order-1 order-lg-2\">\n                    <img src=\"themes/public/assets/custom/img/features-2.svg\" class=\"img-fluid\" alt=\"\">\n                </div>\n\n                <div class=\"col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1\">\n                    <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>\n                    <p>\n                        Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.\n                    </p>\n                    <p>\n                        Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.\n                    </p>\n                    <p>\n                        Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.\n                    </p>\n                </div>\n\n            </div>\n\n        </div>\n    </section>', NULL, '[]', 'features', 'show', 1, 'App\\User', '2019/10/13/172015430', '2019-11-21 14:39:27', '2019-10-13 15:20:34', '2019-11-21 14:39:27'),
(9, 6, 'Portfolio', NULL, NULL, NULL, '<section id=\"portfolio\" class=\"section-bg\">\n        <div class=\"container\">\n\n            <header class=\"section-header\">\n                <h3 class=\"section-title\">Our Portfolio</h3>\n            </header>\n\n            <div class=\"row\">\n                <div class=\"col-lg-12\">\n                    <ul id=\"portfolio-flters\">\n                        <li data-filter=\"*\" class=\"filter-active\">All</li>\n                        <li data-filter=\".filter-app\">App</li>\n                        <li data-filter=\".filter-card\">Card</li>\n                        <li data-filter=\".filter-web\">Web</li>\n                    </ul>\n                </div>\n            </div>\n\n            <div class=\"row portfolio-container\">\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/app1.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">App 1</a></h4>\n                            <p>App</p>\n                            <div>\n                                <a href=\"themes/public/assets/custom/img/portfolio/app1.jpg\" data-lightbox=\"portfolio\" data-title=\"App 1\" class=\"link-preview\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\" data-wow-delay=\"0.1s\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/web3.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">Web 3</a></h4>\n                            <p>Web</p>\n                            <div>\n                                <a href=\"themes/public/assets/custom/img/portfolio/web3.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"Web 3\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\" data-wow-delay=\"0.2s\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/app2.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">App 2</a></h4>\n                            <p>App</p>\n                            <div>\n                                <a href=\"img/portfolio/app2.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"App 2\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/card2.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">Card 2</a></h4>\n                            <p>Card</p>\n                            <div>\n                                <a href=\"img/portfolio/card2.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"Card 2\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\" data-wow-delay=\"0.1s\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/web2.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">Web 2</a></h4>\n                            <p>Web</p>\n                            <div>\n                                <a href=\"themes/public/assets/custom/img/portfolio/web2.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"Web 2\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\" data-wow-delay=\"0.2s\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/app3.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">App 3</a></h4>\n                            <p>App</p>\n                            <div>\n                                <a href=\"themes/public/assets/custom/img/portfolio/app3.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"App 3\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/card1.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">Card 1</a></h4>\n                            <p>Card</p>\n                            <div>\n                                <a href=\"themes/public/assets/custom/img/portfolio/card1.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"Card 1\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\" data-wow-delay=\"0.1s\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/card3.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">Card 3</a></h4>\n                            <p>Card</p>\n                            <div>\n                                <a href=\"themes/public/assets/custom/img/portfolio/card3.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"Card 3\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n                <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\" data-wow-delay=\"0.2s\">\n                    <div class=\"portfolio-wrap\">\n                        <img src=\"themes/public/assets/custom/img/portfolio/web1.jpg\" class=\"img-fluid\" alt=\"\">\n                        <div class=\"portfolio-info\">\n                            <h4><a href=\"#\">Web 1</a></h4>\n                            <p>Web</p>\n                            <div>\n                                <a href=\"themes/public/assets/custom/img/portfolio/web1.jpg\" class=\"link-preview\" data-lightbox=\"portfolio\" data-title=\"Web 1\" title=\"Preview\"><i class=\"ion ion-eye\"></i></a>\n                                <a href=\"#\" class=\"link-details\" title=\"More Details\"><i class=\"ion ion-android-open\"></i></a>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n\n            </div>\n\n        </div>\n    </section>', NULL, '[]', 'portfolio', 'show', 1, 'App\\User', '2019/10/13/172226526', '2019-11-21 14:41:06', '2019-10-13 15:22:46', '2019-11-21 14:41:06'),
(10, 7, 'Testimonials', NULL, NULL, NULL, '<section class=\"vc_row pt-200 pb-100\" id=\"testimonials\">\n    <div class=\"container\">\n        <div class=\"row\">\n\n            <div class=\"lqd-column col-lg-4 col-md-12\" data-custom-animations=\"true\" data-ca-options=\'{\"triggerHandler\":\"inview\",\"animationTarget\":\"all-childs\",\"duration\":1200,\"delay\":160,\"initValues\":{\"translateY\":50,\"opacity\":0},\"animations\":{\"translateY\":0,\"opacity\":1}}\'>\n\n                <header class=\"fancy-title mb-130\">\n\n                    <h6 class=\"text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary\">TESTIMONIALS</h6>\n                    <h2 class=\"mt-4 mb-4\">What they said</h2>\n                    <p>We’re humbled to be working with such great people that range from different careers.</p>\n\n                </header><!-- /.fancy-title -->\n\n            </div><!-- /.col-lg-4 col-md-12 -->\n\n            <div class=\"lqd-column col-lg-7 col-lg-offset-1 col-xs-12 mb-7 mb-md-0\">\n\n                <div class=\"carousel-container carousel-vertical-3d\">\n\n                    <div class=\"carousel-items\">\n\n\n                        <div class=\"carousel-item\">\n\n                            <div class=\"testimonial testimonial-whole-filled testimonial-whole-shadowed text-left testimonial-details-sm testimonial-avatar-sm\">\n                                <div class=\"testimonial-quote\">\n                                    <blockquote>\n                                        <p class=\"font-size-16 lh-185\">“As a winner of the scholarship of the Transformational Leadership Program, I was obliged to do\n                                            400 hours of voluntary work in community service, he explained. &quot;The reason why I joined\n                                            UNICEF and not another organization, was to contribute to the community and help in the good\n                                            work this organization does for so many.\"</p>\n                                    </blockquote>\n                                </div><!-- /.testimonial-quote -->\n                                <div class=\"testimonial-details\">\n                                    <figure class=\"avatar \">\n                                        <img src=\"themes/public/assets/maintheme/assets/img/mentorship/Rinor-Kastrati.jpg\" alt=\"Suke Tran\">\n                                    </figure>\n                                    <div class=\"testimonial-info\">\n                                        <h5>Rinor Kastrati</h5>\n                                        <h6 class=\"font-weight-normal\">27 year old Development Manager, Prishtina</h6>\n                                    </div><!-- /.testimonial-info -->\n                                    <time datetime=\"2017-07-07\" class=\"text-uppercase\">Now</time>\n                                </div><!-- /.testimonial-details -->\n                            </div><!-- /.testimonial -->\n\n                        </div><!-- /.carousel-item -->\n\n                        <div class=\"carousel-item\">\n\n                            <div class=\"testimonial testimonial-whole-filled testimonial-whole-shadowed text-left testimonial-details-sm testimonial-avatar-sm\">\n                                <div class=\"testimonial-quote\">\n                                    <blockquote>\n                                        <p class=\"font-size-16 lh-185\">“Seeing these gaps in our education system, and analyzing them, I had this wish to give some\n                                            personal contribution to eradicating this bad phenomenon because I think Kosovo can be\n                                            changed for the better through education,\"she says.</p>\n                                    </blockquote>\n                                </div><!-- /.testimonial-quote -->\n                                <div class=\"testimonial-details\">\n                                    <figure class=\"avatar\">\n                                        <img src=\"themes/public/assets/maintheme/assets/img/mentorship/Zana-Cana.jpg\" alt=\"Suke Tran\">\n                                    </figure>\n                                    <div class=\"testimonial-info\">\n                                        <h5>Zana Cana</h5>\n                                        <h6 class=\"font-weight-normal\">28 year old Sociologist, Gjakova</h6>\n                                    </div><!-- /.testimonial-info -->\n                                    <time datetime=\"2017-07-07\" class=\"text-uppercase\">Now</time>\n                                </div><!-- /.testimonial-details -->\n                            </div><!-- /.testimonial -->\n\n                        </div>\n                        <div class=\"carousel-item\">\n\n                            <div class=\"testimonial testimonial-whole-filled testimonial-whole-shadowed text-left testimonial-details-sm testimonial-avatar-sm\">\n                                <div class=\"testimonial-quote\">\n                                    <blockquote>\n                                        <p class=\"font-size-16 lh-185\">“Volunteer work with the youth made me understand more about their conditions, their needs,\n                                            and about Kosovo itself, what it is like and what its future is,\" she says. \"And this helped me a\n                                            lot to develop professionally.\"</p>\n                                    </blockquote>\n                                </div><!-- /.testimonial-quote -->\n                                <div class=\"testimonial-details\">\n                                    <figure class=\"avatar\">\n                                        <img src=\"themes/public/assets/maintheme/assets/img/mentorship/Vlora-Shabiu.jpg\" alt=\"Suke Tran\">\n                                    </figure>\n                                    <div class=\"testimonial-info\">\n                                        <h5>Vlora Shabiu</h5>\n                                        <h6 class=\"font-weight-normal\">31 year old Mentor, Gjilan</h6>\n                                    </div><!-- /.testimonial-info -->\n                                    <time datetime=\"2017-07-07\" class=\"text-uppercase\">Now</time>\n                                </div><!-- /.testimonial-details -->\n                            </div><!-- /.testimonial -->\n\n                        </div><!-- /.carousel-item --><!-- /.carousel-item -->\n\n                    </div><!-- /.carousel-items -->\n\n                </div><!-- /.carousel-container -->\n\n            </div><!-- /.col-lg-7 col-lg-offset-1 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>', NULL, '[{\"title\":\"V3ezwb3p\",\"caption\":\"V3ezwb3p\",\"url\":\"V3ezwb3p\",\"desc\":null,\"folder\":\"2019\\/10\\/13\\/172421584\\/images\",\"time\":\"2019-10-13 17:25:49\",\"path\":\"block\\/block\\/2019\\/10\\/13\\/172421584\\/images\\/v3ezwb3p.png\",\"file\":\"v3ezwb3p.png\"}]', 'testimonials', 'show', 1, 'App\\User', '2019/10/13/172421584', NULL, '2019-10-13 15:25:00', '2019-11-14 15:38:34'),
(11, 8, 'Faq', NULL, NULL, NULL, '<div class=\"col-sm-12 content-center text-center\">\n<section class=\"vc_row pt-50 pb-100\" id=\"faq\">\n    <div class=\"container\">\n        <div class=\"row\">\n\n            <div class=\"lqd-column col-md-12 mb-5\">\n\n                <header class=\"fancy-heading text-center\">\n                    <h2>FAQ</h2>\n                </header>\n\n            </div><!-- /.lqd-column col-md-12 -->\n\n            <div class=\"lqd-column col-md-8 col-md-offset-2\">\n\n                <div class=\"accordion accordion-medium accordion-body-bordered accordion-expander-xl accordion-active-color-primary\" id=\"accordion-3\" role=\"tablist\">\n\n                    <div class=\"accordion-item panel  active\">\n                        <div class=\"accordion-heading\" role=\"tab\" id=\"accordion-3-heading-1\">\n                            <h4 class=\"accordion-title font-size-19\">\n                                <a class=\"\" data-toggle=\"collapse\" data-parent=\"#accordion-3\" href=\"#accordion-3-panel-1\" aria-expanded=\"true\" aria-controls=\"accordion-3-panel-1\">\n                                    What are the dates for the upcoming workshops\n                                    <span class=\"accordion-expander\">\n													<i class=\"icon-arrows_circle_plus\"></i>\n													<i class=\"icon-arrows_circle_minus\"></i>\n												</span>\n                                </a>\n                            </h4>\n                        </div><!-- /.accordion-heading -->\n                        <div id=\"accordion-3-panel-1\" class=\"accordion-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"accordion-3-heading-1\">\n                            <div class=\"accordion-content\">\n                                <p>You will be notified in advance on our main page regarding the upcoming workshops and mentoring opportunities.</p>\n                            </div><!-- /.accordion-content -->\n                        </div><!-- /.collapse -->\n                    </div><!-- /.accordion-item -->\n\n                    <div class=\"accordion-item panel\">\n                        <div class=\"accordion-heading\" role=\"tab\" id=\"accordion-3-heading-2\">\n                            <h4 class=\"accordion-title font-size-19\">\n                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion-3\" href=\"#accordion-3-collapse-2\" aria-expanded=\"false\" aria-controls=\"accordion-3-collapse-2\">\n                                    When is the next ‘Human Centered Design Training’ planned?\n                                    <span class=\"accordion-expander\">\n													<i class=\"icon-arrows_circle_plus\"></i>\n													<i class=\"icon-arrows_circle_minus\"></i>\n												</span>\n                                </a>\n                            </h4>\n                        </div><!-- /.accordion-heading -->\n                        <div id=\"accordion-3-collapse-2\" class=\"accordion-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"accordion-3-heading-2\">\n                            <div class=\"accordion-content\">\n                                <p>The dates for the upcoming HCD training will be published on the main page of the platform and an email will be sent to all mentors who have yet to attend the HCD Training.</p>\n                            </div><!-- /.accordion-content -->\n                        </div><!-- /.collapse -->\n                    </div><!-- /.accordion-item -->\n\n                    <div class=\"accordion-item panel\">\n                        <div class=\"accordion-heading\" role=\"tab\" id=\"accordion-3-heading-3\">\n                            <h4 class=\"accordion-title font-size-19\">\n                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion-3\" href=\"#accordion-3-collapse-3\" aria-expanded=\"false\" aria-controls=\"accordion-3-collapse-3\">\n                                    How can I enroll as a mentor/mentee?\n                                    <span class=\"accordion-expander\">\n													<i class=\"icon-arrows_circle_plus\"></i>\n													<i class=\"icon-arrows_circle_minus\"></i>\n												</span>\n                                </a>\n                            </h4>\n                        </div><!-- /.accordion-heading -->\n                        <div id=\"accordion-3-collapse-3\" class=\"accordion-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"accordion-3-heading-3\">\n                            <div class=\"accordion-content\">\n                                <p>To become a mentor, as a first step you need to apply by sending your CV and requested information by clicking on the “Apply to become a mentor” button on the main page.</p>\n                            </div><!-- /.accordion-content -->\n                        </div><!-- /.collapse -->\n                    </div><!-- /.accordion-item -->\n\n                    <div class=\"accordion-item panel\">\n                        <div class=\"accordion-heading\" role=\"tab\" id=\"accordion-3-heading-4\">\n                            <h4 class=\"accordion-title font-size-19\">\n                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion-3\" href=\"#accordion-3-collapse-4\" aria-expanded=\"false\" aria-controls=\"accordion-3-collapse-4\">\n                                    What level of expertise do I need to become a mentor?\n                                    <span class=\"accordion-expander\">\n													<i class=\"icon-arrows_circle_plus\"></i>\n													<i class=\"icon-arrows_circle_minus\"></i>\n												</span>\n                                </a>\n                            </h4>\n                        </div><!-- /.accordion-heading -->\n                        <div id=\"accordion-3-collapse-4\" class=\"accordion-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"accordion-3-heading-4\">\n                            <div class=\"accordion-content\">\n                                <p>To become a mentor, you need to be 24+ years old with at least a bachelor degree and a considerable amount of work experience.</p>\n                            </div><!-- /.accordion-content -->\n                        </div><!-- /.collapse -->\n                    </div><!-- /.accordion-item -->\n\n                    <div class=\"accordion-item panel\">\n                        <div class=\"accordion-heading\" role=\"tab\" id=\"accordion-3-heading-5\">\n                            <h4 class=\"accordion-title font-size-19\">\n                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion-3\" href=\"#accordion-3-collapse-5\" aria-expanded=\"false\" aria-controls=\"accordion-3-collapse-5\">\n                                    Will I receive guidelines / training before I become a mentor?\n                                    <span class=\"accordion-expander\">\n													<i class=\"icon-arrows_circle_plus\"></i>\n													<i class=\"icon-arrows_circle_minus\"></i>\n												</span>\n                                </a>\n                            </h4>\n                        </div><!-- /.accordion-heading -->\n                        <div id=\"accordion-3-collapse-5\" class=\"accordion-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"accordion-3-heading-5\">\n                            <div class=\"accordion-content\">\n                                <p>Before being confirmed as a mentor on the Mentorship Scheme, you will be certified on two online courses (Sexual Harassment & Child Protection). After completing the online courses, you will be offered a free of charge training on “Human Centered Design” provided by certified trainers and financed by UNICEF Kosovo Program which you need to attend in order to complete your profile as a mentor of the Mentorship Scheme.</p>\n                            </div><!-- /.accordion-content -->\n                        </div><!-- /.collapse -->\n                    </div><!-- /.accordion-item -->\n\n                    <div class=\"accordion-item panel\">\n                        <div class=\"accordion-heading\" role=\"tab\" id=\"accordion-3-heading-6\">\n                            <h4 class=\"accordion-title font-size-19\">\n                                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion-3\" href=\"#accordion-3-collapse-6\" aria-expanded=\"false\" aria-controls=\"accordion-3-collapse-6\">\n                                    What benefits do mentors receive?\n                                    <span class=\"accordion-expander\">\n													<i class=\"icon-arrows_circle_plus\"></i>\n													<i class=\"icon-arrows_circle_minus\"></i>\n												</span>\n                                </a>\n                            </h4>\n                        </div><!-- /.accordion-heading -->\n                        <div id=\"accordion-3-collapse-6\" class=\"accordion-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"accordion-3-heading-6\">\n                            <div class=\"accordion-content\">\n                                <p>Becoming a mentor on the mentorship scheme will give you the opportunity on contributing towards empowering and developing young people by increasing the capacity and the ability to participate in the workforce, policy-making and decision-making processes, through private sector mentors or young mentors. Mentors will also be certified on 3 courses, and also will receive certificates from our implementing partners and also from CSR Kosova.</p>\n                            </div><!-- /.accordion-content -->\n                        </div><!-- /.collapse -->\n                    </div><!-- /.accordion-item -->\n\n                </div><!-- /.accordion -->\n\n            </div><!-- /.lqd-column col-md-8 col-md-offset-2 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>\n</div>', NULL, '[]', 'faq', 'show', 1, 'App\\User', '2019/10/13/173027994', NULL, '2019-10-13 15:30:43', '2019-11-21 09:02:51'),
(12, 9, 'Footer Left Part', NULL, NULL, NULL, '<div class=\"row\">\n                                    <div class=\"col-sm-6\">\n                                        <div class=\"footer-info\">\n                                            <h3>Mentor</h3>\n                                            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>\n                                        </div>\n\n                                        <div class=\"footer-newsletter\">\n                                            <h4>Our Newsletter</h4>\n                                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>\n                                            <form action=\"\" method=\"post\">\n                                                <input type=\"email\" name=\"email\"><input type=\"submit\"  value=\"Subscribe\">\n                                            </form>\n                                        </div>\n\n                                    </div>\n\n                                    <div class=\"col-sm-6\">\n                                        <div class=\"footer-links\">\n                                            <h4>Useful Links</h4>\n                                            <ul>\n                                                <li><a href=\"#\">Home</a></li>\n                                                <li><a href=\"#\">About us</a></li>\n                                                <li><a href=\"#\">Services</a></li>\n                                                <li><a href=\"#\">Terms of service</a></li>\n                                                <li><a href=\"#\">Privacy policy</a></li>\n                                            </ul>\n                                        </div>\n\n                                        <div class=\"footer-links\">\n                                            <h4>Contact Us</h4>\n                                            <p>\n                                                A108 Adam Street <br>\n                                                New York, NY 535022<br>\n                                                United States <br>\n                                                <strong>Phone:</strong> +1 5589 55488 55<br>\n                                                <strong>Email:</strong> info@example.com<br>\n                                            </p>\n                                        </div>\n\n                                        <div class=\"social-links\">\n                                            <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>\n                                            <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>\n                                            <a href=\"#\" class=\"instagram\"><i class=\"fa fa-instagram\"></i></a>\n                                            <a href=\"#\" class=\"linkedin\"><i class=\"fa fa-linkedin\"></i></a>\n                                        </div>\n\n                                    </div>\n\n                                </div>', NULL, '[]', 'footer-left-part', 'hide', 1, 'App\\User', '2019/10/13/173546654', '2019-11-21 14:42:02', '2019-10-13 15:36:01', '2019-11-21 14:42:02'),
(13, 10, 'Footer', NULL, NULL, NULL, '<div class=\"col-sm-12 content-center text-center\">\n    <footer class=\"main-footer \">\n\n\n        <section class=\"bt-fade-white-015 \">\n            <div class=\"container\">\n                <div class=\"row d-flex flex-wrap align-items-center\">\n\n                    <div class=\"lqd-column col-md-4 col-xs-12\">\n                        <p>Managed By</p>\n\n                        <figure class=\"mb-60 mb-md-0\">\n                            <img src=\"themes/public/assets/maintheme/assets/img/logo/csr.png\" alt=\"Logo\">\n                        </figure>\n\n                    </div><!-- /.col-md-4 -->\n                    <div class=\"lqd-column col-md-4 col-xs-12\">\n                        <p>Designed and Developed By</p>\n\n                        <figure class=\"mb-60 mb-md-0\">\n                            <img src=\"themes/public/assets/maintheme/assets/img/logo/odk-logo.png\" alt=\"Logo\">\n                        </figure>\n\n                    </div><!-- /.col-md-4 -->\n\n\n                    <div class=\"lqd-column col-md-4 col-xs-12\">\n                        <p>Funded By</p>\n                        <figure class=\"mb-60 mb-md-0\">\n                            <img src=\"themes/public/assets/maintheme/assets/img/logo/unicef.png\" alt=\"Logo\">\n                        </figure>\n\n                    </div><!-- /.col-md-4 -->\n                    <div class=\"lqd-column col-md-12 col-xs-12 text-right text-md-center visibility\">\n                        <figure class=\"mb-40\">\n                            <img src=\"themes/public/assets/maintheme/assets/img/logo/logo-1.svg\" alt=\"Logo\">\n                        </figure>\n\n                        <p class=\"font-size-14 mb-60 mb-md-0\">© 2019 <span class=\"font-weight-bold text-secondary\">Unicef</span>.\n                            All Rights Reserved.</p>\n\n                    </div><!-- /.col-md-4 -->\n\n                    <div class=\"lqd-column col-md-4 col-xs-12 visibility-mobile\">\n                        <p class=\"font-size-14 mb-60 mb-md-0\">© 2019 <span class=\"font-weight-bold text-secondary\">Unicef</span>.\n                            All Rights Reserved.</p>\n\n                    </div>\n\n                </div><!-- /.row -->\n            </div><!-- /.container -->\n        </section>\n    </footer>\n\n</div>', NULL, '[]', 'footer-form', 'show', 1, 'App\\User', '2019/10/13/173755901', NULL, '2019-10-13 15:38:20', '2019-11-22 09:21:22'),
(14, 11, 'Copyright', NULL, NULL, NULL, '<div class=\"copyright\">\n                        © Copyright <strong>Mentor</strong>. All Rights Reserved\n                    </div>', NULL, '[]', 'copyright', 'show', 1, 'App\\User', '2019/10/13/174010717', '2019-11-21 14:43:03', '2019-10-13 15:41:25', '2019-11-21 14:43:03'),
(15, 12, 'Credits', NULL, NULL, NULL, '<div class=\"credits\">\n                        Developed by <a href=\"https://opendatakosovo.org/\">Open Data Kosovo</a>\n                    </div>', NULL, '[]', 'credits', 'show', 1, 'App\\User', '2019/10/13/174155532', '2019-11-21 14:43:41', '2019-10-13 15:42:11', '2019-11-21 14:43:41');
INSERT INTO `blocks` (`id`, `category_id`, `name`, `url`, `icon`, `order`, `description`, `image`, `images`, `slug`, `status`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(16, 15, 'Header', NULL, NULL, 1, '<header class=\"main-header main-header-overlay\" data-sticky-header=\"true\" data-sticky-options=\'{ \"stickyTrigger\": \"first-section\" }\'>\n\n        <div class=\"mainbar-wrap\">\n            <div class=\"megamenu-hover-bg\"></div><!-- /.megamenu-hover-bg -->\n            <div class=\"container-fluid mainbar-container\">\n                <div class=\"mainbar\">\n                    <div class=\"row mainbar-row align-items-lg-stretch px-4\">\n\n                        <div class=\"col-auto pr-5\">\n                            <div class=\"navbar-header\">\n                                <a class=\"navbar-brand\" href=\"index-creative.html\" rel=\"home\">\n										<span class=\"navbar-brand-inner\">\n											<img class=\"logo-dark\" src=\"./assets/img/logo/logo-1.svg\" alt=\"Mentorship Platform\">\n											<img class=\"logo-sticky\" src=\"./assets/img/logo/logo-1.svg\" alt=\"Mentorship Platform\">\n											<img class=\"mobile-logo-default\" src=\"./assets/img/logo/logo-1.svg\" alt=\"Mentorship Platform\">\n											<img class=\"logo-default\" src=\"./assets/img/logo/logo-1.svg\" alt=\"Mentorship Platform\">\n										</span>\n                                </a>\n                                <button type=\"button\" class=\"navbar-toggle collapsed nav-trigger style-mobile\" data-toggle=\"collapse\" data-target=\"#main-header-collapse\" aria-expanded=\"false\" data-changeclassnames=\'{ \"html\": \"mobile-nav-activated overflow-hidden\" }\'>\n                                    <span class=\"sr-only\">Toggle navigation</span>\n                                    <span class=\"bars\">\n											<span class=\"bar\"></span>\n											<span class=\"bar\"></span>\n											<span class=\"bar\"></span>\n										</span>\n                                </button>\n                            </div><!-- /.navbar-header -->\n                        </div><!-- /.col -->\n\n                        <div class=\"col\">\n\n                            <div class=\"collapse navbar-collapse\" id=\"main-header-collapse\">\n\n                                <ul id=\"primary-nav\" class=\"main-nav nav align-items-lg-stretch justify-content-lg-start\" data-submenu-options=\'{ \"toggleType\":\"fade\", \"handler\":\"mouse-in-out\" }\' data-localscroll=\"true\">\n\n                                    <li>\n                                        <a href=\"#content\">\n                                            <span class=\"link-icon\"></span>\n                                            <span class=\"link-txt\">\n													<span class=\"link-ext\"></span>\n													<span class=\"txt\">Home</span>\n												</span>\n                                        </a>\n                                    </li>\n                                    <li>\n                                        <a href=\"#works\">\n                                            <span class=\"link-icon\"></span>\n                                            <span class=\"link-txt\">\n													<span class=\"link-ext\"></span>\n													<span class=\"txt\">Workshops</span>\n												</span>\n                                        </a>\n                                    </li>\n                                    <li>\n                                        <a href=\"#services\">\n                                            <span class=\"link-icon\"></span>\n                                            <span class=\"link-txt\">\n													<span class=\"link-ext\"></span>\n													<span class=\"txt\">Platform</span>\n												</span>\n                                        </a>\n                                    </li>\n                                    <li>\n                                        <a href=\"#about\">\n                                            <span class=\"link-icon\"></span>\n                                            <span class=\"link-txt\">\n													<span class=\"link-ext\"></span>\n													<span class=\"txt\">About</span>\n												</span>\n                                        </a>\n                                    </li>\n                                    <li>\n                                        <a href=\"#testimonials\">\n                                            <span class=\"link-icon\"></span>\n                                            <span class=\"link-txt\">\n													<span class=\"link-ext\"></span>\n													<span class=\"txt\">Testimonials</span>\n												</span>\n                                        </a>\n                                    </li>\n                                    <li>\n                                        <a href=\"#news\">\n                                            <span class=\"link-icon\"></span>\n                                            <span class=\"link-txt\">\n													<span class=\"link-ext\"></span>\n													<span class=\"txt\">News</span>\n												</span>\n                                        </a>\n                                    </li>\n\n                                </ul><!-- /#primary-nav  -->\n\n                            </div><!-- /#main-header-collapse -->\n\n                        </div><!-- /.col -->\n\n\n                    </div><!-- /.mainbar-row -->\n                </div><!-- /.mainbar -->\n            </div><!-- /.mainbar-container -->\n        </div><!-- /.mainbar-wrap -->\n\n    </header><!-- /.main-header -->', NULL, '[]', 'header', 'show', 1, 'App\\User', '2019/11/14/105311867', NULL, '2019-11-14 09:54:23', '2019-11-14 09:54:23'),
(17, 16, 'Head', NULL, NULL, NULL, '<section class=\"vc_row fullheight d-flex flex-wrap align-items-center pb-50\" id=\"head\">\n\n    <div class=\"lqd-particles-bg-wrap\">\n\n        <div class=\"ld-particles-container\">\n            <div class=\"ld-particles-inner\" id=\"ld-1527244273759-519b63e0-a9d6\" data-particles=\"true\" data-particles-options=\"{&quot;particles&quot;:{&quot;number&quot;:{&quot;value&quot;:5,&quot;density&quot;:2},&quot;color&quot;:{&quot;value&quot;:[&quot;#f9b851&quot;,&quot;#60eacb&quot;,&quot;#ff97af&quot;,&quot;#4e6bff&quot;]},&quot;shape&quot;:{&quot;type&quot;:[&quot;circle&quot;,&quot;edge&quot;,&quot;triangle&quot;]},&quot;size&quot;:{&quot;value&quot;:55,&quot;random&quot;:true,&quot;anim&quot;:{&quot;enable&quot;:true,&quot;size_min&quot;:40,&quot;speed&quot;:5}},&quot;move&quot;:{&quot;enable&quot;:true,&quot;direction&quot;:&quot;right&quot;,&quot;speed&quot;:1,&quot;random&quot;:true,&quot;out_mode&quot;:&quot;out&quot;,&quot;attract&quot;:{&quot;enable&quot;:true,&quot;rotateX&quot;:1200,&quot;rotateY&quot;:600}}},&quot;interactivity&quot;:[],&quot;retina_detect&quot;:true}\">\n            </div>\n        </div>\n\n    </div><!-- /.lqd-particles-bg-wrap -->\n\n    <div class=\"container\">\n        <div class=\"row d-flex flex-wrap align-items-center\">\n\n            <div class=\"lqd-column col-lg-5 col-md-6 lqd-column\" data-custom-animations=\"true\" data-ca-options=\"{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;initValues&quot;:{&quot;translateY&quot;:51,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}\">\n\n                <div class=\"ld-fancy-heading mask-text\">\n                    <h1 data-split-text=\"true\" data-custom-animations=\"true\" data-ca-options=\"{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.split-inner&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;scale&quot;:1},&quot;animations&quot;:{&quot;scale&quot;:1}}\" data-split-options=\"{&quot;type&quot;:&quot;lines&quot;}\">\n                        <span class=\"ld-fh-txt\">Mentorship Youth</span>\n                    </h1>\n                    <img style=\"position: absolute;width: 20%; margin-top: -5%;\" src=\"themes/public/assets/maintheme/assets/img/mentorship/IV.png\">\n                </div><!-- /.ld-fancy-heading -->\n\n                <div class=\"ld-fancy-heading mask-text mb-75\">\n                    <p data-split-text=\"true\" data-custom-animations=\"true\" data-ca-options=\"{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.split-inner&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;direction&quot;:&quot;forward&quot;,&quot;initValues&quot;:{&quot;scale&quot;:1},&quot;animations&quot;:{&quot;scale&quot;:1}}\" data-split-options=\"{&quot;type&quot;:&quot;lines&quot;}\">\n                        <span class=\"ld-fh-txt\"> We believe mentoring youth is a crucial step in empowering and developing youth through increasing their capacity and their ability to participate in the workforce, policy-making and decision-making processes.</span>\n                    </p>\n                </div><!-- /.ld-fancy-heading -->\n\n\n            </div><!-- /.col-lg-5 col-md-6 -->\n\n            <div class=\"lqd-column col-lg-7 col-md-6 hidden-xs hidden-sm hidden-md\">\n\n                <div class=\"ld-masked-image\" data-dynamic-shape=\"true\">\n                    <svg version=\"1.1\" class=\"scene\" width=\"0\" height=\"0\" preserveAspectRatio=\"none\" viewBox=\"0 0 1440 800\">\n                        <defs>\n                            <clipPath id=\"masked-image-1\">\n                                <path fill=\"black\" d=\"M131,40 C84.135,83.534 96.819,148.446 63.283,217.394 C31.508,282.723 -3.621,324.812 1.461,394.323 C3.451,421.533 12.117,449.828 29.796,480.002 C87.412,578.34 -15.301,663.448 94.611,833.387 C156.302,928.77 316.559,918.015 435.971,936.052 C572.741,956.711 653.384,1003.601 753.566,971.715 C877.689,932.209 924.99262,809.932822 972.63862,707.700822 C1063.84662,512.000822 1038.71071,197.732895 884.476705,67.2268952 C788.919705,-13.6291048 714.704,70.008 529,43 C339.693,15.468 212.609,-35.808 131,40 Z\" pathdata:id=\"\n											M175.270836,26.7977911 C128.405836,70.3317911 129.938279,144.739124 96.4022789,213.687124 C64.6272789,279.016124 41.242383,286.071679 46.324383,355.582679 C48.314383,382.792679 79.5246278,459.251586 88.7738696,492.334164 C116.497714,591.496483 -75.3047466,680.552915 34.6072534,850.491915 C96.2982534,945.874915 281.559,906.015 400.971,924.052 C537.741,944.711 678.161685,902.348368 778.343685,870.462368 C902.466685,830.956368 927.354,806.232 975,704 C1066.208,508.3 1058.68971,185.848951 904.455709,55.3429506 C808.898709,-25.5130494 786.027661,117.60054 600.323661,90.5925401 C411.016661,63.0605401 256.879836,-49.0102089 175.270836,26.7977911 Z;\n											M200.391256,6 C138.06059,22.7990703 77.9622177,42.6445401 44.4262177,111.59254 C12.6512177,176.92154 -4.1051307,212.01786 0.976869296,281.52886 C2.9668693,308.73886 99.0297526,534.545109 108.278994,567.627688 C136.002839,666.790006 -29.1381304,721.523368 80.7738696,891.462368 C142.46487,986.845368 331.636556,840.153183 451.048556,858.190183 C587.818556,878.849183 705.371102,948.496676 805.553102,916.610676 C929.676102,877.104676 941.497784,689.3436 989.143784,587.1116 C1080.35178,391.4116 1050.68971,206.848951 896.455709,76.3429506 C800.898709,-4.5130494 778.027661,138.60054 592.323661,111.59254 C403.016661,84.0605401 312.765712,-24.2866392 200.391256,6 Z\"></path>\n                            </clipPath>\n                        </defs>\n                    </svg>\n                    <figure class=\"clip-svg\" data-responsive-bg=\"true\" style=\"clip-path: url(#masked-image-1); -webkit-clip-path: url(#masked-image-1);\">\n                        <img src=\"themes/public/assets/maintheme/assets/img/mentorship/2img.jpg\" alt=\"Image\">\n                    </figure>\n                </div><!-- /ld-masked-image -->\n\n            </div><!-- /.col-lg-7 col-md-6 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>', NULL, '[]', 'head', 'show', 1, 'App\\User', '2019/11/14/162651414', NULL, '2019-11-14 15:27:33', '2019-11-21 08:59:14'),
(18, 17, 'Become Mentor', NULL, NULL, NULL, '<section class=\"vc_row pt-80 pb-120\">\n    <div class=\"container\">\n        <div class=\"row\">\n\n            <div class=\"lqd-column col-lg-6\">\n\n                <header class=\"fancy-title\" data-custom-animations=\"true\" data-ca-options=\'{\"triggerHandler\":\"inview\",\"animationTarget\":\"all-childs\",\"duration\":1200,\"delay\":100,\"easing\":\"easeOutQuint\",\"direction\":\"forward\",\"initValues\":{\"translateX\":-32,\"opacity\":0},\"animations\":{\"translateX\":0,\"opacity\":1}}\'>\n\n                    <h6 class=\"text-uppercase ltr-sp-2 font-size-12 font-weight-semibold text-secondary\">Becoming a Mentor</h6>\n                    <h2 class=\"mt-md-4 pr-md-7 mb-4\">The Mentorship experience in three simple steps</h2>\n\n                    <div class=\"row\">\n\n                        <div class=\"lqd-column col-xs-4 col-sm-2 pt-3 mb-4\">\n\n                            <div class=\"lqd-h-sep\">\n                                <span class=\"lqd-h-sep-inner\"></span><!-- /.lqd-h-sep-inner -->\n                            </div><!-- /.lqd-h-sep -->\n\n                        </div><!-- /.col-sm-2 -->\n\n                        <div class=\"lqd-column col-sm-10 col-xs-12\">\n                            <p><b>Apply</b>  - Fill out the simple application form.</p>\n\n                        </div><!-- /.col-sm-10 -->\n                        <div class=\"lqd-column col-xs-4 col-sm-2 pt-3 mb-4\">\n\n                            <div class=\"lqd-h-sep\">\n                                <span class=\"lqd-h-sep-inner\"></span><!-- /.lqd-h-sep-inner -->\n                            </div><!-- /.lqd-h-sep -->\n\n                        </div><!-- /.col-sm-2 -->\n\n                        <div class=\"lqd-column col-sm-10 col-xs-12\">\n                            <p><b>Learn</b>  - Complete the courses required to become a mentor.</p>\n\n                        </div><!-- /.col-sm-10 -->\n\n                        <div class=\"lqd-column col-xs-4 col-sm-2 pt-3 mb-4\">\n\n                            <div class=\"lqd-h-sep\">\n                                <span class=\"lqd-h-sep-inner\"></span><!-- /.lqd-h-sep-inner -->\n                            </div><!-- /.lqd-h-sep -->\n\n                        </div><!-- /.col-sm-2 -->\n\n                        <div class=\"lqd-column col-sm-10 col-xs-12\">\n                            <p><b>Mentor</b>  - Lead group of youth implementing the small-scale projects.</p>\n                        </div><!-- /.col-sm-10 -->\n\n                    </div><!-- /.row -->\n\n                </header><!-- /.fancy-title -->\n\n            </div><!-- /.col-lg-6 -->\n\n            <div class=\"lqd-column col-lg-5 col-md-6 col-lg-offset-1\">\n\n                <div class=\"lqd-iconbox-stack\" data-custom-animations=\"true\" data-ca-options=\'{\"triggerHandler\":\"inview\",\"animationTarget\":\"all-childs\",\"duration\":\"1200\",\"startDelay\":\"400\",\"delay\":\"100\",\"easing\":\"easeOutQuint\",\"direction\":\"forward\",\"initValues\":{\"scaleX\":0.25,\"scaleY\":0.25,\"opacity\":0},\"animations\":{\"scaleX\":1,\"scaleY\":1,\"opacity\":1}}\'>\n\n                    <div class=\"iconbox iconbox-round iconbox-shadow iconbox-heading-xs iconbox-filled d-inline-flex iconbox-blue\" data-plugin-options=\'{\"color\": \"#3d59e8\"}\'>\n\n                        <div class=\"iconbox-icon-wrap\">\n									<span class=\"iconbox-icon-container\">\n										<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"64px\" height=\"64px\" viewBox=\"0 0 64 64\" enable-background=\"new 0 0 64 64\" xml:space=\"preserve\"> <defs xmlns=\"http://www.w3.org/2000/svg\"> <linearGradient gradientUnits=\"userSpaceOnUse\" id=\"grad874540\" x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"> <stop offset=\"0%\" stop-color=\"rgb(61, 89, 232)\"></stop> <stop offset=\"100%\" stop-color=\"rgb(61, 89, 232)\"></stop> </linearGradient> </defs> <g> <rect x=\"1\" y=\"10\" fill=\"none\" stroke=\"url(#grad874540)\" stroke-width=\"2\" stroke-miterlimit=\"10\" width=\"62\" height=\"41\"></rect> <line fill=\"none\" stroke=\"url(#grad874540)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"22\" y1=\"63\" x2=\"42\" y2=\"63\"></line> <line fill=\"none\" stroke=\"url(#grad874540)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"32\" y1=\"63\" x2=\"32\" y2=\"51\"></line> </g> <line fill=\"none\" stroke=\"url(#grad874540)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"1\" y1=\"43\" x2=\"64\" y2=\"43\"></line> </svg>\n									</span>\n                        </div><!-- /.iconbox-icon-wrap -->\n                        <div class=\"contents\">\n                            <p class=\"font-size-14\">\n                                <strong>APPLY</strong>\n                            </p>\n                        </div><!-- /.contents -->\n\n                    </div><!-- /.iconbox -->\n\n                    <div class=\"iconbox iconbox-round iconbox-shadow iconbox-heading-xs iconbox-filled d-inline-flex iconbox-pink\" data-plugin-options=\'{\"color\": \"#fe688b\"}\'>\n\n                        <div class=\"iconbox-icon-wrap\">\n									<span class=\"iconbox-icon-container\">\n										<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"64px\" height=\"64px\" viewBox=\"0 0 64 64\" enable-background=\"new 0 0 64 64\" xml:space=\"preserve\"><defs xmlns=\"http://www.w3.org/2000/svg\"><linearGradient gradientUnits=\"userSpaceOnUse\" id=\"grad681643\" x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"><stop offset=\"0%\" stop-color=\"rgb(254, 104, 139)\"></stop><stop offset=\"100%\" stop-color=\"rgb(254, 104, 139)\"></stop></linearGradient></defs> <polygon fill=\"none\" stroke=\"url(#grad681643)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"1,25 12,59 52,59 63,25 \"></polygon> <line fill=\"none\" stroke=\"url(#grad681643)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"14\" y1=\"25\" x2=\"22\" y2=\"5\"></line> <line fill=\"none\" stroke=\"url(#grad681643)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"50\" y1=\"25\" x2=\"42\" y2=\"5\"></line> <polyline fill=\"none\" stroke=\"url(#grad681643)\" stroke-width=\"2\" stroke-linejoin=\"bevel\" stroke-miterlimit=\"10\" points=\"23,41 30,48 43,35 \"></polyline> </svg>\n									</span>\n                        </div><!-- /.iconbox-icon-wrap -->\n                        <div class=\"contents\">\n                            <p class=\"font-size-14\">\n                                <strong>LEARN</strong>\n                            </p>\n                        </div><!-- /.contents -->\n\n                    </div><!-- /.iconbox -->\n\n                    <div class=\"iconbox iconbox-round iconbox-shadow iconbox-heading-xs iconbox-filled d-inline-flex iconbox-green\" data-plugin-options=\'{\"color\": \"#28d5a7\"}\'>\n\n                        <div class=\"iconbox-icon-wrap\">\n									<span class=\"iconbox-icon-container\">\n										<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"64px\" height=\"64px\" viewBox=\"0 0 64 64\" enable-background=\"new 0 0 64 64\" xml:space=\"preserve\"><defs xmlns=\"http://www.w3.org/2000/svg\"><linearGradient gradientUnits=\"userSpaceOnUse\" id=\"grad395875\" x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"><stop offset=\"0%\" stop-color=\"rgb(40, 213, 167)\"></stop><stop offset=\"100%\" stop-color=\"rgb(40, 213, 167)\"></stop></linearGradient></defs> <rect x=\"1\" y=\"7\" fill=\"none\" stroke=\"url(#grad395875)\" stroke-width=\"2\" stroke-miterlimit=\"10\" width=\"62\" height=\"50\"></rect> <line fill=\"none\" stroke=\"url(#grad395875)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"1\" y1=\"15\" x2=\"63\" y2=\"15\"></line> <line fill=\"none\" stroke=\"url(#grad395875)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"10\" y1=\"11\" x2=\"6\" y2=\"11\"></line> <line fill=\"none\" stroke=\"url(#grad395875)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"18\" y1=\"11\" x2=\"14\" y2=\"11\"></line> <line fill=\"none\" stroke=\"url(#grad395875)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"26\" y1=\"11\" x2=\"22\" y2=\"11\"></line> <polyline fill=\"none\" stroke=\"url(#grad395875)\" stroke-width=\"2\" stroke-linejoin=\"bevel\" stroke-miterlimit=\"10\" points=\"23,35 30,42 43,29 \"></polyline> </svg>\n									</span>\n                        </div><!-- /.iconbox-icon-wrap -->\n                        <div class=\"contents\">\n                            <p class=\"font-size-14\">\n                                <strong>MENTOR</strong>\n                            </p>\n                        </div><!-- /.contents -->\n\n                    </div><!-- /.iconbox -->\n\n                </div><!-- /.lqd-iconbox-stack -->\n\n            </div><!-- /.col-lg-5 col-md-6 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>', NULL, '[]', 'become-mentor', 'show', 1, 'App\\User', '2019/11/14/163153987', NULL, '2019-11-14 15:32:21', '2019-11-14 15:32:21'),
(19, 14, 'Workshops', NULL, NULL, NULL, '<section class=\"vc_row pt-80 pb-120\" id=\"workshops\">\n    <div class=\"container\">\n        <div class=\"row\">\n\n            <div class=\"lqd-column col-md-12\">\n\n                <div class=\"liquid-portfolio-list\">\n\n                    <div class=\"row liquid-portfolio-list-row\" data-columns=\"3\" data-liquid-masonry=\"true\" data-masonry-options=\"{ &quot;layoutMode&quot;: &quot;masonry&quot;, &quot;alignMid&quot;: true }\" data-custom-animations=\"true\" data-ca-options=\"{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;.ld-pf-item&quot;,&quot;animateTargetsWhenVisible&quot;:&quot;true&quot;,&quot;duration&quot;:&quot;1400&quot;,&quot;delay&quot;:&quot;180&quot;,&quot;easing&quot;:&quot;easeOutQuint&quot;,&quot;initValues&quot;:{&quot;translateY&quot;:75,&quot;scale&quot;:0.75,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;scale&quot;:1,&quot;opacity&quot;:1}}\">\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 grid-stamp creative-masonry-grid-stamp\"></div>\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 masonry-item\">\n\n                            <div class=\"ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid title-size-32 ld-pf-semiround\">\n\n                                <div class=\"ld-pf-inner\">\n\n                                    <div class=\"ld-pf-image\">\n                                        <figure style=\"background-image: url(\'themes/public/assets/maintheme/assets/img/mentorship/ponder.jpg\');\">\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/ponder.jpg\" alt=\"Portfolio Image\">\n                                        </figure>\n                                    </div><!-- /.ld-pf-image -->\n\n                                    <div class=\"ld-pf-bg bg-gradient-primary-bl opacity-08\"></div><!-- /.ld-pf-bg -->\n\n                                    <div class=\"ld-pf-details\" data-custom-animations=\"true\" data-ca-options=\"{ &quot;triggerHandler&quot;: &quot;mouseenter&quot;, &quot;triggerTarget&quot;: &quot;.ld-pf-item&quot;, &quot;triggerRelation&quot;: &quot;closest&quot;, &quot;offTriggerHandler&quot;: &quot;mouseleave&quot;, &quot;animationTarget&quot;: &quot;.split-inner&quot;, &quot;duration&quot;: 200, &quot;delay&quot;: 35, &quot;offDuration&quot;: 100, &quot;easing&quot;: &quot;easeOutCubic&quot;, &quot;initValues&quot;: { &quot;translateX&quot;: 50, &quot;rotateZ&quot;: -75, &quot;opacity&quot;: 0, &quot;transformOrigin&quot;: [0, &quot;-100%&quot;, 0] }, &quot;animations&quot;: { &quot;translateX&quot;: 0, &quot;rotateZ&quot;: 0, &quot;opacity&quot;: 1, &quot;transformOrigin&quot;: [0, &quot;0%&quot;, 0] } }\">\n                                        <div class=\"ld-pf-details-inner\">\n                                            <h3 class=\"ld-pf-title h4 font-weight-semibold\" data-split-text=\"true\" data-split-options=\"{ &quot;type&quot;: &quot;chars&quot; }\">Discover</h3>\n                                        </div><!-- /.ld-pf-details-inner -->\n                                    </div><!-- /.ld-pf-details -->\n\n                                    <a href=\"http://kosovoinnovations.org/wp-content/uploads/2017/06/PONDER-Critical-Media-Literacy.pdf\" target=\"_blank\" class=\"liquid-overlay-link\"></a>\n\n                                </div><!-- /.ld-pf-inner -->\n\n                            </div><!-- /.ld-pf-item -->\n\n                        </div><!-- /.col-lg-4 col-md-6 -->\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 masonry-item\">\n\n                            <div class=\"ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid title-size-32 ld-pf-semiround\">\n\n                                <div class=\"ld-pf-inner\">\n\n                                    <div class=\"ld-pf-image\">\n                                        <figure style=\"background-image: url(\'themes/public/assets/maintheme/assets/img/mentorship/kyr.png\');\">\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/kyr.png\" alt=\"Portfolio Image\">\n                                        </figure>\n                                    </div><!-- /.ld-pf-image -->\n\n                                    <div class=\"ld-pf-bg bg-gradient-primary-bl opacity-08\"></div><!-- /.ld-pf-bg -->\n\n                                    <div class=\"ld-pf-details\" data-custom-animations=\"true\" data-ca-options=\"{ &quot;triggerHandler&quot;: &quot;mouseenter&quot;, &quot;triggerTarget&quot;: &quot;.ld-pf-item&quot;, &quot;triggerRelation&quot;: &quot;closest&quot;, &quot;offTriggerHandler&quot;: &quot;mouseleave&quot;, &quot;animationTarget&quot;: &quot;.split-inner&quot;, &quot;duration&quot;: 200, &quot;delay&quot;: 35, &quot;offDuration&quot;: 100, &quot;easing&quot;: &quot;easeOutCubic&quot;, &quot;initValues&quot;: { &quot;translateX&quot;: 50, &quot;rotateZ&quot;: -75, &quot;opacity&quot;: 0, &quot;transformOrigin&quot;: [0, &quot;-100%&quot;, 0] }, &quot;animations&quot;: { &quot;translateX&quot;: 0, &quot;rotateZ&quot;: 0, &quot;opacity&quot;: 1, &quot;transformOrigin&quot;: [0, &quot;0%&quot;, 0] } }\">\n                                        <div class=\"ld-pf-details-inner\">\n                                            <h3 class=\"ld-pf-title h4 font-weight-semibold\" data-split-text=\"true\" data-split-options=\"{ &quot;type&quot;: &quot;chars&quot; }\">Discover</h3>\n                                        </div><!-- /.ld-pf-details-inner -->\n                                    </div><!-- /.ld-pf-details -->\n\n                                    <a href=\"http://kosovoinnovations.org/wp-content/uploads/2017/06/Know-You-Rights-1.pdf\" target=\"_blank\" class=\"liquid-overlay-link\"></a>\n\n                                </div><!-- /.ld-pf-inner -->\n\n                            </div><!-- /.ld-pf-item -->\n\n                        </div><!-- /.col-lg-4 col-md-6 -->\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 masonry-item\">\n\n                            <div class=\"ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid title-size-32 ld-pf-semiround\">\n\n                                <div class=\"ld-pf-inner\">\n\n                                    <div class=\"ld-pf-image\">\n                                        <figure style=\"background-image: url(\'themes/public/assets/maintheme/assets/img/mentorship/kosvol.jpg\');\">\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/kosvol.jpg\" alt=\"Portfolio Image\">\n                                        </figure>\n                                    </div><!-- /.ld-pf-image -->\n\n                                    <div class=\"ld-pf-bg bg-gradient-primary-bl opacity-08\"></div><!-- /.ld-pf-bg -->\n\n                                    <div class=\"ld-pf-details\" data-custom-animations=\"true\" data-ca-options=\"{ &quot;triggerHandler&quot;: &quot;mouseenter&quot;, &quot;triggerTarget&quot;: &quot;.ld-pf-item&quot;, &quot;triggerRelation&quot;: &quot;closest&quot;, &quot;offTriggerHandler&quot;: &quot;mouseleave&quot;, &quot;animationTarget&quot;: &quot;.split-inner&quot;, &quot;duration&quot;: 200, &quot;delay&quot;: 35, &quot;offDuration&quot;: 100, &quot;easing&quot;: &quot;easeOutCubic&quot;, &quot;initValues&quot;: { &quot;translateX&quot;: 50, &quot;rotateZ&quot;: -75, &quot;opacity&quot;: 0, &quot;transformOrigin&quot;: [0, &quot;-100%&quot;, 0] }, &quot;animations&quot;: { &quot;translateX&quot;: 0, &quot;rotateZ&quot;: 0, &quot;opacity&quot;: 1, &quot;transformOrigin&quot;: [0, &quot;0%&quot;, 0] } }\">\n                                        <div class=\"ld-pf-details-inner\">\n                                            <h3 class=\"ld-pf-title h4 font-weight-semibold\" data-split-text=\"true\" data-split-options=\"{ &quot;type&quot;: &quot;chars&quot; }\">Discover</h3>\n                                        </div><!-- /.ld-pf-details-inner -->\n                                    </div><!-- /.ld-pf-details -->\n\n                                    <a href=\"http://kosovoinnovations.org/wp-content/uploads/2017/06/Kosovo-Volunteers-Platform-and-Workshop.pdf\" target=\"_blank\" class=\"liquid-overlay-link\"></a>\n\n                                </div><!-- /.ld-pf-inner -->\n\n                            </div><!-- /.ld-pf-item -->\n\n                        </div><!-- /.col-lg-4 col-md-6 -->\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 masonry-item\">\n\n                            <div class=\"ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid title-size-32 ld-pf-semiround\">\n\n                                <div class=\"ld-pf-inner\">\n\n                                    <div class=\"ld-pf-image\">\n                                        <figure style=\"background-image: url(\'themes/public/assets/maintheme/assets/img/mentorship/techst.jpg\');\">\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/techst.jpg\" alt=\"Portfolio Image\">\n                                        </figure>\n                                    </div><!-- /.ld-pf-image -->\n\n                                    <div class=\"ld-pf-bg bg-gradient-primary-bl opacity-08\"></div><!-- /.ld-pf-bg -->\n\n                                    <div class=\"ld-pf-details\" data-custom-animations=\"true\" data-ca-options=\"{ &quot;triggerHandler&quot;: &quot;mouseenter&quot;, &quot;triggerTarget&quot;: &quot;.ld-pf-item&quot;, &quot;triggerRelation&quot;: &quot;closest&quot;, &quot;offTriggerHandler&quot;: &quot;mouseleave&quot;, &quot;animationTarget&quot;: &quot;.split-inner&quot;, &quot;duration&quot;: 200, &quot;delay&quot;: 35, &quot;offDuration&quot;: 100, &quot;easing&quot;: &quot;easeOutCubic&quot;, &quot;initValues&quot;: { &quot;translateX&quot;: 50, &quot;rotateZ&quot;: -75, &quot;opacity&quot;: 0, &quot;transformOrigin&quot;: [0, &quot;-100%&quot;, 0] }, &quot;animations&quot;: { &quot;translateX&quot;: 0, &quot;rotateZ&quot;: 0, &quot;opacity&quot;: 1, &quot;transformOrigin&quot;: [0, &quot;0%&quot;, 0] } }\">\n                                        <div class=\"ld-pf-details-inner\">\n                                            <h3 class=\"ld-pf-title h4 font-weight-semibold\" data-split-text=\"true\" data-split-options=\"{ &quot;type&quot;: &quot;chars&quot; }\">Discover</h3>\n                                        </div><!-- /.ld-pf-details-inner -->\n                                    </div><!-- /.ld-pf-details -->\n\n                                    <a href=\"http://kosovoinnovations.org/wp-content/uploads/2017/06/Techstitution-2-pager.pdf\" target=\"_blank\" class=\"liquid-overlay-link\"></a>\n\n                                </div><!-- /.ld-pf-inner -->\n\n                            </div><!-- /.ld-pf-item -->\n\n                        </div><!-- /.col-lg-4 col-md-6 -->\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 masonry-item\">\n\n                            <div class=\"ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid title-size-32 ld-pf-semiround\">\n\n                                <div class=\"ld-pf-inner\">\n\n                                    <div class=\"ld-pf-image\">\n                                        <figure style=\"background-image: url(\'themes/public/assets/maintheme/assets/img/mentorship/startup.png\');\">\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/startup.png\" alt=\"Portfolio Image\">\n                                        </figure>\n                                    </div><!-- /.ld-pf-image -->\n\n                                    <div class=\"ld-pf-bg bg-gradient-primary-bl opacity-08\"></div><!-- /.ld-pf-bg -->\n\n                                    <div class=\"ld-pf-details\" data-custom-animations=\"true\" data-ca-options=\"{ &quot;triggerHandler&quot;: &quot;mouseenter&quot;, &quot;triggerTarget&quot;: &quot;.ld-pf-item&quot;, &quot;triggerRelation&quot;: &quot;closest&quot;, &quot;offTriggerHandler&quot;: &quot;mouseleave&quot;, &quot;animationTarget&quot;: &quot;.split-inner&quot;, &quot;duration&quot;: 200, &quot;delay&quot;: 35, &quot;offDuration&quot;: 100, &quot;easing&quot;: &quot;easeOutCubic&quot;, &quot;initValues&quot;: { &quot;translateX&quot;: 50, &quot;rotateZ&quot;: -75, &quot;opacity&quot;: 0, &quot;transformOrigin&quot;: [0, &quot;-100%&quot;, 0] }, &quot;animations&quot;: { &quot;translateX&quot;: 0, &quot;rotateZ&quot;: 0, &quot;opacity&quot;: 1, &quot;transformOrigin&quot;: [0, &quot;0%&quot;, 0] } }\">\n                                        <div class=\"ld-pf-details-inner\">\n                                            <h3 class=\"ld-pf-title h4 font-weight-semibold\" data-split-text=\"true\" data-split-options=\"{ &quot;type&quot;: &quot;chars&quot; }\">Discover</h3>\n                                        </div><!-- /.ld-pf-details-inner -->\n                                    </div><!-- /.ld-pf-details -->\n\n                                    <a href=\"http://kosovoinnovations.org/wp-content/uploads/2017/06/StartUP-Social-Venture.pdf\" target=\"_blank\" class=\"liquid-overlay-link\"></a>\n\n                                </div><!-- /.ld-pf-inner -->\n\n                            </div><!-- /.ld-pf-item -->\n\n                        </div><!-- /.col-lg-4 col-md-6 -->\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 masonry-item\">\n\n                            <div class=\"ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid title-size-32 ld-pf-semiround\">\n\n                                <div class=\"ld-pf-inner\">\n\n                                    <div class=\"ld-pf-image\">\n                                        <figure style=\"background-image: url(\'themes/public/assets/maintheme/assets/img/mentorship/upshift.jpg\');\">\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/upshift.jpg\" alt=\"Portfolio Image\">\n                                        </figure>\n                                    </div><!-- /.ld-pf-image -->\n\n                                    <div class=\"ld-pf-bg bg-gradient-primary-bl opacity-08\"></div><!-- /.ld-pf-bg -->\n\n                                    <div class=\"ld-pf-details\" data-custom-animations=\"true\" data-ca-options=\"{ &quot;triggerHandler&quot;: &quot;mouseenter&quot;, &quot;triggerTarget&quot;: &quot;.ld-pf-item&quot;, &quot;triggerRelation&quot;: &quot;closest&quot;, &quot;offTriggerHandler&quot;: &quot;mouseleave&quot;, &quot;animationTarget&quot;: &quot;.split-inner&quot;, &quot;duration&quot;: 200, &quot;delay&quot;: 35, &quot;offDuration&quot;: 100, &quot;easing&quot;: &quot;easeOutCubic&quot;, &quot;initValues&quot;: { &quot;translateX&quot;: 50, &quot;rotateZ&quot;: -75, &quot;opacity&quot;: 0, &quot;transformOrigin&quot;: [0, &quot;-100%&quot;, 0] }, &quot;animations&quot;: { &quot;translateX&quot;: 0, &quot;rotateZ&quot;: 0, &quot;opacity&quot;: 1, &quot;transformOrigin&quot;: [0, &quot;0%&quot;, 0] } }\">\n                                        <div class=\"ld-pf-details-inner\">\n                                            <h3 class=\"ld-pf-title h4 font-weight-semibold\" data-split-text=\"true\" data-split-options=\"{ &quot;type&quot;: &quot;chars&quot; }\">Discover</h3>\n                                        </div><!-- /.ld-pf-details-inner -->\n                                    </div><!-- /.ld-pf-details -->\n\n                                    <a href=\"http://kosovoinnovations.org/wp-content/uploads/2017/06/UPSHIFT-Social-Impact-Workshop.pdf\" target=\"_blank\" class=\"liquid-overlay-link\"></a>\n\n                                </div><!-- /.ld-pf-inner -->\n\n                            </div><!-- /.ld-pf-item -->\n\n                        </div><!-- /.col-lg-4 col-md-6 -->\n\n                        <div class=\"lqd-column col-md-4 col-sm-6 col-xs-12 masonry-item\">\n\n                            <div class=\"ld-pf-item ld-pf-light pf-details-inside pf-details-full pf-details-h-mid pf-details-v-mid title-size-32 ld-pf-semiround\">\n\n                                <div class=\"ld-pf-inner\">\n\n                                    <div class=\"ld-pf-image\">\n                                        <figure style=\"background-image: url(\'themes/public/assets/maintheme/assets/img/mentorship/1podium1.png\');\">\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/1podium1.png\" alt=\"Portfolio Image\">\n                                        </figure>\n                                    </div><!-- /.ld-pf-image -->\n\n                                    <div class=\"ld-pf-bg bg-gradient-primary-bl opacity-08\"></div><!-- /.ld-pf-bg -->\n\n                                    <div class=\"ld-pf-details\" data-custom-animations=\"true\" data-ca-options=\"{ &quot;triggerHandler&quot;: &quot;mouseenter&quot;, &quot;triggerTarget&quot;: &quot;.ld-pf-item&quot;, &quot;triggerRelation&quot;: &quot;closest&quot;, &quot;offTriggerHandler&quot;: &quot;mouseleave&quot;, &quot;animationTarget&quot;: &quot;.split-inner&quot;, &quot;duration&quot;: 200, &quot;delay&quot;: 35, &quot;offDuration&quot;: 100, &quot;easing&quot;: &quot;easeOutCubic&quot;, &quot;initValues&quot;: { &quot;translateX&quot;: 50, &quot;rotateZ&quot;: -75, &quot;opacity&quot;: 0, &quot;transformOrigin&quot;: [0, &quot;-100%&quot;, 0] }, &quot;animations&quot;: { &quot;translateX&quot;: 0, &quot;rotateZ&quot;: 0, &quot;opacity&quot;: 1, &quot;transformOrigin&quot;: [0, &quot;0%&quot;, 0] } }\">\n                                        <div class=\"ld-pf-details-inner\">\n                                            <h3 class=\"ld-pf-title h4 font-weight-semibold\" data-split-text=\"true\" data-split-options=\"{ &quot;type&quot;: &quot;chars&quot; }\">Discover</h3>\n                                        </div><!-- /.ld-pf-details-inner -->\n                                    </div><!-- /.ld-pf-details -->\n\n                                    <a href=\"http://kosovoinnovations.org/wp-content/uploads/2017/06/Podium-Advocacy-for-Change.pdf\" target=\"_blank\" class=\"liquid-overlay-link\"></a>\n\n                                </div><!-- /.ld-pf-inner -->\n\n                            </div><!-- /.ld-pf-item -->\n\n                        </div><!-- /.col-lg-4 col-md-6 -->\n\n                    </div><!-- /.row liquid-portfolio-list-row -->\n\n                </div><!-- /.liquid-portfolio-list -->\n\n            </div><!-- /.col-md-12 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>', NULL, '[]', 'workshops', 'show', 1, 'App\\User', '2019/11/14/163410526', NULL, '2019-11-14 15:34:37', '2019-11-21 09:00:47');
INSERT INTO `blocks` (`id`, `category_id`, `name`, `url`, `icon`, `order`, `description`, `image`, `images`, `slug`, `status`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(20, 19, 'Why?', NULL, NULL, NULL, '<section class=\"vc_row pt-30 pb-60\" id=\"services\">\n    <div class=\"container\">\n\n        <div class=\"row\">\n\n            <div class=\"lqd-column col-md-10 col-md-offset-1\">\n\n                <header class=\"fancy-title text-center mb-75\" data-custom-animations=\"true\" data-ca-options=\'{\"triggerHandler\":\"inview\",\"animationTarget\":\"all-childs\",\"duration\":1200,\"delay\":100,\"initValues\":{\"translateY\":80,\"opacity\":0},\"animations\":{\"translateY\":0,\"opacity\":1}}\'>\n\n                    <h2 class=\"mt-4 mb-4\">Why become a Mentor ?</h2>\n\n                    <div class=\"row\">\n                        <div class=\"lqd-column col-md-6 col-md-offset-3 px-md-5\">\n                            <p>Being a mentor has multiple effects, both for the mentor and the mentee.</p>\n                        </div><!-- /.col-md-6 col-md-offset-3 -->\n                    </div><!-- /.row -->\n\n                </header><!-- /.fancy-title -->\n\n            </div><!-- /.col-md-8 col-md-offset-2 -->\n\n        </div><!-- /.row -->\n\n        <div class=\"row\" data-custom-animations=\"true\" data-ca-options=\'{\"triggerHandler\":\"inview\",\"animationTarget\":\"all-childs\",\"duration\":\"1200\",\"delay\":\"180\",\"initValues\":{\"scale\":0.8,\"opacity\":0},\"animations\":{\"scale\":1,\"opacity\":1}}\'>\n\n            <div class=\"lqd-column col-md-6\">\n\n                <div class=\"iconbox iconbox-side iconbox-semiround iconbox-shadow iconbox-heading-sm iconbox-filled\" id=\"ld_icon_box_5c4e9c4475e68\" data-plugin-options=\'{\"color\":\"#3d59e8\"}\'>\n                    <div class=\"iconbox-icon-wrap\">\n								<span class=\"iconbox-icon-container\">\n									<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"64px\" height=\"64px\" viewBox=\"0 0 64 64\" enable-background=\"new 0 0 64 64\" xml:space=\"preserve\"> <defs xmlns=\"http://www.w3.org/2000/svg\"> <linearGradient gradientUnits=\"userSpaceOnUse\" id=\"grad951863\" x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"> <stop offset=\"0%\" stop-color=\"rgb(61, 89, 232)\"></stop> <stop offset=\"100%\" stop-color=\"rgb(61, 89, 232)\"></stop> </linearGradient> </defs> <path fill=\"none\" stroke=\"url(#grad951863)\" stroke-width=\"2\" stroke-miterlimit=\"10\" d=\"M53.92,10.081c12.107,12.105,12.107,31.732,0,43.838 c-12.106,12.108-31.734,12.108-43.84,0c-12.107-12.105-12.107-31.732,0-43.838C22.186-2.027,41.813-2.027,53.92,10.081z\"></path> <circle fill=\"none\" stroke=\"url(#grad951863)\" stroke-width=\"2\" stroke-miterlimit=\"10\" cx=\"32\" cy=\"32\" r=\"22.999\"></circle> <circle fill=\"none\" stroke=\"url(#grad951863)\" stroke-width=\"2\" stroke-miterlimit=\"10\" cx=\"32\" cy=\"32\" r=\"15\"></circle> <circle fill=\"none\" stroke=\"url(#grad951863)\" stroke-width=\"2\" stroke-miterlimit=\"10\" cx=\"32\" cy=\"32\" r=\"6.999\"></circle> </svg>\n								</span>\n                    </div><!-- /.iconbox-icon-container -->\n                    <div class=\"contents\">\n                        <h3 class=\"mb-2\">To empower youth</h3>\n                        <p>Mentorship goes beyond providing support to overcome personal challenges, to empowering leaders and enabling youth to take charge of their future.</p>\n                    </div><!-- /.contents -->\n                </div><!-- /.iconbox -->\n\n            </div><!-- /.col-md-6 -->\n\n            <div class=\"lqd-column col-md-6\">\n\n                <div class=\"iconbox iconbox-side iconbox-semiround iconbox-shadow iconbox-heading-sm iconbox-filled\" id=\"ld_icon_box_5c4e9c4475e69\" data-plugin-options=\'{\"color\":\"#28d5a7\"}\'>\n                    <div class=\"iconbox-icon-wrap\">\n								<span class=\"iconbox-icon-container\">\n									<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"64px\" height=\"64px\" viewBox=\"0 0 64 64\" enable-background=\"new 0 0 64 64\" xml:space=\"preserve\"><defs xmlns=\"http://www.w3.org/2000/svg\"><linearGradient gradientUnits=\"userSpaceOnUse\" id=\"grad84546\" x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"><stop offset=\"0%\" stop-color=\"rgb(40, 213, 167)\"></stop><stop offset=\"100%\" stop-color=\"rgb(40, 213, 167)\"></stop></linearGradient></defs> <polygon fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"1,63 1,2 62,63 \"></polygon> <polygon fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"14,54 14,30 38,54 \"></polygon> <line fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"8\" y1=\"22\" x2=\"2\" y2=\"22\"></line> <line fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"6\" y1=\"30\" x2=\"2\" y2=\"30\"></line> <line fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"8\" y1=\"38\" x2=\"2\" y2=\"38\"></line> <line fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"6\" y1=\"46\" x2=\"2\" y2=\"46\"></line> <line fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"8\" y1=\"54\" x2=\"2\" y2=\"54\"></line> <polygon fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"25,1 19,7 55,43 63,45 61,37 \"></polygon> <line fill=\"none\" stroke=\"url(#grad84546)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"25\" y1=\"13\" x2=\"31\" y2=\"7\"></line> </svg>\n								</span>\n                    </div><!-- /.iconbox-icon-container -->\n                    <div class=\"contents\">\n                        <h3 class=\"mb-2\">To improve your skills</h3>\n                        <p>Mentors improve their cognitive and social skills through implementing youth projects which represents a hands-on approach to learning.</p>\n                    </div><!-- /.contents -->\n                </div><!-- /.iconbox -->\n\n            </div><!-- /.col-md-6 -->\n\n            <div class=\"lqd-column col-md-6\">\n\n                <div class=\"iconbox iconbox-side iconbox-semiround iconbox-shadow iconbox-heading-sm iconbox-filled\" id=\"ld_icon_box_5c4e9c4475e70\" data-plugin-options=\'{\"color\":\"#f9b851\"}\'>\n                    <div class=\"iconbox-icon-wrap\">\n								<span class=\"iconbox-icon-container\">\n									<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"64px\" height=\"64px\" viewBox=\"0 0 64 64\" enable-background=\"new 0 0 64 64\" xml:space=\"preserve\"><defs xmlns=\"http://www.w3.org/2000/svg\"><linearGradient gradientUnits=\"userSpaceOnUse\" id=\"grad81353\" x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"><stop offset=\"0%\" stop-color=\"rgb(249, 184, 81)\"></stop><stop offset=\"100%\" stop-color=\"rgb(249, 184, 81)\"></stop></linearGradient></defs> <path fill=\"none\" stroke=\"url(#grad81353)\" stroke-width=\"2\" stroke-miterlimit=\"10\" d=\"M32.001,0.887c17.184,0,31.113,13.929,31.112,31.113 C63.114,49.185,49.184,63.115,32,63.113C14.815,63.114,0.887,49.185,0.888,32.001C0.885,14.816,14.815,0.887,32.001,0.887z\"></path> <line fill=\"none\" stroke=\"url(#grad81353)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"32\" y1=\"1\" x2=\"32\" y2=\"63\"></line> <line fill=\"none\" stroke=\"url(#grad81353)\" stroke-width=\"2\" stroke-miterlimit=\"10\" x1=\"63\" y1=\"32\" x2=\"1\" y2=\"32\"></line> <path fill=\"none\" stroke=\"url(#grad81353)\" stroke-width=\"2\" stroke-miterlimit=\"10\" d=\"M30,1c0,0-14,11-14,31s14,31,14,31\"></path> <path fill=\"none\" stroke=\"url(#grad81353)\" stroke-width=\"2\" stroke-miterlimit=\"10\" d=\"M34,1c0,0,14,11,14,31S34,63,34,63\"></path> <path fill=\"none\" stroke=\"url(#grad81353)\" stroke-width=\"2\" stroke-miterlimit=\"10\" d=\"M8,12c0,0,5,10,24,10s24-10,24-10\"></path> <path fill=\"none\" stroke=\"url(#grad81353)\" stroke-width=\"2\" stroke-miterlimit=\"10\" d=\"M8,52c0,0,5-10,24-10s24,10,24,10\"></path> </svg>\n								</span>\n                    </div><!-- /.iconbox-icon-container -->\n                    <div class=\"contents\">\n                        <h3 class=\"mb-2\">To become a UNICEF Volunteer</h3>\n                        <p>Mentors will be UNICEF Volunteers and will be given certificates from UNICEF and the implementing partner in recognition of the volunteer work they do.</p>\n                    </div><!-- /.contents -->\n                </div><!-- /.iconbox -->\n\n            </div><!-- /.col-md-6 -->\n\n            <div class=\"lqd-column col-md-6\">\n\n                <div class=\"iconbox iconbox-side iconbox-semiround iconbox-shadow iconbox-heading-sm iconbox-filled\" id=\"ld_icon_box_5c4e9c4475e71\" data-plugin-options=\'{\"color\":\"#fe688b\"}\'>\n                    <div class=\"iconbox-icon-wrap\">\n								<span class=\"iconbox-icon-container\">\n									<svg version=\"1.0\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"64px\" height=\"64px\" viewBox=\"0 0 64 64\" enable-background=\"new 0 0 64 64\" xml:space=\"preserve\"><defs xmlns=\"http://www.w3.org/2000/svg\"><linearGradient gradientUnits=\"userSpaceOnUse\" id=\"grad611408\" x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"><stop offset=\"0%\" stop-color=\"rgb(254, 104, 139)\"></stop><stop offset=\"100%\" stop-color=\"rgb(254, 104, 139)\"></stop></linearGradient></defs> <circle fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" cx=\"44\" cy=\"38\" r=\"19\"></circle> <circle fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" cx=\"44\" cy=\"38\" r=\"13\"></circle> <polyline fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"30,51 1,51 1,57 38,57 38,56 \"></polyline> <polyline fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"27,45 3,45 3,51 30,51 \"></polyline> <polyline fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"26,39 5,39 5,45 27,45 \"></polyline> <polyline fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"26,33 1,33 1,39 26,39 \"></polyline> <polyline fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"29,27 3,27 3,33 26,33 \"></polyline> <polyline fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"35,21 1,21 1,27 29,27 \"></polyline> <polyline fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" points=\"40,20 40,15 3,15 3,21 35,21 \"></polyline> <rect x=\"1\" y=\"9\" fill=\"none\" stroke=\"url(#grad611408)\" stroke-width=\"2\" stroke-miterlimit=\"10\" width=\"37\" height=\"6\"></rect> </svg>\n								</span>\n                    </div><!-- /.iconbox-icon-container -->\n                    <div class=\"contents\">\n                        <h3 class=\"mb-2\">To be part of a Network of Professionals</h3>\n                        <p>Mentors will be part of the Network of Professionals coming from the private and public sector, thus have the chance to collaborate on other levels.</p>\n                    </div><!-- /.contents -->\n                </div><!-- /.iconbox -->\n\n            </div><!-- /.col-md-6 -->\n\n        </div><!-- /.row -->\n\n    </div><!-- /.container -->\n</section>', NULL, '[]', 'why', 'show', 1, 'App\\User', '2019/11/14/163546262', NULL, '2019-11-14 15:36:15', '2019-11-14 15:36:15'),
(21, 2, 'About', NULL, NULL, NULL, '<section class=\"vc_row pt-90 pb-150\" id=\"about\">\n    <div class=\"container\">\n        <div class=\"row d-flex flex-wrap align-items-center\">\n\n            <div class=\"lqd-column col-md-5 hidden-xs hidden-sm\">\n\n                <div class=\"lqd-parallax-team-members\">\n\n                    <div class=\"liquid-img-group-container\" style=\"top: -158px !important;\">\n                        <div class=\"liquid-img-group-inner\">\n                            <div class=\"liquid-img-group-single\" data-roundness=\"4\">\n                                <div class=\"liquid-img-group-img-container\">\n                                    <div class=\"liquid-img-container-inner\" data-parallax=\"true\" data-parallax-from=\"{&quot;translateY&quot;:47}\" data-parallax-to=\"{&quot;translateY&quot;:-74}\" data-parallax-options=\"{&quot;overflowHidden&quot;: false, &quot;easing&quot;: &quot;linear&quot;}\">\n                                        <figure>\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/about6.jpg\" alt=\"Team Member\">\n                                        </figure>\n                                    </div><!-- /.liquid-img-container-inner -->\n                                </div><!-- /.liquid-img-group-img-container -->\n                            </div><!-- /.liquid-img-group-single -->\n                        </div><!-- /.liquid-img-group-inner -->\n                    </div><!-- /.liquid-img-group-container -->\n\n                    <div class=\"liquid-img-group-container\">\n                        <div class=\"liquid-img-group-inner\">\n                            <div class=\"liquid-img-group-single\" data-roundness=\"4\">\n                                <div class=\"liquid-img-group-img-container\">\n                                    <div class=\"liquid-img-container-inner\" data-parallax=\"true\" data-parallax-from=\"{&quot;translateY&quot;:83}\" data-parallax-to=\"{&quot;translateY&quot;:-94}\" data-parallax-options=\"{&quot;overflowHidden&quot;: false, &quot;easing&quot;: &quot;linear&quot;}\">\n                                        <figure>\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/about5.jpg\" alt=\"Team Member\">\n                                        </figure>\n                                    </div><!-- /.liquid-img-container-inner -->\n                                </div><!-- /.liquid-img-group-img-container -->\n                            </div><!-- /.liquid-img-group-single -->\n                        </div><!-- /.liquid-img-group-inner -->\n                    </div><!-- /.liquid-img-group-container -->\n\n                    <div class=\"liquid-img-group-container\">\n                        <div class=\"liquid-img-group-inner\">\n                            <div class=\"liquid-img-group-single\" data-roundness=\"4\">\n                                <div class=\"liquid-img-group-img-container\">\n                                    <div class=\"liquid-img-container-inner\" data-parallax=\"true\" data-parallax-from=\"{&quot;translateY&quot;:167}\" data-parallax-to=\"{&quot;translateY&quot;:-151}\" data-parallax-options=\"{&quot;overflowHidden&quot;: false, &quot;easing&quot;: &quot;linear&quot;}\">\n                                        <figure>\n                                            <img src=\"themes/public/assets/maintheme/assets/img/mentorship/about4.jpg\" alt=\"Team Member\">\n                                        </figure>\n                                    </div><!-- /.liquid-img-container-inner -->\n                                </div><!-- /.liquid-img-group-img-container -->\n                            </div><!-- /.liquid-img-group-single -->\n                        </div><!-- /.liquid-img-group-inner -->\n                    </div><!-- /.liquid-img-group-container -->\n\n                </div><!-- /.lqd-parallax-team-members -->\n\n            </div><!-- /.col-md-5 -->\n\n            <div class=\"lqd-column col-md-6 col-md-offset-1\" data-custom-animations=\"true\" data-ca-options=\"{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:160,&quot;initValues&quot;:{&quot;translateY&quot;:50,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}\">\n\n                <header class=\"fancy-title mb-60\">\n\n                    <h2 class=\"mt-4 mb-4\">We aim to help youth through valuable mentorship</h2>\n                    <p>The Mentorship Youth platform provides the ultimate and easy experience for professionals aiming to empower the youth to become mentors and apply their skills in projects that benefit the society.</p>\n\n                </header><!-- /.fancy-title -->\n\n            </div><!-- /.col-md-7 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>', NULL, '[]', 'about', 'show', 1, 'App\\User', '2019/11/14/163653719', NULL, '2019-11-14 15:37:12', '2019-11-14 15:51:03'),
(22, 20, NULL, NULL, NULL, NULL, '<section id=\"apply\">\n    <div class=\"container\">\n        <div class=\"row\">\n            <div class=\"lqd-column col-md-10 col-md-offset-1 text-center\" data-custom-animations=\"true\" data-ca-options=\"{&quot;triggerHandler&quot;:&quot;inview&quot;,&quot;animationTarget&quot;:&quot;all-childs&quot;,&quot;duration&quot;:1200,&quot;delay&quot;:100,&quot;initValues&quot;:{&quot;translateY&quot;:80,&quot;opacity&quot;:0},&quot;animations&quot;:{&quot;translateY&quot;:0,&quot;opacity&quot;:1}}\">\n                <header class=\"fancy-title fancy-title-big mb-6\">\n                    <h2 data-split-text=\"true\" data-split-options=\"{&quot;type&quot;:&quot;lines&quot;}\">\n                        Apply For Mentorship!\n                        <br>\n                    </h2>\n                </header><!-- /.fancy-title -->\n                <div class=\"form\">\n                    <div class=\"form-group\">\n                        <label>Identification</label>\n                        <input type=\"text\" name=\"name\" class=\"form-control valid\" id=\"name\" placeholder=\"Your Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" aria-invalid=\"false\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" name=\"lastname\" class=\"form-control valid\" id=\"lastname\" placeholder=\"Your Last Name\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 4 chars\" aria-invalid=\"false\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"email\" class=\"form-control valid\" name=\"email\" id=\"email\" placeholder=\"Your Email\" data-rule=\"email\" data-msg=\"Please enter a valid email\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <select class=\"form-control valid\" id=\"sex\" name=\"sex\" required=\"\">\n                            <optgroup label=\"Choose Gender\">\n                                <option value=\"Male\">Male</option>\n                                <option value=\"Female\">Female</option>\n                            </optgroup>\n                        </select>\n                    </div>\n\n                    <input type=\"hidden\" name=\"dob\" value=\"2014-05-15\">\n                    <div class=\"form-group\">\n                        <label>Contact Info</label>\n                        <input type=\"text\" class=\"form-control\" name=\"mobile\" id=\"mobile\" placeholder=\"Mobile Phone\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\"Phone\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <label>Where do you live ?</label>\n                        <input type=\"text\" class=\"form-control\" name=\"address\" id=\"address\" placeholder=\"Address\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"street\" id=\"street\" placeholder=\"Street\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <select class=\"form-control valid\" id=\"city\" name=\"city\" required=\"\">\n                            <optgroup label=\"Choose City\">\n                                @foreach($cities as $city)\n                                    <option value=\"{{$city}}\">{{$city}}</option>\n                                @endforeach\n                            </optgroup>\n                        </select>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"district\" id=\"district\" placeholder=\"District\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"state\" id=\"state\" placeholder=\"State\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"country\" id=\"country\" placeholder=\"Country\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n\n\n                    <div class=\"form-group\">\n                        <label>Background</label>\n                        <input type=\"text\" class=\"form-control\" name=\"company_organization\" id=\"company_organization\" placeholder=\"Company/Organization\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"background_field_of_study\" id=\"background_field_of_study\" placeholder=\"Background Field of Study\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"qualification\" id=\"qualification\" placeholder=\"Qualification\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"web\" id=\"web\" placeholder=\"Web\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n\n                    <div class=\"form-group\">\n                        <input type=\"text\" class=\"form-control\" name=\"university\" id=\"university\" placeholder=\"University\" data-rule=\"minlen:4\" data-msg=\"Please enter at least 8 chars of subject\">\n                        <div class=\"validation\"></div>\n                    </div>\n                    <div class=\"form-group\">\n                        <textarea name=\"general_info\" class=\"form-control\" placeholder=\"Tell us about yourself\"></textarea>\n                        <div class=\"validation\"></div>\n                    </div>\n\n                    <div class=\"form-group\">\n                        <label>Choose Your Skills</label>\n                        <select class=\"form-control valid select2\" id=\"language_1\" name=\"language_1\" required=\"\" placeholder=\"Choose Languages\" multiple=\"\">\n                            <optgroup label=\"Choose Language\">\n                                @foreach($languages as $language)\n                                    <option value=\"{{$language}}\">{{$language}}</option>\n                                @endforeach\n                            </optgroup>\n                        </select>\n                    </div>\n                    <div class=\"row\">\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Communication</label>\n                                <input type=\"hidden\" value=\"0\" name=\"communication_skill\">\n                                <input type=\"checkbox\" name=\"communication_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Team Work</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"team_work_skill\">\n                                <input type=\"checkbox\" name=\"team_work_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Problem\n                                    Solving</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"problem_solving_skill\">\n                                <input type=\"checkbox\" name=\"problem_solving_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"row\">\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Creativity</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"creativity_skill\">\n                                <input type=\"checkbox\" name=\"creativity_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Adaptability</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"adaptability_skill\">\n                                <input type=\"checkbox\" name=\"adaptability_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Work Ethics</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"work_ethics_skill\">\n                                <input type=\"checkbox\" name=\"work_ethics_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"row\">\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\">\n                                <label for=\"university\" class=\"control-label\">Interpersonal Skills</label>\n                                <input type=\"hidden\" value=\"0\" name=\"interpersonal_skills_skill\">\n                                <input type=\"checkbox\" name=\"interpersonal_skills_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Time\n                                    Management</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"time_management_skill\">\n                                <input type=\"checkbox\" name=\"time_management_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Leadership</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"leadership_skill\">\n                                <input type=\"checkbox\" name=\"leadership_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"row\">\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Finance\n                                    Management</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"finance_management_skill\">\n                                <input type=\"checkbox\" name=\"finance_management_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Capacity\n                                    Development</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"capacity_development_skill\">\n                                <input type=\"checkbox\" name=\"capacity_development_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Advocacy</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"advocacy_skill\">\n                                <input type=\"checkbox\" name=\"advocacy_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                    </div>\n                    <div class=\"row\">\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Critical\n                                    Thinking</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"critical_thinking_skill\">\n                                <input type=\"checkbox\" name=\"critical_thinking_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Coding</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"coding_skill\">\n                                <input type=\"checkbox\" name=\"coding_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\">Networking</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"networking_skill\">\n                                <input type=\"checkbox\" name=\"networking_skill\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                        <div class=\"col-md-4 col-sm-6 col-xs-6\">\n                            <div class=\"form-group\"><label for=\"university\" class=\"control-label\" href=\"#modal-2\" data-lity=\"#modal-2\">I Agree to the Terms and\n                                    Conditions</label>\n\n                                <input type=\"hidden\" value=\"0\" name=\"terms_conditions\">\n                                <input type=\"checkbox\" name=\"terms_conditions\" value=\"1\" class=\"error\"><br>\n                            </div>\n                        </div>\n                    </div>\n                    <button type=\"submit\" class=\"btn btn-solid text-uppercase circle btn-bordered border-thin font-size-14 font-weight-semibold\" data-localscroll=\"true\" data-localscroll-options=\"{&quot;scrollBelowSection&quot;:true}\">\n							<span>\n								<span class=\"btn-txt\">Apply</span>\n							</span>\n                    </button>\n\n\n                </div>\n\n\n            </div><!-- /.col-md-10 col-md-offset-1 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>', NULL, '[]', 'apply', 'show', 1, 'App\\User', '2019/11/14/164007945', NULL, '2019-11-14 15:40:27', '2019-11-22 09:19:54'),
(23, 21, 'Thank You Page', NULL, NULL, NULL, '<section class=\"vc_row pt-50 pb-60\" style=\"padding-top: 19% !important;\">\n    <div class=\"container\">\n        <div class=\"row\">\n\n            <div class=\"lqd-column col-md-10 col-md-offset-1 text-center\" data-custom-animations=\"true\" data-ca-options=\'{\"triggerHandler\":\"inview\",\"animationTarget\":\"all-childs\",\"duration\":1200,\"delay\":100,\"initValues\":{\"translateY\":80,\"opacity\":0},\"animations\":{\"translateY\":0,\"opacity\":1}}\'>\n\n                <header class=\"fancy-title fancy-title-big mb-6\">\n                    <h2 data-split-text=\"true\" data-split-options=\'{\"type\":\"lines\"}\'>\n                        Thank You for Applying,\n                        <br>\n                        <span class=\"font-size-2-15x lh-15 text-primary\" data-fittext=\"true\" data-fittext-options=\'{ \"maxFontSize\": 70, \"minFontSize\": 40, \"compressor\": 0.5 }\'>we\'ll get back to you soon</span>\n                    </h2>\n                </header><!-- /.fancy-title -->\n\n                <a href=\"/\" class=\"btn btn-solid text-uppercase circle btn-bordered border-thin font-size-14 font-weight-semibold\" data-localscroll=\"true\" data-localscroll-options=\'{\"scrollBelowSection\":true}\'>\n							<span>\n								<span class=\"btn-txt\">Return Back</span>\n							</span>\n                </a>\n\n            </div><!-- /.col-md-10 col-md-offset-1 -->\n\n        </div><!-- /.row -->\n    </div><!-- /.container -->\n</section>', NULL, '[]', 'thank-you-page', 'hide', 1, 'App\\User', '2019/11/14/164715366', NULL, '2019-11-14 15:47:48', '2019-11-14 15:47:48'),
(24, 22, 'T&C Modal', NULL, NULL, NULL, '<div id=\"modal-2\" class=\"lqd-modal lity-hide\">\n    <div class=\"lqd-modal-inner\">\n\n        <div class=\"lqd-modal-head\"></div><!-- /.lqd-modal-head -->\n\n        <div class=\"lqd-modal-content\">\n\n            <div class=\"row\">\n                <div class=\"lqd-column col-md-8 col-md-offset-2\">\n                    <p><b>Terms and conditions,<b><br><br>\n                        I hereby agree and commit myself to the following fundamental principles and professional\n                        standards, and agree to be individually and collectively accountable for applying them in my\n                        work during my engagement within this platform and actions and activities deriving from it:<br><br>\n                        All my engagement and work will be on a voluntary basis;<br>\n                        I will be punctual and respect the time as agreed beforehand on the actions and activities I\n                        willingly participate;<br>\n                        I will act in the best interests of children, youth and adolescents;<br>\n                        I will demonstrate integrity, truthfulness and honesty;<br>\n                        I will respect the dignity and worth of every individual and will do my utmost to promote and\n                        practice understanding and tolerance to foster respect for diversity, be it of gender, age,\n                        religion, culture, ethnicity or race; <br>\n                        I will foster a climate of impartiality, fairness and objectivity; <br><br>\n\n                        By clicking submit I agree to the above terms and conditions.\n                    </b></b></p><b><b>\n                </b></b></div><!-- /.col-md-8 col-md-offset-2 --><b><b>\n            </b></b></div><!-- /.row --><b><b>\n        </b></b></div><!-- /.row --><b><b>\n\n    </b></b></div><!-- /.lqd-modal-content --><b><b>\n\n    <div class=\"lqd-modal-foot\"></div><!-- /.lqd-modal-foot -->\n\n</b></b></div><!-- /.lqd-modal-inner --><b><b>\n<!-- /.lqd-modal --></b></b>', NULL, '[]', 'tc-modal', 'show', 1, 'App\\User', '2019/11/22/102033603', NULL, '2019-11-22 09:20:59', '2019-11-22 09:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `block_categories`
--

CREATE TABLE `block_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci DEFAULT 'hide',
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_categories`
--

INSERT INTO `block_categories` (`id`, `name`, `slug`, `title`, `details`, `status`, `user_type`, `user_id`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Features', 'features', 'Packed with features you can\'t live without.', 'Visit our <a href=\"https://lavalite.org/docs\" target=\"_blank\">documentation</a> for more information.', 'show', 'App\\User', 1, '2016/10/31/163917964', '2019-11-21 14:45:46', '2016-07-20 05:17:48', '2019-11-21 14:45:46'),
(2, 'About', 'about', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/163854708', NULL, '2019-10-13 14:39:25', '2019-10-13 15:05:31'),
(3, 'Services', 'services', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/171004608', '2019-11-21 14:47:14', '2019-10-13 15:10:16', '2019-11-21 14:47:14'),
(4, 'Why Us', 'whyus', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/171451366', '2019-11-21 14:48:02', '2019-10-13 15:15:08', '2019-11-21 14:48:02'),
(5, 'Call To Action', 'calltoaction', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/171648763', '2019-11-21 14:46:12', '2019-10-13 15:17:09', '2019-11-21 14:46:12'),
(6, 'Portfolio', 'portfolio', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/172205707', '2019-11-21 14:46:59', '2019-10-13 15:22:21', '2019-11-21 14:46:59'),
(7, 'Testimonials', 'testimonials', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/172351394', NULL, '2019-10-13 15:24:07', '2019-10-13 15:24:07'),
(8, 'FAQ', 'faq', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/172959461', NULL, '2019-10-13 15:30:11', '2019-10-13 15:30:11'),
(9, 'Footer Left', 'footerleft', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/173508483', '2019-11-21 14:46:28', '2019-10-13 15:35:32', '2019-11-21 14:46:28'),
(10, 'Footer', 'footer', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/173717563', NULL, '2019-10-13 15:37:30', '2019-11-14 15:44:38'),
(11, 'Copyright', 'copyright', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/173934326', '2019-11-21 14:46:46', '2019-10-13 15:39:47', '2019-11-21 14:46:46'),
(12, 'Credits', 'credits', NULL, NULL, 'show', 'App\\User', 1, '2019/10/13/173950625', '2019-11-21 14:47:44', '2019-10-13 15:40:01', '2019-11-21 14:47:44'),
(13, 'Home', 'home', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/102239527', NULL, '2019-11-14 09:22:53', '2019-11-14 09:22:53'),
(14, 'Workshops', 'workshops', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/102401698', NULL, '2019-11-14 09:24:19', '2019-11-14 09:24:19'),
(15, 'Header', 'header', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/105211639', NULL, '2019-11-14 09:52:25', '2019-11-14 09:52:25'),
(16, 'Head', 'head', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/162622392', NULL, '2019-11-14 15:26:30', '2019-11-14 15:26:30'),
(17, 'BecomeMentor', 'becomementor', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/163108753', NULL, '2019-11-14 15:31:29', '2019-11-14 15:31:29'),
(18, 'Workshops', 'workshops', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/163254141', NULL, '2019-11-14 15:33:03', '2019-11-14 15:33:11'),
(19, 'Why?', 'why', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/163516808', NULL, '2019-11-14 15:35:38', '2019-11-14 15:35:38'),
(20, 'Apply', 'apply', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/163943579', NULL, '2019-11-14 15:39:55', '2019-11-14 15:39:55'),
(21, 'ThankYou', 'thankyou', NULL, NULL, 'show', 'App\\User', 1, '2019/11/14/164656365', NULL, '2019-11-14 15:47:06', '2019-11-14 15:47:06'),
(22, 'T&C Modal', 't&c', NULL, NULL, 'show', 'App\\User', 1, '2019/11/22/102009389', NULL, '2019-11-22 09:20:27', '2019-11-22 09:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `reporting_to` int(11) DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '123',
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `dob` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT '2014-05-15',
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `email_verified_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company_organization` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_field_of_study` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_1` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `language_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_info` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid` tinyint(4) DEFAULT NULL,
  `skills` blob,
  `languages` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexual_harassment_cert` tinyint(1) DEFAULT NULL,
  `child_protection_cert` tinyint(1) DEFAULT NULL,
  `human_centered_design_cert` tinyint(1) DEFAULT NULL,
  `cv` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `reporting_to`, `name`, `lastname`, `email`, `password`, `api_token`, `remember_token`, `sex`, `dob`, `designation`, `mobile`, `phone`, `address`, `street`, `city`, `district`, `state`, `country`, `photo`, `web`, `permissions`, `status`, `email_verified_at`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`, `company_organization`, `background_field_of_study`, `qualification`, `university`, `language_1`, `language_2`, `language_3`, `general_info`, `birthday`, `paid`, `skills`, `languages`, `sexual_harassment_cert`, `child_protection_cert`, `human_centered_design_cert`, `cv`) VALUES
(1, 0, 'Test ', 'Mentor', 'client@lavalite.org', '$2y$10$x0vA5zkIsp4fKU3zYW8kn.Lyu/x3cHxTMupY0Gp7Y7oEm3nxyq3yi', 'KcLh3jC4FzesHR5AfLEQDdtLwog59qIs7RdUJUR1gWocPniy2RibueqQ1pUh', NULL, 'Male', '2014-05-15', 'Super User', NULL, '049862556', NULL, NULL, NULL, NULL, NULL, NULL, '[{\"caption\":null,\"file\":null,\"folder\":null,\"path\":null,\"time\":null}]', 'http://litepie.org', NULL, 'Active', '2019-04-15 00:00:00', NULL, NULL, NULL, '2019-11-11 15:33:20', '2015-09-14 22:00:00', '2019-11-11 15:33:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, 'Dren', 'Mullafetahu', 'dren@gmail.com', '$2y$10$DxaZxcH5/ElSirLVTNprEuuaafKBBRZ9iYFgSyb7FL1sO61wYGHUW', 'sjpa1RgjPNs4ryvZeiA8KiDV2kjncRNotwwD9xybwkLXTaXFNijx8A0GVb1R', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, NULL, NULL, NULL, '2019-10-11 12:17:31', '2019-10-11 12:17:11', '2019-10-11 12:17:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 0, 'Gentrit', 'Ademi', 'dren@opendatakosovo.org', '$2y$10$4PAbgvftuh8UU8V4qSn6nekQbi0z8n2yQDPR7cbLhP24jV.hYrJs2', 'm0LLGY1h1hFP0MSXbUtowwsgraO2byK2t31bcC9sJTqHxUYCBlDQ8xTLhEL6', NULL, '', '2014-05-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', '2019-11-25 15:09:09', NULL, NULL, NULL, NULL, '2019-11-12 14:39:20', '2019-11-25 14:09:09', NULL, NULL, NULL, NULL, 'none', 'none', 'none', NULL, '2019-11-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, 'Dren', 'Mullafetahu', 'dren.mullafetahu1@gmail.com', '$2y$10$L.Cgo9QPRliaiWPddS/yV./A1ZgDuJ2jtiiGfuwez3ix/iTfU9Rqu', NULL, 'e0tjMcidBWEIAukaTtejPPks5mPZzOLS3vaMBCpAtgxP0cG11XEdDtqTxi1l', 'Male', '2014-05-15', NULL, '049862556', '029225687', 'Afrim Zhitija Street, Bl.4 / Ent.4 , No. 19', NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, 'New', '2019-11-12 20:58:03', NULL, NULL, NULL, NULL, '2019-11-12 19:07:09', '2019-11-28 07:31:57', NULL, 'Engineering', 'Bachelors Degree', 'Trakya University', 'none', 'none', 'none', NULL, '2019-11-12', 0, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2231223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2231223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2230223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2230223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2231223b7d7d, NULL, 1, 1, 1, NULL),
(22, 0, 'Blerta', 'Thaqi', 'dramdrum.m@gmail.com', '$2y$10$RYuX2FMhaIJO0pgo9VoWK.hRBvTb8Yn5uxRAgQJhxf9yfGT8ErC52', NULL, 'wlJvD9wKyvY0hYviewRaeX7BTUvpMS0SeAz6ZPcIp4OZjj2IOCLzVbGc1vM8', 'Male', '2014-05-15 00:00:00', NULL, '049862556', '049862556', 'Xhemil Fluku, 54', NULL, 'Prizren', NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2019-11-14 22:31:08', NULL, NULL, NULL, NULL, '2019-11-14 20:48:20', '2019-11-14 21:31:08', NULL, 'Engineering', 'Bachelors Degree', 'Prizren', 'none', 'none', 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 0, 'Flamur', 'Caka', 'flamur.caka@outlook.com', '$2y$10$JRlrVaDyWjsnizPTWYE4DOgq9jCDvRvWS/vH1GkqVmiWQgDFKzAf.', 'gFwzYAHMecFpwSVkZ8er7siGLpKZwbhWGf1I9gJhakgbOjUZPWHRvHQ57B5l', NULL, '', '2014-05-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', '2019-11-18 13:37:53', NULL, NULL, NULL, NULL, '2019-11-18 12:20:38', '2019-11-18 12:37:53', NULL, NULL, NULL, NULL, 'none', 'none', 'none', NULL, '2019-11-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 0, 'Artan', 'Spahiu', 'fc24709@seeu.edu.mk', '$2y$10$XfZF/HCmxJpgpSQdGgGX4OuLVPFMovUoI6D39Du3hVvc6z9fekEI.', 'wKytEPBQ3BuvDfx1KVtv0TSdk5EkNZphaF68GBKzLgQNrluorDZV9Lvvmo17', NULL, '', '2014-05-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-18 13:32:55', '2019-11-22 07:51:23', NULL, NULL, NULL, NULL, 'none', 'none', 'none', NULL, '2019-11-06', 0, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 0, 'dfgdfg', 'dfgdfg', 'dfgfghfgh@gmail.com', '123', NULL, NULL, 'Male', '2014-05-15', NULL, '123234', '3245', 'Xhemil Fluku, 54', NULL, 'Prizren', 'asd', 'asd', 0, NULL, 'dfg', NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-22 14:33:18', '2019-11-22 14:33:18', 'dfg', 'dfg', 'dfg', 'Prizren', 'NULL', NULL, NULL, 'fdgh', NULL, NULL, 0x613a31353a7b693a303b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d693a313b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2230223b7d693a323b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2230223b7d693a333b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2230223b7d693a343b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2231223b7d693a353b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2230223b7d693a363b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2231223b7d693a373b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d693a383b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d693a393b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d693a31303b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2230223b7d693a31313b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2231223b7d693a31323b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d693a31333b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2230223b7d693a31343b613a323a7b733a353a22736b696c6c223b73, 'a:4:{i:0;s:8:\"Albanian\";i:1;s:7:\"English\";i:2;s:7:\"Serbian\";i:3;s:7:\"Turkish\";}', NULL, NULL, NULL, NULL),
(35, 0, 'Premtim', 'Dula', 'premtim.dula@gmail.com', '$2y$10$JwAKPiOJJ4cV7iFtr7S6huKGsfnCjvOCtm9TGpNr.EHFCYTd2SPD2', NULL, 'EE4LjQ59aca4lLZYX5yTS9sCBGMyjcQOWkjDpGXSpjxDNhYu3GqfKGmhOiGg', 'Male', '2014-05-15', NULL, '049666555', '3333222', 'asd', NULL, 'Prizren', 'sdf', 'Republic of Kosovo', 0, NULL, 'asd', NULL, 'Active', '2019-11-24 22:21:45', NULL, NULL, NULL, NULL, '2019-11-24 21:10:28', '2019-11-24 21:21:45', 'asda', 'BSC', 'Engineering', 'Prishtina', 'Turkish', 'none', 'none', NULL, NULL, 0, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2231223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2231223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2230223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2231223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2230223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2230223b7d7d, 'a:3:{i:0;s:7:\"English\";i:1;s:7:\"Serbian\";i:2;s:7:\"Turkish\";}', NULL, NULL, NULL, NULL),
(36, 0, 'Benjamin', 'Shehu', 'Benjamin@opendatakosovo.com', '123', NULL, NULL, 'Male', '2014-05-15', NULL, '043676877', NULL, 'Önnerts väg 16', NULL, 'Prishtine', 'Pristina', NULL, 0, NULL, NULL, NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-25 07:25:29', '2019-11-25 07:25:29', 'Open Data Kosovo', 'Police', NULL, 'Linnéuniversitetet', 'NULL', NULL, NULL, NULL, NULL, NULL, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2230223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2231223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2230223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2230223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2231223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2230223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2230223b7d7d, 'a:2:{i:0;s:8:\"Albanian\";i:1;s:7:\"English\";}', NULL, NULL, NULL, NULL),
(37, 0, 'Blerina', 'Ramaj', 'blerina@opendatakosovo.org', '$2y$10$MiPp.3EJyXlMNSAyMA9/lejBukb5fd7kGTRVHOepPdsqpnf1HsdjC', NULL, 'XZvgvUIZkeCcHLNZtzHSAq3fG3bwSYdre8Y1XwhKEAXJGHdi5Phpy4yzyu3x', 'Female', '2014-05-15', NULL, '044169991', '044169991', 'Prishtina', NULL, 'Prishtine', NULL, NULL, NULL, NULL, 'www.opendatakosovo.org', NULL, 'New', '2019-11-25 08:38:47', NULL, NULL, NULL, NULL, '2019-11-25 07:25:57', '2019-11-27 09:39:49', 'Open Data Kosovo', 'Project Manager', 'Law', 'Law Faculty', 'English', 'none', 'none', NULL, NULL, 1, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2230223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2231223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2231223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2231223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2231223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2231223b7d7d, 'a:2:{i:0;s:8:\"Albanian\";i:1;s:7:\"English\";}', 1, 1, 0, NULL),
(38, 0, 'Edona', 'Dervisholli', 'edona@opendatakosovo.org', '123', NULL, NULL, 'Female', '2014-05-15', NULL, '049962653', '049962653', 'Fushe Kosova', NULL, 'Prishtine', NULL, 'Prishtina', 0, NULL, NULL, NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-25 07:28:55', '2019-11-25 07:28:55', 'Open data Kosovo', 'University of Law', 'Bachelor', NULL, 'NULL', NULL, NULL, 'Im a financ asistent at Open data ksovo', NULL, NULL, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2231223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2231223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2230223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2231223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2231223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2230223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2230223b7d7d, 'a:2:{i:0;s:7:\"English\";i:1;s:6:\"German\";}', NULL, NULL, NULL, NULL),
(39, 0, 'Elira', 'Salihu', 'elira@opendatakosovo.org', '123', NULL, NULL, 'Female', '2014-05-15', NULL, '045986075', '045986075', 'Zia Shemsiu', NULL, 'Prishtine', 'Prishtina', 'Kosovo', 0, NULL, NULL, NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-25 07:32:47', '2019-11-25 07:32:47', 'ODK', 'Political Sciences', 'Bachelor', 'University of Prishtina', 'NULL', NULL, NULL, NULL, NULL, NULL, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2231223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2230223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2230223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2230223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2230223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2230223b7d7d, 'a:1:{i:0;s:8:\"Albanian\";}', NULL, NULL, NULL, NULL),
(41, 0, 'Edon Mullafetahu', 'Mullafetahu', 'dfgdfgh@gmail.com', '123', NULL, NULL, 'Male', '2014-05-15', NULL, '123', '+38349862556', 'Afrim Zhitija Street, Bl.4 / Ent.4 , No. 19', NULL, 'Prizren', 'szdxfsdf', 'Republic of Kosovo', 0, NULL, 'asd', NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-28 08:10:08', '2019-11-28 08:10:08', 'sdfsdf', 'Engineering', 'Bachelors Degree', 'Prishtina', 'NULL', NULL, NULL, 'asdasd', NULL, NULL, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2230223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2231223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2230223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2230223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2230223b7d7d, 'a:3:{i:0;s:8:\"Albanian\";i:1;s:7:\"English\";i:2;s:7:\"Turkish\";}', NULL, NULL, NULL, NULL),
(42, 0, 'Edon Mullafetahu', 'Mullafetahu', 'asdfdfghfgj@opendatakosovo.org', '123', NULL, NULL, 'Male', '2014-05-15', NULL, '123', '+38349862556', 'Afrim Zhitija Street, Bl.4 / Ent.4 , No. 19', NULL, 'Prizren', 'szdxfsdf', 'Republic of Kosovo', 0, NULL, 'asd', NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-28 08:13:08', '2019-11-28 08:13:08', 'sdfsdf', 'BSC', 'Bachelors Degree', 'Prishtina', 'NULL', NULL, NULL, 'asfdfgfgh', NULL, NULL, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2230223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2231223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2230223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2231223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2230223b7d7d, 'a:3:{i:0;s:8:\"Albanian\";i:1;s:7:\"Serbian\";i:2;s:6:\"German\";}', NULL, NULL, NULL, NULL),
(43, 0, 'Edon Mullafetahu', 'Mullafetahu', 'sdfgdfg@gmail.com', '123', NULL, NULL, 'Male', '2014-05-15', NULL, '123', '+38349862556', 'Afrim Zhitija Street, Bl.4 / Ent.4 , No. 19', NULL, 'Prizren', 'szdxfsdf', 'Republic of Kosovo', 0, NULL, 'asd', NULL, 'New', NULL, NULL, NULL, NULL, NULL, '2019-11-28 08:16:43', '2019-11-28 08:16:43', 'sdfsdf', 'Engineering', 'Bachelors Degree', 'Prishtina', 'NULL', NULL, NULL, 'asddfg', NULL, NULL, 0x613a31353a7b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b613a323a7b733a353a22736b696c6c223b733a31393a22736b696c6c5f636f6d6d756e69636174696f6e223b733a353a2276616c7565223b733a313a2231223b7d733a31353a22736b696c6c5f7465616d5f776f726b223b613a323a7b733a353a22736b696c6c223b733a31353a22736b696c6c5f7465616d5f776f726b223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f70726f626c656d5f736f6c76696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31363a22736b696c6c5f63726561746976697479223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f63726561746976697479223b733a353a2276616c7565223b733a313a2230223b7d733a31383a22736b696c6c5f61646170746162696c697479223b613a323a7b733a353a22736b696c6c223b733a31383a22736b696c6c5f61646170746162696c697479223b733a353a2276616c7565223b733a313a2231223b7d733a31373a22736b696c6c5f776f726b5f657468696373223b613a323a7b733a353a22736b696c6c223b733a31373a22736b696c6c5f776f726b5f657468696373223b733a353a2276616c7565223b733a313a2230223b7d733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b613a323a7b733a353a22736b696c6c223b733a32353a22736b696c6c5f696e746572706572736f6e616c5f736b696c6c223b733a353a2276616c7565223b733a313a2230223b7d733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32313a22736b696c6c5f74696d655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6c656164657273686970223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6c656164657273686970223b733a353a2276616c7565223b733a313a2230223b7d733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b613a323a7b733a353a22736b696c6c223b733a32343a22736b696c6c5f66696e616e63655f6d616e6167656d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b613a323a7b733a353a22736b696c6c223b733a32363a22736b696c6c5f63617061636974795f646576656c6f706d656e74223b733a353a2276616c7565223b733a313a2230223b7d733a31343a22736b696c6c5f6164766f63616379223b613a323a7b733a353a22736b696c6c223b733a31343a22736b696c6c5f6164766f63616379223b733a353a2276616c7565223b733a313a2230223b7d733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b613a323a7b733a353a22736b696c6c223b733a32333a22736b696c6c5f637269746963616c5f7468696e6b696e67223b733a353a2276616c7565223b733a313a2230223b7d733a31323a22736b696c6c5f636f64696e67223b613a323a7b733a353a22736b696c6c223b733a31323a22736b696c6c5f636f64696e67223b733a353a2276616c7565223b733a313a2231223b7d733a31363a22736b696c6c5f6e6574776f726b696e67223b613a323a7b733a353a22736b696c6c223b733a31363a22736b696c6c5f6e6574776f726b696e67223b733a353a2276616c7565223b733a313a2231223b7d7d, 'a:3:{i:0;s:8:\"Albanian\";i:1;s:7:\"English\";i:2;s:7:\"Turkish\";}', NULL, NULL, NULL, 'cv/sdfgdfg@gmail.com/xHdz3L0PdfClE1k5zjhgTnwuMQIEaeHr80Kp6EV8.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default` tinyint(4) DEFAULT NULL,
  `website` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `lat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Show','Hide') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `mobile`, `email`, `default`, `website`, `details`, `address`, `street`, `city`, `state`, `country`, `zip`, `lat`, `lng`, `status`, `slug`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Renfos Technologies Pvt. Ltd.', '+91 484-4011 609', '+91 97444 89361', 'india@lavalite.org', NULL, 'http://lavalite.org', 'INFOPARK TBC\nJNI Stadium Complex, Kaloor\nKochi, Kerala,\nIndia, Pin - 682017', 'INFOPARK TBC, JNI Stadium Complex', 'Kaloor', 'Kochi', 'Kerala', 'India', 682017, '9.998856897222739', '76.30494149737547', 'Show', 'headoffice', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `group_description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentor_certificates`
--

CREATE TABLE `mentor_certificates` (
  `id` int(11) NOT NULL,
  `mentor_id` int(11) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_certificates`
--

INSERT INTO `mentor_certificates` (`id`, `mentor_id`, `filename`, `created_at`, `updated_at`) VALUES
(1, 7, 'certificates/7/8hlcNqG5v0OZv3rVViz0Q3zamCsb4V1u6OjOEGnZ.txt', '2019-11-13 08:27:57', '2019-11-13 08:27:57'),
(2, 7, 'certificates/7/AYhiTCU6EC697QFYjyUIiWF7Rw0Y92e3pmFM6PCD.txt', '2019-11-13 09:10:30', '2019-11-13 09:10:30'),
(3, 7, 'certificates/7/tgnM77UYAM996mYPjkGfut4FhNXtYDKOlnvKruZX.txt', '2019-11-13 09:10:30', '2019-11-13 09:10:30'),
(4, 14, 'certificates/14/ApEVfGL5PSYcB2cKEHIHsSxt5lQDIiOlq7YOFUbE.pdf', '2019-11-13 09:53:49', '2019-11-13 09:53:49'),
(5, 14, 'certificates/14/ZpQtMMi7zCRTvZUVbxhw54bYlJWngEJrdDWiHIMs.pdf', '2019-11-13 09:53:49', '2019-11-13 09:53:49'),
(8, 24, 'certificates/24/RPC88E4kWvAOFnfSTvPmTWEEBIHwAQu5Jp5f9CNU.pdf', '2019-11-22 09:03:49', '2019-11-22 09:03:49'),
(9, 24, 'certificates/24/419hfiY047CNC0MVVIGLiEHJKpAWskvjLJf00LWx.pdf', '2019-11-22 09:03:49', '2019-11-22 09:03:49'),
(10, 24, 'certificates/24/nLRSG9Q4oi8REFd8eTxnnWMSWN7rFwJro2ANNot8.pdf', '2019-11-22 09:04:09', '2019-11-22 09:04:09'),
(11, 24, 'certificates/24/prY8a9gwkDJ4TjLXbGz6QPGxMea7SVQdcZfg3tvk.pdf', '2019-11-22 09:04:09', '2019-11-22 09:04:09'),
(12, 24, 'certificates/24/6LdezSuXUPh6Vz4uTFgL2Y3XpInhxrfoIsJfe0hE', '2019-11-22 09:04:09', '2019-11-22 09:04:09'),
(13, 24, 'certificates/24/6KBUlUekw8iEEgSfah0wenSfNXcJo6Ddn2jPPWpY.pdf', '2019-11-22 09:05:05', '2019-11-22 09:05:05'),
(14, 24, 'certificates/24/MIKsVav9eYGyXnMKeOsZD52U7xjO2iC1vsJTKnyG.pdf', '2019-11-22 09:05:05', '2019-11-22 09:05:05'),
(15, 22, 'certificates/22/wfNMgBiVU33eoKuRzgsjcMk9nSoHhFGY7UtHyNPc.pdf', '2019-11-22 09:05:45', '2019-11-22 09:05:45'),
(16, 22, 'certificates/22/tRrUfGTdWbqe632e1UVQZ2eb8QLas9VVPTR0GonS.pdf', '2019-11-22 09:05:45', '2019-11-22 09:05:45'),
(17, 35, 'certificates/35/kqqUPXLWfGQcZNkELAFVSSTi4E5rEcVCtyLJyZz6.pdf', '2019-11-24 21:18:53', '2019-11-24 21:18:53'),
(18, 35, 'certificates/35/4TZaS1uY9InM9Vs6qa97UQ6vLykjQqdY3pHcUHkr.pdf', '2019-11-24 21:18:53', '2019-11-24 21:18:53'),
(19, 35, 'certificates/35/4VNWnBpBDziPgGm8taUg53UQo6GUvGufr2Sve7tq.pdf', '2019-11-24 21:32:13', '2019-11-24 21:32:13'),
(20, 37, 'certificates/37/Eha5urLfMfp4Ipzb1163r9gHWE9G2kFuoSwdJ5di.pdf', '2019-11-25 07:35:04', '2019-11-25 07:35:04'),
(21, 37, 'certificates/37/b7ZBhLg49Ytnrf8za5j1yNugD1JDvxeaO48a52Nl.pdf', '2019-11-25 07:35:04', '2019-11-25 07:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` enum('_blank','_self') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `uload_folder` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `parent_id`, `key`, `url`, `icon`, `permission`, `role`, `name`, `description`, `target`, `order`, `uload_folder`, `slug`, `status`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'admin', '/admin', NULL, NULL, NULL, 'Admin', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(2, 0, 'user', '/user', NULL, NULL, NULL, 'User', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(3, 0, 'client', '/client', NULL, NULL, NULL, 'Client', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(4, 0, 'main', '', NULL, NULL, NULL, 'Main', 'Website main menu', NULL, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(5, 0, 'footer', '', NULL, NULL, NULL, 'Footer', 'Footer menu', NULL, 3, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(6, 0, 'social', '', NULL, NULL, NULL, 'Social', 'Social media menu', NULL, 3, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(7, 1, NULL, 'admin/menu/menu', 'fa fa-bars', NULL, '[\"superuser\"]', 'Menu', NULL, NULL, 3, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-11 11:40:22'),
(8, 1, NULL, 'admin', 'fa fa-dashboard', NULL, '[null]', 'Dashboard', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-11 11:38:01'),
(9, 6, NULL, 'https://twitter.com/lavalitecms', 'fab fa-twitter', NULL, NULL, 'Twitter', NULL, '_blank', 11, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(10, 6, NULL, 'https://github.com/LavaLite/cms', 'fab fa-github', NULL, NULL, 'GitHub', NULL, '_blank', 12, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(11, 6, NULL, 'https://www.facebook.com/lavalite/', 'fab fa-facebook-square', NULL, NULL, 'Facebook', NULL, '_blank', 13, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(18, 2, NULL, 'user', 'dashboard', NULL, NULL, 'Dashborad', NULL, NULL, 50, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(19, 1, 'admin.user', 'admin/user/user', 'fa fa-users', NULL, '[\"superuser\"]', 'User', NULL, NULL, 8, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-22 12:58:31'),
(20, 19, NULL, 'admin/user/user', 'fa fa-user', NULL, '[null,\"1\"]', 'Members', NULL, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-11 14:48:24'),
(21, 19, NULL, 'admin/user/client', 'fa fa-user', NULL, '[null,\"1\"]', 'Mentors', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-11 11:40:23'),
(22, 19, NULL, 'admin/user/team', 'fa fa-users', NULL, '[null,\"1\",\"2\"]', 'Partner Members', NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-22 12:57:15'),
(23, 1, 'role', 'admin/roles/role', 'fa fa-check-circle-o', NULL, '[\"superuser\"]', 'Roles & Permissions', NULL, NULL, 5, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-11 11:40:22'),
(24, 1, NULL, 'admin/block/block', 'fa fa-square', NULL, '[null,\"1\"]', 'Blocks', NULL, NULL, 4, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-14 17:08:48'),
(25, 1, NULL, 'admin/contact/contact', 'fa fa-newspaper-o', NULL, '[null]', 'Contact', NULL, NULL, 7, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-22 12:58:31'),
(26, 4, NULL, '#about', NULL, NULL, '[null]', 'About Us', NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, NULL, '2019-10-17 06:09:55'),
(27, 5, NULL, 'contact.htm', NULL, NULL, NULL, 'Contact', NULL, NULL, 190, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(28, 1, NULL, 'admin/page/page', 'fa fa-book', NULL, '[null,\"1\"]', 'Pages', NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, NULL, '2019-11-14 17:09:02'),
(29, 4, NULL, '#intro', NULL, NULL, '[null]', 'Home', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, '2019-10-17 06:09:55'),
(30, 5, NULL, 'about-us.html', NULL, NULL, NULL, 'About Us', NULL, NULL, 8, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(31, 0, '1', NULL, NULL, NULL, NULL, 'Projects', NULL, NULL, 1, NULL, 'projects', 1, NULL, '2019-10-08 10:01:23', '2019-10-08 09:59:22', '2019-10-08 10:01:23'),
(32, 1, NULL, 'admin/projects', 'fa fa-tasks', NULL, '[null,\"1\",\"2\"]', 'Projects', NULL, '_self', 0, NULL, 'projects-2', 1, NULL, NULL, '2019-10-08 10:01:08', '2019-11-11 11:40:22'),
(33, 4, NULL, '#services', NULL, NULL, '[null]', 'Services', NULL, NULL, 3, NULL, 'services', 1, NULL, NULL, '2019-10-13 15:46:11', '2019-10-17 06:09:55'),
(34, 4, NULL, '#portfolio', NULL, NULL, '[null]', 'Portfolio', NULL, NULL, 4, NULL, 'portfolio', 1, NULL, NULL, '2019-10-13 15:47:10', '2019-10-17 06:09:55'),
(35, 4, NULL, '#faq', NULL, NULL, '[null]', 'FAQ', NULL, NULL, 5, NULL, 'team', 1, NULL, NULL, '2019-10-13 15:47:39', '2019-10-17 06:09:55'),
(36, 4, NULL, '#footer', NULL, NULL, '[null]', 'Apply now', NULL, NULL, 6, NULL, 'contact-us', 1, NULL, NULL, '2019-10-13 15:48:37', '2019-10-17 06:09:55'),
(37, 4, NULL, '/asd', NULL, NULL, '[null]', '4tdf', NULL, NULL, 0, NULL, '4tdf', 1, NULL, '2019-10-17 06:10:02', '2019-10-14 10:41:48', '2019-10-17 06:10:02'),
(38, 19, NULL, '/members', 'fa fa-user', NULL, '[null,\"1\"]', 'Partner Members', NULL, NULL, 2, NULL, 'partner-members', 1, NULL, '2019-11-11 14:51:13', '2019-11-11 11:40:11', '2019-11-11 14:51:13'),
(39, 0, 'skills', NULL, NULL, NULL, NULL, 'Skills', NULL, NULL, 1, NULL, 'skills', 1, NULL, NULL, '2019-11-22 12:57:39', '2019-11-22 12:57:39'),
(40, 1, NULL, 'admin/skills', NULL, NULL, '[null,\"1\"]', 'Skills', NULL, '_self', 6, NULL, 'skills-2', 1, NULL, NULL, '2019-11-22 12:58:10', '2019-11-22 13:01:37');

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
(1, '2015_01_05_100001_create_clients_table', 1),
(2, '2015_01_05_100001_create_users_table', 1),
(3, '2015_01_05_100010_create_password_resets_table', 1),
(4, '2015_08_05_100011_create_pages_table', 1),
(5, '2016_07_14_100001_create_blocks_table', 1),
(6, '2017_01_02_100001_create_contacts_table', 1),
(7, '2017_05_05_100001_create_menus_table', 1),
(8, '2017_05_23_100001_create_settings_table', 1),
(9, '2017_11_09_100001_create_roles_table', 1),
(10, '2017_11_09_100002_create_role_user_table', 1),
(11, '2017_11_09_100003_create_permissions_table', 1),
(12, '2017_11_09_100004_create_permission_user_table', 1),
(13, '2017_11_09_100005_create_permission_role_table', 1),
(14, '2018_02_05_100001_create_activity_log_table', 1),
(15, '2018_07_25_100001_create_masters_table', 1),
(16, '2019_07_10_100001_create_teams_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compile` tinyint(1) DEFAULT 0,
  `view` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `category` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `order` int(11) DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Show','Hide') COLLATE utf8mb4_unicode_ci DEFAULT 'Show',
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `heading`, `sub_heading`, `abstract`, `content`, `meta_title`, `meta_keyword`, `meta_description`, `banner`, `images`, `compile`, `view`, `category`, `order`, `slug`, `status`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home', 'Home', NULL, NULL, 'Home Page', 'Home', 'Home', 'Home', NULL, NULL, NULL, 'page', 'default', 0, 'home', 'Show', NULL, NULL, NULL, NULL),
(2, 'About Us', 'About Us', 'Meet Lavalite', NULL, NULL, '                    <div class=\"about\">\n                        <div class=\"row\">\n                            <div class=\"col-md-12\">\n                                <div class=\"count-numerics\">\n                                    <h2>Our mission is to make insurance<br>work better for businesses of all types and sizes.</h2>\n                                    <ul class=\"list-inline row\">\n                                        <li class=\"col-md-3 col-xs-6\">\n                                            <div class=\"text-center\">\n                                                <div>\n                                                    <figure>1</figure>\n                                                    <span>k+</span>\n                                                </div>\n                                                <h4>Set of pages</h4>\n                                          </div>\n                                        </li>\n                                        <li class=\"col-md-3 col-xs-6\">\n                                            <div class=\"text-center\">\n                                                <div>\n                                                    <figure>53</figure>\n                                                </div>\n                                                <h4>Categories</h4>\n                                            </div>\n                                        </li>\n                                        <li class=\"col-md-3 col-xs-6\">\n                                            <div class=\"text-center\">\n                                                <div>\n                                                    <figure>10</figure>\n                                                    <span>x</span>\n                                                </div>\n                                                <h4>Save time</h4>\n                                            </div>\n                                        </li>\n                                        <li class=\"col-md-3 col-xs-6 s-counter-v1\">\n                                            <div class=\"text-center\">\n                                                <div>\n                                                    <figure>9</figure>\n                                                </div>\n                                                <h4>Formats to use</h4>\n                                            </div>\n                                        </li>\n                                      </ul>\n                                </div>\n                            </div>\n                        </div>\n\n                        <div class=\"row\">\n                            <div class=\"col-md-12\">\n                                <div class=\"promo-section\">\n                                    <div class=\"row mln mrn\">\n                                        <div class=\"col-md-6 pl-0 pr-0\">\n                                            <div class=\"content-section text-center\">\n                                                <h2>Creative Digital Agency</h2>\n                                                <span>You are in good hands.</span>\n                                                <p>It’s important to stay detail oriented with every project we tackle. Staying focused allows us to turn every project we complete into something we love.</p>\n                                                <p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>\n                                                <h4>— John Doe</h4>\n                                            </div>\n                                        </div>\n                                        <div class=\"col-md-6 pl-0 pr-0 image-section\">\n                                        </div>\n                                    </div>\n                                </div>\n                            </div>\n                        </div>\n\n                        <div class=\"row features-section\">\n                            <div class=\"col-sm-5\">\n                                <div class=\"hor-centered-row\">\n                                    <div class=\"hor-centered-row-col exp-num\"><span>9</span></div>\n                                    <div class=\"hor-centered-row-col exp-year\">\n                                        <h4>\n                                            <span>Years</span>\n                                            <span>Experience</span>\n                                        </h4>\n                                        <p>Front-end Design & Development.</p>\n                                    </div>\n                                </div>\n                            </div>\n                            <div class=\"col-sm-7\">\n                                <div class=\"row mb40\">\n                                    <div class=\"col-sm-6\">\n                                        <div class=\"feature-item\">\n                                            <i class=\"ti-mobile\"></i>\n                                            <h4>Responsive Layout</h4>\n                                            <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>\n                                        </div>\n                                    </div>\n                                    <div class=\"col-sm-6\">\n                                        <div class=\"feature-item\">\n                                            <i class=\"ti-palette\"></i>\n                                            <h4>Fully Customizable</h4>\n                                            <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>\n                                        </div>\n                                    </div>\n                                </div>\n\n                                <div class=\"row\">\n                                    <div class=\"col-sm-6\">\n                                        <div class=\"feature-item\">\n                                            <i class=\"ti-cup\"></i>\n                                            <h4>Endless Possibilities</h4>\n                                            <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>\n                                        </div>\n                                    </div>\n                                    <div class=\"col-sm-6\">\n                                        <div class=\"feature-item\">\n                                            <i class=\"ti-crown\"></i>\n                                            <h4>Powerful Performance</h4>\n                                            <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>\n                                        </div>\n                                    </div>\n                                </div>\n                            </div>\n                        </div>\n                    </div>', 'About Us', 'About Us', 'This is a started theme for Lavalite cms, you can customize according to your requirement.', NULL, NULL, NULL, 'page', 'default', 0, 'about-us', 'Show', NULL, NULL, NULL, NULL),
(3, 'Contact Us', 'Contact Us', 'Contact Us', NULL, NULL, '<p><br></p>', 'Contact Us', 'Contact Us', 'Contact Us', NULL, NULL, NULL, 'page', 'default', 0, 'contact', 'Show', NULL, NULL, NULL, NULL),
(4, 'Page Not found', 'Page Not found', 'Page Not found', NULL, NULL, '<p><br></p>', 'Page Not found', 'Page Not found', 'Page Not found', NULL, NULL, NULL, 'page', 'default', 0, '404', 'Show', NULL, NULL, NULL, NULL),
(5, '{\"en\":\"test\"}', 'test', '{\"en\":\"Test\"}', 'test', 'sadfsfggfgf', '{\"en\":\"<p><b>Ha Mut<\\/b><\\/p>\"}', '{\"en\":\"Test\"}', '{\"en\":\"test\"}', '{\"en\":\"sadasdasd\"}', NULL, '[{\"folder\":\"2019\\/11\\/21\\/152929248\\/images\",\"time\":\"2019-11-21 15:30:44\",\"path\":\"\\/page\\/page\\/2019\\/11\\/21\\/152929248\\/images\\/backgroud.gif\",\"file\":\"backgroud.gif\"}]', 1, 'default', 'default', 50, 'test', 'Show', NULL, NULL, '2019-11-21 14:30:48', '2019-11-21 14:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'View Block', 'block.block.view', NULL, NULL, NULL, NULL),
(2, 'Create Block', 'block.block.create', NULL, NULL, NULL, NULL),
(3, 'Update Block', 'block.block.edit', NULL, NULL, NULL, NULL),
(4, 'Delete Block', 'block.block.delete', NULL, NULL, NULL, NULL),
(5, 'View Category', 'block.category.view', NULL, NULL, NULL, NULL),
(6, 'Create Category', 'block.category.create', NULL, NULL, NULL, NULL),
(7, 'Update Category', 'block.category.edit', NULL, NULL, NULL, NULL),
(8, 'Delete Category', 'block.category.delete', NULL, NULL, NULL, NULL),
(9, 'View Contact', 'contact.contact.view', NULL, NULL, NULL, NULL),
(10, 'Create Contact', 'contact.contact.create', NULL, NULL, NULL, NULL),
(11, 'Update Contact', 'contact.contact.edit', NULL, NULL, NULL, NULL),
(12, 'Delete Contact', 'contact.contact.delete', NULL, NULL, NULL, NULL),
(13, 'View Page', 'page.page.view', NULL, NULL, NULL, NULL),
(14, 'Create Page', 'page.page.create', NULL, NULL, NULL, NULL),
(15, 'Update Page', 'page.page.edit', NULL, NULL, NULL, NULL),
(16, 'Delete Page', 'page.page.delete', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_id` varchar(200) DEFAULT NULL,
  `project_name` varchar(200) DEFAULT '''NULL''',
  `project_description` varchar(200) DEFAULT '''Null''',
  `team_id` int(11) DEFAULT NULL,
  `matching_skills` varchar(999) DEFAULT NULL,
  `place` varchar(200) DEFAULT NULL,
  `website` varchar(300) DEFAULT NULL,
  `local_mentor` int(11) DEFAULT NULL,
  `external_mentor` varchar(999) DEFAULT 'NULL',
  `project_status` varchar(200) DEFAULT NULL,
  `next_activity` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_id`, `project_name`, `project_description`, `team_id`, `matching_skills`, `place`, `website`, `local_mentor`, `external_mentor`, `project_status`, `next_activity`, `created_at`, `updated_at`) VALUES
(20, 'ID 3524', 'Test Project', 'asdasdasdasdasd', 2, 'a:3:{i:0;s:13:\"communication\";i:1;s:9:\"team_work\";i:2;s:15:\"problem_solving\";}', 'Prishtina', 'www.drenmullafetahu.com', 3, 'a:1:{i:0;s:2:\"39\";}', 'Active', NULL, '2019-11-28 08:34:17', '2019-11-28 08:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `level`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Super User', 'superuser', NULL, 1, NULL, NULL, NULL),
(2, 'Partner Member', 'admin', NULL, 1, NULL, NULL, '2019-11-11 14:47:13'),
(3, 'User', 'user', NULL, 1, NULL, NULL, NULL),
(4, 'Mentor', 'client', NULL, 1, NULL, NULL, '2019-11-11 15:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(5, 2, 1, '2019-11-11 14:35:05', '2019-11-11 14:35:05'),
(6, 2, 3, '2019-11-11 14:49:55', '2019-11-11 14:49:55'),
(7, 3, 1, '2019-11-11 15:01:37', '2019-11-11 15:01:37'),
(8, 4, 1, '2019-11-11 15:01:37', '2019-11-11 15:01:37'),
(9, 2, 4, '2019-11-11 15:27:24', '2019-11-11 15:27:24'),
(10, 2, 5, '2019-11-11 15:27:38', '2019-11-11 15:27:38'),
(11, 2, 7, '2019-11-14 15:47:15', '2019-11-14 15:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `control` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `type` enum('System','Default','User') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `package`, `module`, `name`, `value`, `file`, `control`, `type`, `slug`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'main.company.name', 'Main', 'Company', 'Company name', 'Lavalite', NULL, 'text', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'main.company.address', 'Main', 'Company', 'Company address', '3481 Melrose Place <br>\nBeverly Hills, CA 90210', NULL, 'textarea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'main.company.email', 'Main', 'Company', 'Company address', 'info@lavalite.org', NULL, 'email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'main.company.logo', 'Main', 'Company', 'Company logo', 'img/logo.png', NULL, 'file', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `created_at`, `updated_at`) VALUES
(2, 'Communication', '2019-11-22 13:34:10', '2019-11-22 14:35:19'),
(3, 'Team Work', '2019-11-22 13:35:29', '2019-11-22 14:35:29'),
(4, 'Problem Solving', '2019-11-22 13:35:44', '2019-11-22 14:35:44'),
(5, 'Creativity', '2019-11-22 13:35:55', '2019-11-22 14:35:55'),
(6, 'Adaptability', '2019-11-22 13:36:06', '2019-11-22 14:36:06'),
(7, 'Work ethics', '2019-11-22 13:36:19', '2019-11-22 14:36:19'),
(8, 'Interpersonal skill', '2019-11-22 13:36:43', '2019-11-22 14:36:43'),
(9, 'Time Management', '2019-11-22 13:36:53', '2019-11-22 14:36:53'),
(10, 'Leadership', '2019-11-22 13:37:02', '2019-11-22 14:37:02'),
(11, 'Finance Management', '2019-11-22 13:37:13', '2019-11-22 14:37:13'),
(12, 'Capacity Development', '2019-11-22 13:37:32', '2019-11-22 14:37:32'),
(13, 'Advocacy', '2019-11-22 13:37:47', '2019-11-22 14:37:47'),
(14, 'Critical Thinking', '2019-11-22 13:37:59', '2019-11-22 14:37:59'),
(15, 'Coding', '2019-11-22 13:38:20', '2019-11-22 14:38:20'),
(16, 'Networking', '2019-11-22 13:38:29', '2019-11-22 14:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `team_logo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`, `team_logo`) VALUES
(1, 'ODK', 'Active', '2019-11-11 14:59:22', NULL, '2019-11-11 14:59:22', NULL),
(2, 'Ipko Foundation', NULL, NULL, '2019-11-11 14:59:47', '2019-11-11 14:59:47', 'public/assets/img/team_covers/2/Vnu1QudcEtDjOgWE6sLnQ5J6VpqLlzKkKTziqkCe.png'),
(3, 'PEN', NULL, NULL, '2019-11-11 15:04:42', '2019-11-11 15:04:42', 'public/assets/img/team_covers/3/bqSjFQo4g65W1sqUlxm36uVvEhyiRJ07VlZkEcTT.png'),
(4, 'UNICEF', NULL, NULL, '2019-11-11 15:06:38', '2019-11-11 15:06:38', 'public/assets/img/team_covers/4/iz2VIVhVzUkF0HuHik8FRjFlQTF3nhSU7hM3dYmS.png');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role` enum('Admin','Manager','User') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_user`
--

INSERT INTO `team_user` (`id`, `team_id`, `user_id`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Admin', NULL, NULL, NULL),
(2, 1, 1, 'User', NULL, NULL, NULL),
(3, 2, 3, 'User', NULL, NULL, NULL),
(4, 2, 4, 'User', NULL, NULL, NULL),
(5, 3, 5, 'User', NULL, NULL, NULL),
(6, 4, 6, 'User', NULL, NULL, NULL),
(7, 4, 7, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` int(11) NOT NULL,
  `project_id` int(11),
  `local_mentor` int(11) DEFAULT NULL,
  `mentor_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `to_date` varchar(255) DEFAULT NULL,
  `hours` double DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timesheets`
--

INSERT INTO `timesheets` (`id`, `project_id`, `local_mentor`, `mentor_id`, `created_by`, `from_date`, `to_date`, `hours`, `created_at`, `updated_at`) VALUES
(24, 13, NULL, 8, 1, '2019-11-14', '2019-11-14', 8, '2019-11-14 21:15:54', '2019-11-14 21:15:54'),
(25, 14, NULL, 13, 1, '2019-11-14', '2019-11-14', 8, '2019-11-14 21:17:50', '2019-11-14 21:17:50'),
(26, 15, NULL, 23, 1, '2019-11-18', '2019-11-18', 8, '2019-11-18 13:40:52', '2019-11-18 13:40:52'),
(27, 17, NULL, 35, 1, '2019-11-24', '2019-11-24', 8, '2019-11-24 22:28:05', '2019-11-24 22:28:05'),
(28, 17, NULL, 35, 1, '2019-11-25', '2019-11-25', 7, '2019-11-24 22:29:27', '2019-11-24 22:29:27'),
(29, 18, NULL, 22, 1, '2019-11-25', '2019-11-25', 8, '2019-11-25 08:44:16', '2019-11-25 08:44:16'),
(30, 20, NULL, 39, 1, '2019-11-28', '2019-11-28', 12, '2019-11-28 08:36:33', '2019-11-28 08:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `reporting_to` int(11) DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` enum('','Male','Female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('New','Active','Suspended','Locked') COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `email_verified_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_folder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `team_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reporting_to`, `name`, `email`, `password`, `api_token`, `remember_token`, `sex`, `dob`, `designation`, `mobile`, `phone`, `address`, `street`, `city`, `district`, `state`, `country`, `photo`, `web`, `permissions`, `status`, `email_verified_at`, `user_id`, `user_type`, `upload_folder`, `deleted_at`, `created_at`, `updated_at`, `team_id`) VALUES
(1, 0, 'Dren', 'dren@opendatakosovo.org', '$2y$10$l6pbfEJm32KBW5HUrne3zei5UtaXDQxaERSCjZKuBsGlfGmG1tJbm', 'bydVpOXfJ7bJaYqjggxsmUy656kJMvLIx26oAki64Z1RZLKML4KBd8DiPu2f', NULL, 'Male', '2014-05-15', 'Super User', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'http://lavalite.org', NULL, 'Active', '2019-04-15 00:00:00', NULL, NULL, NULL, NULL, '2015-09-14 22:00:00', '2019-10-11 07:52:33', NULL),
(2, 0, 'User', 'user@lavalite.org', '$2y$10$nC.NeWg0rPbpGgYdJEsN3.6H6ROacRAMb2XOydcru2MJNPwhUylva', '2gjq5qHlU8oG9ITdEjAmkvbUeCYyjfRoGqz1b8JivvMOoqBEv7Gha8vMKVTp', NULL, 'Male', '2015-05-15', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://lavalite.org', NULL, 'Active', '2019-04-15 00:00:00', NULL, NULL, NULL, NULL, '2015-09-14 22:00:00', '2019-11-11 08:50:24', NULL),
(3, 0, 'Ereza Ahmetgjekaj', 'ereze@opendatakosovo.org', '$2y$10$WVVPVAL0FLt83EA.mBJA8.nth4Mm0tOqWPsKRbS5sHTUv3AI4afEq', 'clczaLXkAk6hoHzgRWHTCcbq6BfmHYMLsTARH1qNDKju7ldrHEvgAbFPdXBA', NULL, NULL, NULL, 'ODK', '049555666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 1, NULL, NULL, NULL, '2019-11-11 14:49:30', '2019-11-11 15:02:26', 2),
(4, 0, 'Bardh Rushiti', 'bardh@opendatakosovo.org', '$2y$10$X50Nv0QWjdyiUB6GHTfeBuhqJHQN7dtM7d2IL6nEJpMtZfhE7bDkC', 'oWs2kiBGrzMMByJkAgHWdGFhpQW0PKYZGjFo1hwCduiPfyVYmYMq3qluLycu', NULL, NULL, NULL, 'Ipko Foundation', '049666777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 1, NULL, NULL, NULL, '2019-11-11 15:03:51', '2019-11-11 15:03:51', NULL),
(5, 0, 'Flamur Caka', 'flamur.caka@opendatakosovo.org', '$2y$10$MsU.gPhLSFIQsOAYNhBzmOn84UfIy70ddYsDHCbtwTwPBlhCPjhyS', 'WSbnIF4bCSUz0ooz8f4Y9xuWyl2EPnXE1LayN9wjZM4tedgzL5jV5BSwlUYs', NULL, NULL, NULL, 'PEN', '049777888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 1, NULL, NULL, NULL, '2019-11-11 15:05:29', '2019-11-11 15:05:29', NULL),
(6, 0, 'Majlinda Dervishi', 'majlinda@opendatakosovo.org', '$2y$10$FEDTMlzxX3ldCw0kRlif8Ond652u5bzxfnbHIUoypmja0jT3RDmeW', 'ikc5bBewAU079sAzjpRXWdHLI54VnuVX2AItVurep8EGxkg5bfxXbJNKKcJZ', NULL, NULL, NULL, 'UNICEF', '049888999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', NULL, 1, NULL, NULL, NULL, '2019-11-11 15:07:31', '2019-11-11 15:07:31', NULL),
(7, 0, 'Dren Partner Member', 'dramdrum.mm@gmail.com', '$2y$10$oHVLUpAbMXalg71J81lCPu2OQuAGiNgmDeeMRFZQ9d2B9b.2mMMwu', 'WAv2Lw1KUliZ2XnovdB3C4PTElBRTo69EyUPvfdxho4ilO29ZLeddMcODXLG', NULL, NULL, NULL, 'Ipko Foundation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', '2019-11-14 16:44:48', 1, NULL, NULL, NULL, '2019-11-14 15:43:42', '2019-11-14 20:21:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_categories`
--
ALTER TABLE `block_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD UNIQUE KEY `clients_api_token_unique` (`api_token`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor_certificates`
--
ALTER TABLE `mentor_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_id_uindex` (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timesheets`
--
ALTER TABLE `timesheets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `timesheets_id_uindex` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `block_categories`
--
ALTER TABLE `block_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentor_certificates`
--
ALTER TABLE `mentor_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `timesheets`
--
ALTER TABLE `timesheets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
