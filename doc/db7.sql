/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : zhangqiangdb

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-07-22 23:41:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_log`
-- ----------------------------
DROP TABLE IF EXISTS `admin_log`;
CREATE TABLE `admin_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `controller_id` varchar(20) DEFAULT NULL COMMENT '控制器ID',
  `action_id` varchar(20) DEFAULT NULL COMMENT '方法ID',
  `url` varchar(200) DEFAULT NULL COMMENT '访问地址',
  `module_name` varchar(50) DEFAULT NULL COMMENT '模块',
  `func_name` varchar(50) DEFAULT NULL COMMENT '功能',
  `right_name` varchar(50) DEFAULT NULL COMMENT '方法',
  `client_ip` varchar(15) DEFAULT NULL COMMENT '客户端IP',
  `create_user` varchar(50) DEFAULT NULL COMMENT '用户',
  `create_date` datetime DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY `index_create_date` (`create_date`),
  KEY `index_create_index` (`create_user`),
  KEY `index_url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_log
-- ----------------------------
INSERT INTO `admin_log` VALUES ('1', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 07:22:23');
INSERT INTO `admin_log` VALUES ('2', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 07:22:24');
INSERT INTO `admin_log` VALUES ('3', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 07:22:25');
INSERT INTO `admin_log` VALUES ('4', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 07:22:28');
INSERT INTO `admin_log` VALUES ('5', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 07:22:31');
INSERT INTO `admin_log` VALUES ('6', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 07:22:33');
INSERT INTO `admin_log` VALUES ('7', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 07:22:36');
INSERT INTO `admin_log` VALUES ('8', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 07:22:40');
INSERT INTO `admin_log` VALUES ('9', 'admin-log', 'view', 'admin-log/view', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 07:22:43');
INSERT INTO `admin_log` VALUES ('10', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 09:34:23');
INSERT INTO `admin_log` VALUES ('11', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 09:34:27');
INSERT INTO `admin_log` VALUES ('12', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 09:34:30');
INSERT INTO `admin_log` VALUES ('13', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 09:34:30');
INSERT INTO `admin_log` VALUES ('14', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 09:35:27');
INSERT INTO `admin_log` VALUES ('15', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 09:35:31');
INSERT INTO `admin_log` VALUES ('16', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 09:35:32');
INSERT INTO `admin_log` VALUES ('17', 'admin-log', 'view', 'admin-log/view', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 10:28:55');
INSERT INTO `admin_log` VALUES ('18', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 10:28:58');
INSERT INTO `admin_log` VALUES ('19', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 10:28:59');
INSERT INTO `admin_log` VALUES ('20', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 10:29:00');
INSERT INTO `admin_log` VALUES ('21', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 10:29:01');
INSERT INTO `admin_log` VALUES ('22', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 10:29:02');
INSERT INTO `admin_log` VALUES ('23', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 10:54:39');
INSERT INTO `admin_log` VALUES ('24', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 10:54:40');
INSERT INTO `admin_log` VALUES ('25', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:03:28');
INSERT INTO `admin_log` VALUES ('26', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:03:34');
INSERT INTO `admin_log` VALUES ('27', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:03:35');
INSERT INTO `admin_log` VALUES ('28', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:03:42');
INSERT INTO `admin_log` VALUES ('29', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:03:45');
INSERT INTO `admin_log` VALUES ('30', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:03:47');
INSERT INTO `admin_log` VALUES ('31', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:03:49');
INSERT INTO `admin_log` VALUES ('32', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:03:54');
INSERT INTO `admin_log` VALUES ('33', 'admin-user-role', 'index', 'admin-user-role/index', '菜单用户权限', '角色管理', '分配用户', 'Unknown', 'admin', '2017-06-25 11:03:57');
INSERT INTO `admin_log` VALUES ('34', 'admin-user-role', 'view', 'admin-user-role/view', '菜单用户权限', '角色管理', '分配用户', 'Unknown', 'admin', '2017-06-25 11:04:11');
INSERT INTO `admin_log` VALUES ('35', 'admin-user-role', 'create', 'admin-user-role/create', '菜单用户权限', '角色管理', '分配用户', 'Unknown', 'admin', '2017-06-25 11:04:25');
INSERT INTO `admin_log` VALUES ('36', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:04:29');
INSERT INTO `admin_log` VALUES ('37', 'admin-user', 'create', 'admin-user/create', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:04:39');
INSERT INTO `admin_log` VALUES ('38', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:04:40');
INSERT INTO `admin_log` VALUES ('39', 'admin-user', 'view', 'admin-user/view', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:04:44');
INSERT INTO `admin_log` VALUES ('40', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:04:49');
INSERT INTO `admin_log` VALUES ('41', 'admin-user-role', 'index', 'admin-user-role/index', '菜单用户权限', '角色管理', '分配用户', 'Unknown', 'admin', '2017-06-25 11:04:55');
INSERT INTO `admin_log` VALUES ('42', 'admin-user-role', 'create', 'admin-user-role/create', '菜单用户权限', '角色管理', '分配用户', 'Unknown', 'admin', '2017-06-25 11:05:05');
INSERT INTO `admin_log` VALUES ('43', 'admin-user-role', 'index', 'admin-user-role/index', '菜单用户权限', '角色管理', '分配用户', 'Unknown', 'admin', '2017-06-25 11:05:06');
INSERT INTO `admin_log` VALUES ('44', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:05:09');
INSERT INTO `admin_log` VALUES ('45', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 11:05:12');
INSERT INTO `admin_log` VALUES ('46', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:05:15');
INSERT INTO `admin_log` VALUES ('47', 'admin-module', 'view', 'admin-module/view', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:05:17');
INSERT INTO `admin_log` VALUES ('48', 'admin-module', 'view', 'admin-module/view', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:05:19');
INSERT INTO `admin_log` VALUES ('49', 'admin-module', 'create', 'admin-module/create', '菜单用户权限', '菜单管理', '一级菜单添加', 'Unknown', 'admin', '2017-06-25 11:09:40');
INSERT INTO `admin_log` VALUES ('50', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:09:40');
INSERT INTO `admin_log` VALUES ('51', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 11:09:45');
INSERT INTO `admin_log` VALUES ('52', 'admin-menu', 'create', 'admin-menu/create', '菜单用户权限', '菜单管理', '二级菜单添加', 'Unknown', 'admin', '2017-06-25 11:10:53');
INSERT INTO `admin_log` VALUES ('53', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 11:10:54');
INSERT INTO `admin_log` VALUES ('54', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:11:02');
INSERT INTO `admin_log` VALUES ('55', 'admin-role', 'get-all-rights', 'admin-role/get-all-rights', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:11:05');
INSERT INTO `admin_log` VALUES ('56', 'admin-role', 'save-rights', 'admin-role/save-rights', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:11:09');
INSERT INTO `admin_log` VALUES ('57', 'admin-role', 'save-rights', 'admin-role/save-rights', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:11:14');
INSERT INTO `admin_log` VALUES ('58', 'admin-role', 'save-rights', 'admin-role/save-rights', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:11:25');
INSERT INTO `admin_log` VALUES ('59', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:12:07');
INSERT INTO `admin_log` VALUES ('60', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 11:14:19');
INSERT INTO `admin_log` VALUES ('61', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 11:14:40');
INSERT INTO `admin_log` VALUES ('62', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 11:16:27');
INSERT INTO `admin_log` VALUES ('63', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:16:41');
INSERT INTO `admin_log` VALUES ('64', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:16:52');
INSERT INTO `admin_log` VALUES ('65', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:16:54');
INSERT INTO `admin_log` VALUES ('66', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:16:56');
INSERT INTO `admin_log` VALUES ('67', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 11:17:00');
INSERT INTO `admin_log` VALUES ('68', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 11:17:02');
INSERT INTO `admin_log` VALUES ('69', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 11:17:04');
INSERT INTO `admin_log` VALUES ('70', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 15:35:23');
INSERT INTO `admin_log` VALUES ('71', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 15:37:53');
INSERT INTO `admin_log` VALUES ('72', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 15:38:06');
INSERT INTO `admin_log` VALUES ('73', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 15:45:05');
INSERT INTO `admin_log` VALUES ('74', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:45:09');
INSERT INTO `admin_log` VALUES ('75', 'admin-module', 'view', 'admin-module/view', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:45:14');
INSERT INTO `admin_log` VALUES ('76', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:45:23');
INSERT INTO `admin_log` VALUES ('77', 'admin-right', 'index', 'admin-right/index', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:45:28');
INSERT INTO `admin_log` VALUES ('78', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:45:31');
INSERT INTO `admin_log` VALUES ('79', 'admin-menu', 'view', 'admin-menu/view', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:45:35');
INSERT INTO `admin_log` VALUES ('80', 'admin-menu', 'update', 'admin-menu/update', '菜单用户权限', '菜单管理', '二级菜单添加', 'Unknown', 'admin', '2017-06-25 15:45:45');
INSERT INTO `admin_log` VALUES ('81', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:45:45');
INSERT INTO `admin_log` VALUES ('82', 'admin-menu', 'view', 'admin-menu/view', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:45:53');
INSERT INTO `admin_log` VALUES ('83', 'admin-right', 'index', 'admin-right/index', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:45:58');
INSERT INTO `admin_log` VALUES ('84', 'admin-right', 'index', 'admin-right/index', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:46:05');
INSERT INTO `admin_log` VALUES ('85', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:46:08');
INSERT INTO `admin_log` VALUES ('86', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-25 15:46:18');
INSERT INTO `admin_log` VALUES ('87', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:46:24');
INSERT INTO `admin_log` VALUES ('88', 'admin-module', 'view', 'admin-module/view', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:46:29');
INSERT INTO `admin_log` VALUES ('89', 'admin-module', 'view', 'admin-module/view', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:46:34');
INSERT INTO `admin_log` VALUES ('90', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:46:48');
INSERT INTO `admin_log` VALUES ('91', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-06-25 15:46:56');
INSERT INTO `admin_log` VALUES ('92', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:46:59');
INSERT INTO `admin_log` VALUES ('93', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:47:03');
INSERT INTO `admin_log` VALUES ('94', 'admin-menu', 'view', 'admin-menu/view', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:47:14');
INSERT INTO `admin_log` VALUES ('95', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:47:20');
INSERT INTO `admin_log` VALUES ('96', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:47:23');
INSERT INTO `admin_log` VALUES ('97', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:48:26');
INSERT INTO `admin_log` VALUES ('98', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:48:43');
INSERT INTO `admin_log` VALUES ('99', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:48:46');
INSERT INTO `admin_log` VALUES ('100', 'admin-right', 'index', 'admin-right/index', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:48:51');
INSERT INTO `admin_log` VALUES ('101', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:48:53');
INSERT INTO `admin_log` VALUES ('102', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:48:54');
INSERT INTO `admin_log` VALUES ('103', 'admin-right', 'index', 'admin-right/index', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:48:55');
INSERT INTO `admin_log` VALUES ('104', 'admin-right', 'view', 'admin-right/view', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:49:08');
INSERT INTO `admin_log` VALUES ('105', 'admin-right', 'view', 'admin-right/view', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:49:19');
INSERT INTO `admin_log` VALUES ('106', 'admin-right', 'view', 'admin-right/view', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:49:24');
INSERT INTO `admin_log` VALUES ('107', 'admin-right', 'view', 'admin-right/view', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:49:29');
INSERT INTO `admin_log` VALUES ('108', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-06-25 15:49:34');
INSERT INTO `admin_log` VALUES ('109', 'admin-menu', 'index', 'admin-menu/index', '菜单用户权限', '菜单管理', '二级菜单查看', 'Unknown', 'admin', '2017-06-25 15:49:36');
INSERT INTO `admin_log` VALUES ('110', 'admin-right', 'index', 'admin-right/index', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:49:37');
INSERT INTO `admin_log` VALUES ('111', 'admin-right', 'right-action', 'admin-right/right-action', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:49:40');
INSERT INTO `admin_log` VALUES ('112', 'admin-right', 'create', 'admin-right/create', '菜单用户权限', '菜单管理', '路由添加', 'Unknown', 'admin', '2017-06-25 15:49:56');
INSERT INTO `admin_log` VALUES ('113', 'admin-right', 'index', 'admin-right/index', '菜单用户权限', '菜单管理', '路由查看', 'Unknown', 'admin', '2017-06-25 15:49:56');
INSERT INTO `admin_log` VALUES ('114', 'admin-user', 'create', 'admin-user/create', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-06-25 15:59:15');
INSERT INTO `admin_log` VALUES ('115', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-06-25 16:42:20');
INSERT INTO `admin_log` VALUES ('116', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-06-25 17:36:50');
INSERT INTO `admin_log` VALUES ('117', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-06-25 17:37:12');
INSERT INTO `admin_log` VALUES ('118', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-06-25 17:37:22');
INSERT INTO `admin_log` VALUES ('119', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-06-27 17:26:30');
INSERT INTO `admin_log` VALUES ('120', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-06-27 17:54:35');
INSERT INTO `admin_log` VALUES ('121', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-06-28 16:56:35');
INSERT INTO `admin_log` VALUES ('122', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-09 12:21:45');
INSERT INTO `admin_log` VALUES ('123', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-09 12:22:11');
INSERT INTO `admin_log` VALUES ('124', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-09 12:22:28');
INSERT INTO `admin_log` VALUES ('125', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-09 12:22:33');
INSERT INTO `admin_log` VALUES ('126', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-12 17:06:24');
INSERT INTO `admin_log` VALUES ('127', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-12 17:06:44');
INSERT INTO `admin_log` VALUES ('128', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-12 17:07:00');
INSERT INTO `admin_log` VALUES ('129', 'site', 'error', 'site/error', null, null, null, 'Unknown', 'admin', '2017-07-12 17:07:05');
INSERT INTO `admin_log` VALUES ('130', 'admin-module', 'index', 'admin-module/index', '菜单用户权限', '菜单管理', '一级菜单查看', 'Unknown', 'admin', '2017-07-12 17:52:16');
INSERT INTO `admin_log` VALUES ('131', 'admin-user', 'index', 'admin-user/index', '菜单用户权限', '用户管理', '用户操作', 'Unknown', 'admin', '2017-07-12 17:52:19');
INSERT INTO `admin_log` VALUES ('132', 'admin-role', 'index', 'admin-role/index', '菜单用户权限', '角色管理', '分配权限', 'Unknown', 'admin', '2017-07-12 17:52:21');
INSERT INTO `admin_log` VALUES ('133', 'admin-log', 'index', 'admin-log/index', '日志管理', '操作日志', '操作', 'Unknown', 'admin', '2017-07-12 17:52:28');

-- ----------------------------
-- Table structure for `admin_menu`
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `code` varchar(50) NOT NULL COMMENT 'code',
  `menu_name` varchar(200) NOT NULL COMMENT '名称',
  `module_id` int(11) NOT NULL COMMENT '模块id',
  `display_label` varchar(200) DEFAULT NULL COMMENT '显示名',
  `des` varchar(400) DEFAULT NULL COMMENT '描述',
  `display_order` int(5) DEFAULT NULL COMMENT '显示顺序',
  `entry_right_name` varchar(50) DEFAULT NULL COMMENT '入口地址名称',
  `entry_url` varchar(200) NOT NULL COMMENT '入口地址',
  `action` varchar(50) NOT NULL COMMENT '操作ID',
  `controller` varchar(100) NOT NULL COMMENT '控制器ID',
  `has_lef` varchar(1) NOT NULL DEFAULT 'n' COMMENT '是否有子',
  `create_user` varchar(50) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` varchar(50) DEFAULT NULL COMMENT '修改人',
  `update_date` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_code` (`code`),
  KEY `fk_module_id` (`module_id`),
  CONSTRAINT `fk_module_id` FOREIGN KEY (`module_id`) REFERENCES `admin_module` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES ('1', 'menu_manger', '菜单管理', '1', '菜单管理', '菜单管理', '1', '菜单管理', 'admin-module/index', 'index', 'backend\\controllers\\AdminMenuController', 'n', 'admin', '2016-08-11 16:44:11', 'admin', '2016-08-11 16:44:11');
INSERT INTO `admin_menu` VALUES ('2', 'menu_role', '角色管理', '1', '角色管理', '角色管理', '2', '角色管理', 'admin-role/index', 'index', 'backend\\controllers\\AdminRoleController', 'n', 'admin', '2016-08-11 16:51:56', 'admin', '2016-08-11 16:51:56');
INSERT INTO `admin_menu` VALUES ('3', 'menu_user', '用户管理', '1', '用户管理', '用户管理', '3', '用户管理', 'admin-user/index', 'index', 'backend\\controllers\\AdminUserController', 'n', 'admin', '2016-08-11 16:58:43', 'admin', '2016-08-11 16:58:43');
INSERT INTO `admin_menu` VALUES ('4', 'coazaorizhi', '操作日志', '2', '操作日志', '操作日志', '1', '', 'admin-log/index', 'index', 'backend\\controllers\\AdminLogController', 'n', 'test', '2016-08-14 06:54:17', 'test', '2016-08-14 06:54:17');
INSERT INTO `admin_menu` VALUES ('6', 'gglb', '公告列表', '4', '公告列表', '公告列表', '1', '公告列表', 'announcement/index', 'index', 'backend\\controllers\\AnnouncementController', 'n', 'admin', '2017-06-25 11:10:53', 'admin', '2017-06-25 15:45:45');

-- ----------------------------
-- Table structure for `admin_message`
-- ----------------------------
DROP TABLE IF EXISTS `admin_message`;
CREATE TABLE `admin_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `msg` varchar(1000) DEFAULT NULL COMMENT '留言内容',
  `expiry_days` int(5) unsigned DEFAULT NULL COMMENT '有效天数',
  `create_user` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_user` varchar(50) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_message
-- ----------------------------
INSERT INTO `admin_message` VALUES ('1', '测试文本', '1', 'admin', '2014-11-21 18:47:20', 'admin', '2014-11-21 18:47:27');

-- ----------------------------
-- Table structure for `admin_module`
-- ----------------------------
DROP TABLE IF EXISTS `admin_module`;
CREATE TABLE `admin_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `code` varchar(50) NOT NULL COMMENT 'code',
  `display_label` varchar(200) NOT NULL COMMENT '显示名称',
  `has_lef` varchar(1) NOT NULL DEFAULT 'n' COMMENT '是否有子',
  `des` varchar(400) DEFAULT NULL COMMENT '描述',
  `entry_url` varchar(100) DEFAULT NULL COMMENT '入口地址',
  `display_order` int(5) DEFAULT NULL COMMENT '顺序',
  `create_user` varchar(50) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` varchar(50) DEFAULT NULL COMMENT '修改人',
  `update_date` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_module
-- ----------------------------
INSERT INTO `admin_module` VALUES ('1', 'menu_manage', '菜单用户权限', 'n', '菜单管理', '', '1', 'admin', '2016-08-11 15:26:21', 'admin', '2016-08-11 16:31:08');
INSERT INTO `admin_module` VALUES ('2', 'rizhimaanage', '日志管理', 'n', '日志管理', '', '2', 'test', '2016-08-14 06:53:13', 'test', '2016-08-14 06:53:13');
INSERT INTO `admin_module` VALUES ('4', 'gggl', '公告管理', 'n', '', null, '1', 'admin', '2017-06-25 11:09:40', 'admin', '2017-06-25 11:09:40');

-- ----------------------------
-- Table structure for `admin_right`
-- ----------------------------
DROP TABLE IF EXISTS `admin_right`;
CREATE TABLE `admin_right` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `menu_id` int(11) NOT NULL COMMENT '功能主键',
  `right_name` varchar(200) NOT NULL COMMENT '名称',
  `display_label` varchar(200) DEFAULT NULL COMMENT '显示名',
  `des` varchar(200) DEFAULT NULL COMMENT '描述',
  `display_order` int(5) DEFAULT NULL COMMENT '显示顺序',
  `has_lef` varchar(1) NOT NULL DEFAULT 'n' COMMENT '是否有子',
  `create_user` varchar(50) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` varchar(50) DEFAULT NULL COMMENT '修改人',
  `update_date` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `FK_admin_right` (`menu_id`),
  KEY `index_menu_id` (`menu_id`),
  CONSTRAINT `FK_admin_right` FOREIGN KEY (`menu_id`) REFERENCES `admin_menu` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_right
-- ----------------------------
INSERT INTO `admin_right` VALUES ('4', '2', '角色操作', '角色操作', '角色操作', '1', 'n', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right` VALUES ('5', '2', '分配用户', '分配用户', '分配用户', '2', 'n', 'admin', '2016-08-13 17:05:04', 'test', '2016-08-14 08:22:13');
INSERT INTO `admin_right` VALUES ('6', '2', '分配权限', '分配权限', '分配权限', '3', 'n', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right` VALUES ('7', '3', '用户操作', '用户操作', '用户操作', '1', 'n', 'admin', '2016-08-13 17:05:57', 'admin', '2016-08-13 17:05:57');
INSERT INTO `admin_right` VALUES ('8', '4', '操作', '操作', '操作', '1', 'n', 'test', '2016-08-14 06:54:38', 'test', '2016-08-14 06:54:38');
INSERT INTO `admin_right` VALUES ('13', '1', '一级菜单查看', '一级菜单查看', '一级菜单查看', '1', 'n', 'test', '2016-08-16 15:52:45', 'test', '2016-08-16 15:52:45');
INSERT INTO `admin_right` VALUES ('14', '1', '一级菜单添加', '一级菜单添加', '一级菜单添加', '2', 'n', 'test', '2016-08-16 15:53:10', 'test', '2016-08-16 15:58:30');
INSERT INTO `admin_right` VALUES ('15', '1', '一级菜单删除', '一级菜单删除', '一级菜单删除', '3', 'n', 'test', '2016-08-16 15:53:44', 'test', '2016-08-16 15:53:44');
INSERT INTO `admin_right` VALUES ('16', '1', '二级菜单查看', '二级菜单查看', '二级菜单查看', '4', 'n', 'test', '2016-08-16 15:55:02', 'test', '2016-08-16 15:55:02');
INSERT INTO `admin_right` VALUES ('17', '1', '二级菜单添加', '二级菜单修改', '二级菜单添加', '5', 'n', 'test', '2016-08-16 15:55:21', 'test', '2016-08-16 15:58:50');
INSERT INTO `admin_right` VALUES ('18', '1', '二级菜单删除', '二级菜单删除', '二级菜单删除', '6', 'n', 'test', '2016-08-16 15:55:58', 'test', '2016-08-16 15:55:58');
INSERT INTO `admin_right` VALUES ('19', '1', '路由查看', '路由查看', '路由查看', '7', 'n', 'test', '2016-08-16 15:56:32', 'test', '2016-08-16 15:57:14');
INSERT INTO `admin_right` VALUES ('20', '1', '路由添加', '路由添加', '路由添加', '8', 'n', 'test', '2016-08-16 15:57:46', 'test', '2016-08-16 15:57:46');
INSERT INTO `admin_right` VALUES ('21', '1', '路由删除', '路由删除', '路由删除', '9', 'n', 'test', '2016-08-16 15:58:05', 'test', '2016-08-16 15:58:05');
INSERT INTO `admin_right` VALUES ('22', '6', '公告列表', '公告列表', '公告列表', '1', 'n', 'admin', '2017-06-25 15:49:56', 'admin', '2017-06-25 15:49:56');

-- ----------------------------
-- Table structure for `admin_right_url`
-- ----------------------------
DROP TABLE IF EXISTS `admin_right_url`;
CREATE TABLE `admin_right_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `right_id` int(11) NOT NULL COMMENT 'right主键',
  `url` varchar(200) DEFAULT NULL COMMENT 'url',
  `para_name` varchar(40) DEFAULT NULL COMMENT '参数名',
  `para_value` varchar(40) DEFAULT NULL COMMENT '参数值',
  `create_user` varchar(50) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` varchar(50) DEFAULT NULL COMMENT '修改人',
  `update_date` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `FK_admin_right_url` (`right_id`),
  KEY `index_right_id` (`right_id`),
  CONSTRAINT `FK_admin_right_url` FOREIGN KEY (`right_id`) REFERENCES `admin_right` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_right_url
-- ----------------------------
INSERT INTO `admin_right_url` VALUES ('16', '4', 'admin-role/index', 'admin-role', 'index', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right_url` VALUES ('17', '4', 'admin-role/view', 'admin-role', 'view', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right_url` VALUES ('18', '4', 'admin-role/create', 'admin-role', 'create', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right_url` VALUES ('19', '4', 'admin-role/update', 'admin-role', 'update', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right_url` VALUES ('20', '4', 'admin-role/delete', 'admin-role', 'delete', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right_url` VALUES ('21', '4', 'admin-role/get-all-rights', 'admin-role', 'get-all-rights', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right_url` VALUES ('22', '4', 'admin-role/save-rights', 'admin-role', 'save-rights', 'admin', '2016-08-13 17:04:40', 'admin', '2016-08-13 17:04:40');
INSERT INTO `admin_right_url` VALUES ('30', '6', 'admin-role/index', 'admin-role', 'index', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right_url` VALUES ('31', '6', 'admin-role/view', 'admin-role', 'view', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right_url` VALUES ('32', '6', 'admin-role/create', 'admin-role', 'create', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right_url` VALUES ('33', '6', 'admin-role/update', 'admin-role', 'update', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right_url` VALUES ('34', '6', 'admin-role/delete', 'admin-role', 'delete', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right_url` VALUES ('35', '6', 'admin-role/get-all-rights', 'admin-role', 'get-all-rights', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right_url` VALUES ('36', '6', 'admin-role/save-rights', 'admin-role', 'save-rights', 'admin', '2016-08-13 17:05:24', 'admin', '2016-08-13 17:05:24');
INSERT INTO `admin_right_url` VALUES ('37', '7', 'admin-user/index', 'admin-user', 'index', 'admin', '2016-08-13 17:05:57', 'admin', '2016-08-13 17:05:57');
INSERT INTO `admin_right_url` VALUES ('38', '7', 'admin-user/view', 'admin-user', 'view', 'admin', '2016-08-13 17:05:57', 'admin', '2016-08-13 17:05:57');
INSERT INTO `admin_right_url` VALUES ('39', '7', 'admin-user/create', 'admin-user', 'create', 'admin', '2016-08-13 17:05:57', 'admin', '2016-08-13 17:05:57');
INSERT INTO `admin_right_url` VALUES ('40', '7', 'admin-user/update', 'admin-user', 'update', 'admin', '2016-08-13 17:05:57', 'admin', '2016-08-13 17:05:57');
INSERT INTO `admin_right_url` VALUES ('41', '7', 'admin-user/delete', 'admin-user', 'delete', 'admin', '2016-08-13 17:05:57', 'admin', '2016-08-13 17:05:57');
INSERT INTO `admin_right_url` VALUES ('42', '8', 'admin-log/index', 'admin-log', 'index', 'test', '2016-08-14 06:54:38', 'test', '2016-08-14 06:54:38');
INSERT INTO `admin_right_url` VALUES ('43', '8', 'admin-log/view', 'admin-log', 'view', 'test', '2016-08-14 06:54:38', 'test', '2016-08-14 06:54:38');
INSERT INTO `admin_right_url` VALUES ('44', '8', 'admin-log/create', 'admin-log', 'create', 'test', '2016-08-14 06:54:38', 'test', '2016-08-14 06:54:38');
INSERT INTO `admin_right_url` VALUES ('45', '8', 'admin-log/update', 'admin-log', 'update', 'test', '2016-08-14 06:54:38', 'test', '2016-08-14 06:54:38');
INSERT INTO `admin_right_url` VALUES ('46', '8', 'admin-log/delete', 'admin-log', 'delete', 'test', '2016-08-14 06:54:38', 'test', '2016-08-14 06:54:38');
INSERT INTO `admin_right_url` VALUES ('81', '5', 'admin-user-role/index', 'admin-user-role', 'index', 'test', '2016-08-14 08:22:13', 'test', '2016-08-14 08:22:13');
INSERT INTO `admin_right_url` VALUES ('82', '5', 'admin-user-role/view', 'admin-user-role', 'view', 'test', '2016-08-14 08:22:13', 'test', '2016-08-14 08:22:13');
INSERT INTO `admin_right_url` VALUES ('83', '5', 'admin-user-role/create', 'admin-user-role', 'create', 'test', '2016-08-14 08:22:13', 'test', '2016-08-14 08:22:13');
INSERT INTO `admin_right_url` VALUES ('84', '5', 'admin-user-role/update', 'admin-user-role', 'update', 'test', '2016-08-14 08:22:13', 'test', '2016-08-14 08:22:13');
INSERT INTO `admin_right_url` VALUES ('85', '5', 'admin-user-role/delete', 'admin-user-role', 'delete', 'test', '2016-08-14 08:22:13', 'test', '2016-08-14 08:22:13');
INSERT INTO `admin_right_url` VALUES ('112', '13', 'admin-module/index', 'admin-module', 'index', 'test', '2016-08-16 15:52:45', 'test', '2016-08-16 15:52:45');
INSERT INTO `admin_right_url` VALUES ('113', '13', 'admin-module/view', 'admin-module', 'view', 'test', '2016-08-16 15:52:45', 'test', '2016-08-16 15:52:45');
INSERT INTO `admin_right_url` VALUES ('115', '15', 'admin-module/delete', 'admin-module', 'delete', 'test', '2016-08-16 15:53:44', 'test', '2016-08-16 15:53:44');
INSERT INTO `admin_right_url` VALUES ('118', '16', 'admin-menu/index', 'admin-menu', 'index', 'test', '2016-08-16 15:55:02', 'test', '2016-08-16 15:55:02');
INSERT INTO `admin_right_url` VALUES ('119', '16', 'admin-menu/view', 'admin-menu', 'view', 'test', '2016-08-16 15:55:02', 'test', '2016-08-16 15:55:02');
INSERT INTO `admin_right_url` VALUES ('122', '18', 'admin-menu/delete', 'admin-menu', 'delete', 'test', '2016-08-16 15:55:58', 'test', '2016-08-16 15:55:58');
INSERT INTO `admin_right_url` VALUES ('125', '19', 'admin-right/index', 'admin-right', 'index', 'test', '2016-08-16 15:57:14', 'test', '2016-08-16 15:57:14');
INSERT INTO `admin_right_url` VALUES ('126', '19', 'admin-right/view', 'admin-right', 'view', 'test', '2016-08-16 15:57:14', 'test', '2016-08-16 15:57:14');
INSERT INTO `admin_right_url` VALUES ('127', '19', 'admin-right/right-action', 'admin-right', 'right-action', 'test', '2016-08-16 15:57:14', 'test', '2016-08-16 15:57:14');
INSERT INTO `admin_right_url` VALUES ('128', '20', 'admin-right/create', 'admin-right', 'create', 'test', '2016-08-16 15:57:46', 'test', '2016-08-16 15:57:46');
INSERT INTO `admin_right_url` VALUES ('129', '20', 'admin-right/update', 'admin-right', 'update', 'test', '2016-08-16 15:57:46', 'test', '2016-08-16 15:57:46');
INSERT INTO `admin_right_url` VALUES ('130', '21', 'admin-right/delete', 'admin-right', 'delete', 'test', '2016-08-16 15:58:05', 'test', '2016-08-16 15:58:05');
INSERT INTO `admin_right_url` VALUES ('131', '14', 'admin-module/create', 'admin-module', 'create', 'test', '2016-08-16 15:58:30', 'test', '2016-08-16 15:58:30');
INSERT INTO `admin_right_url` VALUES ('132', '14', 'admin-module/update', 'admin-module', 'update', 'test', '2016-08-16 15:58:30', 'test', '2016-08-16 15:58:30');
INSERT INTO `admin_right_url` VALUES ('133', '17', 'admin-menu/create', 'admin-menu', 'create', 'test', '2016-08-16 15:58:51', 'test', '2016-08-16 15:58:51');
INSERT INTO `admin_right_url` VALUES ('134', '17', 'admin-menu/update', 'admin-menu', 'update', 'test', '2016-08-16 15:58:51', 'test', '2016-08-16 15:58:51');
INSERT INTO `admin_right_url` VALUES ('135', '22', 'announcement/index', 'announcement', 'index', 'admin', '2017-06-25 15:49:56', 'admin', '2017-06-25 15:49:56');

-- ----------------------------
-- Table structure for `admin_role`
-- ----------------------------
DROP TABLE IF EXISTS `admin_role`;
CREATE TABLE `admin_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `code` varchar(50) NOT NULL COMMENT '角色编号',
  `name` varchar(50) NOT NULL COMMENT '角色名称',
  `des` varchar(400) DEFAULT NULL COMMENT '角色描述',
  `create_user` varchar(50) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` varchar(50) DEFAULT NULL COMMENT '更新人',
  `update_date` datetime DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_role
-- ----------------------------
INSERT INTO `admin_role` VALUES ('1', 'superadmin', '超级管理员', '拥有所有权限', 'test', '2016-08-12 15:33:01', 'test', '2016-08-12 15:33:01');
INSERT INTO `admin_role` VALUES ('2', 'testuser', '测试人员', '测试人员', 'test', '2016-08-12 15:33:45', 'test', '2016-08-12 15:33:45');

-- ----------------------------
-- Table structure for `admin_role_right`
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_right`;
CREATE TABLE `admin_role_right` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `role_id` int(11) NOT NULL COMMENT '角色主键',
  `right_id` int(11) NOT NULL COMMENT '权限主键',
  `full_path` varchar(250) DEFAULT NULL COMMENT '全路径',
  `create_user` varchar(50) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` varchar(50) DEFAULT NULL COMMENT '修改人',
  `update_date` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `index_role_id` (`role_id`),
  KEY `index_right_id` (`right_id`),
  CONSTRAINT `admin_role_right_ibfk_1` FOREIGN KEY (`right_id`) REFERENCES `admin_right` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_role_right
-- ----------------------------
INSERT INTO `admin_role_right` VALUES ('95', '1', '13', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('96', '1', '14', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('97', '1', '15', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('98', '1', '16', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('99', '1', '17', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('100', '1', '18', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('101', '1', '19', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('102', '1', '20', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('103', '1', '21', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('104', '1', '4', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('105', '1', '5', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('106', '1', '6', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('107', '1', '7', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('108', '1', '8', null, 'test', '2016-08-16 15:59:31', 'test', '2016-08-16 15:59:31');
INSERT INTO `admin_role_right` VALUES ('112', '2', '13', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('113', '2', '14', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('114', '2', '15', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('115', '2', '16', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('116', '2', '17', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('117', '2', '18', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('118', '2', '19', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('119', '2', '20', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('120', '2', '21', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('121', '2', '4', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('122', '2', '5', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('123', '2', '6', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('124', '2', '7', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');
INSERT INTO `admin_role_right` VALUES ('125', '2', '8', null, 'test', '2016-08-16 16:02:57', 'test', '2016-08-16 16:02:57');

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(200) NOT NULL COMMENT '密码',
  `auth_key` varchar(50) DEFAULT NULL COMMENT '自动登录key',
  `last_ip` varchar(50) DEFAULT NULL COMMENT '最近一次登录ip',
  `is_online` char(1) DEFAULT 'n' COMMENT '是否在线',
  `domain_account` varchar(100) DEFAULT NULL COMMENT '域账号',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `create_user` varchar(100) NOT NULL COMMENT '创建人',
  `create_date` datetime NOT NULL COMMENT '创建时间',
  `update_user` varchar(101) NOT NULL COMMENT '更新人',
  `update_date` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('156', 'admin', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, 'Unknown', 'n', null, '10', 'admin', '2014-07-07 00:05:47', 'admin', '2014-09-03 12:19:12');
INSERT INTO `admin_user` VALUES ('158', 'test', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, '', 'n', null, '10', 'admin', '2014-09-03 12:19:52', 'admin', '2014-11-21 19:19:22');
INSERT INTO `admin_user` VALUES ('159', 'test2', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, 'Unknown', 'n', null, '10', 'admin', '2017-06-25 17:01:34', 'admin', '0000-00-00 00:00:00');
INSERT INTO `admin_user` VALUES ('160', 'test3', '$2y$13$Gwecg/8lZ2fVCO3lpy70SOnPRgIKN6egfJaLsjFo6Febtw2hVB.XO', null, null, 'n', '', '10', 'admin', '2017-06-25 11:04:40', 'admin', '2017-06-25 11:04:40');
INSERT INTO `admin_user` VALUES ('161', '1', '$2y$13$GMttHxlYhJh/tClgsUmHe.TqdlbR4EeBaRbis9b1of3NECcX8gVie', null, null, 'n', '', '10', 'admin', '2017-06-25 15:59:16', 'admin', '2017-06-25 15:59:16');

-- ----------------------------
-- Table structure for `admin_user_copy`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user_copy`;
CREATE TABLE `admin_user_copy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL COMMENT '用户名',
  `password` varchar(200) NOT NULL COMMENT '密码',
  `auth_key` varchar(50) DEFAULT NULL COMMENT '自动登录key',
  `last_ip` varchar(50) DEFAULT NULL COMMENT '最近一次登录ip',
  `is_online` char(1) DEFAULT 'n' COMMENT '是否在线',
  `domain_account` varchar(100) DEFAULT NULL COMMENT '域账号',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `create_user` varchar(100) NOT NULL COMMENT '创建人',
  `create_date` datetime NOT NULL COMMENT '创建时间',
  `update_user` varchar(101) NOT NULL COMMENT '更新人',
  `update_date` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user_copy
-- ----------------------------
INSERT INTO `admin_user_copy` VALUES ('156', 'admin', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, 'Unknown', 'n', null, '10', 'admin', '2014-07-07 00:05:47', 'admin', '2014-09-03 12:19:12');
INSERT INTO `admin_user_copy` VALUES ('158', 'test', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, '', 'n', null, '10', 'admin', '2014-09-03 12:19:52', 'admin', '2014-11-21 19:19:22');

-- ----------------------------
-- Table structure for `admin_user_role`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user_role`;
CREATE TABLE `admin_user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` bigint(20) unsigned NOT NULL COMMENT '用户id',
  `role_id` int(11) NOT NULL COMMENT '角色',
  `create_user` varchar(50) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` varchar(50) DEFAULT NULL COMMENT '修改人',
  `update_date` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `index_user_id` (`user_id`),
  KEY `index_role_id` (`role_id`),
  CONSTRAINT `admin_user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `admin_role` (`id`) ON DELETE CASCADE,
  CONSTRAINT `admin_user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `admin_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user_role
-- ----------------------------
INSERT INTO `admin_user_role` VALUES ('1', '156', '1', 'admin', '2016-08-12 17:03:13', 'admin', '2016-08-12 17:03:13');
INSERT INTO `admin_user_role` VALUES ('2', '158', '2', 'test', '2016-08-13 16:34:20', 'test', '2016-08-13 16:34:20');
INSERT INTO `admin_user_role` VALUES ('3', '159', '1', 'admin', '2017-06-25 17:02:25', 'admin', null);
INSERT INTO `admin_user_role` VALUES ('4', '160', '1', 'admin', '2017-06-25 11:05:05', 'admin', '2017-06-25 11:05:05');

-- ----------------------------
-- Table structure for `announcement`
-- ----------------------------
DROP TABLE IF EXISTS `announcement`;
CREATE TABLE `announcement` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `add_time` datetime DEFAULT NULL,
  `sort_order` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of announcement
-- ----------------------------
INSERT INTO `announcement` VALUES ('1', 't1', 'tt11121212', '2017-06-25 22:13:18', '1');
INSERT INTO `announcement` VALUES ('4', '11', '11', '2017-06-25 16:30:53', '12');
INSERT INTO `announcement` VALUES ('5', '1', 'aaa121212121\n可耕地可耕地saf柑暗示的方式对地', '2017-06-25 16:35:53', '2');

-- ----------------------------
-- Table structure for `question`
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `question` text,
  `answer` text,
  `sort_order` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('1', '111', '3333', '1');
INSERT INTO `question` VALUES ('2', 'aaaa1', 'bbbb2', '21');

-- ----------------------------
-- Table structure for `rules`
-- ----------------------------
DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `content` text,
  `sort_order` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rules
-- ----------------------------
INSERT INTO `rules` VALUES ('1', ' aaaaaaa规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 规则内容 ', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL COMMENT '用户名',
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(200) NOT NULL COMMENT '密码',
  `auth_key` varchar(50) DEFAULT NULL COMMENT '自动登录key',
  `last_ip` varchar(50) DEFAULT NULL COMMENT '最近一次登录ip',
  `is_online` char(1) DEFAULT 'n' COMMENT '是否在线',
  `domain_account` varchar(100) DEFAULT NULL COMMENT '域账号',
  `status` tinyint(2) DEFAULT '0' COMMENT '0正常，1禁用，2已被替代',
  `create_user` int(9) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` int(9) DEFAULT NULL COMMENT '更新人',
  `update_date` datetime DEFAULT NULL COMMENT '更新时间',
  `full_name` varchar(20) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT '0',
  `level` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('156', 'admin', '14544443333', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, 'Unknown', 'n', null, '0', '0', '2014-07-07 00:05:47', '0', '2014-09-03 12:19:12', 'a', '0', '4');
INSERT INTO `user` VALUES ('158', 'test', '13344443333', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, 'Unknown', 'n', null, '0', '0', '2014-09-03 12:19:52', '0', '2014-11-21 19:19:22', 'b', '0', '4');
INSERT INTO `user` VALUES ('159', 'test2', '12344667888', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, 'Unknown', 'n', null, '0', '0', '2017-06-25 17:01:34', '0', '0000-00-00 00:00:00', 'c', '0', '5');
INSERT INTO `user` VALUES ('160', 'test3', '121', '$2y$13$Gwecg/8lZ2fVCO3lpy70SOnPRgIKN6egfJaLsjFo6Febtw2hVB.XO', null, null, 'n', '', '0', '0', '2017-06-25 11:04:40', '0', '2017-06-25 11:04:40', 'd', '0', '7');
INSERT INTO `user` VALUES ('161', '1', '121212', '$2y$13$9O6bKJieocg//oSax9fZOOuljAKarBXknqD8.RyYg60FfNjS7SoqK', null, 'Unknown', 'n', '', '0', '0', '2017-06-25 15:59:16', '0', '2017-06-25 15:59:16', 'e', '0', '9');
INSERT INTO `user` VALUES ('162', 'ttvv', '14311223355', '122', null, null, 'n', null, '0', '158', '2017-07-22 16:47:26', '0', null, '姓名1', '0', '1');
INSERT INTO `user` VALUES ('163', 'ttvv1', '14311223356', '111', null, null, 'n', null, '0', '158', '2017-07-22 17:02:15', '0', null, '姓名2', '0', '1');
INSERT INTO `user` VALUES ('164', 'ttvv2', '14311223356', '111', null, null, 'n', null, '0', '158', '2017-07-22 17:03:03', '0', null, '姓名2', '0', '1');

-- ----------------------------
-- Table structure for `user-`
-- ----------------------------
DROP TABLE IF EXISTS `user-`;
CREATE TABLE `user-` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `create_user` int(11) DEFAULT NULL COMMENT '创建人',
  `create_date` datetime DEFAULT NULL COMMENT '创建时间',
  `update_user` int(11) DEFAULT NULL COMMENT '修改人',
  `update_date` datetime DEFAULT NULL COMMENT '修改时间',
  `status` tinyint(1) DEFAULT '0' COMMENT '0正常，1禁用，2已被替代',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2000 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user-
-- ----------------------------
INSERT INTO `user-` VALUES ('1', '0', '2016-08-12 17:03:13', '0', '2016-08-12 17:03:13', '0');
INSERT INTO `user-` VALUES ('2', '0', '2016-08-13 16:34:20', '0', '2016-08-13 16:34:20', '0');
INSERT INTO `user-` VALUES ('3', '0', '2017-06-25 17:02:25', '0', null, '0');
INSERT INTO `user-` VALUES ('4', '0', '2017-06-25 11:05:05', '0', '2017-06-25 11:05:05', '0');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `user_id` int(9) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT '0',
  `add_time` datetime DEFAULT NULL,
  `add_user` int(9) DEFAULT NULL,
  `level` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_info
-- ----------------------------

-- ----------------------------
-- Table structure for `user_level_his`
-- ----------------------------
DROP TABLE IF EXISTS `user_level_his`;
CREATE TABLE `user_level_his` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `user_id` int(9) DEFAULT NULL,
  `approval_user_id` int(9) DEFAULT NULL,
  `approval_admin_user_id` int(9) DEFAULT '0',
  `old_level` tinyint(2) DEFAULT NULL,
  `new_level` tinyint(2) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `approval_time` datetime DEFAULT NULL,
  `add_remark` varchar(300) DEFAULT NULL,
  `approval_remark` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_level_his
-- ----------------------------
INSERT INTO `user_level_his` VALUES ('2', '158', '156', '0', '4', '5', '0', '2017-07-22 09:26:08', null, null, null);
INSERT INTO `user_level_his` VALUES ('3', '161', '158', '0', '9', '10', '2', '2017-07-22 09:28:03', '2017-07-22 10:43:56', null, null);
INSERT INTO `user_level_his` VALUES ('4', '156', '0', '0', '4', '5', '0', '2017-07-22 17:37:01', null, null, null);

-- ----------------------------
-- Table structure for `user_replace_his`
-- ----------------------------
DROP TABLE IF EXISTS `user_replace_his`;
CREATE TABLE `user_replace_his` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `old_user_id` int(9) DEFAULT NULL,
  `new_user_id` int(9) DEFAULT NULL,
  `opt_admin_user_id` int(9) DEFAULT '0',
  `opt_user_id` int(9) DEFAULT NULL,
  `add_time` datetime DEFAULT NULL,
  `remark` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_replace_his
-- ----------------------------

-- ----------------------------
-- Table structure for `user_tier`
-- ----------------------------
DROP TABLE IF EXISTS `user_tier`;
CREATE TABLE `user_tier` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `user_id` int(9) NOT NULL,
  `top_user_id` int(9) NOT NULL COMMENT '上级id',
  `role` tinyint(1) DEFAULT '1' COMMENT '1左，2中，3右',
  `user_path` varchar(4000) NOT NULL COMMENT '路径',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_tier
-- ----------------------------
INSERT INTO `user_tier` VALUES ('1', '156', '0', '1', '156-');
INSERT INTO `user_tier` VALUES ('2', '158', '156', '1', '156-158-');
INSERT INTO `user_tier` VALUES ('3', '159', '156', '2', '156-159-');
INSERT INTO `user_tier` VALUES ('4', '160', '156', '3', '156-160-');
INSERT INTO `user_tier` VALUES ('5', '161', '158', '1', '156-158-161-');
INSERT INTO `user_tier` VALUES ('6', '162', '158', '2', '156-158-162-');
INSERT INTO `user_tier` VALUES ('7', '164', '158', '3', '156-158-164-');
