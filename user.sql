/**
 测试用户表
 */
DROP TABLE IF EXISTS `hs_user`;
CREATE TABLE `hs_user` (
  `userId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) unsigned NOT NULL,
  `special` smallint(2) unsigned NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL ,
  `realname` varchar(20) DEFAULT NULL ,
  `password` varchar(32) NOT NULL ,
  `phone` char(11) NOT NULL ,
  `email` varchar(40) DEFAULT NULL ,
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `birthday` date DEFAULT NULL ,
  `province` varchar(10) DEFAULT NULL,
  `provinceId` int(11) unsigned DEFAULT NULL ,
  `cityId` int(11) DEFAULT NULL ,
  `areaId` int(11) unsigned DEFAULT NULL ,
  `address` varchar(100) DEFAULT NULL ,
  `cardId` varchar(30) DEFAULT NULL ,
  `refererUrl` varchar(255) DEFAULT NULL ,
  `referer` text NOT NULL ,
  `regtime` int(11) unsigned NOT NULL ,
  PRIMARY KEY (`userId`),
  KEY `type` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=35903 DEFAULT CHARSET=utf8;