<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<!--<script>
	$(function(){
		$('img[title="login"]').click(function(){
		$("form").submit();
		//alert(111);
		});
		$('img[class="register"]').click(function(){
	window.location='__APP__/Register/reg';
		})
	});
</script>-->
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<span class="STYLE1"></span>

<form action="__APP__/Question/question" method="post" name="myFrom">
	管理员：<input type="text" name="tableneirong"/><br/>
	密　码：<input type="password" name="userpwd"/><br/>
	验证码：<input type="text" name="childage"/>
	
	<input name="提交" type="submit" />
	
</form>
</body>
</html>