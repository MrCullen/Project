<?php
 // 本类由系统自动生成，仅供测试用途
class QuestionAction extends Action{
	//添加量表方法（已完成）
		
    public function qusadd(){
		
		//添加量表表单
		$question=D('Liangbiao');
		
		$question->create();
		$question->createtime=time();	
		$lastId=$question->add();
		$ANSWER=M('Answer');
		$ANSWER->create();
		$ANSWER->LB_id=$lastId;
		$lastId1=$ANSWER->add();
		$Content=D('Liangcontent');
		//添加量表内容
		$Content->create();
		$Content->LB_id=$lastId;
		$lastId2=$Content->add();
		$result=D('Result');
		//添加量表结果
		$result->create();
		$result->LB_id=$lastId;
		$lastId3=$result->add();
	
		if($lastId&&$lastId1&&lastId2&&$lastId3){
			$this->success('添加成功');
			
		} else{
			$this->error('添加失败');
			}
	}
	//分类别查看量表（已完成）
	public function look(){
		$LB=M('Liangbiao');
		$arr1=$LB->where('LB_LeiBie=0')->select();
		$arr2=$LB->where('LB_LeiBie=1')->select();
		$arr3=$LB->where('LB_LeiBie=2')->select();
		$this->assign('date1',$arr1);
		$this->assign('date2',$arr2);
		$this->assign('date3',$arr3);
		$this->display();	
	}
	//查看某一具体量表(已完成)
	public function look_content(){
		$LB=D('Liangbiao');
		$LBcontent=M('Liangcontent');
		$LBanswer=M('Answer');
		$LB_result=M('Result');
		$w=$_GET['dates'];
		$condition['LB_id'] =$w;
		$arr1=$LB->where($condition)->select();
		$arr2=$LBcontent->where($condition)->select();
		$arr3=$LBanswer->where($condition)->select();
		$arr4=$LB_result->where($condition)->select();	//$arr[]=array_merge($arr1[0],$arr2[0],$arr3[0]);
		$arr2=array_filter($arr2[0]); 
		function isHave($var){  
    		if($var!="") return true;  
		}  
		$arr3=array_filter($arr3[0],"isHave");
		$arr4=array_filter($arr4[0],"isHave"); 
		
		$this->assign('date1',$arr1);
		$this->assign('date2',$arr2);
		$this->assign('date3',$arr3);
		$this->assign('date4',$arr4);
		$this->display();	
	}
	public function test(){
		$LB=M('Liangbiao');
		$arr1=$LB->where('LB_LeiBie=0')->select();
		$arr2=$LB->where('LB_LeiBie=1')->select();
		$arr3=$LB->where('LB_LeiBie=2')->select();
		$this->assign('date1',$arr1);
		$this->assign('date2',$arr2);
		$this->assign('date3',$arr3);
		$this->display();
	}
	//测试问卷表
	public function test1(){
		$LB=D('Liangbiao');
		$LBcontent=M('Liangcontent');
		$LBanswer=M('Answer');
		$LB_result=M('Result');
		$w=$_GET['dates'];
		$condition['LB_id'] =$w;
		$arr1=$LB->where($condition)->select();
		$arr2=$LBcontent->where($condition)->select();
		$arr3=$LBanswer->where($condition)->select();
		$arr4=$LB_result->where($condition)->select();	
		//$arr[]=array_merge($arr1[0],$arr2[0],$arr3[0]);
		$arr2=array_filter($arr2[0]); 
		
		function isHave($var){  
    		if($var!="") return true;  
		}  
		$arr3=array_filter($arr3[0],"isHave");
		$arr4=array_filter($arr4[0],"isHave"); 
		dump($arr2);
		dump($arr3);
		
		$this->assign('date1',$arr1);
		$this->assign('date2',$arr2);
		$this->assign('date3',$arr3);
		$this->assign('date4',$arr4);
		$this->display();	
		
	}
	//对用户测试结果进行处理
	public function add(){
		$LB=D('Liangbiao');
		$LBcontent=M('Liangcontent');
		$LBanswer=M('Answer');
		$w=$_GET['dates'];
		$condition['LB_id'] =$w;
		$arr1=$LB->where($condition)->select();
		$arr2=$LBcontent->where($condition)->select();
		$arr3=$LBanswer->where($condition)->select();
		//$arr[]=array_merge($arr1[0],$arr2[0],$arr3[0]);
		$arr2=array_filter($arr2[0]); 
		
		
		$arr3=array_filter($arr3[0]); 
		$arr4=array('1'=>'A','2'=>'B','3'=>'C','4'=>'D','5'=>'E',);	
		$this->assign('date1',$arr1);
		$this->assign('date2',$arr2);
		$this->assign('date3',$arr3);
		$this->assign('date4',$arr4);	
		//$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
		
	
		/*$message=D('Message');
		$message->create();
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		if(!$upload->upload()) {// 上传错误提示错误信息
		$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
		$info=$upload->getUploadFileInfo();
		}
		$message->filename = $info[0]['savename'];
		//$message->time=time();	
		//$message->uid=$_SESSION['id'];	
		$lastId=$message->add();
		if($lastId){
			$this->success('留言成功');
			
		} else{
			$this->error('留言失败');
		}*/	

}