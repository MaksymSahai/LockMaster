<?php
///	include ROOT.'/components/count.php';
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
		
		public function actionAddReview()
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
			if(!$name || strlen($name) < 3 || strlen($name) > 35) {$error .= 'Укажите свое имя (3-35 символов).';}
			if(!$text || strlen($text) < 5 ) {$error .= 'Напишите отзыв (от 5 символов). ';}
			
			if(!$error)
			{
				$add = Reviews::addReview($name, $text);
				
			}
			else {echo '<div class="err">'.$error.'</div>';}
		}
	}

?>