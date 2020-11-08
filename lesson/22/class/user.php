<?php
class user
{
	public function __construct($name, $pass)
	{
		$this->name = $name;
		$this->pass = $pass;
		$this->referrer = $_SERVER["PHP_SELF"];
		$this->time = time();
	}
	
	public $name;
	public $pass;
	public $referrer;
	public $time;
	
	public function __sleep()
	{
		return ['name', 'referrer', 'time'];
	}
	
	public function __wakeup()
	{
		$this->time = time();
	}
}

?>