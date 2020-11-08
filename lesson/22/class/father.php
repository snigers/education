<?php
class Father
{
	public $children = [];
	
	function __destruct()
	{
		echo "Father умер.<br />";
	}
}

class Child
{
	public $father;
	
	function __construct(Father $father)
	{
		$this->father = $father;
	}
	function __destruct()
	{
		echo "Child die.<br />";
	}
}

?>