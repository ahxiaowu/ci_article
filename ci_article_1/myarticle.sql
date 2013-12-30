/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50529
Source Host           : localhost:3306
Source Database       : myarticle

Target Server Type    : MYSQL
Target Server Version : 50529
File Encoding         : 65001

Date: 2013-12-30 15:35:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ci_article`
-- ----------------------------
DROP TABLE IF EXISTS `ci_article`;
CREATE TABLE `ci_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号ID',
  `title` varchar(200) NOT NULL,
  `pubtime` int(10) unsigned NOT NULL DEFAULT '0',
  `spic` varchar(200) NOT NULL COMMENT '缩略图',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `desn` varchar(255) NOT NULL COMMENT '摘要',
  `cid` int(10) unsigned NOT NULL COMMENT '0',
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_article
-- ----------------------------

-- ----------------------------
-- Table structure for `ci_cate`
-- ----------------------------
DROP TABLE IF EXISTS `ci_cate`;
CREATE TABLE `ci_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_cate
-- ----------------------------
INSERT INTO `ci_cate` VALUES ('1', '情感');
INSERT INTO `ci_cate` VALUES ('3', '生活');
INSERT INTO `ci_cate` VALUES ('4', '社会');
