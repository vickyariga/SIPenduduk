-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2020 pada 10.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jorong`
--

CREATE TABLE `jorong` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nagari_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jorong`
--

INSERT INTO `jorong` (`id`, `nama`, `nagari_id`, `created_at`, `updated_at`) VALUES
(1, 'Timbulun', 1, NULL, NULL),
(2, 'Padang Aro', 1, NULL, NULL),
(3, 'Sungai Landeh', 2, NULL, NULL),
(4, 'Sungai Aro', 2, NULL, NULL),
(5, 'Karang Putih', 3, NULL, NULL),
(6, 'Pasir Putih', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jorong_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pencatatan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id`, `no`, `jorong_id`, `tanggal_pencatatan`, `created_at`, `updated_at`) VALUES
(2, '1371118989890004', 6, '1998-12-01', NULL, NULL),
(5, '1234565432123456', 3, '2020-12-02', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kewarganegaraan`
--

CREATE TABLE `kewarganegaraan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kewarganegaraan`
--

INSERT INTO `kewarganegaraan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Warga Negara Indonesia', NULL, NULL),
(2, 'Warga Negara Asing', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_pendidikan`
--

CREATE TABLE `level_pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level_pendidikan`
--

INSERT INTO `level_pendidikan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Tidak sekolah', NULL, NULL),
(2, 'TK', NULL, NULL),
(3, 'SD', NULL, NULL),
(4, 'SMP', NULL, NULL),
(5, 'SMA', NULL, NULL),
(6, 'S1', NULL, NULL),
(7, 'S2', NULL, NULL),
(8, 'S3', NULL, NULL);

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
(1, '2020_12_21_123902_create_nagari_table', 1),
(2, '2020_12_21_123942_create_pekerjaan_table', 1),
(3, '2020_12_21_124011_create_level_pendidikan_table', 1),
(4, '2020_12_21_124041_create_kewarganegaraan_table', 1),
(5, '2020_12_21_124454_create_jorong_table', 2),
(6, '2020_12_21_124702_create_kartu_keluarga_table', 3),
(7, '2020_12_21_124821_create_penduduk_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nagari`
--

CREATE TABLE `nagari` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nagari`
--

INSERT INTO `nagari` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Lubuk Gadang', NULL, NULL),
(2, 'Lubuk Gadang Timur', NULL, NULL),
(3, 'Lubuk Gadang Selatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'PNS', NULL, NULL),
(2, 'Wiraswasta', NULL, NULL),
(3, 'Buruh', NULL, NULL),
(4, 'TNI/POLRI', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kartu_keluarga_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_pendidikan_id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan_id` bigint(20) UNSIGNED NOT NULL,
  `status_pernikahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan_id` bigint(20) UNSIGNED NOT NULL,
  `ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `kartu_keluarga_id`, `nama`, `nik`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `level_pendidikan_id`, `pekerjaan_id`, `status_pernikahan`, `status_keluarga`, `kewarganegaraan_id`, `ayah`, `ibu`, `created_at`, `updated_at`) VALUES
(2, 2, 'ariga e', '11234567890987654', 'padang', '2020-12-01', 'Islam', 'Laki-Laki', 4, 2, 'belum menikah', 'Ayah', 2, 'ini', 'itu', '2020-12-21 06:05:41', '2020-12-22 01:45:13'),
(13, 5, 'ariga', '122222', 'padang', '1997-08-22', 'islam', 'laki-laki', 6, 1, 'belum menikah', 'anak', 1, 'ini', 'ani', '2020-12-22 01:44:41', '2020-12-22 01:44:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jorong`
--
ALTER TABLE `jorong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jorong_nagari_id_index` (`nagari_id`);

--
-- Indeks untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kartu_keluarga_jorong_id_index` (`jorong_id`);

--
-- Indeks untuk tabel `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level_pendidikan`
--
ALTER TABLE `level_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nagari`
--
ALTER TABLE `nagari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penduduk_kartu_keluarga_id_index` (`kartu_keluarga_id`),
  ADD KEY `penduduk_level_pendidikan_id_index` (`level_pendidikan_id`),
  ADD KEY `penduduk_pekerjaan_id_index` (`pekerjaan_id`),
  ADD KEY `penduduk_kewarganegaraan_id_index` (`kewarganegaraan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jorong`
--
ALTER TABLE `jorong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kewarganegaraan`
--
ALTER TABLE `kewarganegaraan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `level_pendidikan`
--
ALTER TABLE `level_pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nagari`
--
ALTER TABLE `nagari`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jorong`
--
ALTER TABLE `jorong`
  ADD CONSTRAINT `jorong_nagari_id_foreign` FOREIGN KEY (`nagari_id`) REFERENCES `nagari` (`id`);

--
-- Ketidakleluasaan untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_jorong_id_foreign` FOREIGN KEY (`jorong_id`) REFERENCES `jorong` (`id`);

--
-- Ketidakleluasaan untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_kartu_keluarga_id_foreign` FOREIGN KEY (`kartu_keluarga_id`) REFERENCES `kartu_keluarga` (`id`),
  ADD CONSTRAINT `penduduk_kewarganegaraan_id_foreign` FOREIGN KEY (`kewarganegaraan_id`) REFERENCES `kewarganegaraan` (`id`),
  ADD CONSTRAINT `penduduk_level_pendidikan_id_foreign` FOREIGN KEY (`level_pendidikan_id`) REFERENCES `level_pendidikan` (`id`),
  ADD CONSTRAINT `penduduk_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
