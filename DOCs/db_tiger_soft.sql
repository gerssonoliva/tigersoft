/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : db_tiger_soft

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 24/08/2020 16:21:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for suscriptor
-- ----------------------------
DROP TABLE IF EXISTS `suscriptor`;
CREATE TABLE `suscriptor`  (
  `suscriptor_id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dni` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ruc` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mensaje` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estado` smallint NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`suscriptor_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of suscriptor
-- ----------------------------
INSERT INTO `suscriptor` VALUES (9, 'Juan Pérez', '87654321', '10876543215', 'juanperez@gmail.com', '987654321', 'Este es un ejemplo de mensaje.', 1, '2020-08-24 15:08:07');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estado` smallint NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Armando', 'Pisfil Puemape', 'armandoaepp@gmail.com', '7b64d09060db17ca6b96c0af99575903', 1, '2018-07-05 15:07:03');
INSERT INTO `user` VALUES (2, 'Gerson', 'Oliva Remigio', 'gersonoliva@tigersoft.com', 'db23d36210520b7e354bd5acf4e166a9', 1, '0000-00-00 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
