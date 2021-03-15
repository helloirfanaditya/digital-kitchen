-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 12:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_kitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kitchens`
--

CREATE TABLE `kitchens` (
  `kitchen_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `store_id`, `name`, `price`, `stock`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Mie Aceh', 25000, 100, '<p>Mie Aceh is available in two variations;&nbsp;<em>mie aceh goreng</em>, which is stir-fried and dry, and&nbsp;<em>mie aceh kuah</em>&nbsp;which is soupy. The noodle is also available in two options of ingredients; meat either beef or mutton, or seafood either shrimp or crab.</p>', '2021-03-11 07:06:56', '2021-03-11 07:06:56', NULL),
(2, 2, 'Mie Burung Dara', 15000, 100, '<p>Due to the widespread use of tables across third-party widgets like calendars and date pickers, we&rsquo;ve designed our tables to be&nbsp;<strong>opt-in</strong>. Just add the base class&nbsp;<code>.table</code>&nbsp;to any&nbsp;<code>&lt;table&gt;</code>, then extend with custom styles or our various included modifier classes.</p>', '2021-03-11 07:11:42', '2021-03-11 07:11:42', NULL),
(3, 2, 'Mie Ayam', 12000, 200, '<pre>\r\n<code>Mie Ayam</code></pre>', '2021-03-11 13:33:04', '2021-03-11 13:33:04', NULL),
(4, 2, 'Mie Ayam Ati Ampela', 20000, 200, '<p>Mie Ayam Ati Ampela</p>', '2021-03-11 13:33:23', '2021-03-11 13:33:23', NULL),
(5, 2, 'Testing Menus', 100000, 100, '<p>Testing Menus</p>', '2021-03-11 13:33:44', '2021-03-11 13:33:44', NULL),
(6, 2, 'Testing Menus 2', 100000, 1000, '<p>Testing Menus</p>', '2021-03-11 13:33:53', '2021-03-11 13:33:53', NULL),
(7, 2, 'Cemilan', 2000, 1000, '<p>Cemilan Bozz</p>', '2021-03-11 13:52:39', '2021-03-11 13:52:39', NULL),
(8, 2, 'Sampoerna Mild', 23000, 1000, '<p>Sampoerna Mild Nyebat</p>', '2021-03-11 13:59:29', '2021-03-11 13:59:29', NULL),
(9, 2, 'asdasdasd', 111111, 1111, '<p>1111</p>', '2021-03-11 13:59:55', '2021-03-11 13:59:55', NULL),
(10, 2, 'fsfsfs', 123123, 4521, '<p>afva</p>', '2021-03-11 14:00:03', '2021-03-11 14:00:03', NULL),
(11, 2, 'r2fsa', 2313124, 123, '<p>dwd1d1</p>', '2021-03-11 14:00:12', '2021-03-11 14:00:12', NULL);

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
(2, '2021_03_11_110646_create_admins_table', 1),
(3, '2021_03_11_110652_create_kitchens_table', 1),
(4, '2021_03_11_112058_create_stores_table', 1),
(5, '2021_03_11_114117_create_menus_table', 2),
(6, '2021_03_11_130031_add_description_to_stores', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `user_id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'Warung Madura', 'warung-madura', '<p>Warung tersebut tidak memiliki papan nama, lokasinya di jalan Haji Suleman, Petukangan Utara Jakarta Selatan, hanya saja dari ruangan seluas 2x3 meter itu penuh disesaki oleh jumlah barang dagangan, mulai dari sembako, bensin eceran hingga minuman dingin dan bensin eceran tersedia, soal harga terkadang malah lebih murah daripada harga yang dijual di Alfa Mini Market yang kebetulan berada tidak jauh dari lokasi mereka berjualan.</p>', '2021-03-11 06:03:51', '2021-03-11 06:03:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `email_verified_at`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Leif Labadie', 'rleffler@example.com', '2021-03-11 05:25:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cQYnxNKSRB', '2021-03-11 05:25:48', '2021-03-11 05:25:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_token_unique` (`token`),
  ADD KEY `admins_admin_id_index` (`admin_id`);

--
-- Indexes for table `kitchens`
--
ALTER TABLE `kitchens`
  ADD PRIMARY KEY (`kitchen_id`),
  ADD UNIQUE KEY `kitchens_email_unique` (`email`),
  ADD UNIQUE KEY `kitchens_token_unique` (`token`),
  ADD KEY `kitchens_kitchen_id_index` (`kitchen_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menus_store_id_foreign` (`store_id`),
  ADD KEY `menus_menu_id_index` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`),
  ADD UNIQUE KEY `stores_slug_unique` (`slug`),
  ADD KEY `stores_user_id_foreign` (`user_id`),
  ADD KEY `stores_store_id_index` (`store_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_token_unique` (`token`),
  ADD KEY `users_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchens`
--
ALTER TABLE `kitchens`
  MODIFY `kitchen_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`store_id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
