-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 06:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'MotorCycle', NULL, '2023-11-23 23:43:04', '2023-11-23 23:43:04'),
(2, 'Car', NULL, '2023-11-23 23:52:48', '2023-11-24 00:15:41'),
(3, 'test', '2023-11-24 00:21:48', '2023-11-24 00:15:56', '2023-11-24 00:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_23_172628_create_categories_table', 1),
(6, '2023_11_23_172722_create_product_table', 1),
(7, '2023_11_24_173921_change_description_to_text_in_product_table', 2),
(8, '2023_11_27_054255_add_roles_field_to_users_table', 3);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `categories_id`, `place`, `price`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Vario 150', 1, 'Yogyakarta', '85000', '<ul>\r\n	<li>2 Certified Helmets (SNI): Ensuring safety with two high-quality helmets meeting national standards.</li>\r\n	<li>2 Raincoats:&nbsp;Prepared for unexpected weather changes, allowing you to ride comfortably even in the rain.</li>\r\n	<li>Original Vehicle Registration (STNK):&nbsp;Providing the authentic and original vehicle registration for a hassle-free experience. Pick-Up and Drop-Off Service (Minimum 3 Days Rental): Enjoy the convenience of our transportation service for rentals lasting a minimum of three days.</li>\r\n</ul>', 'assets/product/ZwiapFiCgW8ZCjX5ZvOOJh9MYctdwiT6PFm2cYDw.png', '2023-11-24 10:16:54', '2023-11-27 22:24:01'),
(2, 'Beat 125 cc', 1, 'Yogyakarta', '65000', '<ul><li><b>2 Certified Helmets (SNI)</b>: Ensuring safety with two high-quality helmets meeting national standards.\r\n</li><li><b>2 Raincoats:</b> Prepared for unexpected weather changes, allowing you to ride comfortably even in the rain.\r\n</li><li><b>Original Vehicle Registration (STNK):</b> Providing the authentic and original vehicle registration for a hassle-free experience.\r\nPick-Up and Drop-Off Service (Minimum 3 Days Rental): Enjoy the convenience of our transportation service for rentals lasting a minimum of three days.</li></ul>', 'assets/product/RiHkGbhBwlGIUlwIOF7opCkRnKoIoI7WTpb4NWCL.png', '2023-11-24 10:55:06', '2023-11-27 22:11:40'),
(3, 'nmax', 1, 'Yogyakarta', '80000', '<ul><li><span style=\"font-weight: bolder;\">2 Certified Helmets (SNI)</span>: Ensuring safety with two high-quality helmets meeting national standards.</li><li><span style=\"font-weight: bolder;\">2 Raincoats:</span>&nbsp;Prepared for unexpected weather changes, allowing you to ride comfortably even in the rain.</li><li><span style=\"font-weight: bolder;\">Original Vehicle Registration (STNK):</span>&nbsp;Providing the authentic and original vehicle registration for a hassle-free experience. Pick-Up and Drop-Off Service (Minimum 3 Days Rental): Enjoy the convenience of our transportation service for rentals lasting a minimum of three days.</li></ul>', 'assets/product/MtLcn2VdwR3Ty4Y2bEHXSp62NtdjKO1e0ahc8mS7.png', '2023-11-24 10:55:50', '2023-11-27 22:12:12'),
(4, 'Vespa', 1, 'Yogyakarta', '100000', '<ul><li><span style=\"font-weight: bolder;\">2 Certified Helmets (SNI)</span>: Ensuring safety with two high-quality helmets meeting national standards.</li><li><span style=\"font-weight: bolder;\">2 Raincoats:</span>&nbsp;Prepared for unexpected weather changes, allowing you to ride comfortably even in the rain.</li><li><span style=\"font-weight: bolder;\">Original Vehicle Registration (STNK):</span>&nbsp;Providing the authentic and original vehicle registration for a hassle-free experience. Pick-Up and Drop-Off Service (Minimum 3 Days Rental): Enjoy the convenience of our transportation service for rentals lasting a minimum of three days.</li></ul>', 'assets/product/wuZikca6sfajQSlezh32IrrAPsocMza8TzFKGbTJ.png', '2023-11-24 10:56:32', '2023-11-27 22:12:27'),
(6, 'Vespa red Lx 125 cc', 2, 'Yogyakarta', '100000', '<ul><li><span style=\"font-weight: bolder;\">2 Certified Helmets (SNI)</span>: Ensuring safety with two high-quality helmets meeting national standards.</li><li><span style=\"font-weight: bolder;\">2 Raincoats:</span>&nbsp;Prepared for unexpected weather changes, allowing you to ride comfortably even in the rain.</li><li><span style=\"font-weight: bolder;\">Original Vehicle Registration (STNK):</span>&nbsp;Providing the authentic and original vehicle registration for a hassle-free experience. Pick-Up and Drop-Off Service (Minimum 3 Days Rental): Enjoy the convenience of our transportation service for rentals lasting a minimum of three days.</li></ul>', 'assets/product/lAVaKtE4YQDOVGf59mzRXi6KMkYp69CHNznZ2DGG.png', '2023-11-26 09:11:00', '2023-11-27 22:12:48'),
(7, 'PCX 150', 2, 'Yogyakarta', '90000', '<ul><li><span style=\"font-weight: bolder;\">2 Certified Helmets (SNI)</span>: Ensuring safety with two high-quality helmets meeting national standards.</li><li><span style=\"font-weight: bolder;\">2 Raincoats:</span>&nbsp;Prepared for unexpected weather changes, allowing you to ride comfortably even in the rain.</li><li><span style=\"font-weight: bolder;\">Original Vehicle Registration (STNK):</span>&nbsp;Providing the authentic and original vehicle registration for a hassle-free experience. Pick-Up and Drop-Off Service (Minimum 3 Days Rental): Enjoy the convenience of our transportation service for rentals lasting a minimum of three days.</li></ul>', 'assets/product/IbCLU7NuoRQpVtc2bwqzo8A1a4JOTI0dTL2X8bjT.png', '2023-11-26 09:42:25', '2023-11-27 22:13:01');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(5, 'Dimas aji anggono', 'admin@gmail.com', NULL, '$2y$10$0p2Uig5BdtQHBaKmXkGxgOkgsD3LfmeSjilJdsdRmCxy6e6Qv9ZBe', NULL, '2023-11-27 21:35:42', '2023-11-27 21:35:42', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
