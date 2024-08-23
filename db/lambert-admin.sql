/*
 Navicat Premium Data Transfer

 Source Server         : docker-database
 Source Server Type    : MariaDB
 Source Server Version : 100616 (10.6.16-MariaDB-1:10.6.16+maria~ubu2004)
 Source Host           : database:6033
 Source Schema         : lambert-admin

 Target Server Type    : MariaDB
 Target Server Version : 100616 (10.6.16-MariaDB-1:10.6.16+maria~ubu2004)
 File Encoding         : 65001

 Date: 23/08/2024 17:50:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `email` varchar(32) DEFAULT NULL,
  `role_id` int(6) DEFAULT NULL,
  `create_time` datetime NOT NULL,
  `update_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
