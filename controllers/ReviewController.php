<?php
	include ROOT.'/components/count.php';
	include_once ROOT.'/models/Reviews.php';
	
	class ReviewController
	{
		public function actionList()
		{			
			$reviewsList = array();
			$reviewsList = Reviews::getReviewsList();
			require_once(ROOT.'/views/reviews.php');		
			return true;
		}
	}

?>