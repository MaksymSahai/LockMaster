<?php
///	include ROOT.'/components/count.php';
	include_once ROOT.'/models/Reviews.php';
	
	class ReviewController
	{
		public function actionList()
		{
			if(!empty($_POST))
			{
				$this->AddReview();
			}
			$reviewsList = array();
			$reviewsList = Reviews::getReviewsList();
			require_once(ROOT.'/views/reviews.php');		
			return true;
		}
		
		public function AddReview()
		{
			$name = $_POST['name'];
			$name = htmlspecialchars($name);
			$name = stripslashes($name);
			$name = trim($name);
			$text = $_POST['text'];
			$text = htmlspecialchars($text);
			$text = stripslashes($text);
			$text = trim($text);
			$error = '';
			
			if(!$error)
			{
				$add = Reviews::addReview($name, $text);
				
			}
			else {echo '<div class="err">'.$error.'</div>';}
		}
	}

?>