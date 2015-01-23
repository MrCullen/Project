# Host: localhost  (Version: 5.0.51b-community-nt-log)
# Date: 2014-12-04 00:03:43
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "tp_history"
#

DROP TABLE IF EXISTS `tp_history`;
CREATE TABLE `tp_history` (
  `id` int(4) NOT NULL auto_increment,
  `userid` int(4) NOT NULL,
  `LB_id` int(4) NOT NULL,
  `result` varchar(200) NOT NULL,
  `childname` varchar(50) NOT NULL,
  `childsex` tinyint(1) NOT NULL,
  `childage` varchar(20) NOT NULL,
  `usercreatetime` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

#
# Data for table "tp_history"
#

/*!40000 ALTER TABLE `tp_history` DISABLE KEYS */;
INSERT INTO `tp_history` VALUES (28,9,4,'根据测评分数，您的孩子极大可能有自闭症，请多关注孩子，并多关爱他！','asdf',0,'12',1416997240),(33,14,5,'','',0,'',1416999578),(34,14,3,'祝贺您，您的孩子较为健康希望能继续带您的孩子保持健康心情！','',0,'',1416999721),(35,14,3,'祝贺您，您的孩子较为健康希望能继续带您的孩子保持健康心情！','',0,'',1417000359),(36,14,5,'你真的不错喔 ! 忧郁程度满低的， 平时就知道要如何调整情绪及纾解压力吧。 继续保持下去，别让忧郁情绪发酵 !','',0,'',1417000759),(37,14,0,'','',0,'',1417000921),(38,14,0,'','',0,'',1417000922),(39,14,5,'','',0,'',1417000924),(40,14,6,'你真的不错喔 ! 忧郁程度满低的， 平时就知道要如何调整情绪及纾解压力吧。 继续保持下去，别让忧郁情绪发酵 !','',0,'',1417001181),(41,14,6,'你真的不错喔 ! 忧郁程度满低的， 平时就知道要如何调整情绪及纾解压力吧。 继续保持下去，别让忧郁情绪发酵 !','',0,'',1417001368),(42,14,6,'你真的不错喔 ! 忧郁程度满低的， 平时就知道要如何调整情绪及纾解压力吧。 继续保持下去，别让忧郁情绪发酵 !','',0,'',1417001453);
/*!40000 ALTER TABLE `tp_history` ENABLE KEYS */;
