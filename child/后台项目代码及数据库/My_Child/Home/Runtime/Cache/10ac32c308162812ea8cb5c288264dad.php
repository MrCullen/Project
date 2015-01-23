<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<form action="__APP__/Question/qusadd" method="post" >
注：此类量表结果均分为几个等级，题目选项均相同</br>
	评估量表题目：<input type="text" name="LB_title"/></br>
	评估量表类别: <br><input type="checkbox" name="LB_LeiBie" value="0" />健康量表</br>
				<input type="checkbox" name="LB_LeiBie" value="1" />心理量表</br>
				<input type="checkbox" name="LB_LeiBie" value="2" />智力量表</br>
	量表简介:<textarea name="LB_content"></textarea></br>
	量表题目1:<input type="text" name="Question_1"/></br>
	量表题目2:<input type="text" name="Question_2"/></br>
	量表题目3:<input type="text" name="Question_3"/></br>
	量表题目4:<input type="text" name="Question_4"/></br>
	量表题目5:<input type="text" name="Question_5"/></br>
	量表题目6:<input type="text" name="Question_6"/></br>
	量表题目7:<input type="text" name="Question_7"/></br>
	量表题目8:<input type="text" name="Question_8"/></br>
	量表题目9:<input type="text" name="Question_9"/></br>
	量表题目10:<input type="text" name="Question_10"/></br>
	量表选项1：<input type="text" name="A"/> 选项对应分数：<input type="text" name="ScoreA"></br>
	量表选项2：<input type="text" name="B"/> 选项对应分数：<input type="text" name="ScoreB"></br>
	量表选项3：<input type="text" name="C"/> 选项对应分数：<input type="text" name="ScoreC"></br>
	量表选项4：<input type="text" name="D"/> 选项对应分数：<input type="text" name="ScoreD"></br>
	量表选项5：<input type="text" name="E"/> 选项对应分数：<input type="text" name="ScoreE"></br>
	
	
	<input type="submit"/>
	
</form>
</body>
</html>