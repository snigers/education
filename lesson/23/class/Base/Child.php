<?php
require_once "class/Base.php";
	
	class Child extends Base
	{
		public static function title()
		{
			echo __CLASS__;
		}
	}
?>