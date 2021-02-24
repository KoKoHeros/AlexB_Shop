/*
 Navicat Premium Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : shop_alexb

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 25/02/2021 02:03:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  `quantity` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_written_user_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_mark` double(8, 2) NULL DEFAULT NULL,
  `price` double(8, 2) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `main_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES (1, '', 2, 1, 'Whole Fryer', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', NULL, 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-24 02:30:03', '2021-02-24 02:30:03');
INSERT INTO `carts` VALUES (2, '', 3, 1, 'Whole Fryer', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', NULL, 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-24 16:36:32', '2021-02-24 16:36:32');

-- ----------------------------
-- Table structure for checks
-- ----------------------------
DROP TABLE IF EXISTS `checks`;
CREATE TABLE `checks`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for featured_products
-- ----------------------------
DROP TABLE IF EXISTS `featured_products`;
CREATE TABLE `featured_products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_written_user_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_mark` double(8, 2) NULL DEFAULT NULL,
  `price` double(8, 2) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of featured_products
-- ----------------------------
INSERT INTO `featured_products` VALUES (1, 'C000007', NULL, NULL, NULL, 324.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/z2XsW52LJkymFQr5j21oLtCQzSV267KLWpLCuYe2.jpg', 'uploads/v5abSWtVg9S8CUWdF8lgsxHWeS0lfOl16sAz0Xw1.jpg', 'uploads/2ER1Fa0K2hEztq4j0eaLRYnyGUTaMDHGLBwybQvj.jpg', 'uploads/Y30PWWCy3rRYNiPUiqXL4ytlLgZpGCcZKPPLdOZQ.jpg', '2021-02-21 15:00:15', '2021-02-21 15:00:15');
INSERT INTO `featured_products` VALUES (2, 'C000010', NULL, NULL, NULL, 0.01, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/zJ5zhTWIMir2vH1QIJz3UZ2oHG43l4lHtkn3npvo.jpg', 'uploads/Cf7i5VlnBkqNCqpSYHcify2nI02sJFBYSIsNAshV.jpg', 'uploads/cc1owGzPclL5TYaavoQE7apGF7dHH547HIlvYOdl.jpg', 'uploads/cotGCGFsESGxvUBK3x6Gf7REHHS8fF40Sj2oezo8.jpg', '2021-02-21 15:01:17', '2021-02-21 15:01:17');
INSERT INTO `featured_products` VALUES (3, 'Luke', NULL, NULL, NULL, 435.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/8oSUDuY4lwdXSI3vYAkCDmvXxCg3nKD6rM6E2KGS.jpg', 'uploads/FLUOVgwhOvatvvXCVdinVMEJFsq2b7yM9RdhhWMC.jpg', 'uploads/mkdVnLX4zKtU3WBmQkBUU94YGAEC6TSLSGQaiWsc.jpg', 'uploads/6cDNTK4rQ1ev6lLwFEktTMDL8FyYEcOsyEyGReZ0.jpg', '2021-02-21 15:01:42', '2021-02-21 15:01:42');
INSERT INTO `featured_products` VALUES (4, 'C000010', NULL, NULL, NULL, 435.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/X2xyWEjkOYJ8eryBjdbVNCOGCHgRYEgnvJv3j0Z0.jpg', 'uploads/MO0VCNXrlZAngMn1upvX9E20lfzgpEUR7M1MmczP.jpg', 'uploads/Bg7ySkouWpMpUAagbY00HbABt6vYXMbu1D7mY53a.jpg', 'uploads/DtGbNPguHv99FFyZfXdKBxaAaZPqihhdRmI4K9o2.jpg', '2021-02-21 15:02:04', '2021-02-21 15:02:04');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_02_13_071301_create_products_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_02_15_080239_create_carts_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_02_15_094221_create_checks_table', 1);
INSERT INTO `migrations` VALUES (9, '2021_02_15_080308_create_orders_table', 2);
INSERT INTO `migrations` VALUES (10, '2021_02_21_145234_create_featured_products_table', 3);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_birthday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_written_user_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_mark` double(8, 2) NULL DEFAULT NULL,
  `price` double(8, 2) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 14:47:29', '2021-02-21 14:47:29');
INSERT INTO `orders` VALUES (2, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 15:18:14', '2021-02-21 15:18:14');
INSERT INTO `orders` VALUES (3, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 15:19:44', '2021-02-21 15:19:44');
INSERT INTO `orders` VALUES (4, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 15:20:44', '2021-02-21 15:20:44');
INSERT INTO `orders` VALUES (5, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 15:21:03', '2021-02-21 15:21:03');
INSERT INTO `orders` VALUES (6, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 15:22:35', '2021-02-21 15:22:35');
INSERT INTO `orders` VALUES (7, '', '', '', '', '', '', 4, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 15:24:35', '2021-02-21 15:24:35');
INSERT INTO `orders` VALUES (8, '', '', '', '', '', '', 4, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-21 15:27:11', '2021-02-21 15:27:11');
INSERT INTO `orders` VALUES (9, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 00:13:52', '2021-02-22 00:13:52');
INSERT INTO `orders` VALUES (10, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 00:59:07', '2021-02-22 00:59:07');
INSERT INTO `orders` VALUES (11, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 00:59:54', '2021-02-22 00:59:54');
INSERT INTO `orders` VALUES (12, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 01:00:35', '2021-02-22 01:00:35');
INSERT INTO `orders` VALUES (13, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 01:01:15', '2021-02-22 01:01:15');
INSERT INTO `orders` VALUES (14, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 01:01:45', '2021-02-22 01:01:45');
INSERT INTO `orders` VALUES (15, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 01:02:40', '2021-02-22 01:02:40');
INSERT INTO `orders` VALUES (16, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 01:03:14', '2021-02-22 01:03:14');
INSERT INTO `orders` VALUES (17, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 01:03:39', '2021-02-22 01:03:39');
INSERT INTO `orders` VALUES (18, '', '', '', '', '', '', 10, 'Whole Tenderloin', 1, NULL, NULL, NULL, 450.00, '', '', '', '', '', '', '', '2021-02-22 01:49:51', '2021-02-22 01:49:51');
INSERT INTO `orders` VALUES (19, '', '', '', '', '', '', 18, 'Rib Steak', 1, NULL, NULL, NULL, 500.00, '', '', '', '', '', '', '', '2021-02-22 12:58:23', '2021-02-22 12:58:24');
INSERT INTO `orders` VALUES (20, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:37:32', '2021-02-22 13:37:33');
INSERT INTO `orders` VALUES (21, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:38:32', '2021-02-22 13:38:33');
INSERT INTO `orders` VALUES (22, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:41:11', '2021-02-22 13:41:11');
INSERT INTO `orders` VALUES (23, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:42:31', '2021-02-22 13:42:32');
INSERT INTO `orders` VALUES (24, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:42:46', '2021-02-22 13:42:47');
INSERT INTO `orders` VALUES (25, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:43:01', '2021-02-22 13:43:01');
INSERT INTO `orders` VALUES (26, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:43:43', '2021-02-22 13:43:44');
INSERT INTO `orders` VALUES (27, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:44:43', '2021-02-22 13:44:43');
INSERT INTO `orders` VALUES (28, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:45:05', '2021-02-22 13:45:06');
INSERT INTO `orders` VALUES (29, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:46:24', '2021-02-22 13:46:25');
INSERT INTO `orders` VALUES (30, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:47:15', '2021-02-22 13:47:15');
INSERT INTO `orders` VALUES (31, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:47:32', '2021-02-22 13:47:32');
INSERT INTO `orders` VALUES (32, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:47:45', '2021-02-22 13:47:46');
INSERT INTO `orders` VALUES (33, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:48:02', '2021-02-22 13:48:03');
INSERT INTO `orders` VALUES (34, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:48:57', '2021-02-22 13:48:57');
INSERT INTO `orders` VALUES (35, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:52:00', '2021-02-22 13:52:00');
INSERT INTO `orders` VALUES (36, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:52:58', '2021-02-22 13:52:59');
INSERT INTO `orders` VALUES (37, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:56:16', '2021-02-22 13:56:17');
INSERT INTO `orders` VALUES (38, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:56:54', '2021-02-22 13:56:54');
INSERT INTO `orders` VALUES (39, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 13:59:19', '2021-02-22 13:59:19');
INSERT INTO `orders` VALUES (40, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:03:28', '2021-02-22 14:03:29');
INSERT INTO `orders` VALUES (41, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:04:11', '2021-02-22 14:04:11');
INSERT INTO `orders` VALUES (42, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:04:18', '2021-02-22 14:04:19');
INSERT INTO `orders` VALUES (43, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:05:21', '2021-02-22 14:05:21');
INSERT INTO `orders` VALUES (44, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:06:56', '2021-02-22 14:06:57');
INSERT INTO `orders` VALUES (45, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:07:25', '2021-02-22 14:07:25');
INSERT INTO `orders` VALUES (46, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:08:36', '2021-02-22 14:08:37');
INSERT INTO `orders` VALUES (47, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:15:02', '2021-02-22 14:15:03');
INSERT INTO `orders` VALUES (48, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:15:31', '2021-02-22 14:15:31');
INSERT INTO `orders` VALUES (49, '', '', '', '', '', '', 1, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-22 14:19:39', '2021-02-22 14:19:39');
INSERT INTO `orders` VALUES (50, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-23 02:00:01', '2021-02-23 02:00:01');
INSERT INTO `orders` VALUES (51, '', '', '', '', '', '', 8, 'Whole Fryer', 3, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-23 02:40:45', '2021-02-23 02:40:45');
INSERT INTO `orders` VALUES (52, '', '', '', '', '', '', 3, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-23 05:00:20', '2021-02-23 05:00:20');
INSERT INTO `orders` VALUES (53, '', '', '', '', '', '', 29, 'Rib Steak', 1, NULL, NULL, NULL, 200.00, '', '', '', '', '', '', '', '2021-02-23 05:40:54', '2021-02-23 05:40:54');
INSERT INTO `orders` VALUES (54, '', '', '', '', '', '', 29, 'Rib Steak', 1, NULL, NULL, NULL, 200.00, '', '', '', '', '', '', '', '2021-02-23 06:39:06', '2021-02-23 06:39:06');
INSERT INTO `orders` VALUES (55, '', '', '', '', '', '', 29, 'Rib Steak', 1, NULL, NULL, NULL, 200.00, '', '', '', '', '', '', '', '2021-02-23 06:40:35', '2021-02-23 06:40:35');
INSERT INTO `orders` VALUES (56, '', '', '', '', '', '', 29, 'Rib Steak', 1, NULL, NULL, NULL, 200.00, '', '', '', '', '', '', '', '2021-02-23 06:40:53', '2021-02-23 06:40:53');
INSERT INTO `orders` VALUES (57, '', '', '', '', '', '', 29, 'Rib Steak', 1, NULL, NULL, NULL, 200.00, '', '', '', '', '', '', '', '2021-02-23 06:59:46', '2021-02-23 06:59:46');
INSERT INTO `orders` VALUES (58, '', '', '', '', '', '', 6, 'Whole Fryer', 1, NULL, NULL, NULL, 350.00, '', '', '', '', '', '', '', '2021-02-23 23:25:41', '2021-02-23 23:25:42');
INSERT INTO `orders` VALUES (59, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-24 16:07:53', '2021-02-24 16:07:53');
INSERT INTO `orders` VALUES (60, '', '', '', '', '', '', 2, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-24 16:10:24', '2021-02-24 16:10:24');
INSERT INTO `orders` VALUES (61, '', '', '', '', '', '', 3, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-24 16:36:37', '2021-02-24 16:36:37');
INSERT INTO `orders` VALUES (62, '', '', '', '', '', '', 3, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-24 16:36:37', '2021-02-24 16:36:37');
INSERT INTO `orders` VALUES (63, '', '', '', '', '', '', 3, 'Whole Fryer', 1, NULL, NULL, NULL, 250.00, '', '', '', '', '', '', '', '2021-02-24 16:45:58', '2021-02-24 16:45:58');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_written_user_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `review_mark` double(8, 2) NULL DEFAULT NULL,
  `price` double(8, 2) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Whole Fryer', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (2, 'Whole Fryer', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (3, 'Whole Fryer', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (4, 'Whole Fryer', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (5, 'Whole Fryer', NULL, NULL, NULL, 350.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (6, 'Whole Fryer', NULL, NULL, NULL, 350.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (7, 'Whole Fryer', NULL, NULL, NULL, 350.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (8, 'Whole Fryer', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (9, 'Whole Fryer', NULL, NULL, NULL, 350.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/2cUmzArB9r05jxy52DbAseVT80x4gHCKsrIKK3tS.jpg', 'uploads/tjI64AJZNpJV6hY6mrpo9isc90RP04XXeDbCMqr5.jpg', 'uploads/T9nRIoLnkE1LbFIQvP6ONVy1fuwRcgkGJMhz6O28.jpg', 'uploads/mEKWsQmNbcBs0ekKHNkEGMDAXYRiybB56UV9GSL6.jpg', '2021-02-18 04:04:47', '2021-02-18 04:04:47');
INSERT INTO `products` VALUES (10, 'Whole Tenderloin', NULL, NULL, NULL, 450.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/odWWIW55DOPe1VlNLcnI8THRg9kvbKCuJBwBChPA.jpg', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (11, 'Whole Tenderloin', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (12, 'Whole Tenderloin', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (13, 'Whole Tenderloin', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (14, 'Whole Tenderloin', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (15, 'Whole Tenderloin', NULL, NULL, NULL, 300.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/i12D6eX0ls9MGv7Wo6Z1q7WAnGwoNl67ftbwaXGP.jpg', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (16, 'Whole Tenderloin', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (17, 'Whole Tenderloin', NULL, NULL, NULL, 300.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Pork', '', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', 'uploads/iDOQlkLe8wVtRCTxoNneS3w5d1c5lL5erN4WXAuL.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', 'uploads/61SzxOPNS88cEXQHrkJeBN9FGuqNkMdkErEkJzaE.jpg', '2021-02-18 04:07:44', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (18, 'Rib Steak', NULL, NULL, NULL, 500.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/WrnTBjrTygzSbgzI996OgmJsLx0047oyZVCbDmSs.jpg', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:10:33');
INSERT INTO `products` VALUES (19, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (20, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (21, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (22, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (23, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (24, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (25, 'Rib Steak', NULL, NULL, NULL, 200.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (26, 'Rib Steak', NULL, NULL, NULL, 200.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (27, 'Rib Steak', NULL, NULL, NULL, 200.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (28, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (29, 'Rib Steak', NULL, NULL, NULL, 200.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (30, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (31, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (32, 'Rib Steak', NULL, NULL, NULL, 400.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (33, 'Rib Steak', NULL, NULL, NULL, 200.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/ufxVcWJTqCUxbBf2yvDMPQJbMK1pkaho9eZn0Kj5.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (34, 'Rib Steak', NULL, NULL, NULL, 200.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lamb', '', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/dPv7qUbmf9Hp6tqlDXZGLqkBEgJQ17EDlDyXj6rn.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', 'uploads/2vW6XWfp0yyns02WNkBroMJShaPQyHQsoloqA3ns.jpg', '2021-02-18 04:10:33', '2021-02-18 04:07:44');
INSERT INTO `products` VALUES (35, 'Whole Tenderloin', NULL, NULL, NULL, 250.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/WOfM39gPo8kinx3BiwemG71te9EnWLJO6sG7PZ1U.jpg', 'uploads/AOwIWrWj4AnnWXNPzTMaWE08MynLaVG8eT7u8slF.jpg', 'uploads/MkzyjymKpE7l7SPAUe6FJ3klAGU7FetWUNOc084x.jpg', 'uploads/z1PshWAaGvzb0nOsYKaRxIHiBWvfNFkjeo0YhZbW.jpg', '2021-02-18 13:00:36', '2021-02-18 13:00:36');
INSERT INTO `products` VALUES (36, 'Luke', NULL, NULL, NULL, 240.00, 'consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Beef', '', 'uploads/qHYKu4uNWz2MRt7e7DvanZg4tUNvabARxsm4RUkn.jpg', 'uploads/a2tXP8b3EU1RCaXRJJSop046JDebhLplOYP2ZZsv.jpg', 'uploads/cBnfxux3JdCUB4Zb4Ag0nWpUuPG8cTyv1NchGWp3.jpg', 'uploads/CtYhaz74O23HxPt2kGvp1K4lbMdSLDPIbzY7kklE.jpg', '2021-02-18 15:23:26', '2021-02-18 15:23:26');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
