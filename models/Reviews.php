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
									ORDER BY review_date');
			
			
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
		
	}

?>