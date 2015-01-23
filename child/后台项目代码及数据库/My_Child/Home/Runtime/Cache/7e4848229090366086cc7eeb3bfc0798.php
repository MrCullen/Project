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
.STYLE5 {color: #000000}
.STYLE6 {color: #000000}
-->
</style></head>



<body>
<p class="STYLE6">欢迎你：<?php echo (session('adminname')); ?><a href="__APP__/Login/doLoginout" target="_top" class="STYLE6">退出</a></p>
<hr size="7" width="100%" color="#3300FF" />
<table width="1299" height="500" border="1">
  <tr>
    <td width="260" ><h3 class="STYLE6">量表管理</h3>
      <span class="STYLE1"></br>
					<a href="__APP__/Question/look"><span class="STYLE6">查看量表</span><br/>
					<a href="__APP__/Question/test"><span class="STYLE6">量表测试</span><br/>
    				<a href="__APP__/Index?type_link=2"> <span class="STYLE6">增加量表</span></span><br/>
					<hr size="4" width="100%" color="#CCCCCC" /></br></br>
					<h3 class="STYLE6">用户管理</h3>
					<span class="STYLE6"></br>
					<a href="__APP__/User/look"><span class="STYLE6">查看用户</span><br/>
					<a href=""> <span class="STYLE6">删除用户</span><br/>
                    <a href=""> <span class="STYLE6">查看用户测评结果</span><br/>
	&nbsp;</span></td>
    <td width="1242">
	<?php if(($_GET['type_link']== 2)): ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {color: #000000}
-->
</style>
</head>
<script>
i=1;
j=2;
m=1;
function addrow()
{
i++;

str=document.all.mytable.outerHTML;
str=str.substring(0,str.length-16);
str+='<tr><td>量表问题'+i+'<input type="text" name="Question_'+i+'" size="50"></td></tr></tbody></table>';
document.all.mytable.outerHTML=str;
}
function addrowans()
{
j++;

str=document.all.myselect.outerHTML;
str=str.substring(0,str.length-16);
str+='<tr><td>量表选项'+j+'<input type="text" name="A'+j+'">选项对应分数<input type="text" name="s'+j+'" ></td></tr></tbody></table>';
document.all.myselect.outerHTML=str;
}
function addrowresult()
{
m++;
n=m+1;
str=document.all.myresult.outerHTML;
str=str.substring(0,str.length-16);
str+='<tr><td><input type="text" name="resscore'+m+'" size="5">-<input type="text" name="resscore'+n+'" size="5">	对应评估结果：<input type="text" name="result'+n+'" size="35"></br></td></tr></tbody></table>';
document.all.myresult.outerHTML=str;
}

</script>

<body>
<form action="__APP__/Question/qusadd" method="post" class="STYLE1" >

	评估量表题目：<input type="text" name="LB_title" size="35"/></br>
	评估量表类别: <br><input type="radio" name="LB_LeiBie" value="0" checked="checked" />健康行为量表 
					<input type="radio" name="LB_LeiBie" value="1" />心理量表 
					<input type="radio" name="LB_LeiBie" value="2" />
					智力量表</br>
					
	量表简介:</br>
	&nbsp;&nbsp;&nbsp; 
	<textarea name="LB_content" rows="5" cols="80" required></textarea>
	</br>
	<hr color="#006699">
<table id=mytable>
 <tr>
   <td>
     量表问题1<input type="text" name="Question_1" size="50">   </td>
 </tr>
</table>
<input type=button value="点击增加量表问题" onclick=addrow('mytable') align="center"></br>
<hr  color="#0066CC">

<table id=myselect>
 <tr>
   <td>
     量表选项1<input type="text" name='A1' >选项对应分数<input type="text" name="s1" >   </td>
 </tr>
 <tr>
   <td>
     量表选项2<input type="text" name='A2' >选项对应分数<input type="text" name="s2" >   </td>
 </tr>
</table>
<input type=button value="点击增加量表选项及对应分数" onclick=addrowans('myselect') align="center"></br>
<hr  color="#0066CC">

分数区间及对应结果</br>
<table id=myresult>
 <tr>
   <td>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0-<input type="text" name="resscore1" size="5">	对应评估结果：<input type="text" name="result1" size="35"></br>
	 <input type="text" name="resscore1" size="5">-<input type="text" name="resscore2" size="5">	对应评估结果：<input type="text" name="result2" size="35"></br>   </td>
 </tr>
</table>
<input type=button value="点击增加量表评估结果" onclick=addrowresult('myresult') align="center"></br>

<hr  color="#0066CC">

	<input type="submit" align="center" />
</form>
</body>
</html><?php endif; ?>
	
	&nbsp;</td>
  </tr>
</table>
</body>
</html>