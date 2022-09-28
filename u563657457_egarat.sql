-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2022 at 12:17 PM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u563657457_egarat`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_uses`
--

CREATE TABLE `about_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_uses`
--

INSERT INTO `about_uses` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ايجارات مصري', '<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over 222111the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'assets/uploads/boutus/37711661936367.jpg', '2022-07-31 22:00:00', '2022-08-31 10:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'محمد السدودى', 'admin@admin.com', '$2y$10$.JU9IVY4Tf5LvpN2UFxh3upmuTgpzWSX7Ddoqtx.k78jD5nKeWLNC', 'assets/uploads/admins/66161658316929.webp', NULL, '2022-08-30 22:17:36'),
(12, 'abdo.osama', 'aaa@aaa', '$2y$10$ttnhmAf4vF/WPxEqNrnmbuAlwC2YNmZNctbtWoOXgCCtc3wd2hkpi', 'assets/uploads/admins/17081662038774.webp', '2022-09-01 15:26:14', '2022-09-01 15:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`) VALUES
(4, 'مارينا', 'assets/uploads/category/5491660210288.webp'),
(5, 'مراسى', 'assets/uploads/category/93631660210379.webp'),
(6, 'امواج', 'assets/uploads/category/36031660213420.webp'),
(7, 'هاسيندا', 'assets/uploads/category/92071660213437.webp'),
(11, 'book2', 'assets/uploads/category/70591662038350.webp'),
(12, '5لبيب', 'assets/uploads/category/3111662038368.webp'),
(13, 'abdo.osama', 'assets/uploads/category/90921662038391.webp'),
(14, 'تالبيئ', 'assets/uploads/category/77861662038404.webp'),
(15, 'تلبي', 'assets/uploads/category/47821662038415.webp'),
(16, 'اقثيبل', 'assets/uploads/category/32701662038431.webp'),
(17, 'عغفق', 'assets/uploads/category/24891662038480.webp'),
(18, 'اا', 'assets/uploads/category/70151662038511.webp');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `purpose_message` text COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `company_name`, `phone`, `email`, `purpose_message`, `message`, `created_at`, `updated_at`, `full_name`) VALUES
(1, 'asdfgh', '01011424958', 'abdo.osama@yahoo.com', 'asdfg', 'asdfg', '2022-08-31 11:26:21', '2022-08-31 11:26:21', 'abdo'),
(2, 'Estrada Leblanc Co', '39', 'sifazoly@mailinator.com', 'Sunt praesentium re', 'Tempore vel sed sit', '2022-08-31 16:47:44', '2022-08-31 16:47:44', 'Unity Miles'),
(3, 'asdfgh', '100255225', 'qqqqq@eee', '5436543', 'اتاتالال', '2022-09-01 15:01:44', '2022-09-01 15:01:44', 'abdo');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'يوجد بها جراجات ', '2022-05-21 09:00:39', '2022-05-21 09:00:39'),
(2, 'يوجد بها جنينة', '2022-07-03 14:31:55', '2022-07-03 14:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `features_real_estate`
--

CREATE TABLE `features_real_estate` (
  `id` int(11) NOT NULL,
  `real_estate_id` bigint(20) DEFAULT NULL,
  `feature_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features_real_estate`
--

INSERT INTO `features_real_estate` (`id`, `real_estate_id`, `feature_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '2022-08-31 11:53:41', '2022-08-31 11:53:41'),
(4, 1, 2, '2022-08-31 11:53:41', '2022-08-31 11:53:41'),
(5, 2, 2, '2022-08-31 16:18:32', '2022-08-31 16:18:32'),
(6, 3, 1, '2022-08-31 16:21:52', '2022-08-31 16:21:52'),
(7, 4, 1, '2022-09-01 15:15:54', '2022-09-01 15:15:54'),
(8, 5, 2, '2022-09-01 15:35:12', '2022-09-01 15:35:12');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_08_10_110640_create_features_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE `real_estate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `late` double DEFAULT NULL,
  `lang` double DEFAULT NULL,
  `description` text NOT NULL,
  `owner` varchar(255) NOT NULL,
  `owner_image` text DEFAULT NULL,
  `price` varchar(100) NOT NULL,
  `rooms` int(11) NOT NULL,
  `video` text DEFAULT NULL,
  `insurance` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `beds` int(11) NOT NULL,
  `toilet` int(11) NOT NULL,
  `numperofperson` int(11) NOT NULL,
  `begin` varchar(255) DEFAULT NULL,
  `leave_time` varchar(255) DEFAULT NULL,
  `nearby` text DEFAULT NULL,
  `rules` text DEFAULT NULL,
  `features` text DEFAULT NULL,
  `position_url` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`id`, `name`, `late`, `lang`, `description`, `owner`, `owner_image`, `price`, `rooms`, `video`, `insurance`, `discount`, `beds`, `toilet`, `numperofperson`, `begin`, `leave_time`, `nearby`, `rules`, `features`, `position_url`, `category_id`, `type_id`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 'abdo.osama', NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'abdo', 'assets/admin/images/realEstate/owner16619396212-1642567173.jpg', '10000', 10, 'https://www.youtube.com/watch?v=YTyxypi88qQ', '5000', '20', 11, 2, 10, NULL, NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', NULL, 'م/ش/م', 4, 1, '2022-01-01', '2022-01-10', '2022-08-31 11:05:41', '2022-08-31 11:53:41'),
(2, 'ahmed', NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'abdo', 'assets/admin/images/realEstate/owner/16619555126.jpg', '123456', 5, 'https://www.youtube.com/watch?v=YTyxypi88qQ', '10000', '20', 7, 3, 5, NULL, NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', NULL, 'م/ش/ع', 5, 2, '2022-01-22', '2022-06-22', '2022-08-31 16:18:32', '2022-08-31 16:18:32'),
(3, 'mohmed', NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'abdo', 'assets/admin/images/realEstate/owner/16619557122-1642567173.jpg', '1238997', 8, 'https://www.youtube.com/watch?v=YTyxypi88qQ', '8000', '10', 20, 5, 20, NULL, NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', NULL, 'م/ش/ل', 7, 3, '2022-01-01', '2023-01-01', '2022-08-31 16:21:52', '2022-08-31 16:21:52'),
(4, 'abdo.osama', NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'abdo', 'assets/admin/images/realEstate/owner/16620381542-13-08062020161356.jpg', '123', 7, 'https://www.youtube.com/watch?v=YTyxypi88qQ', '1', '1', 5, 3, 6, NULL, NULL, NULL, 'asdfghjk', NULL, 'م/ش/ل', 5, 1, '2022-09-01', '2022-09-30', '2022-09-01 15:15:54', '2022-09-01 15:15:54'),
(5, 'Product1', NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', 'abdo', 'assets/admin/images/realEstate/owner/16620393122-8-08062020161303.jpg', '123555', 4, 'https://www.youtube.com/watch?v=YTyxypi88qQ', '85174', '52', 8, 5, 55, NULL, NULL, NULL, 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', NULL, 'م/ش/ل', 16, 2, '2022-11-11', '2022-12-30', '2022-09-01 15:35:12', '2022-09-01 15:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `real_estate_images`
--

CREATE TABLE `real_estate_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `real_estate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_estate_images`
--

INSERT INTO `real_estate_images` (`id`, `real_estate_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 1, 'assets/admin/images/realEstate/16619396212-10-08062020161234.jpg', '2022-08-31 11:53:41', '2022-08-31 11:53:41'),
(3, 2, 'assets/admin/images/realEstate/16619555122-15-08062020161300.jpg', '2022-08-31 16:18:32', '2022-08-31 16:18:32'),
(4, 3, 'assets/admin/images/realEstate/16619557122-9-08062020161328.jpg', '2022-08-31 16:21:52', '2022-08-31 16:21:52'),
(5, 3, 'assets/admin/images/realEstate/16619557122-9-08062020161339.jpg', '2022-08-31 16:21:52', '2022-08-31 16:21:52'),
(6, 3, 'assets/admin/images/realEstate/16619557122-7-08062020161345.jpg', '2022-08-31 16:21:52', '2022-08-31 16:21:52'),
(7, 4, 'assets/admin/images/realEstate/1662038154images.jpg', '2022-09-01 15:15:54', '2022-09-01 15:15:54'),
(8, 5, 'assets/admin/images/realEstate/16620393122-9-08062020161328.jpg', '2022-09-01 15:35:12', '2022-09-01 15:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `real_estate_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `start_date`, `end_date`, `user_id`, `real_estate_id`, `price`, `created_at`, `updated_at`) VALUES
(1, '2022-01-01', '2022-01-07', 1, 3, 7433982, '2022-09-01 07:33:59', '2022-09-01 07:33:59'),
(2, '2022-01-12', '2022-01-21', 1, 3, 11150973, '2022-09-01 07:34:36', '2022-09-01 07:34:36'),
(3, '2022-01-22', '2022-01-27', 1, 2, 617280, '2022-09-01 14:37:20', '2022-09-01 14:37:20'),
(4, '2022-01-24', '2022-01-29', 1, 3, 6194985, '2022-09-01 14:42:18', '2022-09-01 14:42:18'),
(5, '2022-01-30', '2022-02-02', 1, 2, 370368, '2022-09-01 14:56:44', '2022-09-01 14:56:44'),
(6, '2022-02-03', '2022-02-05', 1, 2, 246912, '2022-09-01 14:57:25', '2022-09-01 14:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/', '2022-08-31 09:01:42', '2022-08-31 11:01:42'),
(2, 'whatsapp', 'https://web.whatsapp.com/', '2022-08-31 09:01:32', '2022-08-31 11:01:32'),
(3, 'twitter', 'https://mail.google.com/mail/u/0/#inbox', '2022-08-31 09:01:20', '2022-08-31 11:01:20'),
(4, 'envelope', 'https://mail.google.com/mail/u/0/#inbox', '2022-08-09 13:45:57', '2022-08-01 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `access_token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `access_token`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'h7f9KdF0Fda0ibwhwKrJN83irNeBgeeHbB4LeT7xz2tiwWpz0XznhQvF2n2ap4J2', 4, '2022-08-21 08:02:11', '2022-08-21 08:02:11'),
(2, 'nQQ3mEH0gzMDQXqbGkFPcGSOXTQciDCxay883CyGOnXtYzDo4YVF7wOz9EYTv98W', 4, '2022-08-21 08:05:15', '2022-08-21 08:05:15'),
(3, '7WMeLPIFgw97M3drIq48ajtmXEguM3m7G2hzForc2ihtZSlcYvLUaeDjRnZmQDwt', 4, '2022-08-21 08:07:06', '2022-08-21 08:07:06'),
(4, 'q1kOTLWM9XnLfQZ3bresi190RQJwOq7q240AwgBgYMJU5ZetnpWvInfoi3eKU4fB', 4, '2022-08-21 08:07:35', '2022-08-21 08:07:35'),
(6, 'WVA5PCo7BghjaYL0fpQ3Rxt8ZHo1oWHpIFRvO3qHOyHATtCroWbfHvytCIzkudlR', 4, '2022-08-21 08:38:54', '2022-08-21 08:38:54'),
(7, '2tGafeEh86gEprQQLv0qmwRIvav69ck4f6X3SlXty7LZt54q2B6kez3U1yPEJLAY', 4, '2022-08-21 09:02:40', '2022-08-21 09:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'شالية'),
(2, 'فيلا'),
(3, 'شقة');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `review` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_seen` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `review`, `created_at`, `updated_at`, `last_seen`, `image`) VALUES
(1, 'محمد السدودي', 'admin@admin.com', '$2y$10$fQCX1Gf5AVpm8COV74xy.OW2V2yGMwZhHYEVgWxvb2MXaKQCnv/8G', '01010871488', '0', '2022-08-15 12:58:37', '2022-09-01 14:11:28', '01-09-22', 'assets/site/img/users/16620342882-1642567173.jpg'),
(4, 'mohamed Elsdodey', 'mohamedelsdodey1996@gmail.com', '$2y$10$Dfelf8k3uiHtblQdpU5uUOf8DVm78z1iLfAb8vXuoMie46KfDN2l2', '01010871488', '0', '2022-08-21 08:02:11', '2022-08-21 08:02:11', NULL, NULL),
(5, 'abdo.osama', 'admin@admin123.com', '$2y$10$x/YzwEviPG1p5dy7K8QINOZccb01ef3x4KXO/EKHQpUHv3tHyjjea', '01011424958', '0', '2022-08-31 11:11:40', '2022-08-31 11:26:40', '31-08-22', 'assets/site/img/users/16619380006.jpg'),
(6, 'Charde Bradshaw', 'jawylogeje@mailinator.com', '$2y$10$0xRfyJ1DtGDR1/KSNVPX4uKALinAqTSfcpS8Vqmt8i7dK.5a/rDIC', '01011014478', '0', '2022-08-31 16:48:48', '2022-08-31 16:48:48', '31-08-22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_uses`
--
ALTER TABLE `about_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_real_estate`
--
ALTER TABLE `features_real_estate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `real_estate`
--
ALTER TABLE `real_estate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estate_images`
--
ALTER TABLE `real_estate_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `about_uses`
--
ALTER TABLE `about_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `features_real_estate`
--
ALTER TABLE `features_real_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `real_estate`
--
ALTER TABLE `real_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `real_estate_images`
--
ALTER TABLE `real_estate_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
