/*
 Navicat MySQL Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80031 (8.0.31)
 Source Host           : 127.0.0.1:3306
 Source Schema         : rad_toys

 Target Server Type    : MySQL
 Target Server Version : 80031 (8.0.31)
 File Encoding         : 65001

 Date: 05/12/2022 09:01:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for kategoris
-- ----------------------------
DROP TABLE IF EXISTS `kategoris`;
CREATE TABLE `kategoris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kategoris
-- ----------------------------
BEGIN;
INSERT INTO `kategoris` (`id`, `kode_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES (1, 'KR-2022-001', 'mobil', '2022-09-10 07:56:22', '2022-09-10 07:56:22');
INSERT INTO `kategoris` (`id`, `kode_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES (2, 'KR-2022-002', 'sepeda', '2022-09-10 07:56:34', '2022-09-10 07:56:34');
INSERT INTO `kategoris` (`id`, `kode_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES (3, 'KR-2022-003', 'lain - lain', '2022-09-10 07:57:53', '2022-09-10 07:57:53');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (37, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (38, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (39, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (40, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (41, '2022_08_21_120442_create_produks_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (42, '2022_08_21_122754_create_profiles_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (43, '2022_08_21_123556_create_kategoris_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (44, '2022_09_03_093034_create_stok_produks_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (49, '2022_12_04_012248_create_review_customers_table', 2);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for produks
-- ----------------------------
DROP TABLE IF EXISTS `produks`;
CREATE TABLE `produks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of produks
-- ----------------------------
BEGIN;
INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `created_at`, `updated_at`) VALUES (1, 'KP-202209-001', 'mobil aki', '2022-09-10 08:15:49', '2022-09-10 08:15:49');
INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `created_at`, `updated_at`) VALUES (2, 'KP-202209-002', 'sepeda aki', '2022-09-10 08:16:17', '2022-09-10 08:16:17');
INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `created_at`, `updated_at`) VALUES (3, 'KP-202209-003', 'stroller', '2022-09-10 08:17:58', '2022-09-10 08:17:58');
INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `created_at`, `updated_at`) VALUES (8, 'KP-202212-001', 'jeep', '2022-12-03 08:56:06', '2022-12-03 08:56:06');
INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `created_at`, `updated_at`) VALUES (9, 'KP-202212-002', 'avanza', '2022-12-03 08:56:26', '2022-12-03 08:56:26');
INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `created_at`, `updated_at`) VALUES (10, 'KP-202212-003', 'sepatu', '2022-12-03 09:00:54', '2022-12-03 09:00:54');
INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `created_at`, `updated_at`) VALUES (11, 'KP-202212-004', 'tester', '2022-12-03 10:00:10', '2022-12-03 10:00:10');
COMMIT;

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of profiles
-- ----------------------------
BEGIN;
INSERT INTO `profiles` (`id`, `alamat`, `facebook`, `instagram`, `whatsapp`, `created_at`, `updated_at`) VALUES (1, 'RT. 06, RW. 03, Dsn. Kawur, Ds. Gampingrowo, Tarik-Sidoarjo', 'https://www.facebook.com/dwialimn', 'https://www.instagram.com/dwialim27', '6281335537942', '2022-09-10 12:05:40', '2022-09-10 12:18:03');
COMMIT;

-- ----------------------------
-- Table structure for review_customers
-- ----------------------------
DROP TABLE IF EXISTS `review_customers`;
CREATE TABLE `review_customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_cust` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci,
  `pesan_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of review_customers
-- ----------------------------
BEGIN;
INSERT INTO `review_customers` (`id`, `nama`, `alamat`, `foto_cust`, `pesan`, `pesan_foto`, `nohp`, `created_at`, `updated_at`) VALUES (1, 'dwi alim', NULL, NULL, 'tester hebat', NULL, '6281335537941', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for stok_produks
-- ----------------------------
DROP TABLE IF EXISTS `stok_produks`;
CREATE TABLE `stok_produks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` bigint unsigned NOT NULL,
  `produk_id` bigint unsigned NOT NULL,
  `kode_stok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `qty_awal` int DEFAULT NULL,
  `harga` int NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of stok_produks
-- ----------------------------
BEGIN;
INSERT INTO `stok_produks` (`id`, `kategori_id`, `produk_id`, `kode_stok`, `foto`, `qty`, `qty_awal`, `harga`, `publish`, `created_at`, `updated_at`) VALUES (3, 1, 1, 'KS-202211-001', 'produk-image/dupp7AEzXvMwiXpZfPTuszSAn3uZKRhWYPTZjFEq.jpg', 5, 5, 75700, 1, '2022-11-28 08:00:14', '2022-12-05 01:59:33');
INSERT INTO `stok_produks` (`id`, `kategori_id`, `produk_id`, `kode_stok`, `foto`, `qty`, `qty_awal`, `harga`, `publish`, `created_at`, `updated_at`) VALUES (4, 2, 2, 'KS-202212-001', 'produk-image/JHGQzjGAlXlI0WLhkudbQnjOUVyiigVBt4Z6y80f.png', 3, 3, 76200, 1, '2022-12-03 08:55:43', '2022-12-05 01:59:41');
INSERT INTO `stok_produks` (`id`, `kategori_id`, `produk_id`, `kode_stok`, `foto`, `qty`, `qty_awal`, `harga`, `publish`, `created_at`, `updated_at`) VALUES (5, 1, 9, 'KS-202212-002', 'produk-image/Za4hlYtPQfPZsx1xj0ZaRT1uvhzynEcAKIsh86YG.png', 2, 2, 100000, 0, '2022-12-03 08:56:51', '2022-12-04 00:40:38');
INSERT INTO `stok_produks` (`id`, `kategori_id`, `produk_id`, `kode_stok`, `foto`, `qty`, `qty_awal`, `harga`, `publish`, `created_at`, `updated_at`) VALUES (6, 1, 8, 'KS-202212-003', NULL, 2, 2, 101000, 0, '2022-12-03 09:00:29', '2022-12-03 10:11:02');
INSERT INTO `stok_produks` (`id`, `kategori_id`, `produk_id`, `kode_stok`, `foto`, `qty`, `qty_awal`, `harga`, `publish`, `created_at`, `updated_at`) VALUES (7, 3, 10, 'KS-202212-004', NULL, 4, 4, 55000, 1, '2022-12-03 09:01:29', '2022-12-03 09:36:06');
INSERT INTO `stok_produks` (`id`, `kategori_id`, `produk_id`, `kode_stok`, `foto`, `qty`, `qty_awal`, `harga`, `publish`, `created_at`, `updated_at`) VALUES (8, 3, 3, 'KS-202212-005', NULL, 1, 1, 37500, 1, '2022-12-03 09:48:53', '2022-12-03 09:48:53');
INSERT INTO `stok_produks` (`id`, `kategori_id`, `produk_id`, `kode_stok`, `foto`, `qty`, `qty_awal`, `harga`, `publish`, `created_at`, `updated_at`) VALUES (9, 3, 11, 'KS-202212-006', 'produk-image/Ytq15NkkcdZWWAjQwQ9P7zML8QCXMQzxgSIP3QgY.png', 1, 1, 77777, 1, '2022-12-03 10:00:35', '2022-12-04 00:40:21');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$10$1VrhirWIFL100dW98/7XL.UKey1ZuIWJqjd8eifL66K591kof/xYi', NULL, '2022-11-27 04:01:06', '2022-11-27 04:09:40');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
