# Host: localhost  (Version: 5.0.51b-community-nt-log)
# Date: 2014-12-04 00:04:32
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "tp_user"
#

DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `userid` int(4) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `userpwd` varchar(20) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "tp_user"
#

/*!40000 ALTER TABLE `tp_user` DISABLE KEYS */;
INSERT INTO `tp_user` VALUES (9,'phan','123123'),(14,'asd','123123');
/*!40000 ALTER TABLE `tp_user` ENABLE KEYS */;
