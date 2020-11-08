<?php
class Base
{
	public static function title()
	{
		echo __CLASS__;
	}
	
	public static function test()
	{
		static::title();
	}
}

?>