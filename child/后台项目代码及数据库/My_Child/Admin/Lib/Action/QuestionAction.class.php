<?php
 //本类由系统自动生成，仅供测试用途
class QuestionAction extends Action{
	//添加量表方法
	public function question(){
		if(array_key_exists("tableType",$_POST)){
			$a=$_POST["tableType"];
			$condition['LB_LeiBie'] =$a;
			$question=M('Liangbiao');
			$arr1=$question->where($condition)->getfield('LB_id,LB_title');	
			//$arr1=$question->field("LB_title")->where($condition)->select();
			//dump($arr1);
			
			//$date1=array();
			$arr1=array_values($arr1);
			$b[11] = $arr1[0];
			$b[12] = $arr1[1];
			
			$arr1=json_encode($b);
			echo $arr1;
			}
			else if(array_key_exists("tableName",$_POST)){
				$arr=array();
				$arr['ksxwlb']="克氏行为量表";
				$arr['etddzxwlb']="儿童多动症行为量表";
				$arr['etsjjllb']="儿童社交焦虑量表";
				$arr['qsnyyqxzwjsb']="青少年忧郁情绪自我检视表";
				//dump($_POST);
				$a=$arr[$_POST["tableName"]];
				//dump($a);
				$condition['LB_title'] =$a;
				$question=M('Liangbiao');
				$LBselect=M('Answer');
				$History=M('History');
				$HisID=$History->field('id')->order('id desc') ->find();
				$arr1=$question->field('LB_id,LB_content')->where($condition)->select();
				$arr1=$arr1[0];
				$LB_id=$arr1['LB_id'];
				$condition['LB_id']=$LB_id;
				$History->where($HisID)->setField('childname',$_POST['childname']);
				$History->where($HisID)->setField('childage',$_POST['childage']);
				$History->where($HisID)->setField('childsex',$_POST['childsex']);
				$History->where($HisID)->save($condition);
				//sdump($HisID);
				$arr2=$LBselect->where($condition)->select();
				//dump($arr2);
				function isHave($var){  
    				if($var!="") return true;  
				}  
				$arr2=array_filter($arr2[0],"isHave");
				//dump($arr2);
				$count['count']=count($arr2)/2-1;
				$arr3=array_merge($arr1,$count);
				
				echo json_encode($arr3);
				
				
			
		}else if(array_key_exists("tableneirong",$_POST)){
			$arr=array();
			$arr['ksxwlb']="克氏行为量表";
			$arr['etddzxwlb']="儿童多动症行为量表";
			$arr['etsjjllb']="儿童社交焦虑量表";
			$arr['qsnyyqxzwjsb']="青少年忧郁情绪自我检视表";
			//dump($_POST);
			$a=$arr[$_POST["tableneirong"]];
			$condition['LB_title'] =$a;
			$LiangContent=M('Liangbiao');
			$Liangquestion=M('Liangcontent');
			$LBselect=M('Answer');
			$LB_result=M('Result');
			$History=M('History');
			$HisID=$History->field('id')->order('id desc') ->find();
			$arr1=$LiangContent->field('LB_id,LB_num')->where($condition)->select();
			
			$arr1=$arr1[0];
			$LB_id=$arr1['LB_id'];
			$condition['LB_id']=$LB_id;
			$arr1['LB_num']=$arr1['LB_num']+1;
			$LiangContent->where($condition)->setField('LB_num',$arr1['LB_num']);
			$LB_result=$LB_result->where($condition)->select();
			$arr2=$LBselect->where($condition)->select();
			$arr3=$Liangquestion->where($condition)->select();
			$arr3=array_filter($arr3[0]);
			$LB_result=array_filter($LB_result[0]);
			
			function isHave($var){  
    				if($var!="") return true;  
				}  
			$arr2=array_filter($arr2[0],"isHave");
			$count['questionnumber']=count($arr3)-2;
			$countLBresult=(count($LB_result)-2)/2;
			$arr4=array_merge($arr2,$count,$arr3);	
			//dump($arr4);
			//计算评分
			
			$countnum=count($arr2)/2-1;
			for($i=1;$i<=$countnum;$i++)
			{
				$fenshu[$i]=$arr2[s.$i];
			}
			$result=array_count_values($_POST);
			for($i=1;$i<=$countnum;$i++){
				$totle[$i]=$result[$i]*$fenshu[$i];
			}
			
			$totle=array_sum($totle);
			
			for($i=1;$i<=$countLBresult;$i++)
			{
				if($totle<=$LB_result[resscore.$i]){
					$result1['result']=$LB_result[result.$i];
					$History->where($HisID)->setField('result',$result1['result']);
					 break;
				}
			}
			
			$arr4=array_merge($arr4,$result1);
		
			echo json_encode($arr4);
		}
	}
	
		/*foreach($arr1 as $key=>$value){
			$date1[$key]=urlencode($value);
		}		
			$arr1=json_encode($arr1);
			echo urldecode(json_encode($date1));
		}*/
		
	
    public function qusadd(){
		$countnum=3;
		$arr2=array();
		$arr2['s1']=1;
		$arr2['s2']=2;
		$arr2['s3']=3;
	
	for($i=1;$i<=$countnum;$i++)
			{
				$a[$i]=$arr2['s'.$i];
			}
		dump($a);
		exit;	
		$question=D('Liangbiao');
		
		$question->create();
		//$question->createtime=time();	
		$lastId=$question->add();
		$Select=D('Answer');
		$Select->create();
		$Select->LB_id=$lastId;
		
		$lastId1=$Select->add();
		$Content=D('Liangcontent');
		$Content->create();
		$Content->LB_id=$lastId;
		$lastId2=$Content->add();
		if($lastId&&$lastId1&&lastId2){
			$this->success('添加成功');
			
		} else{
			$this->error('添加失败');
			}
	}
	//分类别查看量表
	public function look(){
	//include COMMON_PATH.'common.php';
		$LB=M('Liangbiao');
		$arr1=$LB->field('LB_title')->where('LB_LeiBie=0')->select();
		$arr2=$LB->field('LB_title')->where('LB_LeiBie=1')->select();
		$arr3=$LB->field('LB_title')->where('LB_LeiBie=2')->select();
		dump($arr1);
		$date1=array();
		foreach($arr1[0] as $key=>$value){
			$date1[$key]=urlencode($value);
		}
		$date2=array();
		foreach($arr2[0] as $key=>$value){
			$date2[$key]=urlencode($value);
		}
		$date3=array();
		foreach($arr3[0] as $key=>$value){
			$date3[$key]=urlencode($value);
		}
		echo urldecode(json_encode($date1));//输出类别0
		echo urldecode(json_encode($date2));//输出类别0
		echo urldecode(json_encode($date3));//输出类别0
	}
	//查看某一具体量表
	public function look_content(){
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