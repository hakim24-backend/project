/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : project

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 10/04/2024 07:06:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (2, 'Столешницы', NULL, '2024-04-08 17:39:12', '2024-04-08 17:39:12');
INSERT INTO `categories` VALUES (3, 'ЛДСП', NULL, '2024-04-09 03:43:33', '2024-04-09 03:43:33');
INSERT INTO `categories` VALUES (4, 'СТЕНОВЫЕ ПАНЕЛИ', NULL, '2024-04-09 03:43:48', '2024-04-09 03:43:48');
INSERT INTO `categories` VALUES (5, 'МЕЖКОМНАТНЫЕ ДВЕРИ', NULL, '2024-04-09 03:44:02', '2024-04-09 03:44:02');

-- ----------------------------
-- Table structure for collections
-- ----------------------------
DROP TABLE IF EXISTS `collections`;
CREATE TABLE `collections`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_category` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `collections_id_category_foreign`(`id_category` ASC) USING BTREE,
  CONSTRAINT `collections_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of collections
-- ----------------------------
INSERT INTO `collections` VALUES (1, 'Коллекция Color', 'Серия Color.jpg', 2, '2024-04-08 17:40:35', '2024-04-08 17:40:35');
INSERT INTO `collections` VALUES (2, 'Коллекция Concept', 'Серия Concept.jpg', 2, '2024-04-08 17:55:24', '2024-04-08 17:55:24');
INSERT INTO `collections` VALUES (3, 'Коллекция Fashion Sense', 'Серия Fashion Sense.jpg', 2, '2024-04-08 17:55:45', '2024-04-08 17:55:45');
INSERT INTO `collections` VALUES (4, 'WOOD', 'WOOD.jpg', 3, '2024-04-09 03:45:21', '2024-04-09 03:45:21');
INSERT INTO `collections` VALUES (5, 'Перфект', 'перфект.jpg', 4, '2024-04-09 04:12:27', '2024-04-09 04:12:27');
INSERT INTO `collections` VALUES (6, 'Классик', 'классик КИРПИЧ СВЕТЛЫЙ.jpg', 4, '2024-04-09 04:46:14', '2024-04-09 04:46:14');
INSERT INTO `collections` VALUES (7, 'Медиум', 'медиум БАТИСТА.jpg', 4, '2024-04-09 04:46:37', '2024-04-09 04:46:37');
INSERT INTO `collections` VALUES (8, 'Super Mat+', 'super mat+.jpg', 4, '2024-04-09 04:47:00', '2024-04-09 04:47:00');
INSERT INTO `collections` VALUES (9, 'Модерн', 'модерн.jpg', 4, '2024-04-09 04:47:29', '2024-04-09 04:47:29');
INSERT INTO `collections` VALUES (10, 'ARCTICA', 'ARCTICA_1_Дверной блок ЛСР_1.jpg', 5, '2024-04-09 07:43:24', '2024-04-09 07:43:24');
INSERT INTO `collections` VALUES (11, 'MONTE BIANCO', 'Monte bianco.jpg', 5, '2024-04-09 07:43:47', '2024-04-09 07:43:47');
INSERT INTO `collections` VALUES (12, 'MONTE BIANCO стекло', 'MONTE BIANCO_стекло1.jpg', 5, '2024-04-09 07:44:14', '2024-04-09 07:44:14');

-- ----------------------------
-- Table structure for descriptions
-- ----------------------------
DROP TABLE IF EXISTS `descriptions`;
CREATE TABLE `descriptions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `descriptions_id_product_foreign`(`id_product` ASC) USING BTREE,
  CONSTRAINT `descriptions_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of descriptions
-- ----------------------------
INSERT INTO `descriptions` VALUES (1, 'Столешницы', '2440 / 3050 / 4200', 1, '2024-04-08 18:09:42', '2024-04-08 18:09:42');
INSERT INTO `descriptions` VALUES (2, 'Мебельные щиты', '3050х600(1200)*4мм\r\n4200 х 600*6мм\r\n\r\n', 1, '2024-04-08 18:09:42', '2024-04-08 18:09:42');
INSERT INTO `descriptions` VALUES (3, 'Серия', 'Universal', 1, '2024-04-08 18:09:42', '2024-04-08 18:09:42');
INSERT INTO `descriptions` VALUES (4, 'Коллекция', 'color', 1, '2024-04-08 18:09:42', '2024-04-08 18:09:42');
INSERT INTO `descriptions` VALUES (5, 'Профиль', 'R26, U26, U38, R38', 1, '2024-04-08 18:09:42', '2024-04-08 18:09:42');
INSERT INTO `descriptions` VALUES (6, 'Столешницы', '3050', 2, '2024-04-08 18:14:19', '2024-04-08 18:14:19');
INSERT INTO `descriptions` VALUES (7, 'Мебельные щиты', '3050х600(1200)*4мм', 2, '2024-04-08 18:14:19', '2024-04-08 18:14:19');
INSERT INTO `descriptions` VALUES (8, 'Серия', 'Standard PRO', 2, '2024-04-08 18:14:19', '2024-04-08 18:14:19');
INSERT INTO `descriptions` VALUES (9, 'Код', '1110', 3, '2024-04-09 04:18:31', '2024-04-09 04:18:31');
INSERT INTO `descriptions` VALUES (10, 'Тексеура', 'FO', 3, '2024-04-09 04:18:31', '2024-04-09 04:18:31');
INSERT INTO `descriptions` VALUES (11, 'Коллекция', 'Wood', 3, '2024-04-09 04:18:31', '2024-04-09 04:18:31');
INSERT INTO `descriptions` VALUES (12, 'Формат', '1830*2750мм', 3, '2024-04-09 04:18:31', '2024-04-09 04:18:31');
INSERT INTO `descriptions` VALUES (13, 'Серия', 'Перфект', 4, '2024-04-09 04:28:32', '2024-04-09 04:28:32');
INSERT INTO `descriptions` VALUES (14, 'Панель', '2600 х 238 х 6 мм S=0,6188 кв.м', 4, '2024-04-09 04:28:32', '2024-04-09 04:28:32');
INSERT INTO `descriptions` VALUES (15, 'Упаковка панелей', '8 шт = 4, 9504 м2 ≈ 23,5 кг 1 паллета = 48 упак. = 237, 6192 м2 ≈ 1200 кг', 4, '2024-04-09 04:28:32', '2024-04-09 04:28:32');
INSERT INTO `descriptions` VALUES (16, 'Складные углы', '2600 х 56 х 3 мм', 4, '2024-04-09 04:28:32', '2024-04-09 04:28:32');
INSERT INTO `descriptions` VALUES (17, 'Упаковка складные углы', '1 упаковка = 40шт; 1 паллета = 2560шт', 4, '2024-04-09 04:28:32', '2024-04-09 04:28:32');
INSERT INTO `descriptions` VALUES (18, 'декор', 'белый', 5, '2024-04-09 07:46:35', '2024-04-09 07:46:35');
INSERT INTO `descriptions` VALUES (19, 'ширина, мм', '700/800', 5, '2024-04-09 07:46:35', '2024-04-09 07:46:35');
INSERT INTO `descriptions` VALUES (20, 'высота, мм', '2000', 5, '2024-04-09 07:46:35', '2024-04-09 07:46:35');
INSERT INTO `descriptions` VALUES (21, 'толщина, мм', '38', 5, '2024-04-09 07:46:35', '2024-04-09 07:46:35');
INSERT INTO `descriptions` VALUES (22, 'тип декоративного покрытия', 'polypropylene', 5, '2024-04-09 07:46:35', '2024-04-09 07:46:35');
INSERT INTO `descriptions` VALUES (23, 'конструкция полотна', 'царговые полотна', 5, '2024-04-09 07:46:35', '2024-04-09 07:46:35');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (22, '2014_10_12_100000_create_password_resets_table', 2);
INSERT INTO `migrations` VALUES (23, '2024_03_27_154222_create_categories_table', 2);
INSERT INTO `migrations` VALUES (24, '2024_03_27_154350_create_collections_table', 2);
INSERT INTO `migrations` VALUES (25, '2024_03_27_154507_create_products_table', 2);
INSERT INTO `migrations` VALUES (26, '2024_03_27_154602_create_descriptions_table', 2);
INSERT INTO `migrations` VALUES (27, '2024_04_09_104735_add_detail_filename_to_products', 3);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `id_collection` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `detail_filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `products_id_collection_foreign`(`id_collection` ASC) USING BTREE,
  CONSTRAINT `products_id_collection_foreign` FOREIGN KEY (`id_collection`) REFERENCES `collections` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Белый 10м', '10м.jpg', 1, '2024-04-08 18:09:42', '2024-04-08 18:09:42', '');
INSERT INTO `products` VALUES (2, 'Спектра 965м\r\n', '965м_2.jpg', 2, '2024-04-08 18:14:19', '2024-04-09 12:31:10', 'интерьере_716г.jpg');
INSERT INTO `products` VALUES (3, 'INTERIOR PINE', '1110_INTERION_PINE — копия.jpg', 4, '2024-04-09 04:18:31', '2024-04-09 04:18:31', '');
INSERT INTO `products` VALUES (4, 'СОСНА ВАЛЕНСИЯ', 'СОСНА ВАЛЕНСИЯ_2 (2).jpg', 5, '2024-04-09 04:28:32', '2024-04-09 04:28:32', '');
INSERT INTO `products` VALUES (5, 'ARCTICA', 'ARCTICA_1_Дверной блок ЛСР_1.jpg', 10, '2024-04-09 07:46:35', '2024-04-09 07:46:35', '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'superadmin', 'admin@gmail.com', NULL, '$2y$12$0PSuiBHjRuOh8BBNHCpmwuEWaeF.lMVB/7/BsAovlet4PUL6QGwei', NULL, '2024-03-22 18:34:54', '2024-03-22 18:34:54');

SET FOREIGN_KEY_CHECKS = 1;
