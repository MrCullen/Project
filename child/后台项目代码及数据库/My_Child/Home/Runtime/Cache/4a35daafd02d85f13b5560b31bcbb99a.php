<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<p>欢迎你：<?php echo (session('adminname')); ?><a href="__APP__/Login/doLoginout" target="_top">退出</a></p>
<hr size="7" width="100%" color="#3300FF" />

<table width="1299" height="500" border="1">
  <tr>
    <td width="260"><h3>量表管理</h3></br>
					<a href="__APP__/Question/look">查看量表<a/><br/>
    				<a href="__APP__/Index?type_link=2">增加量表<a/><br/>
					<hr size="4" width="100%" color="#CCCCCC" /></br></br>
					<h3>用户管理</h3></br>
					<a href="__APP__/User/look">查看用户<a/><br/>
					<a href="">删除用户<a/><br/>
                    <a href="">查看用户测评结果<a/><br/>
	&nbsp;</td>
    <td width="1242">
	<?php if(is_array($date1)): foreach($date1 as $key=>$vo): if((vo.LB_leibie == 0)): ?>心理量表
	<?php elseif(vo.LB_leibie == 1): ?>健康量表
	<?php else: ?> 智力量表<?php endif; ?></br>
		量表题目：<?php echo ($vo["LB_title"]); ?><br>
		量表简介：<?php echo ($vo["LB_content"]); ?><br>
		创建时间：<?php echo ($vo["createtime"]); ?><br>
		使用人数：<?php echo ($vo["LB_num"]); ?>	<br><?php endforeach; endif; ?>
	<form action="" method="post" name="MyLb">
		<h3>请完善测试儿童资料</h3>
		请输入测试儿童姓名<input type="text" name="childname" width="20"></br>
		请选择测试儿童性别<input type="radio" name="childsex" value="0">男&nbsp;&nbsp;<input type="radio" name="childsex" value="1">女
		请输入测评儿童年龄<input type="text" name="childage" width="2">
		<hr size="4" color="#660099" style="">
		<?php
 for($i=1;$i<=count($date2)-2;$i++){ echo "题目$i:".$date2[Question_.$i]; echo "</br>"; } ?>
	</form>
	<hr>
	
		&nbsp;</td>
  </tr>
</table>

</body>
</html>