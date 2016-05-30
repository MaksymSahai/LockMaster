<?php
	$db = Db::getConnection();
	
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	$date = date("Y-m-d");
	
	$res = $db->query("SELECT 'visit_id'
									FROM 'visits'
									WHERE 'date' = '$date'");
									
	if($res == FALSE)
	{
		$db->query("DELETE FROM 'ips'");
		
		$db->query("INSERT INTO 'ips' SET 'ip_address' = '$visitor_ip'");

		$res_count = $db->query("INSERT INTO 'visits' SET 'date' = '$date', 'hosts' = 1, 'views' = 1");
		echo '1';
	}
	else
	{
		$current_ip = $db->query("SELECT 'ip_id' FROM 'ips' WHERE 'ip_address' = '$visitor_ip'");
		echo '2';
		if($current_ip->fetchColumn() == 1)
		{
			$db->query("UPDATE 'visits' SET 'views' = 'views'+1 WHERE 'date'='$date'");
			echo '3';
		}
		else
		{
			$db->query("INSERT INTO 'ips' SET 'ip_address' = '$current_ip'");
			$db->query("UPDATE 'visits' SET 'hosts'='hosts'+1, 'views' = 'views'+1 WHERE 'date'='$date'");
			echo '4';
		}
	}
?>