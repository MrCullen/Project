<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
body {
	background-image: url(../../../../010.jpg);
}
.STYLE2 {color: #666666}
.STYLE3 {color: #999999}
.STYLE4 {color: #333333}
-->
</style>
</head>
<body>
<p class="STYLE1">欢迎你：<?php echo (session('adminname')); ?><a href="__APP__/Login/doLoginout" target="_top">退出</a></p>
<hr size="7" width="100%" color="#3300FF" />

<table width="1299" height="500" border="1">
  <tr>
    <td width="260" class="STYLE1"><h3 class="STYLE1">量表管理</h3>
      <span class="STYLE1"></br>
					<a href="__APP__/Question/look"><span class="STYLE1">查看量表</span><br/>
					<a href="__APP__/Question/test"><span class="STYLE1">量表测试</span><br/>
    				<a href="__APP__/Index?type_link=2"><span class="STYLE1">增加量表</span><br/>
	  </span>
      <hr size="4" width="100%" color="#CCCCCC" />
      <span class="STYLE1"></br>
      </br>
	  </span>
      <h3 class="STYLE1">用户管理</h3>
      <span class="STYLE1"></br>
					<a href="__APP__/User/look"><span class="STYLE1">查看用户</span><br/>
					<a href=""><span class="STYLE1">删除用户</span><br/>
                    <a href=""><span class="STYLE1">查看用户测评结果</span><br/>
	&nbsp;</span></td>
    <td width="1242" class="STYLE1">
	<?php if(is_array($date1)): foreach($date1 as $key=>$vo): if((vo.LB_leibie == 0)): ?><b>健康行为量表</b>
	<?php elseif(vo.LB_leibie == 1): ?><b>心理量表</b>
	<?php else: ?><b> 智力量表</b><?php endif; ?></br>
		<b>量表题目</b>：<?php echo ($vo["LB_title"]); ?><br>
		<b>量表简介</b>：<?php echo ($vo["LB_content"]); ?><br>
		<b>创建时间</b>：<?php echo (date('Y年m月d日H:i:s',$vo["createtime"])); ?><br>
		<b>使用人数</b>：<?php echo ($vo["LB_num"]); ?>	<br><?php endforeach; endif; ?>
	<hr>
	<?php
 for($i=1;$i<=count($date2)-2;$i++){ echo "题目$i:".$date2[Question_.$i]; echo "</br>"; } ?>
		
	<hr>
	<b>量表选项及对应分数：</b></br>
	<?php
 for($i=1;$i<=(count($date3)-2)/2;$i++){ echo "选项$i:".$date3[A.$i]."　　　　　　　"."对应分数：".$date3[s.$i]; echo "</br>"; } ?>
	<hr>
	<b>量表测评结果及对应分数：</b></br>
	<?php
 echo "测评结果1:".$date4[result1]."&nbsp;&nbsp;&nbsp;对应分数区间：0--".$date4[resscore1]; echo "</br>"; for($i=2;$i<=(count($date4)-2)/2;$i++){ echo "测评结果$i:".$date4[result.$i]."&nbsp;&nbsp;&nbsp;对应分数区间：".$date4[resscore.($i-1)]."--".$date4[resscore.$i]; echo "</br>"; } ?>
	&nbsp;</td>
  </tr>
</table>
</body>
</html>