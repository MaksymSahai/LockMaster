<?php
	class MenuController
	{
		public function actionKey()
		{
			require_once(ROOT.'/views/key.php');
			return true;
		}
		
		public function actionAuto()
		{
			require_once(ROOT.'/views/auto.php');
			return true;
		}
		
		public function actionSafe()
		{
			require_once(ROOT.'/views/safe.php');
			return true;
		}
	}