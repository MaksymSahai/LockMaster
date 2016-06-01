<?php 
	class Reviews
	{
		public static function getReviewsList()
		{
			$db = Db::getConnection();
			
			$reviewsList = array();
			
			$result = $db->query('SELECT review_name, review_date, review, review_status 
									FROM reviews
									WHERE review_status = 1 		
									ORDER BY review_date DESC');
			
			
			$i = 0;
			
			while($row = $result->fetch())
			{
				$reviewsList[$i]['review_name'] = $row['review_name'];
				$reviewsList[$i]['review_date'] = $row['review_date'];
				$reviewsList[$i]['review'] = $row['review'];
				$reviewsList[$i]['review_status'] = $row['review_status'];
				$i++;
			}
			
			return $reviewsList;
		}
		
		public static function getTwoLastReviews()
		{
			$db = Db::getConnection();
			
			$twoLastReviews = array();
			
			$result = $db->query('SELECT review_name, review_date, review, review_status 
									FROM reviews
									WHERE review_status = 1 		
									ORDER BY review_date DESC
									LIMIT 2');
									
			$l = 0;
			
			while($row = $result->fetch())
			{
				$twoLastReviews[$l]['review_name'] = $row['review_name'];
				$twoLastReviews[$l]['review_date'] = $row['review_date'];
				$twoLastReviews[$l]['review'] = $row['review'];
				$l++;
			}

			return $twoLastReviews;		
		}
		
		public static function getReviewsListNoAprove()
		{
			$db = Db::getConnection();
			
			$reviewsListNoAprove = array();
			
			$result = $db->query('SELECT review_name, review_date, review, review_status 
									FROM reviews
									WHERE review_status = 0 		
									ORDER BY review_date DESC');
			
			
			$j = 0;
			
			while($row = $result->fetch())
			{
				$reviewsListNoAprove[$j]['review_name'] = $row['review_name'];
				$reviewsListNoAprove[$j]['review_date'] = $row['review_date'];
				$reviewsListNoAprove[$j]['review'] = $row['review'];
				$reviewsListNoAprove[$j]['review_status'] = $row['review_status'];
				$j++;
			}
			
			return $reviewsListNoAprove;
		}
		
	}

?>