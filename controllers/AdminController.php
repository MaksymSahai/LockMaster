<?php
	include_once ROOT.'/models/Admin.php';
	
	class AdminController
	{
		public function actionIndex()
		{
			
			if(empty($_COOKIE['session']))
			{
				header('Location:/admin/login');
				
			} else {
				
				require_once(ROOT.'/views/admin_dashboard.php');
				return;
								
			}
		}
		public function actionLogin(){
			
			if(!empty($_COOKIE['session']))
			{
				header('Location:/admin');
			} 
			else 
			{
				require_once(ROOT.'/views/admin.php');
			}
			
		}
		public function actionProcess()
		{
			
			$admin = Admin::getAdmin();
			
			$data  = $_POST;
			
			if( empty( $data ) || empty( $data['log'] ) || empty( $data['pass'] ) ){
				header('Location:/admin/login');
			}
			
			if( $data['log'] != $admin['admin_login'] || $data['pass'] != $admin['admin_password'] ){
				header('Location:/admin/login');
			}
			else
			{
				setCookie("session",serialize($admin),time()+3600);
				header('Location:/admin');
			}
		}
		public function actionExit()
		{
			if(!empty($_COOKIE['session']))
			{
				setcookie ("session", "", time() - 3600);
				header('Location:/admin/login');
			}
			else{
				header('Location:/admin/login');
			}
		}
	}

?>