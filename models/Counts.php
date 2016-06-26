<?php
	Class Counts
	{
		public static function getVisitsByDate($date)
		{
			$db = Db::getConnection();
			$date = $date;
			
			$res = array();
			
			$result = $db->query("SELECT `visit_id` FROM `visits` WHERE `date` = $date");
			
			$i = 0;
			
			while($row = $result->fetch())
			{
				$reviewsListNoAprove[$j]['visit_id'] = $row['visit_id'];
				$i++;
			}
			
			return $res;
		}
		
		public static function dropIpsTable()
		{
			$db = Db::getConnection();
			$db->query("DELETE FROM `ips`");
		}
		
		public static function insertCurrentIp($visitor_ip)
		{
			$visitor_ip = $visitor_ip;
			$db = Db::getConnection();
			$db->query("INSERT INTO `ips`(`ip_address`) VALUES ($visitor_ip)");
		}
		
		public static function insertCurrentVisit($date)
		{
			$date = $date;
			$db = Db::getConnection();
			$db->query("INSERT INTO `visits`(`date`, `hosts`, `views`) VALUES ($date, 1, 1)");
		}
	}
?>