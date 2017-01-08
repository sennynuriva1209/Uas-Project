-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 01:35 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `telp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Senny Nuriva', 'Jl.Lingkar Selatan', 7324567, NULL, NULL),
(2, 'Daniel', 'adsdad', 67894579, '2017-01-02 05:33:47', '2017-01-02 05:33:47'),
(5, 'dinda', 'jl.pahlawan', 9872364, '2017-01-02 05:48:47', '2017-01-02 05:48:47'),
(6, 'Indah', 'Jl. Arcamanik', 7317077, '2017-01-03 08:18:40', '2017-01-03 08:18:40'),
(7, 'halimah', 'jl dago atas', 76523434, '2017-01-04 05:24:57', '2017-01-04 05:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_12_26_151142_CreateRentalTable', 1),
(4, '2016_12_31_143918_CreateMobilTable', 2),
(5, '2016_12_31_144335_CreateCustomerTable', 2),
(6, '2016_12_31_144510_CreateSewaTable', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobils`
--

CREATE TABLE `mobils` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_mobil` text COLLATE utf8_unicode_ci NOT NULL,
  `merk` text COLLATE utf8_unicode_ci NOT NULL,
  `thn_buat` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mobils`
--

INSERT INTO `mobils` (`id`, `kode_mobil`, `merk`, `thn_buat`, `model`, `created_at`, `updated_at`) VALUES
(2, 'A1', 'Avanza', NULL, 'Matic', '2017-01-02 06:13:32', '2017-01-02 06:13:32'),
(3, 'A2', 'APV', '2012', 'Manual', '2017-01-04 05:04:08', '2017-01-04 05:04:08'),
(4, 'A3', 'Innova', '2016', 'Matic', '2017-01-04 05:04:45', '2017-01-04 05:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `telp` int(11) NOT NULL,
  `jml_mobil` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `nama`, `alamat`, `telp`, `jml_mobil`, `created_at`, `updated_at`) VALUES
(1, 'akmal', 'jl.sulaksana ', 7317077, 1, NULL, NULL),
(2, 'kamaludin', 'jl.pelajar pejuang ', 73007033, 2, NULL, NULL),
(3, 'jajang', 'jl.Binong Jati', 91233429, 1, NULL, NULL),
(4, 'Saifudin', 'Jl.Ahmad Yani', 91548493, 1, NULL, NULL),
(5, 'Firman', 'Jl.Kopo Sayati', 7317023, 2, NULL, NULL),
(6, 'Indra', 'Jl.Sukajadi', 9234765, 1, NULL, NULL),
(7, 'Ashari', 'Jl.Kawaluyaan', 7601567, 2, NULL, NULL),
(8, 'Mahendra', 'Jl.Suryani', 5224798, 1, NULL, NULL),
(9, 'Kevin', 'Jl.Wastu Kencana', 7009123, 2, NULL, NULL),
(10, 'sella', 'jlndowgdb', 68313131, 2, '2017-01-02 05:39:51', '2017-01-02 05:39:51'),
(11, 'Nita', 'Jl Cianjur', 654318, 1, '2017-01-04 06:23:32', '2017-01-04 06:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `sewas`
--

CREATE TABLE `sewas` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_sewa` text COLLATE utf8_unicode_ci NOT NULL,
  `jenis_mobil` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_sewa` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_kembali` text COLLATE utf8_unicode_ci NOT NULL,
  `biaya` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sewas`
--

INSERT INTO `sewas` (`id`, `no_sewa`, `jenis_mobil`, `tgl_sewa`, `tgl_kembali`, `biaya`, `created_at`, `updated_at`) VALUES
(1, '001', 'Avanza', '1 Januari 2017', '5 Januari 2017', 5000000, '2017-01-02 06:43:24', '2017-01-02 06:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'derry', 'derryfariz@gmail.com', '$2y$10$kZisbdlLgqiuv.2SsqVhf.vsVLXff6aTtW.FOWTi6nw5bR2eE78HG', 'xUxDqFO5NFa3U32FjzQXp1dQ8lEa7FpIAVcZHSOP0QbwInbJ5Ock78yh8407', '2016-12-26 09:03:03', '2017-01-04 06:28:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobils`
--
ALTER TABLE `mobils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewas`
--
ALTER TABLE `sewas`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mobils`
--
ALTER TABLE `mobils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sewas`
--
ALTER TABLE `sewas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
