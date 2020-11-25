-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Nov 2020 pada 19.12
-- Versi server: 10.4.13-MariaDB-log
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian_cbt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', '2020-11-04 18:54:49', '2020-11-26 18:54:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian_ujian`
--

CREATE TABLE `antrian_ujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomorujian_id` bigint(20) UNSIGNED NOT NULL,
  `antrian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_ujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_ujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `assesor`
--

CREATE TABLE `assesor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assesor_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assesor_nira` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assesor_urutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assesor_jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `banksoal`
--

CREATE TABLE `banksoal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soal_teks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_opsi1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_opsi2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_opsi3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_opsi4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_opsi5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_file1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soal_file2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soal_file3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soal_file4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soal_file5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soal_jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal_bobot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_ujian`
--

CREATE TABLE `hasil_ujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesertaujian_id` bigint(20) UNSIGNED NOT NULL,
  `jadwalujian_id` bigint(20) UNSIGNED NOT NULL,
  `banksoal_id` bigint(20) UNSIGNED NOT NULL,
  `hasil_isianjawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_tanggalmulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_waktumulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_waktuselesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_skorujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalujian`
--

CREATE TABLE `jadwalujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ujian_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ujian_jumlahsoal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ujian_tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ujian_estimasiwaktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ujian_waktumulai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ujian_waktuselesai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ujian_jenissoal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_22_143254_create_pesertas_table', 1),
(5, '2020_11_22_145118_create_admins_table', 1),
(6, '2020_11_23_161634_create_nomorujians_table', 1),
(7, '2020_11_23_161903_create_banksoals_table', 1),
(8, '2020_11_23_162528_create_jadwalujians_table', 1),
(9, '2020_11_23_163245_create_peserta_ujians_table', 1),
(10, '2020_11_23_163840_create_antrian_ujians_table', 1),
(11, '2020_11_23_164411_create_hasil_ujians_table', 1),
(12, '2020_11_23_165947_create_assesors_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomorujian`
--

CREATE TABLE `nomorujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomorujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peserta_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta_nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta_pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta_golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta_jabatan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `peserta_nama`, `peserta_nip`, `peserta_pangkat`, `peserta_golongan`, `peserta_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'SUHARYONO, S.Pd., M.Pd', '197108131998031007', 'Pembina TK.I', 'IV/B', 'Sekretaris Satuan Polisi Pamong Praja Kabupaten Buton Selatan', '2020-11-24 10:57:26', '2020-11-24 10:57:26'),
(2, 'LA ODE MUHAMMAD SUHARYONO, S.Pd', '198012172003121007', 'Pembina TK.I', 'IV/B', 'Kepala Bidang Informasi dan Komunikasi Publik Dinas Komunikasi dan Informatika Kabupaten Buton Selatan', '2020-11-24 11:01:50', '2020-11-24 11:01:50'),
(3, 'MULIADIN, S.Pd., M.Kes', '197612312003121014', 'Pembina TK.I', 'IV/B', 'Kepala Bidang Pengelolaan Data Center Dinas Komunikasi dan Informatika Kabupaten Buton Selatan', '2020-11-24 11:03:09', '2020-11-24 11:03:09'),
(4, 'KAIMUDDIN, S.Ag., SH', '194112312006041022', 'Pembina', 'IV/A', 'Camat Kadatua Kabupaten Buton Selatan', '2020-11-24 11:04:21', '2020-11-24 11:04:21'),
(5, 'LA ODE SAFII, S.Kel., M.Si', '198008152010011013', 'Pembina', 'IV/A', 'Kepala Bagian Fasilitasi Penganggaran dan Pengawasan Sekretariat DPRD Kabupaten Buton Selatan', '2020-11-24 11:05:26', '2020-11-24 11:05:26'),
(6, 'JAUDIN, S.Pd', '196712311997021016', 'Pembina', 'IV/A', 'Sekretaris Dinas Lingkungan Hidup Kabupaten Buton Selatan', '2020-11-24 11:06:28', '2020-11-24 11:06:28'),
(7, 'LA NILO, S.Pd', '196712311988031105', 'Pembina TK.I', 'IV/B', 'Camat Lapandewa Kabupaten Buton Selatan', '2020-11-24 11:07:21', '2020-11-24 11:07:21'),
(8, 'Drs. HARUDDIN', '196812311994121033', 'Pembina TK.I', 'IV/B', 'Camat Siompu Kabupaten Buton Selatan', '2020-11-24 11:08:10', '2020-11-24 11:08:10'),
(9, 'HASRIADY, SKM., M.Si', '197101062003121006', 'Pembina', 'IV/A', 'Kepala Bagian Kesejahteraan Rakyat Setda Kabupaten Buton Selatan', '2020-11-24 11:09:27', '2020-11-24 11:09:27'),
(10, 'EKO PRASETYO, S.STP., M.Kesos', '198210252002121001', 'Pembina', 'IV/A', 'Kepala Bagian Administrasi Pembangunan Setda Kabupaten Buton Selatan', '2020-11-24 11:10:41', '2020-11-24 11:10:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_ujian`
--

CREATE TABLE `peserta_ujian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomorujian_id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `antrian_ujian`
--
ALTER TABLE `antrian_ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `antrian_ujian_nomorujian_id_foreign` (`nomorujian_id`);

--
-- Indeks untuk tabel `assesor`
--
ALTER TABLE `assesor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banksoal`
--
ALTER TABLE `banksoal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_ujian`
--
ALTER TABLE `hasil_ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_ujian_pesertaujian_id_foreign` (`pesertaujian_id`),
  ADD KEY `hasil_ujian_jadwalujian_id_foreign` (`jadwalujian_id`),
  ADD KEY `hasil_ujian_banksoal_id_foreign` (`banksoal_id`);

--
-- Indeks untuk tabel `jadwalujian`
--
ALTER TABLE `jadwalujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nomorujian`
--
ALTER TABLE `nomorujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta_ujian`
--
ALTER TABLE `peserta_ujian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peserta_ujian_nomorujian_id_foreign` (`nomorujian_id`),
  ADD KEY `peserta_ujian_peserta_id_foreign` (`peserta_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `antrian_ujian`
--
ALTER TABLE `antrian_ujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `assesor`
--
ALTER TABLE `assesor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `banksoal`
--
ALTER TABLE `banksoal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_ujian`
--
ALTER TABLE `hasil_ujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwalujian`
--
ALTER TABLE `jadwalujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `nomorujian`
--
ALTER TABLE `nomorujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peserta_ujian`
--
ALTER TABLE `peserta_ujian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `antrian_ujian`
--
ALTER TABLE `antrian_ujian`
  ADD CONSTRAINT `antrian_ujian_nomorujian_id_foreign` FOREIGN KEY (`nomorujian_id`) REFERENCES `nomorujian` (`id`);

--
-- Ketidakleluasaan untuk tabel `hasil_ujian`
--
ALTER TABLE `hasil_ujian`
  ADD CONSTRAINT `hasil_ujian_banksoal_id_foreign` FOREIGN KEY (`banksoal_id`) REFERENCES `banksoal` (`id`),
  ADD CONSTRAINT `hasil_ujian_jadwalujian_id_foreign` FOREIGN KEY (`jadwalujian_id`) REFERENCES `jadwalujian` (`id`),
  ADD CONSTRAINT `hasil_ujian_pesertaujian_id_foreign` FOREIGN KEY (`pesertaujian_id`) REFERENCES `peserta_ujian` (`id`);

--
-- Ketidakleluasaan untuk tabel `peserta_ujian`
--
ALTER TABLE `peserta_ujian`
  ADD CONSTRAINT `peserta_ujian_nomorujian_id_foreign` FOREIGN KEY (`nomorujian_id`) REFERENCES `nomorujian` (`id`),
  ADD CONSTRAINT `peserta_ujian_peserta_id_foreign` FOREIGN KEY (`peserta_id`) REFERENCES `peserta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
