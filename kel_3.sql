-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2024 pada 10.58
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kel_3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
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
-- Struktur dari tabel `job_batches`
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
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `jenis_layanan`, `harga`, `deskripsi`, `created_at`) VALUES
(1, 'Regular', 55000, 'Meliputi pencucian eksterior, pembersihan interior & semir ban', '2024-05-16 08:08:09'),
(2, 'Drywash', 75000, 'Meliputi pencucian eksterior, pembersihan interior & semir ban dengan penggunaan minim air yang diperuntukkan bagi apartemen, ruko & perkantoran', '2024-05-16 08:08:19'),
(3, 'Medium', 125000, 'Meliputi pencucian eksterior, pembersihan interior, semir ban, wax & perawatan kaca mobil', '2024-05-16 08:08:28'),
(4, 'Complete', 220000, 'Meliputi pencucian eksterior, pembersihan interior, semir ban, wax, perawatan kaca mobil & mesin mobil', '2024-05-16 08:08:38'),
(16, 'HumanShower', 400000, 'pemandian air panass selamanya', '2024-06-04 14:59:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_16_101520_create_staff_table', 1),
(5, '2024_05_18_131500_remove_pelanggan_id_from_pemesanan_table', 2),
(6, '2024_05_18_131817_drop_pelanggan_id_from_pemesanan_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `tanggal_awal_booking` date NOT NULL,
  `jam_awal_booking` time NOT NULL,
  `catatan` text DEFAULT NULL,
  `jenis_mobil` enum('biasa','sport') NOT NULL,
  `noplat_mobil` varchar(20) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `layanan_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `tanggal_awal_booking`, `jam_awal_booking`, `catatan`, `jenis_mobil`, `noplat_mobil`, `foto`, `created_at`, `layanan_id`, `customer_name`) VALUES
(6, '2024-05-17', '20:19:00', 'Mobilnya ada kerusakan di bagian bawah dashbor', 'sport', 'B 4192 BUD', 'foto-.png', '2024-05-18 13:22:22', 3, 'Muhammad Faris'),
(7, '2024-05-20', '08:23:00', 'mobilnya rusak semuaya', 'biasa', 'B 6666 KAL', NULL, '2024-05-18 13:23:55', 4, 'Khonsa Aulia'),
(13, '2024-05-25', '13:09:00', 'yang bersih cucinya', 'sport', 'HM 7777 BBI', NULL, '2024-05-24 06:09:25', 4, 'budi setiawan'),
(14, '2024-05-28', '20:14:00', 'Mobilnya ada kerusakan di bagian bawah dashbor', 'sport', 'B 4192 KMZ', NULL, '2024-05-28 13:14:16', 3, 'asas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hak_akses` enum('admin','pelanggan') NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `email`, `hak_akses`, `foto`) VALUES
(1, 'admin1', 'adminpass1', 'admin1@example.com', 'pelanggan', 'foto-.png'),
(2, 'admin2', 'adminpass2', 'admin2@example.com', 'admin', ''),
(3, 'pelanggan1', 'passpelanggan1', 'pelanggan1@example.com', 'pelanggan', ''),
(4, 'pelanggan2', 'passpelanggan2', 'pelanggan2@example.com', 'pelanggan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rSQwi8oZcuNZFLb272XU90ERPeemP5Vy6YtkcGWF', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiN3lScldHVmhxck1wYkpWZDFmNzVJek1JckZBQmsxT2g3YklCOWRrNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MzA6e2k6MDtzOjE4OiJhbGVydC5jb25maWcudGl0bGUiO2k6MTtzOjE3OiJhbGVydC5jb25maWcudGV4dCI7aToyO3M6MTg6ImFsZXJ0LmNvbmZpZy50aW1lciI7aTozO3M6MjM6ImFsZXJ0LmNvbmZpZy5iYWNrZ3JvdW5kIjtpOjQ7czoxODoiYWxlcnQuY29uZmlnLndpZHRoIjtpOjU7czoyMzoiYWxlcnQuY29uZmlnLmhlaWdodEF1dG8iO2k6NjtzOjIwOiJhbGVydC5jb25maWcucGFkZGluZyI7aTo3O3M6MzA6ImFsZXJ0LmNvbmZpZy5zaG93Q29uZmlybUJ1dHRvbiI7aTo4O3M6Mjg6ImFsZXJ0LmNvbmZpZy5zaG93Q2xvc2VCdXR0b24iO2k6OTtzOjMwOiJhbGVydC5jb25maWcuY29uZmlybUJ1dHRvblRleHQiO2k6MTA7czoyOToiYWxlcnQuY29uZmlnLmNhbmNlbEJ1dHRvblRleHQiO2k6MTE7czoyOToiYWxlcnQuY29uZmlnLnRpbWVyUHJvZ3Jlc3NCYXIiO2k6MTI7czoyNDoiYWxlcnQuY29uZmlnLmN1c3RvbUNsYXNzIjtpOjEzO3M6MTc6ImFsZXJ0LmNvbmZpZy5pY29uIjtpOjE0O3M6MTI6ImFsZXJ0LmNvbmZpZyI7aToxNTtzOjE4OiJhbGVydC5jb25maWcudGl0bGUiO2k6MTY7czoxNzoiYWxlcnQuY29uZmlnLnRleHQiO2k6MTc7czoxODoiYWxlcnQuY29uZmlnLnRpbWVyIjtpOjE4O3M6MjM6ImFsZXJ0LmNvbmZpZy5iYWNrZ3JvdW5kIjtpOjE5O3M6MTg6ImFsZXJ0LmNvbmZpZy53aWR0aCI7aToyMDtzOjIzOiJhbGVydC5jb25maWcuaGVpZ2h0QXV0byI7aToyMTtzOjIwOiJhbGVydC5jb25maWcucGFkZGluZyI7aToyMjtzOjMwOiJhbGVydC5jb25maWcuc2hvd0NvbmZpcm1CdXR0b24iO2k6MjM7czoyODoiYWxlcnQuY29uZmlnLnNob3dDbG9zZUJ1dHRvbiI7aToyNDtzOjMwOiJhbGVydC5jb25maWcuY29uZmlybUJ1dHRvblRleHQiO2k6MjU7czoyOToiYWxlcnQuY29uZmlnLmNhbmNlbEJ1dHRvblRleHQiO2k6MjY7czoyOToiYWxlcnQuY29uZmlnLnRpbWVyUHJvZ3Jlc3NCYXIiO2k6Mjc7czoyNDoiYWxlcnQuY29uZmlnLmN1c3RvbUNsYXNzIjtpOjI4O3M6MTc6ImFsZXJ0LmNvbmZpZy5pY29uIjtpOjI5O3M6MTI6ImFsZXJ0LmNvbmZpZyI7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9maWxlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NztzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MTc1MjA3NzE7fXM6NToiYWxlcnQiO2E6MDp7fX0=', 1717520778);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` char(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `metode_pembayaran` enum('tunai','kartu_kredit','transfer_bank','e-wallet') NOT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `total_biaya` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal_transaksi`, `metode_pembayaran`, `bukti_bayar`, `total_biaya`, `created_at`) VALUES
(4, '2024-05-20', 'tunai', 'path/to/bukti1.jpg', 150000, '2024-05-16 08:20:44'),
(5, '2024-05-21', 'kartu_kredit', 'path/to/bukti2.jpg', 200000, '2024-05-16 08:20:44'),
(12, '2024-05-25', 'kartu_kredit', 'foto-1716524563.jpg', 500000, '2024-05-24 04:22:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` enum('admin','manager','staff','pelanggan') NOT NULL DEFAULT 'pelanggan',
  `foto` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `verified_at`, `password`, `remember_token`, `role`, `foto`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'Jane Smith', 'jane@example.com', '2023-01-02 04:00:00', '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', NULL, 'manager', '', 0, '2024-05-30 01:51:13', '2024-05-30 01:51:13'),
(4, 'Bob Brown', 'bob@example.com', '2023-01-04 02:30:00', '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', NULL, 'pelanggan', '', 0, '2024-05-30 01:51:13', '2024-05-30 01:51:13'),
(5, 'Muhammad Faris', 'linklur09@gmail.com', NULL, '$2y$12$BgbIQSlL/uhiroQ.ra7.oufe2jsLPNaO/IVJnWPac28G9V1o9BIIa', NULL, 'admin', '', 1, '2024-05-29 18:54:14', '2024-06-04 09:55:56'),
(6, 'maman', 'maman@gmail.com', NULL, '$2y$12$4251diSYRidw45D.bhtMg.N5I94MlY5UFR/hOWkcio3tSHO.ZVRea', NULL, 'admin', '', 1, '2024-05-30 06:34:02', '2024-06-02 00:40:41'),
(7, 'ais', 'ais@gmail.com', NULL, '$2y$12$8/ZsNLS8ykX7h/SImpgsMerzAb6riwllGpAxZEr76NG3GvQvgpGNC', NULL, 'admin', 'foto-665f475521cdeWhatsApp Image 2024-05-20 at 08.59.17.jpeg', 1, '2024-06-01 03:34:12', '2024-06-04 09:56:53'),
(8, 'abu', 'abu@gmail.com', NULL, '$2y$12$r9f8LnKZ8SrzueQYRU2EROkGW1D.sHUci6OFh5yzaiEpIQcAyTWPe', NULL, 'staff', NULL, 1, '2024-06-02 01:18:21', '2024-06-02 01:20:55'),
(10, 'halo', 'halo@gmail.com', NULL, '$2y$12$s.HodpPCee6KR6TRwi/LkeOwNlOOBqRx4oyzJoJsQbiPgVhgWQmei', NULL, 'pelanggan', NULL, 0, '2024-06-04 10:00:20', '2024-06-04 10:00:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_nip_unique` (`nip`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
