-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2024 pada 16.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek3`
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

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@example.com|127.0.0.1', 'i:2;', 1719139210),
('admin@example.com|127.0.0.1:timer', 'i:1719139210;', 1719139210),
('admin@gmail.com|127.0.0.1', 'i:1;', 1719111006),
('admin@gmail.com|127.0.0.1:timer', 'i:1719111006;', 1719111006),
('ais@gmailm.com|127.0.0.1', 'i:1;', 1717949981),
('ais@gmailm.com|127.0.0.1:timer', 'i:1717949981;', 1717949981),
('mazrulmustafa123@gmail.com|127.0.0.1', 'i:1;', 1719111024),
('mazrulmustafa123@gmail.com|127.0.0.1:timer', 'i:1719111024;', 1719111024);

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
(16, 'HumanShower', 400000, 'pemandian air panass selamanya', '2024-06-04 14:59:44'),
(17, 'interior New', 5000000, 'baru', '2024-06-22 04:34:24'),
(19, 'interior New', 25000000, 'baru', '2024-06-22 04:47:21'),
(20, 'interior New', 25000000, 'baru sekali', '2024-06-22 04:47:34');

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
(6, '2024_05_18_131817_drop_pelanggan_id_from_pemesanan_table', 2),
(7, '2024_06_22_040609_create_personal_access_tokens_table', 3);

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
  `id_user` int(20) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `tanggal_awal_booking` date NOT NULL,
  `jam_awal_booking` time NOT NULL,
  `catatan` varchar(250) DEFAULT NULL,
  `jenis_mobil` enum('biasa','sport') NOT NULL,
  `noplat_mobil` varchar(20) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `layanan_id` varchar(250) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `norek` varchar(250) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_user`, `kode`, `tanggal_awal_booking`, `jam_awal_booking`, `catatan`, `jenis_mobil`, `noplat_mobil`, `foto`, `harga`, `total_harga`, `created_at`, `layanan_id`, `customer_name`, `norek`, `status`, `method`) VALUES
(38, 12, '44030464821396354', '2024-06-14', '12:02:00', '1sdad', 'biasa', '12', 'foto-1719136445.jpg', '125000', '125000', '2024-06-23 09:52:50', 'medium', 'adasa', '69883744051918789', 'failed', 'wallet'),
(39, 12, '82436382299615725', '2024-06-07', '12:12:00', 'cuci bersih', 'sport', '232323', 'foto-1719137672.jpg', '220000', '250000', '2024-06-23 10:14:16', 'complete', 'adasa', '86325452962301435', 'failed', 'bri'),
(40, 12, '98424246333598435', '2024-06-06', '13:13:00', '131qs', 'sport', '2323232', 'foto-1719138735.jpg', '220000', '250000', '2024-06-23 10:32:03', 'complete', 'adada', '97395451407171600', 'failed', 'bri'),
(41, 12, '21695656518477928', '2024-06-12', '12:22:00', 'e1eee', 'sport', '1212', 'foto-1719138782.jpg', '220000', '250000', '2024-06-23 10:32:53', 'complete', 'adasa', '9583625372698516', 'success', 'mandiri'),
(42, 12, '28863153100583174', '2024-06-11', '13:03:00', 'dada', 'biasa', 'adq2e', 'foto-1719138882.jpg', '75000', '75000', '2024-06-23 10:34:35', 'drywash', 'salsa', '55809061930503062', 'failed', 'bca'),
(43, 12, '44980111833329700', '2024-06-14', '12:33:00', 'tess', 'biasa', '2323232', 'foto-1719140039.jpg', '220000', '220000', '2024-06-23 10:47:34', 'complete', 'adasa', '50761363703980690', 'success', 'bca'),
(44, 12, '68934775796900567', '2024-06-11', '12:13:00', '2dwd', 'sport', '2323232', 'foto-1719140648.jpg', '125000', '155000', '2024-06-23 11:04:02', 'medium', 'asda', '67293284767199588', 'validasi', 'bca'),
(45, 12, '50134494992565190', '2024-06-13', '12:02:00', 'catatannn', 'sport', 'bm 22 d2', 'foto-1719152585.jpg', '125000', '155000', '2024-06-23 14:22:29', 'medium', 'asall', '55335904915170667', 'success', 'wallet');

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('0Y4eshyC3A0oZr1yyAdiClExOiAzGcnqqCQyxqy7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjdFY3k4QkZna2lLMjIzWGVOWUs4YlpkTlhyc3pBUzA1dU9ET2poWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1719153234),
('dqoJ2PsE65dllfN8Y4DM52qsLkJOQHWXWdHRkJpP', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidWhlM05pM3NqT2duejJXNlhJVzV4OHJZM0JUZWh2SGF5TVg0U0FPNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi90cmFuc2Frc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjU6ImFsZXJ0IjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcxOTEzNzE4Mzt9fQ==', 1719140848),
('nWwSmTUycZhgfrgc5BYocys8cy5I8uTrMjwXBuah', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieDF6a0lOQ3BqbzJxSmtNb0NGeXk5VDFPelVIOTBOTm9lT0dGa29FWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi90cmFuc2Frc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcxOTE1MjYyMzt9czo1OiJhbGVydCI7YTowOnt9fQ==', 1719152987),
('tWEo6RKEnxKSxui1PTC6MdkBjtdsdjwpZ9BBQRiO', 12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRGZRNmc5UG9SSEkzVDJGWTAxaXNBU1VSblh5WHlUTFU5UWZ2bUp2bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9oaXN0b3JpIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzE5MTM5MzUxO319', 1719140649);

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
  `nama_lengkap` varchar(100) NOT NULL,
  `jam` time DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `pemesanan_id` int(22) NOT NULL,
  `metode_pembayaran` enum('tunai','kartu_kredit','transfer_bank','e-wallet') NOT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `total_biaya` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_lengkap`, `jam`, `tanggal`, `deskripsi`, `pemesanan_id`, `metode_pembayaran`, `bukti_bayar`, `total_biaya`, `created_at`) VALUES
(4, '2024-05-20', NULL, NULL, '', 0, 'tunai', 'path/to/bukti1.jpg', '150000', '2024-05-16 08:20:44'),
(5, '2024-05-21', NULL, NULL, '', 0, 'kartu_kredit', 'path/to/bukti2.jpg', '200000', '2024-05-16 08:20:44'),
(12, '2024-05-25', NULL, NULL, '', 0, 'kartu_kredit', 'foto-1716524563.jpg', '500000', '2024-05-24 04:22:43');

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
  `fullname` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `verified_at`, `password`, `remember_token`, `role`, `foto`, `is_active`, `fullname`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(2, 'Jane Smith', 'jane@example.com', '2023-01-02 04:00:00', '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', NULL, 'manager', '', 0, NULL, NULL, NULL, '2024-05-30 01:51:13', '2024-05-30 01:51:13'),
(4, 'Bob Brown', 'bob@example.com', '2023-01-04 02:30:00', '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', NULL, 'pelanggan', '', 0, NULL, NULL, NULL, '2024-05-30 01:51:13', '2024-05-30 01:51:13'),
(5, 'Muhammad Faris', 'linklur09@gmail.com', NULL, '$2y$12$BgbIQSlL/uhiroQ.ra7.oufe2jsLPNaO/IVJnWPac28G9V1o9BIIa', NULL, 'admin', '', 1, NULL, NULL, NULL, '2024-05-29 18:54:14', '2024-06-04 09:55:56'),
(6, 'maman', 'maman@gmail.com', NULL, '$2y$12$4251diSYRidw45D.bhtMg.N5I94MlY5UFR/hOWkcio3tSHO.ZVRea', NULL, 'admin', '', 1, NULL, NULL, NULL, '2024-05-30 06:34:02', '2024-06-02 00:40:41'),
(7, 'ais', 'ais@gmail.com', NULL, '$2y$12$8/ZsNLS8ykX7h/SImpgsMerzAb6riwllGpAxZEr76NG3GvQvgpGNC', NULL, 'admin', 'foto-6676e901b2838bitlab.jpg', 1, NULL, NULL, NULL, '2024-06-01 03:34:12', '2024-06-22 08:08:49'),
(8, 'abu', 'abu@gmail.com', NULL, '$2y$12$r9f8LnKZ8SrzueQYRU2EROkGW1D.sHUci6OFh5yzaiEpIQcAyTWPe', NULL, 'staff', NULL, 1, NULL, NULL, NULL, '2024-06-02 01:18:21', '2024-06-02 01:20:55'),
(10, 'halo', 'halo@gmail.com', NULL, '$2y$12$s.HodpPCee6KR6TRwi/LkeOwNlOOBqRx4oyzJoJsQbiPgVhgWQmei', NULL, 'pelanggan', NULL, 0, NULL, NULL, NULL, '2024-06-04 10:00:20', '2024-06-04 10:00:20'),
(11, 'Muhammad Azrul Mustafa', 'admin@example.com', NULL, '$2y$12$ARzahpBkhreOt0IhCAfu4uCfl0neKeBa.oaurCxz4/Ix8/CB7/6ya', NULL, 'pelanggan', NULL, 1, NULL, NULL, NULL, '2024-06-09 08:48:22', '2024-06-11 07:18:16'),
(12, 'zulkarnaen', 'pelanggan@example.com', NULL, '$2y$12$YHhGDbu/3NPYEdnGU8jM6.I9s1bnbcDITmPfujzBQBksg17QuBRyG', NULL, 'pelanggan', NULL, 1, 'zulkaranene yaya', '082214528751', 'JL. BUKIT DATUK LAMA GG. AT - TAUBAH KEL. BUKIT DATUK', '2024-06-11 07:17:44', '2024-06-22 20:43:54'),
(13, 'Muhammad Azrul Mustafa', 'mazrulmustafa123@gmail.com', NULL, '$2y$12$L3lowPRRao23lOB1/kekwuvL0eaZQ2bYzWuG907i7zZiV0vPb44gS', NULL, 'pelanggan', NULL, 0, NULL, NULL, NULL, '2024-06-22 19:50:05', '2024-06-22 19:50:05'),
(14, 'Muhammad Azrul Mustafa', 'azrul4096@gmail.com', NULL, '$2y$12$L3OjERSoOvAHUK3XMD9is.0ZZ6Wdn0HzHig5K0neTdu3gZ3D.tk62', NULL, 'pelanggan', NULL, 0, NULL, NULL, NULL, '2024-06-23 03:40:15', '2024-06-23 03:40:15'),
(15, 'zul', 'unidum@example.com', NULL, '$2y$12$uLiwGcMAhKNnzkM5Ym0O5.6PPd85nDXYeMAU.z6BkqklDjrFd.aCC', NULL, 'pelanggan', NULL, 1, NULL, NULL, NULL, '2024-06-23 03:41:09', '2024-06-23 03:41:53');

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
