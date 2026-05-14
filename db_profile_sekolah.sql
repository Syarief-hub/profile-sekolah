-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2026 at 01:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.27RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_profile_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievement_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `category`, `student_name`, `level`, `achievement_year`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lolos Seleksi Kejurnas Olahraga', 'Olahraga', 'Bambang Muhammad', 'Nasional', '2025-11-23', 'achievements/fUQZJGJcDvNSQFucs8zUYVjkyX9L5oigVJM5syZg.jpg', '2026-04-14 08:41:02', '2026-04-22 06:12:31'),
(2, 'Juara 1 Basket (3x3)', 'Olahraga', 'Bambang Muhammad / Tim', 'Provinsi', '2025-12-19', 'achievements/EuHFNmIqzdjEeeZxTJ0TUrwL8HFh9ayN2LE82lhA.jpg', '2026-04-14 08:41:02', '2026-04-22 06:11:55'),
(3, 'Juara 2 TomyniCup', 'Olahraga', 'Tim Sepak Bola', 'Provinsi', '2025-05-11', 'achievements/8JzDAuiHoaOrAcaUfswasrmyGmbTrhfMMhtKyYpA.jpg', '2026-04-14 08:41:02', '2026-04-22 06:12:47'),
(4, 'Lolos PranSakaNasional', 'Akademik & Keilmuan', '4 Orang', 'Nasional', '2025-11-09', 'achievements/nWbETWBjkzGcEO6nIF13S2CAqqGOw03rGJL8qrOU.jpg', '2026-04-14 08:41:02', '2026-04-22 06:13:27'),
(5, 'Prestasi Karate Nasional', 'Olahraga', 'Anggota Karate', 'Nasional', '2025-12-01', 'achievements/cj0MDrDCxqHRJ58k1dO4gSiTTkcOudAAAza5Ncrv.jpg', '2026-04-14 08:41:02', '2026-04-22 06:12:11'),
(6, 'Anggota Paskibraka Provinsi', 'Akademik & Keilmuan', '2 Orang', 'Provinsi', '2025-08-17', 'achievements/Y5VavRMKO97Tmh3dDI79budjrfrud5rtSkQGS7nY.jpg', '2026-04-14 08:41:02', '2026-04-22 06:13:00'),
(7, 'Anggota Paskibraka Kabupaten', 'Akademik & Keilmuan', '2 Orang', 'Kabupaten / Kota', '2025-08-17', 'achievements/xuCoMkE8z2W8sEE3ETBKeNiNXNedOsEb1o6wKJXT.jpg', '2026-04-14 08:41:02', '2026-04-22 06:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `category`, `thumbnail`, `date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Pendaftaran PPDB Jalur Prestasi dan Zonasi Resmi Dibuka', 'pendaftaran-ppdb-jalur-prestasi-dan-zonasi-resmi-dibuka-1773160507', '<p>Penerimaan Peserta Didik Baru (PPDB) SMA Negeri 1 Suwawa Tahun Ajaran 2026/2027 jalur Prestasi dan Zonasi telah resmi dibuka. Proses pendaftaran akan dilaksanakan secara online melaui portal PPDB Provinsi Gorontalo mulai tanggal 10 Maret hingga 25 Maret 2026.</p><p>Calon siswa diharapkan untuk mempersiapkan berkas-berkas persyaratan seperti:</p><ul><li>Fotokopi Kartu Keluarga</li><li>Surat Keterangan Lulus / Ijazah SMP</li><li>Sertifikat Prestasi (Khusus Jalur Prestasi)</li><br></ul><p>Mari bergabung menjadi bagian dari generasi penerus bangsa yang berkualitas di SMA Negeri 1 Suwawa!</p>', 'Pengumuman', 'articles/PhGvuDdd26umpKoidvyGQmU8rbYZdr8RgWd8vchD.png', '2026-03-16', 1, '2026-03-10 08:35:07', '2026-04-22 05:44:51'),
(2, 'Tim Robotik SMAN 1 Suwawa Lolos ke Tingkat Nasional', 'tim-robotik-sman-1-suwawa-lolos-ke-tingkat-nasional-1773160508', '<p>Prestasi membanggakan kembali diraih oleh siswa-siswi SMA Negeri 1 Suwawa. Tim Ekskul Robotik <b>\"Suwawa Mechatron\"</b> berhasil meraih juara pertama dalam ajang Kompetisi Robotik Regional Sulawesi yang diselenggarakan di Makassar, akhir pekan lalu.</p><p>Kemenangan ini secara otomatis membawa mereka melaju ke kompetisi tingkat Nasional yang akan diadakan di Jakarta pada bulan Mei mendatang. Kepala Sekolah, Drs. H. Ahmad Dahlan, M.Pd, menyampaikan apresiasi dan rasa bangganya atas pencapaian para siswa.</p><blockquote>\"Ini adalah bukti nyata bahwa keterbatasan domisili bukan halangan untuk mencetak karya berstandar nasional. Semangat terus anak-anakku!\" pesannya.</blockquote>', 'Prestasi', 'articles/76Xdd1GKIV87Ee7B8YhfRo7y2791I8bwycR6TylF.png', '2026-04-06', 1, '2026-03-10 08:35:07', '2026-04-22 05:45:21'),
(3, 'Kegiatan Pesantren Kilat dan Bakti Sosial Bulan Ramadhan', 'kegiatan-pesantren-kilat-dan-bakti-sosial-bulan-ramadhan-1773160509', '<p>Dalam rangka menyambut hadirnya bulan suci Ramadhan 1447 H, OSIS SMA Negeri 1 Suwawa menyelenggarakan rangkaian kegiatan edukatif dan religius berupa <i>Pesantren Kilat (Sanlat)</i> yang berlangsung selama 3 hari di lingkungan sekolah.</p><br><p>Kegiatan ini ditutup dengan acara puncak berupa Bakti Sosial berupa pembagian paket sembako ke panti asuhan dan warga sekitar wilayah kecamatan Suwawa. Kegiatan ini bertujuan memupuk rasa kepedulian sosial, keimanan, dan ketaqwaan para siswa dalam memanfaatkan momentum bulan puasa.</p>', 'Kegiatan', 'articles/ez6Gw9KZjq1j56zXX6gfl2rwUaNKF6NL67KCQxJX.png', '2026-02-05', 1, '2026-03-10 08:35:07', '2026-04-22 05:46:13'),
(4, 'Pemilihan Ketua OSIS Masa Bakti 2026/2027 Berjalan Lancar Menggunakan e-Voting', 'pemilihan-ketua-osis-masa-bakti-20262027-berjalan-lancar-1773160510', '<p>Pesta demokrasi pelajar ala SMA Negeri 1 Suwawa sukses digelar. Pemilihan Ketua dan Wakil Ketua OSIS periode 2026/2027 kali ini memanfaatkan sistem <i>e-voting</i> guna melatih kedisiplinan dan adaptasi literasi digital para generasi Z (Gen-Z).</p><p>Berdasarkan hasil rekapitulasi surat suara digital, Pasangan Calon (Paslon) nomor urut 2, Budi Santoso dan Rina Melati keluar sebagai ketua dan wakil ketua terpilih dengan perolehan lebih dari 60% suara sah. <b>Selamat bertugas!</b> Semoga OSIS SMA Negeri 1 Suwawa semakin maju dan mampu menjadi wadah aspirasi siswa yang produktif.</p>', 'Kesiswaan', 'articles/lGhMEwML6ig2VoRKKz9Kv3y5AM0H5VQag5dXuJPA.png', '2026-05-07', 1, '2026-03-10 08:35:07', '2026-04-22 05:46:51'),
(5, 'lomba tingkat universitas', 'lomba-tingkat-universitas-1776864979', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent suscipit ligula a tempor egestas. Nunc venenatis placerat mattis. Suspendisse potenti. In hac habitasse platea dictumst. Sed porttitor risus lectus. Praesent eu nulla non enim congue interdum vitae sit amet lectus. Ut id quam sed arcu ultricies faucibus. Proin scelerisque quam et condimentum fringilla. Ut a venenatis leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean dictum dui felis, quis lobortis sapien sagittis eu. Fusce et ex molestie, placerat nisl at, mattis augue. Sed ullamcorper, elit ac mollis aliquam, eros arcu ultrices orci, ac sollicitudin risus nulla quis ipsum. Aliquam nec ex turpis. Suspendisse eu cursus lorem. Praesent in aliquet tortor.', 'kegiatan', 'articles/R42LaqbbaNNRQfXi5hivw0mrbni41s7gqdw6zVc5.png', '2026-04-22', 1, '2026-04-22 05:36:19', '2026-04-22 05:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-admin@gmail.com|127.0.0.1', 'i:1;', 1773037983),
('laravel-cache-admin@gmail.com|127.0.0.1:timer', 'i:1773037983;', 1773037983);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Pimpinan','Guru','Staf') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `type`, `position`, `nip`, `image`, `order_number`, `created_at`, `updated_at`) VALUES
(1, 'Leni Natole, M.Pd', 'Guru', 'Guru Kimia', NULL, NULL, 1, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(2, 'Dra. Mercy A. Karwur', 'Guru', 'Guru Fisika', NULL, NULL, 2, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(3, 'Sarman Ktayi, M.Pd', 'Guru', 'Guru Sosiologi', NULL, NULL, 3, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(4, 'Dra. Utjin Nento', 'Guru', 'Guru BK', NULL, NULL, 4, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(5, 'Rosna Ente, S.Pd', 'Guru', 'Guru Fisika', NULL, NULL, 5, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(6, 'Yularni Abdul, S.Pd', 'Guru', 'Guru Kimia', NULL, NULL, 6, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(7, 'Apelia Potutu, S.Pd', 'Guru', 'Guru Bahasa Inggris', NULL, NULL, 7, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(8, 'Irmiyanti S. Labadjo, S.Pd', 'Guru', 'Guru Matematika', NULL, NULL, 8, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(9, 'Dian A. Koenadji, S.Pd', 'Guru', 'Guru Seni Budaya', NULL, NULL, 9, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(10, 'Iyon Hasan, S.Pd', 'Guru', 'Guru Penjas', NULL, NULL, 10, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(11, 'Hasna Abdan, M.Pd', 'Guru', 'Guru Biologi', NULL, NULL, 11, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(12, 'Fatmawati Hadju, S.Pd', 'Guru', 'Guru Bahasa Indonesia', NULL, NULL, 12, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(13, 'Siti Ewin Yunus, S.Pd', 'Guru', 'Guru Bahasa Inggris', NULL, NULL, 13, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(14, 'Lastin Stama, S.Pd, M.Pd', 'Guru', 'Guru Bahasa Indonesia', NULL, NULL, 14, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(15, 'Syafiani Madina, M.Pd', 'Guru', 'Guru Mulok', NULL, NULL, 15, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(16, 'Wirda Hasan, S.Pd', 'Guru', 'Guru Ekonomi', NULL, NULL, 16, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(17, 'Herlin Talango, S.Pd', 'Guru', 'Guru Biologi/TIK', NULL, NULL, 17, '2026-05-03 04:56:18', '2026-05-03 04:56:18'),
(18, 'John Hendri Purba, S.Pd, MH', 'Guru', 'Guru Bahasa Indonesia', NULL, NULL, 18, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(19, 'Nurlaila Ahmad, M.Pd', 'Guru', 'Guru PPKn', NULL, NULL, 19, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(20, 'Ansyrani Juliana, S.Pd', 'Guru', 'Guru Matematika', NULL, NULL, 20, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(21, 'Syukrin Djama, SE', 'Guru', 'Guru Ekonomi', NULL, NULL, 21, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(22, 'Moh. Faisal Rachman, S.Pd Gr', 'Guru', 'Guru Geografi', NULL, NULL, 22, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(23, 'Syamsu Mayang, S.Pd Gr', 'Guru', 'Guru Matematika', NULL, NULL, 23, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(24, 'Rahmiyati Nasaru, M.Pd', 'Guru', 'Guru Kimia', NULL, NULL, 24, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(25, 'Riswan Amu, S.Pd', 'Guru', 'Guru Penjas', NULL, NULL, 25, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(26, 'Rostin Abdullah, S.Pd', 'Guru', 'Guru Geografi', NULL, NULL, 26, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(27, 'Lisa Aggraini, S.Pd', 'Guru', 'Guru Agama', NULL, NULL, 27, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(28, 'Rizkia Djafar, S.Pd', 'Guru', 'Guru Matematika', NULL, NULL, 28, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(29, 'Liawati Pakana, S.Pd', 'Guru', 'Guru PPKn', NULL, NULL, 29, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(30, 'Amir Umar, S.Pd', 'Guru', 'Guru Ekonomi', NULL, NULL, 30, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(31, 'Rinto Age, S.Pd', 'Guru', 'Guru Ekonomi', NULL, NULL, 31, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(32, 'Rahmat Fadli Amay, M.Pd', 'Guru', 'Guru Ekonomi', NULL, NULL, 32, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(33, 'Ernovia J Hatta, S.Pd', 'Guru', 'Guru PAI', NULL, NULL, 33, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(34, 'Nurmayanti M. Dehiyo, S.Pd', 'Guru', 'Guru Bahasa Indonesia', NULL, NULL, 34, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(35, 'Winda O Lamangida, M.Pd', 'Guru', 'Guru Fisika', NULL, NULL, 35, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(36, 'Alviati Usulana, S.Pd', 'Guru', 'Guru Sejarah', NULL, NULL, 36, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(37, 'Shelia Priatmi, S.Pd', 'Guru', 'Guru Geografi', NULL, NULL, 37, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(38, 'Nelviana Junus, S.Pd', 'Guru', 'Guru BK', NULL, NULL, 38, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(39, 'Faniati Wartabone, S.Pd', 'Guru', 'Guru BK', NULL, NULL, 39, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(40, 'Ansar Pakaya, S.Pd', 'Guru', 'Guru Penjas', NULL, NULL, 40, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(41, 'Siskawati Hermin, S.Pd', 'Guru', 'Guru Biologi', NULL, NULL, 41, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(42, 'Yunita Gaib', 'Staf', 'Staf Tata Usaha', NULL, NULL, 42, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(43, 'Isnawati Sawali, S.Kom', 'Staf', 'Staf Tata Usaha', NULL, NULL, 43, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(44, 'Susanti Ente, S.Pd', 'Staf', 'Staf Tata Usaha', NULL, NULL, 44, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(45, 'Sri Agustina Alamtaha, A.Md', 'Staf', 'Staf Tata Usaha', NULL, NULL, 45, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(46, 'Haira Ahmad, A.Ma.Pd', 'Staf', 'Staf Tata Usaha', NULL, NULL, 46, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(47, 'Lisa Umar', 'Staf', 'Staf Tata Usaha', NULL, NULL, 47, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(48, 'Ferawati Bakir, S.H', 'Staf', 'Staf Tata Usaha', NULL, NULL, 48, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(49, 'Gusmayun Podungga, S.AP', 'Staf', 'Staf Tata Usaha', NULL, NULL, 49, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(50, 'Delsiana Abdullah, S.Pd', 'Staf', 'Staf Tata Usaha', NULL, NULL, 50, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(51, 'Periani Gani, A.Md PT', 'Staf', 'Satpam', NULL, NULL, 51, '2026-05-03 04:56:19', '2026-05-03 04:56:19'),
(52, 'Rustam Laudji', 'Staf', 'Petugas Kebersihan', NULL, NULL, 52, '2026-05-03 04:56:19', '2026-05-03 04:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `extracurriculars`
--

CREATE TABLE `extracurriculars` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extracurriculars`
--

INSERT INTO `extracurriculars` (`id`, `name`, `category`, `schedule`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pramuka', 'Wajib', 'Selasa, Kamis (Sore: 04.00)', 'Kegiatan organisasi Pramuka di SMA Negeri 1 Suwawa.', 'extracurriculars/qW37ZwI3K9GHForS9jYMVTMabkpxWopVOzaiAD99.jpg', '2026-04-14 08:41:02', '2026-04-22 06:09:55'),
(2, 'Basket', 'Wajib', 'Setiap hari (Sore: 04.00)', 'Kegiatan organisasi Basket di SMA Negeri 1 Suwawa.', 'extracurriculars/4fqqllIW1ud3vmt7nb9GlX6u3cj7CG7SBIt1XrcA.jpg', '2026-04-14 08:41:02', '2026-04-22 06:08:36'),
(3, 'Taekwondo', 'Wajib', 'Senin, Rabu (Sore: 04.00)', 'Kegiatan organisasi Taekwondo di SMA Negeri 1 Suwawa.', 'extracurriculars/IxwUrnyttSYYPtZeDr6AX9dhwsHeeZIEXCIZMXNE.jpg', '2026-04-14 08:41:02', '2026-04-22 06:10:32'),
(4, 'Karate', 'Wajib', 'Senin, Rabu (Sore: 04.00)', 'Kegiatan organisasi Karate di SMA Negeri 1 Suwawa.', 'extracurriculars/JncQh7ZswcLU6LZ13C9F2iyUmITEFpj2cXSOl2ox.jpg', '2026-04-14 08:41:02', '2026-04-22 06:09:04'),
(5, 'Voly', 'Wajib', 'Kamis (Sore: 04.00)', 'Kegiatan organisasi Voly di SMA Negeri 1 Suwawa.', 'extracurriculars/WruqQMJGBoRlGZNEelBBcjPmNlaHo6lSZCpEZbb7.jpg', '2026-04-14 08:41:02', '2026-04-22 06:10:42'),
(6, 'Sendratasik (Tari, Drama, Musik)', 'Wajib', 'Kamis (Sore: 04.00)', 'Kegiatan organisasi Sendratasik (Tari, Drama, Musik) di SMA Negeri 1 Suwawa.', 'extracurriculars/wJbpWRyftDGZgAKMCkkrBpZCKKsh4osikxM3CjRk.jpg', '2026-04-14 08:41:02', '2026-04-22 06:10:19'),
(7, 'PIK R', 'Wajib', 'Jadwal belum ditentukan', 'Kegiatan organisasi PIK R di SMA Negeri 1 Suwawa.', 'extracurriculars/NGdqwUueEOqJgD5hG4or4Vxs0Vj4dkJocKie25zB.jpg', '2026-04-14 08:41:02', '2026-04-22 06:09:30'),
(8, 'Rohis', 'Wajib', 'Jadwal belum ditentukan', 'Kegiatan organisasi Rohis di SMA Negeri 1 Suwawa.', 'extracurriculars/Pd3BoOPPU3TWpbBHEwwOqPGyfKdxCleMfQm0o83L.jpg', '2026-04-14 08:41:02', '2026-04-22 06:10:07'),
(9, 'PMR', 'Wajib', 'Jadwal belum ditentukan', 'Kegiatan organisasi PMR di SMA Negeri 1 Suwawa.', 'extracurriculars/8QL6MzTisY1Lw8LYAPBskhCScBfjaqy2rWb835DB.jpg', '2026-04-14 08:41:02', '2026-04-22 06:09:42'),
(10, 'Paskib', 'Wajib', 'Sabtu, Minggu (Pagi: 08.00)', 'Kegiatan organisasi Paskib di SMA Negeri 1 Suwawa.', 'extracurriculars/z2LQbrxcj7vFN9fr5X2rO6CL6gixXeNAUTS4Slqa.jpg', '2026-04-14 08:41:02', '2026-04-22 06:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `event_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('photo','video') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'photo',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `url`, `description`, `event_name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'galleries/1xgLaQeM20bj0QaH71bGkCGza95Kt8FNZRHEPbh0.png', NULL, 'pemilihan ketua osis', 'photo', '2026-03-10 08:47:11', '2026-04-22 05:55:12'),
(2, 'galleries/pMa427XmDlwvr28FgUawoNmNBcjwEj0FZwVqqla9.png', NULL, 'Pesantren Kilat', 'photo', '2026-03-10 08:47:30', '2026-04-22 05:54:56'),
(3, 'galleries/2QyhhsrrC83AfgNlL9I5oI8tquuOjANTFhaXRhQR.png', NULL, 'lomba robotika', 'photo', '2026-03-10 08:47:46', '2026-04-22 05:54:42'),
(4, 'galleries/Yi6SScG5Xy6e3MwCDEnOZPwRykD1TLEQmGgqbU85.png', NULL, 'lorem ipsum', 'photo', '2026-04-22 05:55:49', '2026-04-22 05:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_09_050111_create_articles_table', 1),
(5, '2026_03_09_050111_create_galleries_table', 1),
(6, '2026_03_09_050112_create_contacts_table', 1),
(7, '2026_03_10_165452_create_settings_table', 2),
(8, '2026_04_01_063208_create_employees_table', 3),
(10, '2026_04_01_110142_create_extracurriculars_table', 4),
(11, '2026_04_01_113108_create_achievements_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Tfmqwpcv90biPQZo6U5ujtBNTgGUMOw9Q34FG7Oq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:150.0) Gecko/20100101 Firefox/150.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNWZZUXdSQ3RKSXpEZWlDQ2J2UUxwaGp4a1IzU2ZaVkR3UGU3ZjZTWSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hcnRpY2xlcyI7czo1OiJyb3V0ZSI7czoyMDoiYWRtaW4uYXJ0aWNsZXMuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1777814595);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'principal_name', 'Drs. H. Kim Seon-ho, S.Pd., M.Pd', 'text', '2026-03-10 08:56:06', '2026-04-14 08:00:50'),
(2, 'principal_title', 'Kepala Sekolah SMA N 1 Suwawa', 'text', '2026-03-10 08:56:06', '2026-04-14 08:00:50'),
(3, 'principal_heading', 'Menyongsong Masa Depan dengan Pendidikan Berkualitas', 'text', '2026-03-10 08:56:06', '2026-04-14 08:00:50'),
(4, 'principal_message', 'Assalamu\'alaikum Warahmatullahi Wabarakatuh. Puji syukur kita panjatkan kehadirat Allah SWT. SMA Negeri 1 Suwawa terus berkomitmen memberikan layanan pendidikan optimal guna mencetak generasi yang cerdas, terampil, dan berkarakter.\r\nMelalui portal resmi ini, kami berupaya menghadirkan transparansi dan kemudahan akses informasi bagi seluruh civitas akademika, orang tua, dan masyarakat luas agar sinergi pendidikan terus terjalin erat.', 'text', '2026-03-10 08:56:06', '2026-05-03 05:12:51'),
(5, 'principal_photo', 'settings/Hg8SHIYPlynyg0HNkP34r5wcC4gnnBLRXGXmEvt7.jpg', 'image', '2026-03-10 08:56:06', '2026-04-22 06:13:58'),
(6, 'hero_badge', 'Tahun Ajaran 2027/2028', 'text', '2026-03-10 09:04:25', '2026-03-10 09:08:18'),
(7, 'sejarah_content', '<p class=\"first-letter:text-6xl first-letter:font-heading first-letter:font-black first-letter:text-primary first-letter:mr-3 first-letter:float-left first-line:uppercase first-line:tracking-widest\">\n    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n</p>\n\n<p>\n    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.\n</p>\n\n<div class=\"my-10 p-6 bg-slate-50 rounded-2xl border-l-4 border-primary italic\">\n    \"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\"\n</div>\n\n<p>\n    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.\n</p>\n\n<p>\n    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\n</p>', 'text', '2026-04-15 18:20:55', '2026-04-15 18:20:55'),
(8, 'hero_image', 'settings/uyjVa8rBScQGVPYMhOHon74KqdkC4neKYpPr1nKt.jpg', 'image', '2026-04-22 06:17:10', '2026-04-22 06:17:10'),
(9, 'structure_komite_name', 'Dr. H. Ahmad Dahlan, M.Si', 'text', '2026-04-23 06:57:43', '2026-04-23 06:57:43'),
(10, 'structure_tu_name', 'Siti Aminah, S.E., M.Ak', 'text', '2026-04-23 06:57:43', '2026-04-23 06:57:43'),
(11, 'structure_waka_kurikulum_name', 'Budi Santoso, S.Pd., M.Pd', 'text', '2026-04-23 06:57:43', '2026-04-23 06:57:43'),
(12, 'structure_waka_kesiswaan_name', 'Drs. Supriyanto', 'text', '2026-04-23 06:57:43', '2026-04-23 06:57:43'),
(13, 'structure_waka_sarpras_name', 'Ir. Muhammad Yamin', 'text', '2026-04-23 06:57:43', '2026-04-23 06:57:43'),
(14, 'structure_waka_humas_name', 'Rina Wijayanti, S.Pd., M.I.Kom', 'text', '2026-04-23 06:57:43', '2026-04-23 06:57:43'),
(15, 'principal_quote', 'Bersama wujudkan SMAN 1 Suwawa HEBAT (Handal, Empati, Berprestasi, Agamis, Tangguh).', 'text', '2026-05-03 05:12:51', '2026-05-03 05:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Guru','Siswa','Alumni') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Siswa',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'Admin', 'admin@admin.com', NULL, '$2y$12$tmIYjfVlb5VMOckO34TwleaJXegnLeIKyhgl2JXDoigvfIqq8M/MS', 'CSBQFBbtFq4UI5r6QeJBdPdHpZfuycS70q7O4qVRrc2wKUXqDz93r99idz3G', '2026-03-08 21:05:50', '2026-03-08 21:05:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `extracurriculars`
--
ALTER TABLE `extracurriculars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
