-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 07.45
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `data_bayis`
--

CREATE TABLE `data_bayis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_nik` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_nik` char(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_keretas`
--

CREATE TABLE `data_keretas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kereta_nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kereta_kelas`
--

CREATE TABLE `data_kereta_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kereta_id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pemesanans`
--

CREATE TABLE `data_pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu_pesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `invoicecetak_no` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `kodepembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `pembayaranstatus_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penumpangs`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_stasiuns`
--

CREATE TABLE `data_stasiuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stasiun_nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tikets`
--

CREATE TABLE `data_tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu_berangkat` timestamp NULL DEFAULT NULL,
  `waktu_tiba` timestamp NULL DEFAULT NULL,
  `gerbong_kode` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kursi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keretakelas_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_berangkat` bigint(20) UNSIGNED NOT NULL,
  `lokasi_tiba` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_users`
--

CREATE TABLE `data_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_users`
--

INSERT INTO `data_users` (`id`, `nama`, `email`, `password`, `alamat`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(2, 'Muh nisar', 'nisar.utomo@yahoo.co.id', '$2y$10$spIMYx0ZhAScLBpg7bFuA.5z6L6WVxtQkKBUvP3epVDWcw.xD/fEO', 'Jl Mujiran Gang Buntu', '2006-02-20', '2020-12-04 03:19:32', '2020-12-04 03:19:32'),
(3, 'Wong alas', 'alas@yahoo.co.id', '$2y$10$Mmv46xSimN4DV0zNCj9gKONS7czu3Gbl0FIsXuiQEypuDaqIcLb7C', 'Jl Mujiran Gang Buntu', '2006-02-20', '2020-12-15 03:06:15', '2020-12-15 03:06:15'),
(4, 'nisar', 'nisar@gmail.com', '$2y$10$8BHoKuLdeB4ATsbRc1hFBeOVrul5feqz.rwTZS35X9AMlsR57hOEy', 'akakhiehwdw', '2027-08-29', '2020-12-15 04:52:25', '2020-12-15 04:52:25'),
(5, 'nisar', 'songir@gmail.com', '$2y$10$7iwzHAr7LcX1N8aAdHpSKOBhVQ/6/1v9hm3Q7s/XAFZkfolcKF1xy', 'ssssss', '2020-12-13', '2020-12-15 06:42:55', '2020-12-15 06:42:55'),
(6, 'Muhammad Nisar', 'utomo@gmail.com', '$2y$10$jQo8LYXmjW1eh7cbxSBGUOf8E1JwngHdlrJnpDkIoZZOOTRblXw9.', 'Jalan Mujiran', '2020-12-21', '2020-12-15 07:23:29', '2020-12-15 07:23:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanans`
--

CREATE TABLE `detail_pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penumpang_id` bigint(20) UNSIGNED NOT NULL,
  `tiket_id` bigint(20) UNSIGNED NOT NULL,
  `pemesanan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_pembayarans`
--

CREATE TABLE `kode_pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayarankode_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_10_14_072659_create_data_users_table', 1),
(4, '2020_10_14_072701_create_data_keretas_table', 1),
(5, '2020_10_14_072702_create_data_kelas_table', 1),
(6, '2020_10_14_072703_create_data_stasiuns_table', 1),
(7, '2020_10_14_072704_create_status_tikets_table', 1),
(8, '2020_10_14_072705_create_kode_pembayarans_table', 1),
(9, '2020_10_14_072706_create_status_pembayarans_table', 1),
(10, '2020_10_14_072926_create_data_bayis_table', 1),
(11, '2020_10_14_072927_create_data_penumpangs_table', 1),
(12, '2020_10_14_073028_create_data_kereta_kelas_table', 1),
(13, '2020_10_14_073515_create_data_pemesanans_table', 1),
(14, '2020_10_14_073531_create_data_tikets_table', 1),
(15, '2020_10_14_073532_create_detail_pemesanans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pembayarans`
--

CREATE TABLE `status_pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_jenispembayaran` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_tikets`
--

CREATE TABLE `status_tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_jenis` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nisar', 'nisar@gmail.com', NULL, '$2y$10$vqD2exgJLkZ0pJC2ImoTseMUw7W1ZLFN8Y65NRi6EqHInLQhdu.Si', NULL, '2020-12-04 04:12:34', '2020-12-04 04:12:34'),
(2, 'cak toha', 'toha@buntu.co.id', NULL, '$2y$10$fSRZ0VvH/o7uZMSmE9AkaOqe6snHTeXh9xK5oSEVT3GGQB/fYiSVm', NULL, '2020-12-04 04:52:14', '2020-12-04 04:52:14'),
(3, 'fika', 'fika@gmail.com', NULL, '$2y$10$NwVQ3D1lNBLXAFCJbBl4wO4eDS3mSdTiWchILxe7oaf5teVqRAsHC', NULL, '2020-12-04 05:24:50', '2020-12-04 05:24:50'),
(4, 'halo', 'halo@gmail.com', NULL, '$2y$10$pxRbN7MG9fKky.IqG2P5WuYnfar06/e6QHbKpc2PYA1q4eoHwUARS', NULL, '2020-12-05 05:15:27', '2020-12-05 05:15:27'),
(5, 'jali', 'jalo@gmail.com', NULL, '$2y$10$QPCE6fuxDBgo/TCNZRxg0OLSDTTxIOrfa0jOpYK0dqtRYbk5j3WAy', NULL, '2020-12-05 06:12:18', '2020-12-05 06:12:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bayis`
--
ALTER TABLE `data_bayis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_bayis_no_nik_unique` (`no_nik`);

--
-- Indeks untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_keretas`
--
ALTER TABLE `data_keretas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kereta_kelas`
--
ALTER TABLE `data_kereta_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kereta_kelas_kereta_id_foreign` (`kereta_id`),
  ADD KEY `data_kereta_kelas_kelas_id_foreign` (`kelas_id`);

--
-- Indeks untuk tabel `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_pemesanans_kodepembayaran_id_foreign` (`kodepembayaran_id`),
  ADD KEY `data_pemesanans_pembayaranstatus_id_foreign` (`pembayaranstatus_id`),
  ADD KEY `data_pemesanans_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `data_penumpangs`
--
ALTER TABLE `data_penumpangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_penumpangs_no_ktp_unique` (`no_ktp`),
  ADD KEY `data_penumpangs_bayi_id_foreign` (`bayi_id`),
  ADD KEY `data_penumpangs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `data_stasiuns`
--
ALTER TABLE `data_stasiuns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_tikets`
--
ALTER TABLE `data_tikets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_tikets_keretakelas_id_foreign` (`keretakelas_id`),
  ADD KEY `data_tikets_admin_id_foreign` (`admin_id`),
  ADD KEY `data_tikets_status_id_foreign` (`status_id`),
  ADD KEY `data_tikets_lokasi_berangkat_foreign` (`lokasi_berangkat`),
  ADD KEY `data_tikets_lokasi_tiba_foreign` (`lokasi_tiba`);

--
-- Indeks untuk tabel `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_users_email_unique` (`email`);

--
-- Indeks untuk tabel `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pemesanans_penumpang_id_foreign` (`penumpang_id`),
  ADD KEY `detail_pemesanans_tiket_id_foreign` (`tiket_id`),
  ADD KEY `detail_pemesanans_pemesanan_id_foreign` (`pemesanan_id`);

--
-- Indeks untuk tabel `kode_pembayarans`
--
ALTER TABLE `kode_pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `status_pembayarans`
--
ALTER TABLE `status_pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_tikets`
--
ALTER TABLE `status_tikets`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bayis`
--
ALTER TABLE `data_bayis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_keretas`
--
ALTER TABLE `data_keretas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kereta_kelas`
--
ALTER TABLE `data_kereta_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_penumpangs`
--
ALTER TABLE `data_penumpangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_stasiuns`
--
ALTER TABLE `data_stasiuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_tikets`
--
ALTER TABLE `data_tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_users`
--
ALTER TABLE `data_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kode_pembayarans`
--
ALTER TABLE `kode_pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `status_pembayarans`
--
ALTER TABLE `status_pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_tikets`
--
ALTER TABLE `status_tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_kereta_kelas`
--
ALTER TABLE `data_kereta_kelas`
  ADD CONSTRAINT `data_kereta_kelas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `data_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_kereta_kelas_kereta_id_foreign` FOREIGN KEY (`kereta_id`) REFERENCES `data_keretas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_pemesanans`
--
ALTER TABLE `data_pemesanans`
  ADD CONSTRAINT `data_pemesanans_kodepembayaran_id_foreign` FOREIGN KEY (`kodepembayaran_id`) REFERENCES `kode_pembayarans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_pemesanans_pembayaranstatus_id_foreign` FOREIGN KEY (`pembayaranstatus_id`) REFERENCES `status_pembayarans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_pemesanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `data_users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_penumpangs`
--
ALTER TABLE `data_penumpangs`
  ADD CONSTRAINT `data_penumpangs_bayi_id_foreign` FOREIGN KEY (`bayi_id`) REFERENCES `data_bayis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_penumpangs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `data_users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_tikets`
--
ALTER TABLE `data_tikets`
  ADD CONSTRAINT `data_tikets_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_tikets_keretakelas_id_foreign` FOREIGN KEY (`keretakelas_id`) REFERENCES `data_kereta_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_tikets_lokasi_berangkat_foreign` FOREIGN KEY (`lokasi_berangkat`) REFERENCES `data_stasiuns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_tikets_lokasi_tiba_foreign` FOREIGN KEY (`lokasi_tiba`) REFERENCES `data_stasiuns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_tikets_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `status_tikets` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_pemesanans`
--
ALTER TABLE `detail_pemesanans`
  ADD CONSTRAINT `detail_pemesanans_pemesanan_id_foreign` FOREIGN KEY (`pemesanan_id`) REFERENCES `data_pemesanans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pemesanans_penumpang_id_foreign` FOREIGN KEY (`penumpang_id`) REFERENCES `data_penumpangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pemesanans_tiket_id_foreign` FOREIGN KEY (`tiket_id`) REFERENCES `data_tikets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
