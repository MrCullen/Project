<?php
class RegisterAction extends Action {
	public function reg(){
		$this->display();
	}
	//检查用户是否注册过
	public function checkName(){
		$adminname=$_GET['adminname'];
		$user=M('Manager');
		$where['adminname']=$adminname;
		$count=$user->where($where)->count();
		if($count>0){
			echo "不允许注册";
		}else{
			echo "允许注册";
		}
	}
	public function doReg(){
		//$username=$_POST['username'];
		//$password=$_POST['password'];
		//$repassword=$_POST['repassword'];
		//$sex=$_POST['sex'];
		$admin=M('Manager');
		$admin->create();
		//$data['username']=$username;
		//$data['password']=$password;
		//$data['sex']=$sex;
		$lastid=$admin->add($data);
		if($lastid){
			$this->success('管理员注册成功',U('Index/index'));
		}else{
			$this->error("管理员注册失败！");
		}
		
	}
}
?>