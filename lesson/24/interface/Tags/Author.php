<?php
require_once "interface/Tag.php";

interface Author extends Tag
{
	public function info($id);
}

?>