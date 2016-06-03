<?php
	include_once ROOT.'/models/Admin.php';
	include_once ROOT.'/models/Reviews.php';
	
	class AdminController
	{
		public function actionIndex()
		{
			
			if(empty($_COOKIE['session']))
			{
				header('Location:/admin/login');
				
			} else {
				
				header('Location:/admin/review');
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
				return;
			}
			
			if( $data['log'] != $admin['admin_login'] || $data['pass'] != $admin['admin_password'] ){
				header('Location:/admin/login');
				return;
			}
			
			setCookie("session",serialize($admin),time()+3600);
			header('Location:/admin');
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
		
		public function actionReview()
		{
			$reviewsListNoAprove = array();
			$reviewsListNoAprove = Reviews::getReviewsListNoAprove();
			$reviewsList = array();
			$reviewsList = Reviews::getReviewsList();
			require_once(ROOT.'/views/admin_review.php');		
			return true;
		}
		
		public function actionDelete()
		{
			$id = $_POST['id'];
			$id = htmlspecialchars($id);
 			$id = stripslashes($id);
 			$id = trim($id);
			
			if(!empty($id))
			{
				$delete = Reviews::deleteReview($id);
				header('Location:/admin');
			}
		}
		
		public function actionUpdate()
		{
			$id = $_POST['id'];
			$id = htmlspecialchars($id);
 			$id = stripslashes($id);
 			$id = trim($id);
			
			if(!empty($id))
			{
				$update = Reviews::updateReview($id);
				header('Location:/admin');
			}
		}
	}

?>