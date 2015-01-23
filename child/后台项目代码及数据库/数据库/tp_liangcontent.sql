# Host: localhost  (Version: 5.0.51b-community-nt-log)
# Date: 2014-12-04 00:04:04
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "tp_liangcontent"
#

DROP TABLE IF EXISTS `tp_liangcontent`;
CREATE TABLE `tp_liangcontent` (
  `id` int(4) NOT NULL auto_increment,
  `LB_id` int(4) NOT NULL,
  `Question_1` varchar(100) default NULL,
  `Question_2` varchar(100) default NULL,
  `Question_3` varchar(100) default NULL,
  `Question_4` varchar(100) default NULL,
  `Question_5` varchar(100) default NULL,
  `Question_6` varchar(100) default NULL,
  `Question_7` varchar(100) default NULL,
  `Question_8` varchar(100) default NULL,
  `Question_9` varchar(100) default NULL,
  `Question_10` varchar(100) default NULL,
  `Question_11` varchar(100) default NULL,
  `Question_12` varchar(100) default NULL,
  `Question_13` varchar(100) default NULL,
  `Question_14` varchar(100) default NULL,
  `Question_15` varchar(100) default NULL,
  `Question_16` varchar(100) default NULL,
  `Question_17` varchar(100) default NULL,
  `Question_18` varchar(100) default NULL,
  `Question_19` varchar(100) default NULL,
  `Question_20` varchar(100) default NULL,
  `Question_21` varchar(100) default NULL,
  `Question_22` varchar(100) default NULL,
  `Question_23` varchar(100) default NULL,
  `Question_24` varchar(100) default NULL,
  `Question_25` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "tp_liangcontent"
#

/*!40000 ALTER TABLE `tp_liangcontent` DISABLE KEYS */;
INSERT INTO `tp_liangcontent` VALUES (3,3,'我害怕在别的孩子面前做没做过的事情','我担心被人取笑','我周围都是我不认识的小朋友时，我觉得害羞','我和小伙伴一起时很少说话','我担心其它孩子会怎样看待我','我觉得小朋友们取笑我','我和陌生的小朋友说话时感到紧张','我担心其它孩子会怎样说我','我只同我很熟悉的小朋友说话','我担心别的小朋友会不喜欢我',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,4,'不易与别人混在一起玩','听而不闻，像是聋子','教他学什么，他强烈反对，如拒绝模仿说话活动做','不顾危险','不能接受日常习惯的变化','以手势表达需要','莫名其妙的笑','不喜欢被人拥抱','不停地动，坐不住，活动量大 ','不望对方的脸，避免视线的接触','.过度偏爱某些物品 ','喜欢旋转的东西','反复又反复做些怪异的动作或玩耍','对周围漠不关心',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,5,'坐立不安，活动过多','上课时随便讲话或叫喊','上课时小动作多','注意力不集中，容易分心','兴奋激动，容易冲动，与人争吵','经常惹人或干扰他人活动 ','作业不认真，不能集中思想，边做边玩','做事不能有始有终','情绪改变快 ','集体活动时好占上风，争先恐后，不守纪律','学习成绩差或时好时坏 ','不爱惜东西，经常弄坏学习用品','说谎，骂人或打架 ','随便拿父母的钱，或在外有偷窃行为','逃学或旷课','要求必须立即满足',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,6,'我觉得现在比以前容易失去耐心','我比平常更容易烦躁','我想离开目前的生活环境','我变得比以前容易生气','我心情变得很不好','我变得整天懒洋洋、无精打采','我觉得身体不舒服','我常觉得胸闷','最近大多数时候我觉得全身无力','我变得睡眠不安宁，很容易失眠或惊醒','我变得很不想上学','我变得对许多事都失去兴趣','我变得坐立不安，静不下来',' 我变得只想一个人独处','我变得什么事都不想做','无论我做什么都不会让我变得更好','我觉得自己很差劲','我变得没有办法集中注意力',' 我对自己很失望','我想要消失不见',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tp_liangcontent` ENABLE KEYS */;
