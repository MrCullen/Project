# Host: localhost  (Version: 5.0.51b-community-nt-log)
# Date: 2014-12-04 00:03:55
# Generator: MySQL-Front 5.3  (Build 4.13)

/*!40101 SET NAMES utf8 */;

#
# Source for table "tp_liangbiao"
#

DROP TABLE IF EXISTS `tp_liangbiao`;
CREATE TABLE `tp_liangbiao` (
  `LB_id` int(4) NOT NULL auto_increment,
  `LB_LeiBie` varchar(50) NOT NULL,
  `LB_title` varchar(50) NOT NULL,
  `LB_content` varchar(500) NOT NULL,
  `createtime` int(10) NOT NULL,
  `LB_num` int(10) NOT NULL default '0',
  PRIMARY KEY  (`LB_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "tp_liangbiao"
#

/*!40000 ALTER TABLE `tp_liangbiao` DISABLE KEYS */;
INSERT INTO `tp_liangbiao` VALUES (3,'1','儿童社交焦虑量表','儿童社交焦虑量表的条目涉及社交焦虑所伴发的情感、认知及行为，在本文之后，所附上的量表为最新的10个条目版本。条目使用3级评分制。(0:从不是这样；1：有时是这样；2：一直是这样）量表的得分从。0（可能性最低）到20（可能性最高）。分数越高，儿童社交焦虑可能性越大。',1416556447,12),(4,'0','克氏行为量表','克氏行为量表共十四项，乃美国克兰西(Clancy,1969)所编， 适用年龄为二岁至五岁儿童，施测需时约十分钟;采分方式为「 经常」得2分，「偶尔」得1分，「从不」得0分。总分大于14分 者即有自闭症倾向，超过三分之二得分者则确定是自闭症儿。 根据宋维村医师等人诊断结果，中文版的克氏行为量表可以筛 选出84%的自闭症儿。',1416568519,36),(5,'0','儿童多动症行为量表','此量表由教师或家长填写。共有16项。多动症行为量表可对疑有多动症的儿童做一预测，测查结果有重要的参考作用。计分方法：按是否经常出现或症状的严重程度分别以3（很多）、2（较多）、l（稍有）0（无）计分。多动症儿童的判别标准为： 总分＜5：基本可排除多动症； 总分5～15：有较轻的多动倾向； 总分15～ 30：有明显的多动症； 总分＞ 30：有严重的多动症。\r\n',1416806008,14),(6,'1','青少年忧郁情绪自我检视表','    很高兴你打开了这份量表，表示你已 Open Your Mind，开始和情绪做 Friend !\r\n请你按照最近两周的想法与感觉，回答“是”或“否”：\r\n注：此为忧郁情绪检核表，并非忧郁症的诊断，有相关忧郁情绪倾向请向专业的心理医生寻求协助。',1416806412,15);
/*!40000 ALTER TABLE `tp_liangbiao` ENABLE KEYS */;
