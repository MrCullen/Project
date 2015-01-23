<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script>
	$(function(){
		$('img[title="login"]').click(function(){
		$("form").submit();
		//alert(111);
		});
		$('img[class="register"]').click(function(){
	window.location='__APP__/Register/reg';
		})
	});
</script>
<style type="text/css">
<!--
body {
	background-image: url();
	background-repeat: no-repeat;
	background-position: center top;
}
.STYLE3 {
	font-family: "宋体";
	font-weight: bold;
	color: #3300FF;
}
-->
</style>
</head>

<body>

<form action="__URL__/doLogin" method="post" name="myFrom">
<div align="center">
		<h2><span class="STYLE3">儿童健康评估系统后台管理</span></h2>
  </div>
	<b>管理员：</b><input type="text" name="adminname"/><br/>
	<b>密　码：</b><input type="password" name="adminpwd"/><br/>
	<b>验证码：</b><input type="text" name="code"/><img src="__APP__/Public/code" onclick="this.src=this.src+'?'+Math.random()"><br/>
	<img src="__PUBLIC__/images/b05.gif" title='login' class="submit"/>
	<img src="__PUBLIC__/images/b04.gif" class="register"/>
	
</form>
</body>
</html>