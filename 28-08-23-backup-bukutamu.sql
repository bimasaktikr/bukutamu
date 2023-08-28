-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 05:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu6`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_type`, `created_at`, `updated_at`) VALUES
(1, 'Sosial dan Kependudukan', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(2, 'Ekonomi dan Perdagangan', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(3, 'Pertanian dan Pertambangan', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(4, 'Umum (lain-lain)', '2023-08-25 14:26:52', '2023-08-25 14:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nipnim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_job` bigint(20) UNSIGNED NOT NULL,
  `id_education` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `hp`, `name`, `gender`, `email`, `age`, `nipnim`, `institute`, `address`, `id_job`, `id_education`, `created_at`, `updated_at`) VALUES
(1, '0987654321', 'jhdsjg', 'Pria', 'a@gmail.com', '28', '09876543', 'lkjhgf', 'lkjhgfd', 3, 4, '2023-08-25 14:34:36', '2023-08-25 14:34:36'),
(2, '098653748', 'cintyaaa', 'Wanita', 'cin@gmail.com', '21', '20417284958', 'poltek', 'lowokwaru', 2, 4, '2023-08-25 14:48:49', '2023-08-25 14:48:49'),
(3, '0876545678', 'kkewiew', 'Wanita', 'cin@gmail.com', '21', '2345671', 'djfe', 'lwke', 2, 1, '2023-08-25 14:50:39', '2023-08-25 14:50:39'),
(4, '234556635', 'ytyty', 'Wanita', 'tyb@gmail.com', '21', '2356', 'pltek', 'lwowo', 2, 4, '2023-08-25 15:20:55', '2023-08-25 15:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `education_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `education_type`, `created_at`, `updated_at`) VALUES
(1, 'SMP/Dibawahnya', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(2, 'SMA', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(3, 'Diploma (D1/D2/D3)', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(4, 'Sarjana (D4/S1)', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(5, 'Magister (S2)', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(6, 'Doktor (S3)', '2023-08-25 14:26:52', '2023-08-25 14:26:52');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaction` bigint(20) UNSIGNED NOT NULL,
  `service` int(11) NOT NULL,
  `facility` int(11) NOT NULL,
  `dataqualities` int(11) NOT NULL,
  `suggestions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_type`, `created_at`, `updated_at`) VALUES
(1, 'ASN', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(2, 'Pelajar/Mahasiswa', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(3, 'Dosen/Guru', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(4, 'Peneliti', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(5, 'Umum (lain-lain)', '2023-08-25 14:26:52', '2023-08-25 14:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `media_type`, `created_at`, `updated_at`) VALUES
(1, 'WhatsApp', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(2, 'Email', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(3, 'Facebook', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(4, 'Instagram', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(5, 'Layanan PST', '2023-08-25 14:26:52', '2023-08-25 14:26:52');

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
(1, '2014_10_12_000004_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_20_040629_create_education_table', 1),
(6, '2022_07_20_042223_create_job_table', 1),
(7, '2022_07_20_054149_create_service_table', 1),
(8, '2022_07_20_060315_create_media_table', 1),
(9, '2022_07_20_063436_create_customer_table', 1),
(10, '2022_07_25_014126_create_categories_table', 1),
(11, '2022_07_25_015653_create_sub_categories_table', 1),
(12, '2022_07_26_081935_create_nama_pegawai_table', 1),
(13, '2022_07_26_081936_create_tujuan_kunjungans_table', 1),
(14, '2022_07_26_081937_create_purpose_table', 1),
(15, '2022_07_26_081938_create_transactions_table', 1),
(16, '2022_07_30_081933_create_feedback_table', 1),
(17, '2022_08_03_204932_delete_column_at_transactions_table', 1),
(18, '2023_01_31_225515_create_visitors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nama_pegawai`
--

CREATE TABLE `nama_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namapegawai_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nama_pegawai`
--

INSERT INTO `nama_pegawai` (`id`, `namapegawai_type`, `created_at`, `updated_at`) VALUES
(1, 'Anggi Fatwa Mauliza, A.Md.Kb.N.', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(2, 'Baqtiar Arifin', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(3, 'Bima Sakti Krisdianto, SST', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(4, 'Christiayu Natalia, SST', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(5, 'Eka Prahara Resbiyanti, A.Md', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(6, 'Erny Fatma Setyoharini, SE, MM', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(7, 'Heru Kartiko, S.ST', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(8, 'Ir. Agustina Martha, MM', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(9, 'Ir. Dwi Handayani Prasetyawati, M.AP', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(10, 'Ir. Ernawaty, MM', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(11, 'Ir. Lies Alfiah', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(12, 'Ir. Rahmi Veronika', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(13, 'Ir. Wahyu Furqan', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(14, 'Rachmad Widi Wijayanto', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(15, 'Ratri Adhipradani Ratih, S.Si', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(16, 'Rendra Anandhika', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(17, 'Rhyke Chrisdiana Novita, SE', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(18, 'Rizky Maulidya, SST', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(19, 'Rony Mugiartono', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(20, 'Saras Wati Utami, S.Si, M.E', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(21, 'Saruni Gincahyo, SE', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(22, 'Satria Candra Wibawa, A.Md', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(23, 'Siti Barokatum Solihah, SST', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(24, 'Soekesi Irawati, S.Psi, MM', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(25, 'Tasmilah, SST', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(26, 'Windi Wijayanti, S. Si, M.E', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(27, 'Yusuf Fatoni, SE', '2023-08-25 14:26:53', '2023-08-25 14:26:53');

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
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purpose_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`id`, `purpose_type`, `created_at`, `updated_at`) VALUES
(1, 'Skripsi', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(2, 'Tesis', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(3, 'Disertasi', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(4, 'Penelitian', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(5, 'Umum (lain-lain)', '2023-08-25 14:26:52', '2023-08-25 14:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_type`, `created_at`, `updated_at`) VALUES
(1, 'Kunjungan', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(2, 'Permintaan Data', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(3, 'Konsultasi Data', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(4, 'Rekomendasi Data Sektoral', '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(5, 'Umum (lain-lain)', '2023-08-25 14:26:52', '2023-08-25 14:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_categories_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categories` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sub_categories_type`, `id_categories`, `created_at`, `updated_at`) VALUES
(1, 'Gender', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(2, 'Geografi', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(3, 'Iklim', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(4, 'Indeks Pembangunan Manusia', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(5, 'Kemiskinan dan Ketimpangan', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(6, 'Kependudukan', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(7, 'Kesehatan', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(8, 'Konsumsi dan Pengeluaran', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(9, 'Lingkungan Hidup', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(10, 'Pemerintahan', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(11, 'Pendidikan', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(12, 'Perumahan', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(13, 'Politik dan Keamanan', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(14, 'Sosial Budaya', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(15, 'Tenaga Kerja', 1, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(16, 'Ekspor dan Impor', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(17, 'Energi', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(18, 'Industri', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(19, 'Inflasi', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(20, 'Keuangan', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(21, 'Komunikasi', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(22, 'Pariwisata', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(23, 'Perdagangan', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(24, 'Produk Domestik Regional Bruto', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(25, 'Transportasi', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(26, 'Upah buruh', 2, '2023-08-25 14:26:52', '2023-08-25 14:26:52'),
(27, 'Usaha Mikro Kecil', 2, '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(28, 'Hortikultura', 3, '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(29, 'Perikanan', 3, '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(30, 'Perkebunan', 3, '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(31, 'Peternakan', 3, '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(32, 'Tanaman Pangan', 3, '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(33, 'Umum (lain-lain)', 4, '2023-08-25 14:26:53', '2023-08-25 14:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED DEFAULT NULL,
  `id_media` bigint(20) UNSIGNED DEFAULT NULL,
  `id_service` bigint(20) UNSIGNED DEFAULT NULL,
  `id_purpose` bigint(20) UNSIGNED DEFAULT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sub_categories` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tujuan_kunjungan` bigint(20) UNSIGNED DEFAULT NULL,
  `id_nama_pegawai` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_customer`, `id_media`, `id_service`, `id_purpose`, `data`, `id_sub_categories`, `id_tujuan_kunjungan`, `id_nama_pegawai`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 2, 3, 'hjdghsh', 2, NULL, NULL, 0, '2023-08-25 14:46:03', '2023-08-25 14:46:03'),
(3, 1, 2, 2, 3, 'hjdghsh', 2, NULL, NULL, 0, '2023-08-25 14:46:58', '2023-08-25 14:46:58'),
(4, 3, NULL, 1, NULL, NULL, NULL, 2, 22, 0, '2023-08-25 14:50:39', '2023-08-25 14:50:39'),
(5, 4, 5, 3, 1, 'yeay', 3, NULL, NULL, 0, '2023-08-25 15:20:55', '2023-08-25 15:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan_kunjungans`
--

CREATE TABLE `tujuan_kunjungans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuankunjungan_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tujuan_kunjungans`
--

INSERT INTO `tujuan_kunjungans` (`id`, `tujuankunjungan_type`, `created_at`, `updated_at`) VALUES
(1, 'Studi Banding', '2023-08-25 14:26:53', '2023-08-25 14:26:53'),
(2, 'Bertemu Pegawai', '2023-08-25 14:26:53', '2023-08-25 14:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Super Admin','Admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', 'Super Admin', NULL, 'superadmin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id_job_foreign` (`id_job`),
  ADD KEY `customer_id_education_foreign` (`id_education`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_id_transaction_foreign` (`id_transaction`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_pegawai`
--
ALTER TABLE `nama_pegawai`
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
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_id_categories_foreign` (`id_categories`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_id_customer_foreign` (`id_customer`),
  ADD KEY `transactions_id_media_foreign` (`id_media`),
  ADD KEY `transactions_id_service_foreign` (`id_service`),
  ADD KEY `transactions_id_purpose_foreign` (`id_purpose`),
  ADD KEY `transactions_id_sub_categories_foreign` (`id_sub_categories`),
  ADD KEY `transactions_id_tujuan_kunjungan_foreign` (`id_tujuan_kunjungan`),
  ADD KEY `transactions_id_nama_pegawai_foreign` (`id_nama_pegawai`);

--
-- Indexes for table `tujuan_kunjungans`
--
ALTER TABLE `tujuan_kunjungans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nama_pegawai`
--
ALTER TABLE `nama_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tujuan_kunjungans`
--
ALTER TABLE `tujuan_kunjungans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_id_education_foreign` FOREIGN KEY (`id_education`) REFERENCES `education` (`id`),
  ADD CONSTRAINT `customer_id_job_foreign` FOREIGN KEY (`id_job`) REFERENCES `job` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_id_transaction_foreign` FOREIGN KEY (`id_transaction`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_id_categories_foreign` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `transactions_id_media_foreign` FOREIGN KEY (`id_media`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `transactions_id_nama_pegawai_foreign` FOREIGN KEY (`id_nama_pegawai`) REFERENCES `nama_pegawai` (`id`),
  ADD CONSTRAINT `transactions_id_purpose_foreign` FOREIGN KEY (`id_purpose`) REFERENCES `purpose` (`id`),
  ADD CONSTRAINT `transactions_id_service_foreign` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `transactions_id_sub_categories_foreign` FOREIGN KEY (`id_sub_categories`) REFERENCES `sub_categories` (`id`),
  ADD CONSTRAINT `transactions_id_tujuan_kunjungan_foreign` FOREIGN KEY (`id_tujuan_kunjungan`) REFERENCES `tujuan_kunjungans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
