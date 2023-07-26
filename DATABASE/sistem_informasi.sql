/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : sistem_informasi

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 26/07/2023 00:26:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for db_ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `db_ci_sessions`;
CREATE TABLE `db_ci_sessions`  (
  `id` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `timestamp` int UNSIGNED NOT NULL,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of db_ci_sessions
-- ----------------------------

-- ----------------------------
-- Table structure for db_master_group_piket
-- ----------------------------
DROP TABLE IF EXISTS `db_master_group_piket`;
CREATE TABLE `db_master_group_piket`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `group_piket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_pemimpin_k` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of db_master_group_piket
-- ----------------------------
INSERT INTO `db_master_group_piket` VALUES (1, 'Anggota', 'Imam', 'A', 2);
INSERT INTO `db_master_group_piket` VALUES (2, 'Anggota', 'Maulana', 'B', 2);
INSERT INTO `db_master_group_piket` VALUES (3, 'Anggota', 'Agus', 'C', 2);
INSERT INTO `db_master_group_piket` VALUES (4, 'Anggota', 'Adon', 'A', 2);
INSERT INTO `db_master_group_piket` VALUES (5, 'Anggota', 'Adi', 'B', 2);
INSERT INTO `db_master_group_piket` VALUES (6, 'Anggota', 'Zaki', 'C', 2);
INSERT INTO `db_master_group_piket` VALUES (7, 'Anggota', 'Yoga', 'A', 2);
INSERT INTO `db_master_group_piket` VALUES (8, 'Anggota', 'Budi', 'B', 2);
INSERT INTO `db_master_group_piket` VALUES (9, 'Anggota', 'Yuda', 'C', 2);

-- ----------------------------
-- Table structure for db_master_jadwal_piket
-- ----------------------------
DROP TABLE IF EXISTS `db_master_jadwal_piket`;
CREATE TABLE `db_master_jadwal_piket`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `piket` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of db_master_jadwal_piket
-- ----------------------------
INSERT INTO `db_master_jadwal_piket` VALUES (2, 'A', '2023-06-20', NULL);
INSERT INTO `db_master_jadwal_piket` VALUES (3, 'B', '2023-06-21', NULL);
INSERT INTO `db_master_jadwal_piket` VALUES (4, 'C', '2023-06-22', 1);
INSERT INTO `db_master_jadwal_piket` VALUES (5, 'A', '2023-06-23', NULL);
INSERT INTO `db_master_jadwal_piket` VALUES (6, 'B', '2023-06-24', NULL);

-- ----------------------------
-- Table structure for db_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `db_pegawai`;
CREATE TABLE `db_pegawai`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_number` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `company` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `office_loc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_masuk` date NULL DEFAULT NULL,
  `jenis_pegawai` int NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `alamat_ktp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_domisili` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `direktorat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `divisi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `skill_group` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mppk` date NULL DEFAULT NULL,
  `status_pernikahan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_dummy` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idpos_dummy` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kewarganegaraan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pensiun` date NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lamaran` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cv` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_pegawai` int NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  `date_add` datetime NULL DEFAULT NULL,
  `date_update` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of db_pegawai
-- ----------------------------

-- ----------------------------
-- Table structure for db_pegawai_piket
-- ----------------------------
DROP TABLE IF EXISTS `db_pegawai_piket`;
CREATE TABLE `db_pegawai_piket`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_piket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_pemimpin_kelompok` int NULL DEFAULT NULL,
  `tgl_absen` date NULL DEFAULT NULL,
  `group_piket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51640 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of db_pegawai_piket
-- ----------------------------
INSERT INTO `db_pegawai_piket` VALUES (1, 'Imam', 'Anggota', 'Piket Hadir', NULL, 2, '2023-07-23', 'A');
INSERT INTO `db_pegawai_piket` VALUES (51631, ' Agus', ' Anggota', 'Piket Hadir', '', 2, '2023-06-22', ' C');
INSERT INTO `db_pegawai_piket` VALUES (51632, ' Zaki', ' Anggota', 'Piket Hadir', '', 2, '2023-06-22', ' C');
INSERT INTO `db_pegawai_piket` VALUES (51633, ' Yuda', ' Anggota', 'Piket Hadir', '', 2, '2023-06-22', ' C');
INSERT INTO `db_pegawai_piket` VALUES (51634, ' Imam', ' Anggota', 'Cadangan Piket', '', 2, '2023-06-22', ' A');
INSERT INTO `db_pegawai_piket` VALUES (51635, ' Adon', ' Anggota', 'Cadangan Piket', '', 2, '2023-06-22', ' A');
INSERT INTO `db_pegawai_piket` VALUES (51636, ' Yoga', ' Anggota', 'Cadangan Piket', '', 2, '2023-06-22', ' A');
INSERT INTO `db_pegawai_piket` VALUES (51637, ' Maulana', ' Anggota', 'Lepas Piket', '', 2, '2023-06-22', ' B');
INSERT INTO `db_pegawai_piket` VALUES (51638, ' Adi', ' Anggota', 'Lepas Piket', '', 2, '2023-06-22', ' B');
INSERT INTO `db_pegawai_piket` VALUES (51639, ' Budi', ' Anggota', 'Lepas Piket', '', 2, '2023-06-22', ' B');

-- ----------------------------
-- Table structure for db_user
-- ----------------------------
DROP TABLE IF EXISTS `db_user`;
CREATE TABLE `db_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_number` varchar(158) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_user` int NULL DEFAULT NULL,
  `date_add` date NOT NULL,
  `date_update` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of db_user
-- ----------------------------
INSERT INTO `db_user` VALUES (1, NULL, 'pemimpin_apel', '7c0f65b8375e4b74d1036658b8838c49', 'pemimpin_apel', 1, '0000-00-00', '0000-00-00');
INSERT INTO `db_user` VALUES (2, '2001791849', 'pemimpin_kelompok', '43d41127f783ce59029d5aa223fb7948', 'pemimpin_kelompok', 1, '2022-05-18', '0000-00-00');

-- ----------------------------
-- Procedure structure for filldates
-- ----------------------------
DROP PROCEDURE IF EXISTS `filldates`;
delimiter ;;
CREATE PROCEDURE `filldates`(`dateStart` DATE, `dateEnd` DATE)
BEGIN
  WHILE dateStart <= dateEnd DO
    INSERT INTO db_master_tanggal (tanggal) VALUES (dateStart);
    SET dateStart = date_add(dateStart, INTERVAL 1 DAY);
  END WHILE;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
