<?php
class RegisterAction extends Action {
	public function reg(){
		$this->display();
	}
	//检查用户是否注册过
	/*public function checkName(){
		$username=$_POST['username'];
		$user=M('User');
		$where['username']=$username;
		$count=$user->where($where)->count();
		if($count>0){
			echo "不允许注册";
		}else{
			echo "允许注册";
		}
	}*/
	public function doReg(){

		$user=M('User');
		$username=$_POST['username'];
		$where['username']=$username;
		$count=$user->where($where)->count();
		if($count>0){	
			$arr=array('flag'=>0);
		}else{
			$user->create();
			$lastid=$user->add();
			$arr=array('flag'=>1);
		}
		$arr['name']=$_POST['username'];
		echo json_encode($arr);
	}
}
?>