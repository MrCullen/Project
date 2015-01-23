<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
		//判断用户是否登录过
	
			$this->display();
	
		
    }
	public function top(){
		
		$this->display();	
	}
	public function left(){
		$message=D('Message');
		import('ORG.Util.Page');// 导入分页类
		$count= $message->count();// 查询满足要求的总记录数
		$Page= new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$arr=$message->relation(true)->limit($Page->firstRow.','.$Page->listRows)->select();
		//dump($arr);
		foreach($arr as $v){
			$id=$v['uid'];
			$user=M('User');
			$arr_user[]=$user->field('username')->find($id);
		}
		//dump($arr_user);
		$this->assign('list',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();	
	}
	public function right(){
		import('ORG.Net.IpLocation');// 导入IpLocation类
		$Ip = new IpLocation(); // 实例化类
		$location = $Ip->getlocation(''); // 获取某个IP地址所在的位置
		dump($location);
		$this->display();	
	}
}
?>