<?php
	class AnswerModel extends RelationModel{
		protected $_auto=array(
			array('createtime','time',1,'function'),
		);
		protected $_link=array(
			'Answer'=>array(
				
				 'mapping_type'=>BELONGS_TO,
          		 'class_name'=>'Answer',
          		 'foreign_key'=>'LB_id',
           		 'mapping_name'=>'Answer',
				// 'mapping_fields'=>'username',
				 //'as_fields'=>'username',
			)
		);
		protected function getid(){
			return $_SESSION['id'];
		}
	}
?>