/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : siparas_api

 Target Server Type    : MariaDB
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 08/08/2024 15:51:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for salaman
-- ----------------------------
DROP TABLE IF EXISTS `salaman`;
CREATE TABLE `salaman`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `roles` enum('superadmin','rumahtangga','kepegawaian') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `konfigurasi_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `konfigurasi_rekap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `kode_satker`(`kode_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of salaman
-- ----------------------------
INSERT INTO `salaman` VALUES (4, 'ADMIN SALAMAN', 'admin', 'USR-NTB-03', 'admin@gmail.com', '2024-01-23 08:05:54', '$2y$10$XQA3OWX9TLGPq5qotrK6aOz4ZBvBPsUFuiQEy9ooG9JYDeCkEeqQq', NULL, '2024-02-23 15:56:48', '2024-08-08 10:32:18', '12345678', 'superadmin', NULL, NULL, 'USR-NTB-03.png');
INSERT INTO `salaman` VALUES (48, 'Rumah Tangga', 'rumahtangga', 'USR-NTB-01', 'rumahtangga@gmail.com', '2024-01-23 08:05:54', '$2y$10$XQA3OWX9TLGPq5qotrK6aOz4ZBvBPsUFuiQEy9ooG9JYDeCkEeqQq', NULL, '2024-02-23 15:56:48', '2024-08-08 09:10:24', '12345678', 'rumahtangga', NULL, NULL, 'USR-NTB-03.png');
INSERT INTO `salaman` VALUES (49, 'john', 'john', 'USR-NTB-04', 'default@gmail.com', NULL, '$2y$10$tYrqZtmB72NL3QpJFEr7OuUw.Qc3u.TUg7iRN/.rVTO2q6eG.vY0K', NULL, '2024-08-08 12:37:34', NULL, '123456', 'superadmin', NULL, NULL, 'USR-NTB-04.jpeg');

SET FOREIGN_KEY_CHECKS = 1;
