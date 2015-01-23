<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	background-image: url(../../../../010.jpg);
}
.STYLE1 {color: #FFFFFF}
.STYLE3 {color: #CCCCCC}
.STYLE4 {color: #666666}
.STYLE5 {color: #999999}
-->
</style></head>

<body>
<p class="STYLE1">欢迎你：<?php echo (session('adminname')); ?><a href="__APP__/Login/doLoginout" target="_top">退出</a></p>
<hr size="7" width="100%" color="#3300FF" />

<table width="1299" height="500" border="1">
  <tr>
    <td width="260" class="STYLE1"><h3>量表管理</h3></br>
					<a href="__APP__/Question/look"><span class="STYLE1">查看量表</span><br/>
					<a href="__APP__/Question/test"><span class="STYLE1">量表测试</span><br/>
    				<a href="__APP__/Index?type_link=2"><span class="STYLE1">增加量表</span><br/>
					<hr size="4" width="100%" color="#CCCCCC" /></br></br>
					<h3 class="STYLE1">用户管理</h3></br>
					<a href="__APP__/User/look"><span class="STYLE1">查看用户</span><br/>
					<a href=""><span class="STYLE1">删除用户</span><br/>
                    <a href=""><span class="STYLE1">查看用户测评结果</span><br/>
	&nbsp;</td>
    <td width="1242" class="STYLE1">
	
     <?php if(($LB["LB_leibie"] == 0)): ?><b>健康行为量表</b>
	<?php elseif($LB["LB_leibie"] == 1): ?><b>心理量表</b>
	<?php else: ?><b> 智力量表</b><?php endif; ?></br>
		<b>量表题目</b>：<?php echo ($LB["LB_title"]); ?><br>
		<b>量表简介</b>：<?php echo ($LB["LB_content"]); ?><br>
		<b>创建时间</b>：<?php echo (date('Y年m月d日H:i:s',$LB["createtime"])); ?><br>
		<b>使用人数</b>：<?php echo ($LB["LB_num"]); ?>	<br>
	
	<hr>
	
 <b>姓名</b>：<?php echo ($result[childname]); ?>， <b>性别</b>：<?php if($result[childsex]==0) echo "男"; else echo "女";?>， <b>年龄</b>：<?php echo ($result[childage]); ?>岁<br/>
   <b>测评结果：</b><?php echo ($result[result]); ?><br/>
    <b>测评时间：</b><?php echo (date('Y年m月d日H:i:s',$result["usercreatetime"])); ?>
</table>
</body>
</html>