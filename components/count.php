<?php
	$db = Db::getConnection();
	
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	$date = date("Y-m-d");
	
	$res = $db->query("SELECT `visit_id` FROM `visits` WHERE `date` = $date");
									
	if($res == FALSE)
	{
		$db->query("DELETE FROM `ips`");
		
		$db->query("INSERT INTO `ips`(`ip_address`) VALUES ($visitor_ip)");

		$res_count = $db->query("INSERT INTO `visits`(`date`, `hosts`, `views`) VALUES ($date, 1, 1)");
		echo '1';		
	}
	else
	{
		$current_ip = $db->query("SELECT `ip_id` FROM `ips` WHERE `ip_address` = $visitor_ip");
		echo '2';
		$d = $current_ip->fetch(PDO::FETCH_ASSOC);
		if($d==1/*$current_ip->fetchColumn() == 1*/)
		{
			$db->query("UPDATE `visits` SET `visit_id` = visit_id+1 WHERE `date` = $date");
			echo '3';
		}
		else
		{
			$db->query("INSERT INTO `ips`(`ip_address`) VALUES ([$current_ip)");
			$db->query("UPDATE `visits` SET `visit_id` = visit_id+1, `hosts` = hosts+1 WHERE `date` = $date");
			echo '4';
		}
	}
?>