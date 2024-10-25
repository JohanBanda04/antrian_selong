/*
 Navicat Premium Data Transfer

 Source Server         : oke-ntb
 Source Server Type    : MySQL
 Source Server Version : 80039
 Source Host           : localhost:3306
 Source Schema         : salaman_api

 Target Server Type    : MySQL
 Target Server Version : 80039
 File Encoding         : 65001

 Date: 09/08/2024 09:29:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pinjam_kendaraan
-- ----------------------------
DROP TABLE IF EXISTS `pinjam_kendaraan`;
CREATE TABLE `pinjam_kendaraan`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `perihal_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_booking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mulai_tgl` date NULL DEFAULT NULL,
  `sampai_tgl` date NULL DEFAULT NULL,
  `penanggungjawab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_subbid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `datadukung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `status` enum('Pengajuan Pinjaman','Disetujui','Ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 137 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pinjam_kendaraan
-- ----------------------------
INSERT INTO `pinjam_kendaraan` VALUES (130, 'Elit pariatur Mini', 'KWNTB03202408011634520001', '2024-07-24', '2024-07-26', 'Ex esse in dolore co', 'KW-NTB-03', 'KWK-NTB-01', '\"1. Permenkumham Nomor 65 Tahun 201616-34-52.pdf\"', 'Pengajuan Pinjaman', 'Repudiandae nisi iur', '2024-08-01', '2024-08-06');
INSERT INTO `pinjam_kendaraan` VALUES (132, 'Accusamus voluptatem', 'KWNTB02202408051541570003', '2024-08-05', '2024-08-07', 'Tempore et commodi', 'KW-NTB-02', 'KWK-NTB-05', '\"1. Permenkumham Nomor 65 Tahun 201615-41-57.pdf\"', 'Pengajuan Pinjaman', 'Commodi do est quos', '2024-08-05', '2024-08-07');

SET FOREIGN_KEY_CHECKS = 1;
