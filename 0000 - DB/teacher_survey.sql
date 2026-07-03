-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2026 at 12:21 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teacher_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `survey_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `score` enum('excellent','good','average','weak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_survey_id_foreign` (`survey_id`),
  KEY `answers_question_id_foreign` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `survey_id`, `question_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'excellent', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(2, 1, 2, 'excellent', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(3, 1, 3, 'good', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(4, 1, 4, 'good', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(5, 1, 5, 'good', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(6, 1, 6, 'good', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(7, 1, 7, 'good', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(8, 1, 8, 'good', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(9, 1, 9, 'good', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(11, 2, 1, 'good', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(12, 2, 2, 'excellent', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(13, 2, 3, 'good', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(14, 2, 4, 'average', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(15, 2, 5, 'average', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(16, 2, 6, 'good', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(17, 2, 7, 'good', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(18, 2, 8, 'average', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(19, 2, 9, 'good', '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(21, 3, 1, 'good', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(22, 3, 2, 'good', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(23, 3, 3, 'average', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(24, 3, 4, 'good', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(25, 3, 5, 'good', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(26, 3, 6, 'average', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(27, 3, 7, 'average', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(28, 3, 8, 'good', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(29, 3, 9, 'good', '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(31, 4, 1, 'good', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(32, 4, 2, 'good', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(33, 4, 3, 'good', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(34, 4, 4, 'good', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(35, 4, 5, 'good', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(36, 4, 6, 'average', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(37, 4, 7, 'weak', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(38, 4, 8, 'weak', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(39, 4, 9, 'weak', '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(41, 5, 1, 'good', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(42, 5, 2, 'good', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(43, 5, 3, 'average', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(44, 5, 4, 'average', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(45, 5, 5, 'average', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(46, 5, 6, 'average', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(47, 5, 7, 'average', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(48, 5, 8, 'average', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(49, 5, 9, 'average', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(51, 6, 1, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(52, 6, 2, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(53, 6, 3, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(54, 6, 4, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(55, 6, 5, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(56, 6, 6, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(57, 6, 7, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(58, 6, 8, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(59, 6, 9, 'excellent', '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(61, 7, 1, 'excellent', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(62, 7, 2, 'good', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(63, 7, 3, 'average', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(64, 7, 4, 'excellent', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(65, 7, 5, 'good', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(66, 7, 6, 'average', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(67, 7, 7, 'weak', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(68, 7, 8, 'excellent', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(69, 7, 9, 'good', '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(71, 8, 1, 'good', '2026-07-02 11:06:06', '2026-07-02 11:06:06'),
(72, 8, 2, 'good', '2026-07-02 11:06:07', '2026-07-02 11:06:07'),
(73, 8, 3, 'good', '2026-07-02 11:06:09', '2026-07-02 11:06:09'),
(74, 8, 4, 'good', '2026-07-02 11:06:09', '2026-07-02 11:06:09'),
(75, 8, 5, 'good', '2026-07-02 11:06:09', '2026-07-02 11:06:09'),
(76, 8, 6, 'good', '2026-07-02 11:06:09', '2026-07-02 11:06:09'),
(77, 8, 7, 'excellent', '2026-07-02 11:06:10', '2026-07-02 11:06:10'),
(78, 8, 8, 'excellent', '2026-07-02 11:06:10', '2026-07-02 11:06:10'),
(79, 8, 9, 'excellent', '2026-07-02 11:06:10', '2026-07-02 11:06:10'),
(80, 8, 11, 'excellent', '2026-07-02 11:06:10', '2026-07-02 11:06:10'),
(81, 8, 12, 'excellent', '2026-07-02 11:06:11', '2026-07-02 11:06:11'),
(82, 8, 13, 'good', '2026-07-02 11:06:12', '2026-07-02 11:06:12'),
(83, 8, 14, 'good', '2026-07-02 11:06:13', '2026-07-02 11:06:13'),
(84, 8, 15, 'good', '2026-07-02 11:06:13', '2026-07-02 11:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_07_01_182317_create_teachers_table', 1),
(5, '2026_07_01_182400_create_questions_table', 1),
(6, '2026_07_01_183557_create_surveys_table', 1),
(7, '2026_07_01_183558_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'تسلط دبیر بر محتوای درس', '2026-07-02 04:36:30', '2026-07-02 04:36:30'),
(2, 'نحوه انتقال مطالب به دانش‌آموزان', '2026-07-02 04:36:37', '2026-07-02 04:36:37'),
(3, 'برخورد محترمانه با دانش‌آموزان', '2026-07-02 04:36:45', '2026-07-02 04:36:45'),
(4, 'ایجاد انگیزه و علاقه به یادگیری', '2026-07-02 04:36:53', '2026-07-02 04:36:53'),
(5, 'نظم و مدیریت کلاس', '2026-07-02 04:37:02', '2026-07-02 04:37:02'),
(6, 'پاسخگویی به سوالات دانش‌آموزان', '2026-07-02 04:37:09', '2026-07-02 04:37:09'),
(7, 'میزان توجه به وضعیت تحصیلی دانش‌آموزان', '2026-07-02 04:37:16', '2026-07-02 04:37:16'),
(8, 'استفاده مناسب از روش‌های آموزشی', '2026-07-02 04:37:23', '2026-07-02 04:37:23'),
(9, 'برگزاری منظم آزمون و ارائه بازخورد', '2026-07-02 04:37:32', '2026-07-02 04:37:32'),
(11, 'رعایت زمان‌بندی کلاس (حضور به‌موقع و خروج در زمان مقرر)', '2026-07-02 10:50:47', '2026-07-02 10:50:47'),
(12, 'ارتباط مؤثر با اولیا و اطلاع‌رسانی به‌موقع درباره وضعیت دانش‌آموز', '2026-07-02 10:51:32', '2026-07-02 10:51:32'),
(13, 'رعایت اصول اخلاق حرفه‌ای و الگو بودن برای دانش‌آموزان', '2026-07-02 10:51:45', '2026-07-02 10:51:45'),
(14, 'ایجاد فضای مثبت، امن و انگیزه‌بخش در کلاس', '2026-07-02 10:52:06', '2026-07-02 10:52:06'),
(15, 'رضایت کلی از عملکرد دبیر', '2026-07-02 10:52:30', '2026-07-02 10:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3cpvfemh0EmjhONoxLJMNnUi4xFFdA88ilXMJkkn', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJyMjB4czQyU0VnSk50eGpkZlliSDFlWG9xc1pqNm8yajZQbHNYMEhtIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL3N1cnZleSIsInJvdXRlIjoic3VydmV5LmluZGV4In0sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjozfQ==', 1782980728),
('Hbp1JkigbzMnCM2TCtm21Q4pex4KyEV0aWS7HBjo', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJFTERFM0ZwY0RQRVp3R1FsT2ViNU83Q3hKOGFJUDd0YlRhcUdGWHBoIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9zdXJ2ZXkiLCJyb3V0ZSI6InN1cnZleS5pbmRleCJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX0sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjo0fQ==', 1783002976),
('rmr6qAxydbz9gJFjslWQSOqNmVUeNINAEpBYWAdH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJ4aDJWbXFWTU5RYkFSdThNSEc5eVEySW1ncXloR0VsV3RjMGllQnIwIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL3JlcG9ydHNcLzEiLCJyb3V0ZSI6InJlcG9ydHMuc2hvdyJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=', 1782981534),
('UJ2TiRzUKNA6K4AIxFQkshtDzTpmtwoiIjLPjdy4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJWUllBczEwenpyb2d4c0NJbFNtNEoyNHZ0YUYzbVJOTDN3ZmNROUkzIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL2Rhc2hib2FyZCIsInJvdXRlIjoiZGFzaGJvYXJkIn0sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjoxfQ==', 1783003388);

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

DROP TABLE IF EXISTS `surveys`;
CREATE TABLE IF NOT EXISTS `surveys` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `teacher_id` bigint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `surveys_user_id_teacher_id_unique` (`user_id`,`teacher_id`),
  KEY `surveys_teacher_id_foreign` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `user_id`, `teacher_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'در کل خوب بود', '2026-07-02 04:39:29', '2026-07-02 04:39:29'),
(2, 2, 2, NULL, '2026-07-02 04:39:52', '2026-07-02 04:39:52'),
(3, 2, 3, NULL, '2026-07-02 04:40:04', '2026-07-02 04:40:04'),
(4, 2, 4, NULL, '2026-07-02 04:40:14', '2026-07-02 04:40:14'),
(5, 3, 2, 'خیلی خوب بود', '2026-07-02 04:40:47', '2026-07-02 04:40:47'),
(6, 3, 1, NULL, '2026-07-02 04:42:02', '2026-07-02 04:42:02'),
(7, 3, 4, NULL, '2026-07-02 04:55:28', '2026-07-02 04:55:28'),
(8, 4, 1, NULL, '2026-07-02 11:06:06', '2026-07-02 11:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'ارزبین', 'ریاضی', '2026-07-02 04:30:23', '2026-07-02 04:30:23'),
(2, 'علیجانی', 'علوم', '2026-07-02 04:30:29', '2026-07-02 04:30:29'),
(3, 'جوان', 'ادبیات', '2026-07-02 04:30:39', '2026-07-02 04:30:39'),
(4, 'وکیلی صادقی', 'مطالعات اجتماعی', '2026-07-02 04:31:34', '2026-07-02 04:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','parent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'parent',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_national_code_unique` (`national_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `national_code`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'حمیدرضا ارزبین', '2722590697', '$2y$12$JrXxmU/3ZKZcJgneUBWI4eZPwA3sMKcOOgDhAGPoA7JMlkKBtvQlW', 'admin', NULL, NULL, '2026-07-02 03:05:32'),
(2, 'آریا رئوفی', '1111111111', '$2y$12$8rP0aZInO1isgNg1m.6TX.kMKlclEHk7i/kX3s41uW.OhpehKMjBy', 'parent', NULL, '2026-07-02 04:23:38', '2026-07-02 04:23:38'),
(3, 'user2', '2222222222', '$2y$12$/hcP2ydVf3uQNPodxa1/Ke8bgmpUF8xxQOB/ZzvEdkOQQETjJm9A6', 'parent', NULL, '2026-07-02 04:38:15', '2026-07-02 04:38:15'),
(4, 'user 3', '3333333333', '$2y$12$x1ro97DCuBLP1eGctdLJ7uPlXg2it6SPkX5SM2FI1jHIohVtA39z.', 'parent', NULL, '2026-07-02 04:38:29', '2026-07-02 04:38:29');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_survey_id_foreign` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `surveys`
--
ALTER TABLE `surveys`
  ADD CONSTRAINT `surveys_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `surveys_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
