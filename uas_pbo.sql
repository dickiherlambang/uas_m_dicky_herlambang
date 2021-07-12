-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 10.16
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_12_045446_create_sysusers_table', 1),
(2, '2021_06_12_143735_create_sysmenus_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sysmenus`
--

CREATE TABLE `sysmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namamenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sysmenu_id` int(11) NOT NULL,
  `linkmenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sysmenus`
--

INSERT INTO `sysmenus` (`id`, `namamenu`, `sysmenu_id`, `linkmenu`, `created_at`, `updated_at`) VALUES
(1, 'Home', 0, '#', '2021-07-12 07:35:37', '2021-07-12 07:35:37'),
(2, 'Administrasi', 0, '#', '2021-07-12 07:35:37', '2021-07-12 07:35:37'),
(3, 'User Administrasi', 2, 'user', '2021-07-12 07:38:49', '2021-07-12 07:38:49'),
(4, 'Master', 0, '#', '2021-07-12 07:37:02', '2021-07-12 07:37:02'),
(5, 'Mahasiswa', 4, 'mahasiswa', '2021-07-12 07:37:59', '2021-07-12 07:37:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sysusers`
--

CREATE TABLE `sysusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sysusers`
--

INSERT INTO `sysusers` (`id`, `uname`, `namalengkap`, `email`, `upass`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', 'admin@pbo3.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', NULL, NULL),
(2, 'dicky', 'Dicky', 'dicky@email.com', 'password', '2021-07-12 00:52:43', '2021-07-12 01:09:29'),
(3, 'coba', 'Coba', 'coba@email.com', '$2y$10$toac2ViMqK7BVjNmYuriM.F8P8k00Pl9CqtTP3/N8fSoP5m3OIasS', '2021-07-12 01:11:08', '2021-07-12 01:11:08'),
(5, 'coba2', 'coba 2', 'coba2@email.com', '$2y$10$xd1IKetBpQX4I79IIr2m1uhqwZg6uoJihDC7nwISOrJfmlYGY57km', '2021-07-12 01:12:35', '2021-07-12 01:12:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sysmenus`
--
ALTER TABLE `sysmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sysusers`
--
ALTER TABLE `sysusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sysusers_uname_unique` (`uname`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sysmenus`
--
ALTER TABLE `sysmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sysusers`
--
ALTER TABLE `sysusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
