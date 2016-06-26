<?php

	include_once ROOT.'/models/Counts.php';
	
	Class UpdateVisitCount
	{
		public function CheckAndUpdateVisits()
		{
			$visitor_ip = $_SERVER['REMOTE_ADDR'];
			$date = date("Y-m-d");
			$res = Counts::getVisitsByDate($date);
			
			if($res == False)
			{
				Counts::dropIpsTable();
				Counts::insertCurrentIp($visitor_ip);
				Counts::insertCurrentVisit($date);
			}
			else
			{
				
			}
		}
	}
?>