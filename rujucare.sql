-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2022 at 06:45 PM
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
-- Database: `rujucares`
--

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
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id_faskes` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id_faskes`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'zainoel-abidin@gmail.com', '$2a$12$cF2bPNxfGigYsEXKw0Z/weFojuUBjFjnO75IW1Abd9QGBDP/SX/mi', '2022-05-22 07:47:43', '2022-05-22 07:47:43'),
(2, 'rsia-aceh@gmail.com', '$2a$12$cF2bPNxfGigYsEXKw0Z/weFojuUBjFjnO75IW1Abd9QGBDP/SX/mi', '2022-05-22 07:47:43', '2022-05-22 07:47:43'),
(3, 'rumah-sakit-meutia@gmail.com', '$2a$12$cF2bPNxfGigYsEXKw0Z/weFojuUBjFjnO75IW1Abd9QGBDP/SX/mi', '2022-05-22 07:47:43', '2022-05-22 07:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `ketersediaan`
--

CREATE TABLE `ketersediaan` (
  `id_ketersediaan` bigint(20) UNSIGNED NOT NULL,
  `rujukanTersedia` int(11) NOT NULL,
  `kamarTersedia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ketersediaan`
--

INSERT INTO `ketersediaan` (`id_ketersediaan`, `rujukanTersedia`, `kamarTersedia`, `created_at`, `updated_at`) VALUES
(1, 45, 42, '2022-05-22 07:47:43', '2022-05-22 07:47:43'),
(2, 26, 23, '2022-05-22 07:47:43', '2022-05-22 07:47:43'),
(3, 25, 20, '2022-05-22 07:47:43', '2022-05-22 07:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `kredensial`
--

CREATE TABLE `kredensial` (
  `id_kredensial` bigint(20) UNSIGNED NOT NULL,
  `namaPublik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailPublik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkatPublik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teleponPublik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsiPublik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatPublik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faskesPicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urlFaskes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kredensial`
--

INSERT INTO `kredensial` (`id_kredensial`, `namaPublik`, `emailPublik`, `tingkatPublik`, `teleponPublik`, `deskripsiPublik`, `alamatPublik`, `faskesPicture`, `urlFaskes`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit Umum dr. Zainoel Abidin', 'zainoel-abidin@gmail.com', 'Tingkat 1', '065134565', 'Rumah Sakit Umum Terbesar di Aceh', 'Jl. Teuku Moh. Daud Beureueh No.108, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415', 'faskesPicture/aOLjD5d7caeFRFKTizRJ49ejCAwvlMphR5yb40x9.jpg', 'rumah-sakit-umum-dr-zainoel-abidin', '2022-05-22 07:47:43', '2022-05-22 07:59:09'),
(2, 'Rumah Sakit Ibu dan Anak (RSIA) Aceh', 'rsia-aceh@gmail.com', 'Tingkat 2', '0651637796', 'Rumah Sakit Ibu dan Anak Terbesar di Aceh', 'Jalan Prof. A. Majid Ibrahim I No. 3, Meuraxa, Punge Jurong, Kec. Meuraxa, Kota Banda Aceh, Aceh 23116', 'faskesPicture/SOQUfxwe0p7qW9UMTcAZqpdMX5ErW9NTFJm53WOY.jpg', 'rumah-sakit-ibu-dan-anak-rsia-aceh', '2022-05-22 07:47:43', '2022-05-22 08:10:08'),
(3, 'Rumah Sakit Umum Meutia', 'rumah-sakit-meutia@gmail.com', 'Tingkat 3', '081370489708', 'Rumah Sakit Umum Terbesar di Meutia Aceh', 'Jl. Cut Mutia No.55, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116', 'faskesPicture/d9Rjyg0TNlp00FoFYJ0uLz5pwdPkfXXnzHJ8oNwR.jpg', 'rumah-sakit-umum-meutia', '2022-05-22 07:47:43', '2022-05-22 08:13:30');

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
(5, '2022_05_19_053828_create_faskes_table', 1),
(6, '2022_05_19_054240_create_kredensial_table', 1),
(7, '2022_05_20_102142_create_pesan_masuk_table', 1),
(8, '2022_05_20_102159_create_pesan_keluar_table', 1),
(9, '2022_05_20_104034_create_spesialis_table', 1),
(10, '2022_05_20_104051_create_ketersediaan_table', 1);

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
-- Table structure for table `pesan_keluar`
--

CREATE TABLE `pesan_keluar` (
  `id_pesan_keluar` bigint(20) UNSIGNED NOT NULL,
  `id_faskes_pengirim` bigint(20) UNSIGNED NOT NULL,
  `id_faskes_penerima` bigint(20) UNSIGNED NOT NULL,
  `nomorBpjs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsiPesanKeluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persetujuanPesanKeluar` int(11) NOT NULL,
  `gambarPesanKeluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan_keluar`
--

INSERT INTO `pesan_keluar` (`id_pesan_keluar`, `id_faskes_pengirim`, `id_faskes_penerima`, `nomorBpjs`, `deskripsiPesanKeluar`, `persetujuanPesanKeluar`, `gambarPesanKeluar`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '00012301232', 'Perlu alat medis lebih canggih untuk pemeriksaan lanjut pasien', 2, 'gambarPesanKeluar/Ka2mDlt3hLBdZN6f12BNuVFiKZ2HyNwN6tqh06Vw.jpg', '2022-05-22 08:34:25', '2022-05-22 08:45:49'),
(2, 3, 2, '00012312321', 'Spesialis Sedang Tidak di Lokasi', 0, 'gambarPesanKeluar/sR5OnepU10Bf7fPzOYbEvKXvOlYSKLDgaN1xi2gb.jpg', '2022-05-22 08:35:06', '2022-05-22 08:46:25'),
(3, 2, 1, '00016152335', 'Membutuhkan peralatan lebih baik untuk pemeriksaan dan perawatan pasien', 1, 'gambarPesanKeluar/DS34ZLnjinpDZ6lZeoJWqNUMqqhida4qXvcAfKL9.jpg', '2022-05-22 08:47:24', '2022-05-22 08:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_masuk`
--

CREATE TABLE `pesan_masuk` (
  `id_pesan_masuk` bigint(20) UNSIGNED NOT NULL,
  `id_faskes_pengirim` bigint(20) UNSIGNED NOT NULL,
  `id_faskes_penerima` bigint(20) UNSIGNED NOT NULL,
  `nomorBpjs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsiPesanMasuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `persetujuanPesanMasuk` int(11) NOT NULL,
  `gambarPesanMasuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan_masuk`
--

INSERT INTO `pesan_masuk` (`id_pesan_masuk`, `id_faskes_pengirim`, `id_faskes_penerima`, `nomorBpjs`, `deskripsiPesanMasuk`, `persetujuanPesanMasuk`, `gambarPesanMasuk`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '00012301232', 'Perlu alat medis lebih canggih untuk pemeriksaan lanjut pasien', 2, 'gambarPesanKeluar/Ka2mDlt3hLBdZN6f12BNuVFiKZ2HyNwN6tqh06Vw.jpg', '2022-05-22 08:34:25', '2022-05-22 08:45:49'),
(2, 3, 2, '00012312321', 'Spesialis Sedang Tidak di Lokasi', 0, 'gambarPesanKeluar/sR5OnepU10Bf7fPzOYbEvKXvOlYSKLDgaN1xi2gb.jpg', '2022-05-22 08:35:06', '2022-05-22 08:46:25'),
(3, 2, 1, '00016152335', 'Membutuhkan peralatan lebih baik untuk pemeriksaan dan perawatan pasien', 1, 'gambarPesanKeluar/DS34ZLnjinpDZ6lZeoJWqNUMqqhida4qXvcAfKL9.jpg', '2022-05-22 08:47:24', '2022-05-22 08:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` bigint(20) UNSIGNED NOT NULL,
  `id_kredensial` bigint(20) UNSIGNED NOT NULL,
  `namaSpesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemampuanSpesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilePicture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `id_kredensial`, `namaSpesialis`, `kemampuanSpesialis`, `profilePicture`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dr. Rafid Pradana', 'Spesialis THT', 'profilePicture/K1AnI4aBEE8qoihWGsQIjiaaE2CmjF2QvpVrpjIm.jpg', '2022-05-22 08:05:31', '2022-05-22 08:05:31'),
(2, 1, 'Dr. Ami Nasyidah', 'Spesialis Anak', 'profilePicture/rKDPEKgxP3IuMmOm8foTL4u6HXuE0oCchYun6Wjr.jpg', '2022-05-22 08:06:16', '2022-05-22 08:06:16'),
(3, 1, 'Dr. Chandra Sitompul', 'Spesialis Saraf', 'profilePicture/HWUoiliiYzaaGP2y72RyDyfiO9IfoXAnYstbqsLb.jpg', '2022-05-22 08:06:58', '2022-05-22 08:06:58'),
(4, 2, 'Dr. Jamal Wibowo', 'Spesialis Bedah', 'profilePicture/ts1IXnx1pXKTYP7l3HNCsh2VijHrBRGi13CGKNJ4.jpg', '2022-05-22 08:07:40', '2022-05-22 08:07:40'),
(5, 2, 'Dr. Jane Sudiati', 'Spesialis Kandungan', 'profilePicture/0mugVGGjJABIWS7qYfP7uUnzk0iEceKBfrildRf7.jpg', '2022-05-22 08:07:59', '2022-05-22 08:07:59'),
(6, 2, 'Dr. Kamaria Rahmawati', 'Spesialis Anak', 'profilePicture/e29RbdpP9TCSnggm0mHNybMahdHWokhjqA2m6Lcr.jpg', '2022-05-22 08:08:28', '2022-05-22 08:08:28'),
(7, 3, 'Dr. Gandewa Hidayanto', 'Spesialis Saraf', 'profilePicture/qA4hZJ7C87XyCBOSWVVd7dmRWbLruOeVvYsHgoYI.jpg', '2022-05-22 08:11:09', '2022-05-22 08:11:09'),
(8, 3, 'Dr. Jaka Pradipta', 'Spesialis Bedah', 'profilePicture/WvwlaLXklYNWoCItLUevdl6i3hV5Vwpo2XLgKWyn.jpg', '2022-05-22 08:11:37', '2022-05-22 08:11:37'),
(9, 3, 'Dr. Simon Maryadi', 'Spesialis Mata', 'profilePicture/kPs3PkaixngQkMHje8Ws9X4QGiDZkXkiGNE11dDr.jpg', '2022-05-22 08:12:14', '2022-05-22 08:12:14');

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id_faskes`),
  ADD UNIQUE KEY `faskes_email_unique` (`email`);

--
-- Indexes for table `ketersediaan`
--
ALTER TABLE `ketersediaan`
  ADD PRIMARY KEY (`id_ketersediaan`);

--
-- Indexes for table `kredensial`
--
ALTER TABLE `kredensial`
  ADD PRIMARY KEY (`id_kredensial`),
  ADD UNIQUE KEY `kredensial_namapublik_unique` (`namaPublik`);

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
-- Indexes for table `pesan_keluar`
--
ALTER TABLE `pesan_keluar`
  ADD PRIMARY KEY (`id_pesan_keluar`);

--
-- Indexes for table `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  ADD PRIMARY KEY (`id_pesan_masuk`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id_faskes` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ketersediaan`
--
ALTER TABLE `ketersediaan`
  MODIFY `id_ketersediaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kredensial`
--
ALTER TABLE `kredensial`
  MODIFY `id_kredensial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan_keluar`
--
ALTER TABLE `pesan_keluar`
  MODIFY `id_pesan_keluar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  MODIFY `id_pesan_masuk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
