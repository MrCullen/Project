# Host: localhost  (Version: 5.0.51b-community-nt-log)
# Date: 2014-12-04 00:03:30
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "tp_answer"
#

DROP TABLE IF EXISTS `tp_answer`;
CREATE TABLE `tp_answer` (
  `Aid` int(4) NOT NULL auto_increment,
  `LB_id` int(4) NOT NULL,
  `A1` varchar(100) default NULL,
  `A2` varchar(100) default NULL,
  `A3` varchar(100) default NULL,
  `A4` varchar(100) default NULL,
  `A5` varchar(100) default NULL,
  `s1` int(4) default NULL,
  `s2` int(4) default NULL,
  `s3` int(4) default NULL,
  `s4` int(4) default NULL,
  `s5` int(4) default NULL,
  PRIMARY KEY  (`Aid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "tp_answer"
#

/*!40000 ALTER TABLE `tp_answer` DISABLE KEYS */;
INSERT INTO `tp_answer` VALUES (3,3,'从不这样','有时这样','一直这样 ',NULL,NULL,0,1,2,NULL,NULL),(4,4,'从不','偶尔','经常',NULL,NULL,0,1,2,NULL,NULL),(5,5,'很多','较多','稍有','无',NULL,3,2,1,0,NULL),(6,6,'是','否',NULL,NULL,NULL,1,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tp_answer` ENABLE KEYS */;
