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

 Date: 10/08/2024 16:24:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cabang
-- ----------------------------
DROP TABLE IF EXISTS `cabang`;
CREATE TABLE `cabang`  (
  `kode_cabang` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi_cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `radius_cabang` int(255) NOT NULL,
  PRIMARY KEY (`kode_cabang`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cabang
-- ----------------------------
INSERT INTO `cabang` VALUES ('JKT', 'JAKARTA', '-8.59251035890902,116.0973841', 20);
INSERT INTO `cabang` VALUES ('MTR', 'Mataram', '-8.592313731512958,116.09724612297573', 30);

-- ----------------------------
-- Table structure for departemen
-- ----------------------------
DROP TABLE IF EXISTS `departemen`;
CREATE TABLE `departemen`  (
  `kode_dept` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_dept` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_dept`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departemen
-- ----------------------------
INSERT INTO `departemen` VALUES ('GAF', 'General Affair Edit');
INSERT INTO `departemen` VALUES ('HRD', 'Human Resource Development');
INSERT INTO `departemen` VALUES ('IT', 'Information Technology');
INSERT INTO `departemen` VALUES ('KEU', 'Keuangan');
INSERT INTO `departemen` VALUES ('MKT', 'Marketing');

-- ----------------------------
-- Table structure for jam_kerja
-- ----------------------------
DROP TABLE IF EXISTS `jam_kerja`;
CREATE TABLE `jam_kerja`  (
  `kode_jam_kerja` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_jam_kerja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `awal_jam_masuk` time(0) NULL DEFAULT NULL,
  `jam_masuk` time(0) NULL DEFAULT NULL,
  `akhir_jam_masuk` time(0) NULL DEFAULT NULL,
  `jam_pulang` time(0) NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jam_kerja`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jam_kerja
-- ----------------------------
INSERT INTO `jam_kerja` VALUES ('MTR01', 'NON SHIFT', '10:00:00', '11:00:00', '12:00:00', '16:00:00');
INSERT INTO `jam_kerja` VALUES ('MTR02', 'NON SHIFT SABTU', '07:00:00', '08:00:00', '09:00:00', '13:00:00');

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `nik` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_dept` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nik`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('12311', 'Roody', 'Staff Marketing', '098123', '$2y$10$d6O0Vf.r2jgr8RnzTsAATe47KtM3cyPEmEOIcI.nOMtALyMfEma82', NULL, NULL, 'MKT', 'MTR');
INSERT INTO `karyawan` VALUES ('12345', 'Eko Rizkianto Mamat', 'Head Of IT', '087865249079', '$2y$10$d6O0Vf.r2jgr8RnzTsAATe47KtM3cyPEmEOIcI.nOMtALyMfEma82', NULL, '12345.jpeg', 'IT', 'JKT');
INSERT INTO `karyawan` VALUES ('12346', 'Wahyudianto', 'HRD Manager', '087865249072', '$2y$10$d6O0Vf.r2jgr8RnzTsAATe47KtM3cyPEmEOIcI.nOMtALyMfEma82', NULL, NULL, 'HRD', 'JKT');
INSERT INTO `karyawan` VALUES ('12347', 'Memet', 'Accounting', '087865249072', '$2y$10$d6O0Vf.r2jgr8RnzTsAATe47KtM3cyPEmEOIcI.nOMtALyMfEma82', NULL, '12347.jpeg', 'KEU', 'JKT');
INSERT INTO `karyawan` VALUES ('1991', 'M.Ilyas', 'Pelaksana', '087865349072', '$2y$10$d6O0Vf.r2jgr8RnzTsAATe47KtM3cyPEmEOIcI.nOMtALyMfEma82', NULL, '19973654321.jpeg', 'IT', 'MTR');
INSERT INTO `karyawan` VALUES ('23-01', 'Atep', 'Security', '0821448745039', '$2y$10$XVfP6SKXsc1WGmkrYt.A9.wx3aT4Q4O.EvTqfEaKNeLZI8xkG.k3G', NULL, '23-01.jpeg', 'HRD', 'JKT');

-- ----------------------------
-- Table structure for kendaraan
-- ----------------------------
DROP TABLE IF EXISTS `kendaraan`;
CREATE TABLE `kendaraan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` enum('motor','mobil') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`plat_kendaraan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kendaraan
-- ----------------------------
INSERT INTO `kendaraan` VALUES (1, 'Vario 150 CC', 'KWK-NTB-01', 'DR 1234 XX', 'motor', 'KWK-NTB-01.jpg', NULL, '2024-08-02 10:42:40', '2024-08-02 16:02:00');
INSERT INTO `kendaraan` VALUES (10, 'Avanza All New', 'KWK-NTB-05', 'DR 1238 XX', 'mobil', 'KWK-NTB-05.jpeg', NULL, '2024-08-02 11:03:46', '2024-08-02 15:43:21');
INSERT INTO `kendaraan` VALUES (13, 'Expander Black New 2024', 'KWK-NTB-07', 'B 2841 UZN', 'mobil', 'KWK-NTB-07.jpeg', NULL, '2024-08-04 14:01:10', '2024-08-04 14:01:39');

-- ----------------------------
-- Table structure for konfigurasi_jamkerja
-- ----------------------------
DROP TABLE IF EXISTS `konfigurasi_jamkerja`;
CREATE TABLE `konfigurasi_jamkerja`  (
  `nik` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hari` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_jam_kerja` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konfigurasi_jamkerja
-- ----------------------------
INSERT INTO `konfigurasi_jamkerja` VALUES ('1991', 'Senin', 'MTR01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('1991', 'Selasa', 'REGS1');
INSERT INTO `konfigurasi_jamkerja` VALUES ('1991', 'Rabu', 'MTR02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('1991', 'Kamis', 'REGS1');
INSERT INTO `konfigurasi_jamkerja` VALUES ('1991', 'Jumat', 'MTR02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('1991', 'Sabtu', 'REGS1');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12345', 'Senin', 'MTR01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12345', 'Selasa', 'MTR01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12345', 'Rabu', 'MTR01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12345', 'Kamis', 'MTR01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12345', 'Jumat', 'MTR01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12345', 'Sabtu', 'MTR01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12346', 'Senin', 'MTR02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12346', 'Selasa', 'MTR02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12346', 'Rabu', 'MTR02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12346', 'Kamis', 'MTR02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12346', 'Jumat', 'MTR02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('12346', 'Sabtu', 'MTR02');

-- ----------------------------
-- Table structure for konfigurasi_lokasi
-- ----------------------------
DROP TABLE IF EXISTS `konfigurasi_lokasi`;
CREATE TABLE `konfigurasi_lokasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi_kantor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `radius` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konfigurasi_lokasi
-- ----------------------------
INSERT INTO `konfigurasi_lokasi` VALUES (1, '-8.592431342684229,116.09737843303738', '30');

-- ----------------------------
-- Table structure for pengajuan_izin
-- ----------------------------
DROP TABLE IF EXISTS `pengajuan_izin`;
CREATE TABLE `pengajuan_izin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_izin` date NULL DEFAULT NULL,
  `status` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT 'i:izin s:sakit',
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_approved` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0' COMMENT '0:Pending 1:Disetujui 2:Ditolak',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengajuan_izin
-- ----------------------------
INSERT INTO `pengajuan_izin` VALUES (4, '12345', '2024-01-24', 'i', 'Jenguk Saudara Sakit', '0');
INSERT INTO `pengajuan_izin` VALUES (5, '12345', '2024-01-24', 's', 'Sakit Tipes', '0');
INSERT INTO `pengajuan_izin` VALUES (6, '12345', '2024-01-24', 'i', 'Mau pulkam', '0');
INSERT INTO `pengajuan_izin` VALUES (7, '12346', '2024-02-14', 'i', 'Ke acara nikahan saudara', '1');
INSERT INTO `pengajuan_izin` VALUES (8, '12346', '2024-02-13', 's', 'Batuk', '2');

-- ----------------------------
-- Table structure for pinjam_kendaraan
-- ----------------------------
DROP TABLE IF EXISTS `pinjam_kendaraan`;
CREATE TABLE `pinjam_kendaraan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perihal_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_booking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mulai_tgl` date NULL DEFAULT NULL,
  `sampai_tgl` date NULL DEFAULT NULL,
  `penanggungjawab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_subbid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `datadukung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('Pengajuan Pinjaman','Disetujui','Ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 149 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pinjam_kendaraan
-- ----------------------------
INSERT INTO `pinjam_kendaraan` VALUES (145, 'Hic quam sit ipsum', 'KWNTB03202408101048060001', '2024-08-02', '2024-08-03', 'Non vel aspernatur d', 'KW-NTB-03', 'KWK-NTB-01', '\"1. Permenkumham Nomor 65 Tahun 201610-48-06.pdf\"', 'Ditolak', 'In molestiae delectu', '2024-08-10', '2024-08-10');
INSERT INTO `pinjam_kendaraan` VALUES (147, 'Quod ipsum dolores', 'KWNTB01202408101115270003', '2024-08-02', '2024-08-03', 'Pariatur Aut quis q', 'KW-NTB-01', 'KWK-NTB-01', '\"2. Permenkumham M.HH-04.IN.04.02 Tahun 201111-15-27.pdf\"', 'Pengajuan Pinjaman', 'Nam aut aut quasi as', '2024-08-10', '2024-08-10');
INSERT INTO `pinjam_kendaraan` VALUES (148, 'Velit sint consequa', 'KWNTB01202408101116080003', '2024-08-02', '2024-08-03', 'Qui quia duis possim', 'KW-NTB-01', 'KWK-NTB-01', '\"1. Permenkumham 57 tahun 2016 tentang pengelolaan11-16-09.pdf\"', 'Ditolak', 'Excepteur sit elit', '2024-08-10', '2024-08-10');

-- ----------------------------
-- Table structure for pinjam_ruangan
-- ----------------------------
DROP TABLE IF EXISTS `pinjam_ruangan`;
CREATE TABLE `pinjam_ruangan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perihal_pinjaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_booking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mulai_tgl` date NULL DEFAULT NULL,
  `sampai_tgl` date NULL DEFAULT NULL,
  `penanggungjawab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_subbid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_ruangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `datadukung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` enum('Pengajuan Pinjaman','Disetujui','Ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` date NULL DEFAULT NULL,
  `updated_at` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 127 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pinjam_ruangan
-- ----------------------------
INSERT INTO `pinjam_ruangan` VALUES (125, 'Elit enim modi volu', 'KWNTB04202408101051180001', '2024-08-02', '2024-08-03', 'Duis labore fugiat', 'KW-NTB-04', 'KWR-NTB-01', '\"2 Juknis-SAIBA-versi-19.0.010-51-18.pdf\"', 'Pengajuan Pinjaman', 'Aliquid et dolore ea', '2024-08-10', '2024-08-10');
INSERT INTO `pinjam_ruangan` VALUES (126, 'In iste officia omni', 'KWNTB02202408101052200003', '2024-08-09', '2024-08-10', 'Voluptatibus volupta', 'KW-NTB-02', 'KWR-NTB-01', '\"1. Permenkumham 57 tahun 2016 tentang pengelolaan10-52-20.pdf\"', 'Pengajuan Pinjaman', 'Culpa laboris repell', '2024-08-10', '2024-08-10');

-- ----------------------------
-- Table structure for pivot_pinjamkendaraan
-- ----------------------------
DROP TABLE IF EXISTS `pivot_pinjamkendaraan`;
CREATE TABLE `pivot_pinjamkendaraan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kendaraan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_pinjam` date NULL DEFAULT NULL,
  `kode_booking` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 133 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pivot_pinjamkendaraan
-- ----------------------------
INSERT INTO `pivot_pinjamkendaraan` VALUES (131, 'KWK-NTB-01', '2024-08-02', 'KWNTB01202408101115270003');
INSERT INTO `pivot_pinjamkendaraan` VALUES (132, 'KWK-NTB-01', '2024-08-03', 'KWNTB01202408101115270003');

-- ----------------------------
-- Table structure for pivot_pinjamruangan
-- ----------------------------
DROP TABLE IF EXISTS `pivot_pinjamruangan`;
CREATE TABLE `pivot_pinjamruangan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_ruangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_pinjam` date NULL DEFAULT NULL,
  `kode_booking` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pivot_pinjamruangan
-- ----------------------------
INSERT INTO `pivot_pinjamruangan` VALUES (35, 'KWR-NTB-01', '2024-08-02', 'KWNTB04202408101051180001');
INSERT INTO `pivot_pinjamruangan` VALUES (36, 'KWR-NTB-01', '2024-08-03', 'KWNTB04202408101051180001');
INSERT INTO `pivot_pinjamruangan` VALUES (37, 'KWR-NTB-01', '2024-08-09', 'KWNTB02202408101052200003');
INSERT INTO `pivot_pinjamruangan` VALUES (38, 'KWR-NTB-01', '2024-08-10', 'KWNTB02202408101052200003');

-- ----------------------------
-- Table structure for presensi
-- ----------------------------
DROP TABLE IF EXISTS `presensi`;
CREATE TABLE `presensi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_presensi` date NULL DEFAULT NULL,
  `jam_in` time(0) NULL DEFAULT NULL,
  `jam_out` time(0) NULL DEFAULT NULL,
  `foto_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lokasi_in` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lokasi_out` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kode_jam_kerja` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of presensi
-- ----------------------------
INSERT INTO `presensi` VALUES (56, '12345', '2024-07-19', '11:30:33', NULL, '12345-2024-07-17-in.png', NULL, '-8.5924487 , 116.0973969', NULL, 'MTR01');
INSERT INTO `presensi` VALUES (57, '12346', '2024-07-19', '07:38:07', NULL, '12346-2024-07-18-in.png', NULL, '-8.5924481 , 116.0973988', NULL, 'MTR02');

-- ----------------------------
-- Table structure for ruangan
-- ----------------------------
DROP TABLE IF EXISTS `ruangan`;
CREATE TABLE `ruangan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_ruangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ruangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_ruangan` enum('ruang_rapat','aula_kantor') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ruangan
-- ----------------------------
INSERT INTO `ruangan` VALUES (1, 'Legal Drafter', 'KWR-NTB-01', 'ruang_rapat', 'KWR-NTB-01.jpeg', NULL, '2024-07-26 08:50:08', '2024-08-05 11:55:04');
INSERT INTO `ruangan` VALUES (3, 'Ruang Rapat', 'KWR-NTB-02', 'ruang_rapat', NULL, NULL, '2024-07-26 08:50:08', NULL);
INSERT INTO `ruangan` VALUES (5, 'Aula Pas', 'KWR-NTB-03', 'aula_kantor', NULL, NULL, '2024-07-26 08:50:08', NULL);
INSERT INTO `ruangan` VALUES (8, 'Aula Utama', 'KWR-NTB-04', 'aula_kantor', NULL, NULL, '2024-07-26 08:50:08', '2024-08-05 11:53:58');
INSERT INTO `ruangan` VALUES (9, 'Ruang Media Center', 'KWR-NTB-05', 'ruang_rapat', 'KWR-NTB-05.jpeg', NULL, '2024-08-05 10:47:25', NULL);
INSERT INTO `ruangan` VALUES (11, 'Tes nama ruangan', 'KWR-NTB-06', 'ruang_rapat', 'KWR-NTB-06.jpeg', NULL, '2024-08-05 14:48:24', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of salaman
-- ----------------------------
INSERT INTO `salaman` VALUES (4, 'ADMIN SALAMAN', 'admin', 'USR-NTB-03', 'admin@gmail.com', '2024-01-23 08:05:54', '$2y$10$XQA3OWX9TLGPq5qotrK6aOz4ZBvBPsUFuiQEy9ooG9JYDeCkEeqQq', NULL, '2024-02-23 15:56:48', '2024-08-08 10:32:18', '12345678', 'superadmin', NULL, NULL, 'USR-NTB-03.png');
INSERT INTO `salaman` VALUES (53, 'johntravolta', 'panggih', 'USR-NTB-04', 'default@gmail.com', NULL, '$2y$10$QVPdN0cFXjxtkh/8dJF4SuPX.UbN6XVwADzVqjNUv7k6noT6SHPUW', NULL, '2024-08-08 15:53:45', '2024-08-08 15:56:38', '09876543210', 'rumahtangga', NULL, NULL, 'USR-NTB-04.jpeg');

-- ----------------------------
-- Table structure for subbidang
-- ----------------------------
DROP TABLE IF EXISTS `subbidang`;
CREATE TABLE `subbidang`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_subbid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_subbid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_subbid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email_subbid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of subbidang
-- ----------------------------
INSERT INTO `subbidang` VALUES (1, 'Humas', 'KW-NTB-01', 'humas@gmail.com', '2024-01-23 08:05:54', '$2y$10$V.Es3WiUs2U1xnlnOmw/lOoisLQMbRvBYTZa6eqCMKM65sznly3S.', NULL, NULL, NULL);
INSERT INTO `subbidang` VALUES (3, 'Program dan Pelaporan', 'KW-NTB-02', 'program@gmail.com', '2024-01-23 08:05:54', '$2y$10$V.Es3WiUs2U1xnlnOmw/lOoisLQMbRvBYTZa6eqCMKM65sznly3S.', NULL, NULL, NULL);
INSERT INTO `subbidang` VALUES (5, 'Keuangan', 'KW-NTB-03', 'keuangan@gmail.com', '2024-01-23 08:05:54', '$2y$10$V.Es3WiUs2U1xnlnOmw/lOoisLQMbRvBYTZa6eqCMKM65sznly3S.', NULL, NULL, NULL);
INSERT INTO `subbidang` VALUES (8, 'Kepegawaian', 'KW-NTB-04', 'kepegawaian@gmail.com', '2024-01-23 08:05:54', '$2y$10$V.Es3WiUs2U1xnlnOmw/lOoisLQMbRvBYTZa6eqCMKM65sznly3S.', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Adam NBC', 'adams@gmail.com', '2024-01-23 08:05:54', '$2y$10$V.Es3WiUs2U1xnlnOmw/lOoisLQMbRvBYTZa6eqCMKM65sznly3S.', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for usersalaman
-- ----------------------------
DROP TABLE IF EXISTS `usersalaman`;
CREATE TABLE `usersalaman`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `roles` enum('rumahtangga','superadmin','kepegawaian') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `kode_satker`(`kode_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usersalaman
-- ----------------------------
INSERT INTO `usersalaman` VALUES (1, 'Administrator', 'administrator', 'USR-NTB-01', 'adamsedit@gmail.com', '2024-01-23 08:05:54', '$2y$10$6vTLfD86FJWXAYRQ8IfWQurW0Soct35cGkecNbfl85IfUcQb/bjcq', NULL, '2024-02-23 15:56:48', '2024-03-15 00:00:00', '12345678', 'superadmin', NULL);

SET FOREIGN_KEY_CHECKS = 1;
