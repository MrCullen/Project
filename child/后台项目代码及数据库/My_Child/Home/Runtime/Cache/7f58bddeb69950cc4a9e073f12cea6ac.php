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
.STYLE1 {color: #000000}
-->
</style></head>
<body>
<p><span class="STYLE1">欢迎你：<?php echo (session('adminname')); ?></span><a href="__APP__/Login/doLoginout" target="_top">退出</a></p>
<hr size="7" width="100%" color="#3300FF" />

<table width="1299" height="500" border="1">
  <tr>
    <td width="260"><h3 class="STYLE1">量表管理</h3></br>
					<a href="__APP__/Question/look"><span class="STYLE1">查看量表</span><br/>
					<a href="__APP__/Question/test"><span class="STYLE1">量表测试</span><br/>
    				<a href="__APP__/Index?type_link=2"><span class="STYLE1">增加量表</span><br/>
					<hr size="4" width="100%" color="#CCCCCC" /></br></br>
					<h3 class="STYLE1">用户管理</h3>
					</br>
					<a href="__APP__/User/look"><span class="STYLE1">查看用户</span><br/>
					<a href=""><span class="STYLE1">删除用户</span><br/>
                    <a href=""><span class="STYLE1">查看用户测评结果</span><br/>
	&nbsp;</td>
    <td width="1242">
	<h3 align="center">健康行为量表</h3>
	<table width="569" height="50"  align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#99CC33">
	<!--<tr>
    <td colspan="4" bgcolor="#FFFFFF" class="title" align="center"><h3>健康行为量表</h3></td>
  	</tr>-->
	<?php if(is_array($date1)): foreach($date1 as $key=>$vo): ?><tr class="title">
    <td bgcolor="#FFFFFF" align="center" width="144"><a href="__APP__/Question/look_content?dates=<?php echo ($vo["LB_id"]); ?>"><?php echo ($vo["LB_title"]); ?></a></td>
    <td bgcolor="#FFFFFF" width="80">使用人数：<?php echo ($vo["LB_num"]); ?></td>
    <td bgcolor="#FFFFFF" align="center" width="131">创建时间：<?php echo (date('Y年m月d日H:i:s',$vo["createtime"])); ?></td>
<td bgcolor="#FFFFFF" align="center" width="131"><a href="__APP__/Question/test1?dates=<?php echo ($vo["LB_id"]); ?>">点击测试</a></td>  	</tr>
		</br><?php endforeach; endif; ?>
	</table>
	<hr/>
	<h3 align="center">心理量表</h3>
	<table width="569" height="50"  align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#99CC33">
	<!--<tr>
    <td colspan="4" bgcolor="#FFFFFF" class="title" align="center"><h3>健康行为量表</h3></td>
  	</tr>-->
	<?php if(is_array($date2)): foreach($date2 as $key=>$vo): ?><tr class="title">
    <td bgcolor="#FFFFFF" align="center" width="144"><a href="__APP__/Question/look_content?dates=<?php echo ($vo["LB_id"]); ?>"><?php echo ($vo["LB_title"]); ?></a></td>
    <td bgcolor="#FFFFFF" width="80">使用人数：<?php echo ($vo["LB_num"]); ?></td>
    <td bgcolor="#FFFFFF" align="center" width="131">创建时间：<?php echo (date('Y年m月d日H:i:s',$vo["createtime"])); ?></td>
    <td bgcolor="#FFFFFF" align="center" width="131"><a href="__APP__/Question/test1?dates=<?php echo ($vo["LB_id"]); ?>">点击测试</a></td>
  	</tr>
		</br><?php endforeach; endif; ?>
	</table>
	<hr/>
	<h3 align="center">智力量表</h3>
	<table width="569" height="50"  align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#99CC33" bgcolor="">
	<!--<tr>
    <td colspan="4" bgcolor="#FFFFFF" class="title" align="center"><h3>健康行为量表</h3></td>
  	</tr>-->
	<?php if(is_array($date3)): foreach($date3 as $key=>$vo): ?><tr class="title">
    <td bgcolor="#FFFFFF" align="center" width="144"><a href="__APP__/Question/look_content?dates=<?php echo ($vo["LB_id"]); ?>"><?php echo ($vo["LB_title"]); ?></a></td>
    <td bgcolor="#FFFFFF" width="80">使用人数：<?php echo ($vo["LB_num"]); ?></td>
    <td bgcolor="#FFFFFF" align="center" width="131">创建时间：<?php echo (date('Y年m月d日H:i:s',$vo["createtime"])); ?></td>
    <td bgcolor="#FFFFFF" align="center" width="131"><a href="__APP__/Question/test1?dates=<?php echo ($vo["LB_id"]); ?>">点击测试</a></td>
  	</tr>
		</br><?php endforeach; endif; ?>
	</table>
	<hr/>
	
	
	&nbsp;</td>
  </tr>
</table>

</body>
</html>