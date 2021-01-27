-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 01:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katrip_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bayis`
--

CREATE TABLE `data_bayis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_nik` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_nik` char(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_bayis`
--

INSERT INTO `data_bayis` (`id`, `nama_nik`, `no_nik`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(1, 'Sarada', NULL, '2020-09-15', '2020-10-14 23:20:50', '2020-10-14 23:20:50'),
(2, 'Boruti', NULL, '2020-09-16', '2020-10-14 23:20:51', '2020-10-14 23:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id`, `kelas_nama`, `created_at`, `updated_at`) VALUES
(1, 'Ekonomi', '2020-10-14 23:25:56', '2020-10-14 23:25:56'),
(2, 'Bisnis', '2020-10-14 23:26:53', '2020-10-14 23:26:53'),
(3, 'Eksekutif', '2020-10-14 23:27:08', '2020-10-14 23:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `data_keretas`
--

CREATE TABLE `data_keretas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kereta_nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_keretas`
--

INSERT INTO `data_keretas` (`id`, `kereta_nama`, `created_at`, `updated_at`) VALUES
(1, 'Jayabaya', '2020-10-14 23:29:56', '2020-10-14 23:29:56'),
(2, 'Mutiara Selatan', '2020-10-14 23:30:07', '2020-10-14 23:30:07'),
(3, 'Sancaka', '2020-10-14 23:30:08', '2020-10-14 23:30:08'),
(4, 'Logawa', '2020-10-14 23:30:09', '2020-10-14 23:30:09'),
(5, 'Probowangi', '2020-10-14 23:30:10', '2020-10-14 23:30:10'),
(6, 'Kertajaya', '2020-10-14 23:30:10', '2020-10-14 23:30:10'),
(7, 'Argo Bromo Anggrek', '2020-10-14 23:30:10', '2020-10-14 23:30:10'),
(8, 'Sembrani', '2020-10-14 23:30:10', '2020-10-14 23:30:10'),
(9, 'Bima', '2020-10-14 23:30:10', '2020-10-14 23:30:10'),
(10, 'Argo Wilis', '2020-10-14 23:30:10', '2020-10-14 23:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `data_kereta_kelas`
--

CREATE TABLE `data_kereta_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kereta_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kereta_kelas`
--

INSERT INTO `data_kereta_kelas` (`id`, `kereta_id`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(2, 2, 2, '2020-10-14 23:30:53', '2020-10-14 23:30:53'),
(3, 3, 3, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(4, 4, 1, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(5, 5, 2, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(6, 6, 1, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(7, 7, 3, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(8, 8, 3, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(9, 9, 3, '2020-10-14 23:30:33', '2020-10-14 23:30:33'),
(10, 1, 3, '2020-10-14 23:30:33', '2020-10-14 23:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesanans`
--

CREATE TABLE `data_pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `invoicecetak_no` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `kodepembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `pembayaranstatus_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pemesanans`
--

INSERT INTO `data_pemesanans` (`id`, `waktu_pesan`, `invoicecetak_no`, `total_harga`, `kodepembayaran_id`, `pembayaranstatus_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2020-10-14 23:49:58', 6486511, 450000, 1, 1, 1, '2020-10-14 23:49:58', '2020-10-14 23:49:58'),
(2, '2020-10-14 23:49:58', 6486511, 450000, 2, 2, 1, '2020-10-14 23:49:58', '2020-10-14 23:49:58'),
(3, '2020-10-14 23:49:58', 6486511, 450000, 3, 1, 2, '2020-10-14 23:49:58', '2020-10-14 23:49:58'),
(4, '2020-10-14 23:49:58', 6486511, 450000, 4, 2, 2, '2020-10-14 23:49:58', '2020-10-14 23:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `data_penumpangs`
--

CREATE TABLE `data_penumpangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ktp` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_penumpangs`
--

INSERT INTO `data_penumpangs` (`id`, `nama_ktp`, `no_ktp`, `bayi_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Subaru', '1122334455667788', 1, 1, '2020-10-14 23:48:02', '2020-10-14 23:48:02'),
(2, 'Barusu', '8877665544332211', NULL, 1, '2020-10-14 23:48:27', '2020-10-14 23:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `data_stasiuns`
--

CREATE TABLE `data_stasiuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_stasiuns`
--

INSERT INTO `data_stasiuns` (`id`, `nama`, `kode`, `created_at`, `updated_at`) VALUES
(1, 'Bekasi', 'BKS', '2020-10-14 23:39:51', '2020-10-14 23:39:51'),
(2, 'Blitar', 'BL', '2020-10-14 23:40:03', '2020-10-14 23:40:03'),
(3, 'Bogor', 'BOO', '2020-10-14 23:41:48', '2020-10-14 23:41:48'),
(4, 'Brebes', 'BB', '2020-10-14 23:42:42', '2020-10-14 23:42:42'),
(5, 'Cianjur', 'CJ', '2020-10-14 23:43:02', '2020-10-14 23:43:02'),
(6, 'Surabaya Gubeng', 'SGU', '2020-10-14 23:43:03', '2020-10-14 23:43:03'),
(7, 'Surabaya Pasar Turi', 'SBI', '2020-10-14 23:41:48', '2020-10-14 23:41:48'),
(8, 'Pasar Senen', 'PSE', '2020-10-14 23:42:42', '2020-10-14 23:42:42'),
(9, 'Gambir', 'GMR', '2020-10-14 23:43:02', '2020-10-14 23:43:02'),
(10, 'Bandung', 'BD', '2020-10-14 23:43:03', '2020-10-14 23:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `data_tikets`
--

CREATE TABLE `data_tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gerbong_kode` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kursi` int(11) NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `perjalanan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_tikets`
--

INSERT INTO `data_tikets` (`id`, `gerbong_kode`, `no_kursi`, `admin_id`, `status_id`, `perjalanan_id`, `created_at`, `updated_at`) VALUES
(1, 'A', 1, 1, 1, 2, '2020-10-14 23:53:06', '2020-10-14 23:53:06'),
(2, 'A', 1, 1, 2, 2, '2020-10-14 23:54:44', '2020-10-14 23:54:44'),
(3, 'A', 2, 1, 1, 3, '2020-10-14 23:55:56', '2020-10-14 23:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `data_users`
--

CREATE TABLE `data_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_users`
--

INSERT INTO `data_users` (`id`, `nama`, `email`, `password`, `alamat`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(1, 'User A', 'user1@gmail.com', '$2y$10$BeG/WOZAPok48nhPf2B39ut4IXA5ptvZV/oDs.TjSn6Rk9vtxHbeG', 'JL. Mangga 2, Surabaya', '1999-05-15', '2020-10-14 23:37:53', '2020-10-14 23:37:53'),
(2, 'User B', 'user2@gmail.com', '$2y$10$kBU8ohW73wyCSpidW31K1OlvN.cIiavOODxkcZV14ky/Oi1SCh8gK', 'JL. Anggur 1, Surabaya', '1992-02-20', '2020-10-14 23:38:43', '2020-10-14 23:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanans`
--

CREATE TABLE `detail_pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penumpang_id` bigint(20) UNSIGNED NOT NULL,
  `tiket_id` bigint(20) UNSIGNED NOT NULL,
  `pemesanan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_pemesanans`
--

INSERT INTO `detail_pemesanans` (`id`, `penumpang_id`, `tiket_id`, `pemesanan_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2020-10-14 23:56:47', '2020-10-14 23:56:47');

-- --------------------------------------------------------

--
-- Table structure for table `kode_pembayarans`
--

CREATE TABLE `kode_pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayarankode_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kode_pembayarans`
--

INSERT INTO `kode_pembayarans` (`id`, `pembayarankode_no`, `created_at`, `updated_at`) VALUES
(1, 863829328, '2020-10-14 23:45:17', '2020-10-14 23:45:17'),
(2, 873930329, '2020-10-14 23:45:48', '2020-10-14 23:45:48'),
(3, 873930320, '2020-10-14 23:45:48', '2020-10-14 23:45:48'),
(4, 873930331, '2020-10-14 23:45:48', '2020-10-14 23:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perjalanans`
--

CREATE TABLE `perjalanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu_berangkat` timestamp NULL DEFAULT NULL,
  `waktu_tiba` timestamp NULL DEFAULT NULL,
  `keretakelas_id` bigint(20) UNSIGNED NOT NULL,
  `harga` int(11) NOT NULL,
  `lokasi_berangkat_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_tiba_id` bigint(20) UNSIGNED NOT NULL,
  `penumpang_tersedia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perjalanans`
--

INSERT INTO `perjalanans` (`id`, `waktu_berangkat`, `waktu_tiba`, `keretakelas_id`, `harga`, `lokasi_berangkat_id`, `lokasi_tiba_id`, `penumpang_tersedia`, `created_at`, `updated_at`) VALUES
(1, '2020-10-14 19:00:00', '2020-10-15 05:00:00', 1, 200000, 1, 2, 60, '2020-10-14 23:55:56', '2020-10-14 23:55:56'),
(2, '2020-10-15 19:00:00', '2020-10-17 05:00:00', 2, 250000, 2, 3, 80, '2020-10-14 23:55:57', '2020-10-14 23:55:57'),
(3, '2020-10-16 19:00:00', '2020-10-18 05:00:00', 2, 150000, 3, 4, 100, '2020-10-14 23:55:58', '2020-10-14 23:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `status_pembayarans`
--

CREATE TABLE `status_pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_jenispembayaran` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_pembayarans`
--

INSERT INTO `status_pembayarans` (`id`, `status_jenispembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Terbayar', '2020-10-14 23:46:51', '2020-10-14 23:46:51'),
(2, 'Belum Terbayar', '2020-10-14 23:47:01', '2020-10-14 23:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `status_tikets`
--

CREATE TABLE `status_tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_jenis` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_tikets`
--

INSERT INTO `status_tikets` (`id`, `status_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Tersedia', '2020-10-14 23:43:33', '2020-10-14 23:43:33'),
(2, 'Terjual', '2020-10-14 23:43:43', '2020-10-14 23:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin A', 'admin1@gmail.com', NULL, '$2y$10$8eQM57P3V.g5RfgJ4JkdM.zr1xOrRFEkzH7s3BpNT.BSyuZPc5HCO', NULL, '2020-10-15 06:33:46', '2020-10-15 06:33:46'),
(2, 'Admin B', 'admin2@gmail.com', NULL, '$2y$10$2scbp0Gff3lpvI9lQZT5VOj.Nr4hIVPTtL8We.OL7nDEhBTRxP82i', NULL, '2020-10-15 06:34:10', '2020-10-15 06:34:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bayis`
--
ALTER TABLE `data_bayis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_bayis_no_nik_unique` (`no_nik`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keretas`
--
ALTER TABLE `data_keretas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kereta_kelas`
--
ALTER TABLE `data_kereta_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kereta_kelas_kereta_id_foreign` (`kereta_id`),
  ADD KEY `data_kereta_kelas_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_pemesanans_kodepembayaran_id_foreign` (`kodepembayaran_id`),
  ADD KEY `data_pemesanans_pembayaranstatus_id_foreign` (`pembayaranstatus_id`),
  ADD KEY `data_pemesanans_user_id_foreign` (`user_id`);

--
-- Indexes for table `data_penumpangs`
--
ALTER TABLE `data_penumpangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_penumpangs_no_ktp_unique` (`no_ktp`),
  ADD KEY `data_penumpangs_bayi_id_foreign` (`bayi_id`),
  ADD KEY `data_penumpangs_user_id_foreign` (`user_id`);

--
-- Indexes for table `data_stasiuns`
--
ALTER TABLE `data_stasiuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tikets`
--
ALTER TABLE `data_tikets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_tikets_admin_id_foreign` (`admin_id`),
  ADD KEY `data_tikets_status_id_foreign` (`status_id`),
  ADD KEY `data_tikets_perjalanan_id_foreign` (`perjalanan_id`);

--
-- Indexes for table `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_users_email_unique` (`email`);

--
-- Indexes for table `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pemesanans_penumpang_id_foreign` (`penumpang_id`),
  ADD KEY `detail_pemesanans_tiket_id_foreign` (`tiket_id`),
  ADD KEY `detail_pemesanans_pemesanan_id_foreign` (`pemesanan_id`);

--
-- Indexes for table `kode_pembayarans`
--
ALTER TABLE `kode_pembayarans`
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
-- Indexes for table `perjalanans`
--
ALTER TABLE `perjalanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perjalanans_keretakelas_id_foreign` (`keretakelas_id`),
  ADD KEY `perjalanans_lokasi_berangkat_id_foreign` (`lokasi_berangkat_id`),
  ADD KEY `perjalanans_lokasi_tiba_id_foreign` (`lokasi_tiba_id`);

--
-- Indexes for table `status_pembayarans`
--
ALTER TABLE `status_pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_tikets`
--
ALTER TABLE `status_tikets`
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
-- AUTO_INCREMENT for table `data_bayis`
--
ALTER TABLE `data_bayis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_keretas`
--
ALTER TABLE `data_keretas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_kereta_kelas`
--
ALTER TABLE `data_kereta_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_penumpangs`
--
ALTER TABLE `data_penumpangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_stasiuns`
--
ALTER TABLE `data_stasiuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_tikets`
--
ALTER TABLE `data_tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kode_pembayarans`
--
ALTER TABLE `kode_pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `perjalanans`
--
ALTER TABLE `perjalanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_pembayarans`
--
ALTER TABLE `status_pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_tikets`
--
ALTER TABLE `status_tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kereta_kelas`
--
ALTER TABLE `data_kereta_kelas`
  ADD CONSTRAINT `data_kereta_kelas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `data_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_kereta_kelas_kereta_id_foreign` FOREIGN KEY (`kereta_id`) REFERENCES `data_keretas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  ADD CONSTRAINT `data_pemesanans_kodepembayaran_id_foreign` FOREIGN KEY (`kodepembayaran_id`) REFERENCES `kode_pembayarans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_pemesanans_pembayaranstatus_id_foreign` FOREIGN KEY (`pembayaranstatus_id`) REFERENCES `status_pembayarans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_pemesanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `data_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_penumpangs`
--
ALTER TABLE `data_penumpangs`
  ADD CONSTRAINT `data_penumpangs_bayi_id_foreign` FOREIGN KEY (`bayi_id`) REFERENCES `data_bayis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_penumpangs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `data_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_tikets`
--
ALTER TABLE `data_tikets`
  ADD CONSTRAINT `data_tikets_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_tikets_perjalanan_id_foreign` FOREIGN KEY (`perjalanan_id`) REFERENCES `perjalanans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_tikets_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status_tikets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  ADD CONSTRAINT `detail_pemesanans_pemesanan_id_foreign` FOREIGN KEY (`pemesanan_id`) REFERENCES `data_pemesanans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pemesanans_penumpang_id_foreign` FOREIGN KEY (`penumpang_id`) REFERENCES `data_penumpangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pemesanans_tiket_id_foreign` FOREIGN KEY (`tiket_id`) REFERENCES `data_tikets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `perjalanans`
--
ALTER TABLE `perjalanans`
  ADD CONSTRAINT `perjalanans_keretakelas_id_foreign` FOREIGN KEY (`keretakelas_id`) REFERENCES `data_kereta_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perjalanans_lokasi_berangkat_id_foreign` FOREIGN KEY (`lokasi_berangkat_id`) REFERENCES `data_stasiuns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perjalanans_lokasi_tiba_id_foreign` FOREIGN KEY (`lokasi_tiba_id`) REFERENCES `data_stasiuns` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
