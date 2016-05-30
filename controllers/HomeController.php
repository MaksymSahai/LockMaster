<?php
	class HomeController
	{
		public function actionIndex()
		{
			require_once(ROOT.'/views/index.php');
			return true;
		}
	}

?>