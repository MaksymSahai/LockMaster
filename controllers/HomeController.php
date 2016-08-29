<?php

	include_once ROOT.'/models/Reviews.php';
	
	class HomeController
	{
		public function actionIndex()
		{
			$twoLastReviews = array();
			$twoLastReviews = Reviews::getReviewsList();
			require_once(ROOT.'/views/index.php');
			return true;
		}
	}