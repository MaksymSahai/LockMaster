<?php 
	class Admin
	{
		public static function getAdmin()
		{
			$db = Db::getConnection();
			
			$reviewsList = array();
			
			$result = $db->query('SELECT * FROM admin LIMIT 1');
			
			return $result->fetch();
		}
		
	}