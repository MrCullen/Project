<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="__APP__/Message/doMess" method="post" enctype="multipart/form-data">
	留言内容：<input type="text" name="title"/></br>
	留言内容:<textarea name="content"></textarea></br>
	附　　件:<input type="file" name="filename"/></br>
	<input type="submit"/>
	
</form>
<?php echo ($ip = get_client_ip()); ?>
</body>
</html>