<?php
	
	function pr($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	
	function getUniques($text, &$nOrigWords = false)
	{
		$words = preg_split("/([^[:alnum:]]|['-])+/s", $text);
		$nOrigWords = count($words);
		$words = array_map("strtolower", $words);
		$words = array_unique($words);
		return $words;
	}


?>