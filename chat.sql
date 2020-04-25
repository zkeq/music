# Host: localhost  (Version: 5.7.26)
# Date: 2020-04-20 18:44:22
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "yiqi_chat_content"
#

DROP TABLE IF EXISTS `yiqi_chat_content`;
CREATE TABLE `yiqi_chat_content` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `tousername` varchar(30) DEFAULT NULL,
  `togroup` int(11) DEFAULT NULL,
  `touxiang` varchar(100) DEFAULT NULL,
  `touxiangurl` varchar(255) DEFAULT NULL,
  `isVip` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

#
# Data for table "yiqi_chat_content"
#

/*!40000 ALTER TABLE `yiqi_chat_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `yiqi_chat_content` ENABLE KEYS */;

#
# Structure for table "yiqi_chat_user"
#

DROP TABLE IF EXISTS `yiqi_chat_user`;
CREATE TABLE `yiqi_chat_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `vip` int(11) DEFAULT '0',
  `headerImg` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "yiqi_chat_user"
#

/*!40000 ALTER TABLE `yiqi_chat_user` DISABLE KEYS */;
INSERT INTO `yiqi_chat_user` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e',1,'http://file.qqtouxiang.com/gexing/2020-04-01/2631407c73d42d6b7fc31c4dd96c6c99.jpeg',NULL),(2,'hello','e10adc3949ba59abbe56e057f20f883e',0,'http://file.qqtouxiang.com/gexing/2020-04-01/2631407c73d42d6b7fc31c4dd96c6c99.jpeg',NULL),(3,'123123','4297f44b13955235245b2497399d7a93',0,NULL,'123123'),(4,'123456','4297f44b13955235245b2497399d7a93',0,NULL,'123123'),(5,'123111','e10adc3949ba59abbe56e057f20f883e',0,NULL,'12345656');
/*!40000 ALTER TABLE `yiqi_chat_user` ENABLE KEYS */;
