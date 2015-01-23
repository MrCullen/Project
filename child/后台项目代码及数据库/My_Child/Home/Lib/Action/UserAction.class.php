<?php
class UserAction extends Action {

	//查看用户
	public function look(){
		$user=M('user');
		import('ORG.Util.Page');// 导入分页类
		$count= $user->count();// 查询满足要求的总记录数
		$Page= new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
		$show=$Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$arr=$user->limit($Page->firstRow.','.$Page->listRows)->select();
		
		//dump($arr_user);
		$this->assign('list',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	public function lookresult(){
		$w=$_GET['userid'];
		$condition['userid'] =$w;
		$His=D('History');
		$user=M('user');
		$arr1=$user->where($condition)->select();
		$arr2=$His->where($condition)->select();
		$this->assign('user',$arr1[0]);
		$this->assign('result',$arr2);
		$this->display();
	}
	public function lookresultselect(){
		$w=$_GET['childname'];
		$condition['childname'] =$w;
		$His=D('History');
		$LB=D('Liangbiao');
		$arr1=$His->where($condition)->select();
		$arr2=$His->field('LB_id')->where($condition)->select();
		for($i=0;$i<count($arr2);$i++){
			$LB_id['LB_id']=$arr2[$i][LB_id];
			$arr3[$i]=$LB->where($LB_id)->select();
		}
		$this->assign('result',$arr1[0]);
		$this->assign('LB',$arr3);
		$this->display();
	}
	public function lookresultxiangxi(){
		$w['childname']=$_GET['childname'];
		$w['LB_id']=$_GET['LB_id'];
		$lb['LB_id']=$_GET['LB_id'];
		$condition=$w;
		$His=D('History');
		$LB=D('Liangbiao');
		$arr1=$His->where($condition)->select();
		$arr2=$LB->where($lb)->select();
		$this->assign('result',$arr1[0]);
		$this->assign('LB',$arr2[0]);
		$this->display();
	}
	
}
?>