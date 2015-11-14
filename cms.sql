/*
Navicat MySQL Data Transfer

Source Server         : web
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : cms

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-11-14 22:29:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for hx_admin
-- ----------------------------
DROP TABLE IF EXISTS `hx_admin`;
CREATE TABLE `hx_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '后台管理用户',
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `logintime` int(11) DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(20) DEFAULT NULL COMMENT '登录ip',
  `sort` int(1) DEFAULT NULL,
  `lock` enum('锁定','开启') DEFAULT '开启' COMMENT '锁定状态1锁定，0：未锁定',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`username`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_admin
-- ----------------------------
INSERT INTO `hx_admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1447508192', '127.0.0.1', '0', '开启', '1437654152');
INSERT INTO `hx_admin` VALUES ('2', 'zhangxin', 'e10adc3949ba59abbe56e057f20f883e', '0', '', '2', '开启', '1447483984');
INSERT INTO `hx_admin` VALUES ('5', 'demo', 'e10adc3949ba59abbe56e057f20f883e', '1447506224', '127.0.0.1', '50', '开启', '1447484046');

-- ----------------------------
-- Table structure for hx_auth_group
-- ----------------------------
DROP TABLE IF EXISTS `hx_auth_group`;
CREATE TABLE `hx_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text NOT NULL,
  `sort` int(6) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_auth_group
-- ----------------------------
INSERT INTO `hx_auth_group` VALUES ('1', '超级管理员', '1', '1,2,3,4,5,6,12,13,14,15,16,23,7,8,9,10,11,17,18,19,20,21', '1');
INSERT INTO `hx_auth_group` VALUES ('2', '普通管理员', '1', '17,18,19,20,21', '2');

-- ----------------------------
-- Table structure for hx_auth_group_access
-- ----------------------------
DROP TABLE IF EXISTS `hx_auth_group_access`;
CREATE TABLE `hx_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_auth_group_access
-- ----------------------------
INSERT INTO `hx_auth_group_access` VALUES ('1', '1');
INSERT INTO `hx_auth_group_access` VALUES ('2', '2');
INSERT INTO `hx_auth_group_access` VALUES ('5', '2');

-- ----------------------------
-- Table structure for hx_auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `hx_auth_rule`;
CREATE TABLE `hx_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` int(11) DEFAULT '0',
  `url` varchar(200) DEFAULT NULL,
  `sort` int(10) DEFAULT NULL COMMENT '排序',
  `menu` int(1) DEFAULT '0' COMMENT '是否是菜单,1是菜单 2：不是',
  `icon` varchar(150) DEFAULT NULL COMMENT '图标',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_auth_rule
-- ----------------------------
INSERT INTO `hx_auth_rule` VALUES ('1', 'Manageer/Rbac/index', '权限管理', '1', '1', '', '0', 'Rbac/index', '0', '1', 'fa-desktop');
INSERT INTO `hx_auth_rule` VALUES ('2', 'Manageer/Admin/list', '管理员管理', '1', '1', '', '1', 'Admin/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('3', 'Manager/Admin/index', '列表', '1', '1', '', '2', 'Admin/index', '0', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('4', 'Manageer/Admin/add', '添加', '1', '1', '', '2', 'Admin/add', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('5', 'Manageer/Admin/edit', '修改', '1', '1', '', '2', 'Admin/edit', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('6', 'Manager/Admin/del', '删除', '1', '1', '', '2', 'Admin/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('7', 'Manager/Node/list', '节点管理', '1', '1', '', '1', 'Node/index', '2', '1', 'fa-cogs');
INSERT INTO `hx_auth_rule` VALUES ('8', 'Manager/Node/index', '列表', '1', '1', '', '7', 'Node/index', '0', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('9', 'Manager/Node/add', '添加', '1', '1', '', '7', 'Node/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('10', 'Manager/Node/edit', '修改', '1', '1', '', '7', 'Node/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('11', 'Manager/Node/del', '删除', '1', '1', '', '7', 'Node/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('12', 'Manager/Role/list', '角色管理', '1', '1', '', '1', 'Role/index', '2', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('13', 'Manager/Role/index', '列表', '1', '1', '', '12', 'Role/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('14', 'Manager/Role/add', '添加', '1', '1', '', '12', 'Role/add', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('15', 'Manager/Role/edit', '修改', '1', '1', '', '12', 'Role/edit', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('16', 'Manager/Role/del', '删除', '1', '1', '', '12', 'Role/del', '4', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('17', 'Manager/User/lists', '用户管理', '1', '1', '', '0', 'User/index', '2', '1', 'fa-user');
INSERT INTO `hx_auth_rule` VALUES ('18', 'Manager/User/list', '用户管理', '1', '1', '', '17', 'User/index', '1', '1', '');
INSERT INTO `hx_auth_rule` VALUES ('19', 'Manager/User/index', '列表', '1', '1', '', '18', 'User/index', '1', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('20', 'Manager/User/enable', '启用', '1', '1', '', '18', 'User/enable', '2', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('21', 'Manager/User/shield', '禁用', '1', '1', '', '18', 'User/shield', '3', '0', '');
INSERT INTO `hx_auth_rule` VALUES ('23', 'Manageer/Role/rbac', '授权', '1', '1', '', '12', 'Role/rbac', '5', '0', '');

-- ----------------------------
-- Table structure for hx_system
-- ----------------------------
DROP TABLE IF EXISTS `hx_system`;
CREATE TABLE `hx_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '网站名称',
  `title` varchar(100) DEFAULT NULL COMMENT '网站标题',
  `domain` varchar(200) DEFAULT NULL COMMENT '网站域名',
  `address` varchar(200) DEFAULT NULL COMMENT '公司地址',
  `phone` varchar(100) DEFAULT NULL COMMENT '公司电话',
  `qq` varchar(50) DEFAULT NULL COMMENT '公司QQ',
  `email` varchar(100) DEFAULT NULL COMMENT '公司email',
  `keyword` varchar(200) DEFAULT NULL COMMENT '网站关键字',
  `desc` varchar(200) DEFAULT NULL COMMENT '网站描述',
  `copyright` varchar(200) DEFAULT NULL COMMENT '底部版权',
  `content` text COMMENT '关于我们',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_system
-- ----------------------------
INSERT INTO `hx_system` VALUES ('1', '嘎嘎时代科技有限公司', '嘎嘎时代科技', 'www.haophper.com', '霍营', '18600957490', '907274532', '907274532@qq.com', '嘎嘎时代', '嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代', '嘎嘎时代', '嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代嘎嘎时代');

-- ----------------------------
-- Table structure for hx_users
-- ----------------------------
DROP TABLE IF EXISTS `hx_users`;
CREATE TABLE `hx_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；hx_password加密',
  `user_nicename` varchar(50) NOT NULL DEFAULT '' COMMENT '用户美名',
  `user_email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `user_url` varchar(100) NOT NULL DEFAULT '' COMMENT '用户个人网站',
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像，相对于upload/avatar目录',
  `sex` smallint(1) DEFAULT '0' COMMENT '性别；0：保密，1：男；2：女',
  `birthday` int(11) DEFAULT NULL COMMENT '生日',
  `signature` varchar(255) DEFAULT NULL COMMENT '个性签名',
  `last_login_ip` varchar(16) NOT NULL COMMENT '最后登录ip',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '' COMMENT '激活码',
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `last_login_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`user_login`) USING BTREE,
  KEY `user_nicename` (`user_nicename`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hx_users
-- ----------------------------
INSERT INTO `hx_users` VALUES ('1', 'haoxuan', '123456', 'haoxuan', '907274532@qq.com', '', '', '0', '0', '', '127.0.0.1', '', '1', '0', '1439514188', '1437654152');
