# Host: localhost  (Version: 5.0.51b-community-nt-log)
# Date: 2014-12-04 00:04:14
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "tp_manager"
#

DROP TABLE IF EXISTS `tp_manager`;
CREATE TABLE `tp_manager` (
  `adminid` int(4) NOT NULL auto_increment,
  `adminname` varchar(50) NOT NULL,
  `adminpwd` varchar(20) NOT NULL,
  PRIMARY KEY  (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "tp_manager"
#

/*!40000 ALTER TABLE `tp_manager` DISABLE KEYS */;
INSERT INTO `tp_manager` VALUES (1,'twb','123'),(2,'123','123');
/*!40000 ALTER TABLE `tp_manager` ENABLE KEYS */;
