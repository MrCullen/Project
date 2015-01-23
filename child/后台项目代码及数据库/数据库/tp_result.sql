# Host: localhost  (Version: 5.0.51b-community-nt-log)
# Date: 2014-12-04 00:04:23
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "tp_result"
#

DROP TABLE IF EXISTS `tp_result`;
CREATE TABLE `tp_result` (
  `id` int(4) NOT NULL auto_increment,
  `LB_id` int(4) NOT NULL,
  `result1` varchar(300) default NULL,
  `result2` varchar(300) default NULL,
  `result3` varchar(300) default NULL,
  `result4` varchar(300) default NULL,
  `result5` varchar(300) default NULL,
  `resscore1` int(4) default NULL,
  `resscore2` int(4) default NULL,
  `resscore3` int(4) default NULL,
  `resscore4` int(4) default NULL,
  `resscore5` int(4) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "tp_result"
#

/*!40000 ALTER TABLE `tp_result` DISABLE KEYS */;
INSERT INTO `tp_result` VALUES (3,3,'祝贺您，您的孩子较为健康希望能继续带您的孩子保持健康心情！','%>_<%,您需要多和孩子沟通哦！缓解孩子的焦虑状况','%>_<%，您需要多带孩子出去玩耍哦！孩子的得分较高，要多关注孩子呢！',NULL,NULL,3,7,20,NULL,NULL),(4,4,'您的孩子较为健康！但是还是别忘记和孩子多交流哦！','根据测评分数，您的孩子可能有轻微的自闭症倾向，请多注意！','根据测评分数，您的孩子极大可能有自闭症，请多关注孩子，并多关爱他！',NULL,NULL,10,14,28,NULL,NULL),(5,5,'基本可排除多动症','有较轻的多动倾向','有明显的多动症','有严重的多动症',NULL,5,15,30,48,NULL),(6,6,'你真的不错喔 ! 忧郁程度满低的， 平时就知道要如何调整情绪及纾解压力吧。 继续保持下去，别让忧郁情绪发酵 !','最近的心情是不是起起伏伏，有些令人烦恼的事 ? 要不要试着把问题及感受向自己信任的人 (例如朋友、父母或师长)说出来， 一起讨论解决的方法。 他们的经验会带给你不同的想法 ! 你也可以做些愉快的事，多做腹式深呼吸， 每天运动，保持活动的习惯，让自己有活力 !','是不是已持续一阵子都闷闷的 ? 觉得步伐、肩膀很沉重， 或是常常担心很多事，很焦虑 ? 你的忧郁程度已经颇高了，需要好好注意了。 赶快把自己的情况告诉学校的辅导老师或专业机构， 请他们给予协助， 求助不代表你不行，反而表示你聪明得善用资源呢 !',NULL,NULL,5,11,20,NULL,NULL);
/*!40000 ALTER TABLE `tp_result` ENABLE KEYS */;
