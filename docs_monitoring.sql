-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2024 at 09:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docs_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_type` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `program` varchar(255) DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `action_needed` varchar(255) NOT NULL,
  `date_forwarded` date DEFAULT NULL,
  `date_returned` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `document_type`, `purpose`, `name`, `program`, `year_graduated`, `quantity`, `action_needed`, `date_forwarded`, `date_returned`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(5, 'TOR', 'FOR EMPLOYMENT', 'CAPINLAC, KASELYN BERNARDO', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-09-01', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-12 00:03:54', '2024-09-22 22:03:50'),
(6, 'TOR', 'FOR EMPLOYMENT', 'MALLARE, IMELDA CRUZ', 'BSED', NULL, 2, 'FOR SIGNATURE', '2023-09-01', NULL, 'OK', NULL, '2024-09-12 00:21:18', '2024-09-13 02:29:08'),
(8, 'TOR', 'FOR EMPLOYMENT', 'DELA CRUZ, JUAN BOTE', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-12-01', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-12 17:19:04', '2024-09-13 02:30:31'),
(9, 'TOR', 'FOR EMPLOYMENT', 'CAPINLAC, REYBELYN BERNARDO', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-12-01', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:48:18', '2024-09-13 02:30:45'),
(10, 'TOR', 'FOR EMPLOYMENT', 'CAPINLAC, MERCEDES PRADO', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-12-01', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:48:41', '2024-09-13 02:30:59'),
(11, 'TOR', 'FOR EMPLOYMENT', 'DELA CRUZ, ALLEN DURIAN', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-10-22', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:49:27', '2024-09-13 00:49:27'),
(12, 'TOR', 'FOR EMPLOYMENT', 'MERCADO, MARCELO GONZALES', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-10-22', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:49:59', '2024-09-13 00:49:59'),
(13, 'TOR', 'FOR EMPLOYMENT', 'CANLAS, ALEXANDRA CASTILLO', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-10-22', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:50:38', '2024-09-13 00:50:38'),
(14, 'TOR', 'FOR EMPLOYMENT', 'CASTILLO, MERRILYN CRUZ', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-10-22', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:51:33', '2024-09-13 00:51:33'),
(15, 'TOR', 'FOR EMPLOYMENT', 'CASTILLO, JANINE BOTE', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-10-22', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:52:12', '2024-09-13 00:52:12'),
(16, 'TOR', 'FOR EMPLOYMENT', 'RESURRECCION, ANDREW BOTE', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-10-22', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:53:04', '2024-09-13 00:53:04'),
(17, 'TOR', 'FOR EMPLOYMENT', 'CASIMERO, JUNEMAR FAJARDO', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2023-10-22', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 00:53:44', '2024-09-13 00:53:44'),
(18, 'TOR', 'FOR EMPLOYMENT', 'CAPINLAC, KASELYN BERNARDO', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2022-09-01', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-13 06:02:43', '2024-09-22 22:03:27'),
(19, 'TOR', 'FOR EMPLOYMENT', 'CANLAS, ALEXANDRA CASTILLO', 'BSIT', NULL, 1, 'FOR SIGNATURE', '2024-09-16', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-16 01:00:21', '2024-09-16 01:00:21'),
(20, 'TOR', 'FOR EMPLOYMENT', 'CAPINLAC, KASELYN BERNARDO', 'BSIT', '2023-06-15', 4, 'FOR SIGNATURE', '2022-09-01', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-19 21:56:03', '2024-09-22 22:13:55'),
(21, 'TOR', 'FOR EMPLOYMENT', 'CAPINLAC, KASELYN BERNARDO', 'BSIT', '2023-06-15', 1, 'FOR SIGNATURE', '2022-09-01', NULL, 'OK', 'Forwarded by Ma\'am Olen', '2024-09-22 22:13:28', '2024-09-22 22:13:28'),
(22, 'TOR', 'FOR EMPLOYMENT', 'DELA CRUZ, ALLEN BAUTISTA', 'BSIT', '2023-10-31', 2, 'FOR SIGNATURE', '2024-09-01', NULL, 'OK', NULL, '2024-09-22 22:15:08', '2024-09-22 22:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '0001_01_01_000000_create_users_table', 1),
(6, '0001_01_01_000001_create_cache_table', 1),
(7, '0001_01_01_000002_create_jobs_table', 1),
(8, '2024_09_12_013727_create_documents_table', 1),
(12, '2024_09_20_052547_add_year_graduated_column_to_documents', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4uLfQ5JeZuygXZrX6swI9ZWnYNn8PoiTo0tZei8x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVNkZXE5aDZwYkhKYUI0S2hlTHlOZXRyMUtndkxDT2UxQ2o5Y1piZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kb2N1bWVudHMvcHJpbnQ/cGFnZT0yIjt9fQ==', 1727076923);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
