<?php
class LoginAction extends Action {
	public function login(){
	$this->display();
	}
	public function doLogin(){
		//接受值，判断用户在数据库中是否存在
		$adminname=$_POST['adminname'];
		$adminpwd=$_POST['adminpwd'];
		
		
		$code=$_POST['code'];
		if(md5($code)!=$_SESSION['code']){
		$this->error("验证码不正确");
		}
		$user=M('Manager');
		$where['adminname']=$adminname;
		$where[md5('adminpwd')]=$adminpwd;
		$count=$user->field('adminid')->where($where)->find();

		if($count>0){
			session_start();
			$_SESSION['adminname']=$adminname;
			$_SESSION['id']=$count['id'];
			$this->success('用户登陆成功',U('Index/index'));
		}else{
			$this->error("该用户不存在");
		}
	}
	//退出方法
	public function doLoginout(){
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-1,'/');
		}
		session_destroy();
		$this->redirect('Index/index');
	}
}
?>