<?php
class LoginAction extends Action {
	//0:用户名不存在
	//1:密码错误
	//2：登陆成功
	public function doLogin(){
		//接受值，判断用户在数据库中是否存在
		$username=$_POST['username'];
		$userpwd=$_POST['userpwd'];
		$user=M('User');
		$History=M('History');
		$where['username']=$username;
		$count=$user->where($where)->find();
		$LooK=$user->field('userid')->where($where)->select();
		$date=$LooK[0];
		$date['usercreatetime']=time();	
		$History->data($date)->add();
	
		if($count>0){
			if($userpwd==$count['userpwd']){
				$arr=array('flag'=>2);
			}else{
				$arr=array('flag'=>1);
			}
			//$this->success('用户登陆成功',U('Index/index'));
		}else{
			$arr=array('flag'=>0);
			//$this->error("该用户不存在");
		}
		echo json_encode($arr);

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