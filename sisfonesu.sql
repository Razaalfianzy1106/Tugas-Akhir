-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2024 pada 03.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfonesu`
--

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
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama_guru` varchar(120) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `created_at`, `updated_at`) VALUES
(1, '097665', 'Asep Sunandar S.Pd', NULL, '2024-02-02 05:05:01'),
(2, '13213', 'Agus M.Kom', NULL, NULL),
(202004007, '101020', 'Jajang', '2024-02-04 19:39:23', '2024-02-04 19:39:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(120) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Pengembangan Perangkat Lunak dan Gim', NULL, NULL),
(2, 'Teknik Permesinan', NULL, NULL),
(3, 'Teknik Kendaraan Ringan', '2023-12-14 00:02:59', '2023-12-14 00:02:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `id_jurusan` varchar(10) NOT NULL,
  `id_tingkat` varchar(10) NOT NULL,
  `id_guru` varchar(10) DEFAULT NULL,
  `nama_kelas` varchar(120) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `id_tingkat`, `id_guru`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', 'X PPLG 1', NULL, NULL),
(2, '1', '1', '2', 'X PPLG 2', NULL, NULL),
(3, '2', '1', NULL, 'X Mesin 1', '2023-12-14 01:56:16', '2024-02-05 01:14:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(10) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `id_tingkat` varchar(10) NOT NULL,
  `id_jurusan` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_input` time NOT NULL,
  `tanggal` date NOT NULL,
  `kehadiran` varchar(120) NOT NULL,
  `keterangan` varchar(120) DEFAULT NULL,
  `dokumen` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_siswa`, `id_kelas`, `id_tingkat`, `id_jurusan`, `id_user`, `jam_masuk`, `jam_input`, `tanggal`, `kehadiran`, `keterangan`, `dokumen`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', '2', '07:00:00', '07:12:31', '2023-12-13', 'Hadir', 'Terlambat', NULL, '2023-12-12 20:06:31', '2024-01-14 19:51:41'),
(2, '5', '1', '2', '1', '3', '07:00:00', '03:12:02', '2023-12-13', 'Hadir', '-', NULL, '2023-12-12 20:26:02', '2023-12-12 20:26:02'),
(3, '5', '1', '2', '1', '3', '07:00:00', '10:12:31', '2023-12-13', 'Hadir', 'Terlambat', NULL, '2023-12-13 15:42:31', '2023-12-13 15:42:31'),
(4, '5', '1', '2', '1', '3', '07:00:00', '10:12:02', '2023-12-13', 'Hadir', '-', NULL, '2023-12-13 15:43:02', '2023-12-13 15:43:02'),
(5, '5', '1', '2', '1', '3', '07:30:00', '05:12:32', '2023-12-14', 'Hadir', '-', NULL, '2023-12-13 22:51:32', '2023-12-13 22:51:32'),
(6, '5', '1', '2', '1', '3', '07:30:00', '05:12:45', '2023-12-14', 'Hadir', '-', NULL, '2023-12-13 22:56:45', '2023-12-13 22:56:45'),
(7, '5', '1', '2', '1', '3', '07:30:00', '05:12:17', '2023-12-14', 'Hadir', '-', NULL, '2023-12-13 22:57:17', '2023-12-13 22:57:17'),
(10, '1', '1', '1', '1', '1', '07:30:00', '03:01:15', '2024-01-15', 'Hadir', '-', NULL, '2024-01-14 20:56:15', '2024-01-14 20:56:15'),
(11, '1', '1', '1', '1', '1', '07:30:00', '03:01:56', '2024-01-15', 'Hadir', '-', NULL, '2024-01-14 20:56:56', '2024-01-14 20:56:56'),
(12, '5', '2', '1', '1', '3', '07:30:00', '04:01:47', '2024-01-15', 'Hadir', '-', NULL, '2024-01-14 21:31:47', '2024-01-14 21:31:47'),
(13, '1', '1', '1', '1', '1', '07:30:00', '10:02:23', '2024-02-02', 'Hadir', 'Terlambat', NULL, '2024-02-02 03:00:23', '2024-02-02 03:00:23'),
(14, '1', '1', '1', '1', '2', '07:30:00', '08:02:44', '2024-02-05', 'Hadir', 'Terlambat', 'Presensi/1707097486-1545111808_contoh-pdf.pdf', '2024-02-05 01:24:44', '2024-02-05 01:44:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `id_jurusan` varchar(10) NOT NULL,
  `id_tingkat` varchar(10) NOT NULL,
  `id_kelas` varchar(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(120) NOT NULL,
  `jk_siswa` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nohp_siswa` varchar(15) DEFAULT NULL,
  `email_siswa` varchar(120) NOT NULL,
  `alamat_siswa` varchar(120) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_jurusan`, `id_tingkat`, `id_kelas`, `nis`, `nama_siswa`, `jk_siswa`, `tanggal_lahir`, `nohp_siswa`, `email_siswa`, `alamat_siswa`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '202004099', 'Raza Alfianzi Sodikin', 'L', '2024-02-20', '75657655', 'raza@gmail.com', 'Jatiluhur', '2024-02-04 19:48:59', '2024-02-05 02:17:09'),
(5, '1', '1', '2', '202004001', 'Nurma', 'P', '2023-12-14', '9898989', 'nurma@gmail.com', 'asd', '2023-12-12 17:06:37', '2023-12-12 17:06:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat`
--

CREATE TABLE `tingkat` (
  `id_tingkat` int(10) NOT NULL,
  `tingkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tingkat`
--

INSERT INTO `tingkat` (`id_tingkat`, `tingkatan`) VALUES
(1, '10'),
(2, '11'),
(3, '12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` varchar(10) DEFAULT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_guru`, `nis`, `name`, `email`, `email_verified_at`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'Asep Sunandar S.Pd', 'asep@gmail.com', NULL, '$2y$10$MU59l0F5b2p5aAy5Xl9Coulgs0pVb6ygbPhAhWef8k.ofQY2puCUi', 'admin', NULL, NULL, '2023-12-12 12:48:22', '2024-02-02 05:05:01'),
(2, NULL, '202004099', 'Raza Alfianzi Sodikin', 'raza@gmail.com', NULL, '$2y$10$/xYn6eynqyrccSZhl3KxZ.2fxi8CLHZcspv.8uFlMdqtPcJpyfmku', 'siswa', 'FotoProfil/1707099811-2020-08-02 09.29.jpg', NULL, '2023-12-12 12:58:16', '2024-02-05 02:23:31'),
(3, NULL, '202004001', 'Nurma', 'nurma@gmail.com', NULL, '$2y$10$d7GEdaZxKzHcp1M/qD1keOHrN4HXT4PsD9MuRSXf.0RHDOaSGCdqu', 'siswa', NULL, NULL, '2023-12-12 17:06:37', '2023-12-12 17:06:37'),
(4, '2', NULL, 'Agus M.Kom', 'agus@gmail.com', NULL, '$2y$10$MU59l0F5b2p5aAy5Xl9Coulgs0pVb6ygbPhAhWef8k.ofQY2puCUi', 'guru', NULL, NULL, NULL, NULL),
(10, '202004007', NULL, 'Jajang', 'jajang@gmail.com', NULL, '$2y$10$kJd1LPGW/0TcVjwzqKf4q.g28qtYLZ1od9MBJrqwDaOVPFXz8M6ym', 'guru', NULL, NULL, '2024-02-04 19:39:23', '2024-02-04 19:39:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`id_tingkat`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202004008;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id_tingkat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
