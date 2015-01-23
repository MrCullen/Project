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
.STYLE1 {color:#000000}
-->
</style></head>

<body>
<p><span class="STYLE1">欢迎你：<?php echo (session('adminname')); ?></span><a href="__APP__/Login/doLoginout" target="_top">退出</a></p>
<hr size="7" width="100%" color="#3300FF" />

<table width="1299" height="500" border="1">
  <tr>
    <td width="260"><h3 class="STYLE1">量表管理</h3>
    </br>
					<a href="__APP__/Question/look"><span class="STYLE1">查看量表</span><br/>
    				<a href="__APP__/Index?type_link=2"><span class="STYLE1">增加量表</span><br/>
                  
					<hr size="4" width="100%" color="#CCCCCC" /></br></br>
					<h3 class="STYLE1">用户管理</h3></br>
					<a href="__APP__/User/look"><span class="STYLE1">查看用户</span><br/>
					<a href=""><span class="STYLE1">删除用户</span><br/>
                    <a href=""><span class="STYLE1">查看用户测评结果</span><br/>
	&nbsp;</td>
    <td width="1242">
	<table width="569" height="141"  align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#99CC33">
  <tr>
    <td colspan="4" bgcolor="#FFFFFF" class="title" align="center">用户信息</td>
  </tr>
  <tr class="title">
    <td bgcolor="#FFFFFF" width="44">ID</td>
    <td bgcolor="#FFFFFF" width="120">用户名</td>
    <td bgcolor="#FFFFFF" width="111">用户密码</td>
    <td bgcolor="#FFFFFF" width="111">操作</td>
  </tr>
  <?php if(is_array($list)): foreach($list as $key=>$user): ?><tr class="content">
    <td bgcolor="#FFFFFF"><?php echo ($user["userid"]); ?></td>
    <td bgcolor="#FFFFFF"><?php echo ($user["username"]); ?></td>
    <td bgcolor="#FFFFFF"><?php echo ($user["userpwd"]); ?></td>
    <td bgcolor="#FFFFFF"><a href="__URL__/lookresult?userid=<?php echo ($user["userid"]); ?>">查看用户测评结果</a></td>
  </tr><?php endforeach; endif; ?>
  
</table>
 
 <p align="center">  <?php echo ($page); ?></p>
 
	</td>
  </tr>
</table>

</body>
</html>