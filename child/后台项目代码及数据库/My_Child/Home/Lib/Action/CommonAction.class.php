<?php
	class CommonAction extends Action{
		public function _initialize(){
			if(!(isset($_SESSION['adminname']))||$_SESSION['adminname']==''){
				$this->redirect('Login/login');
			}
		}
	}
?>