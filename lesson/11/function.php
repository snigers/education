<?php
	
	function pr($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	
	function increment(&$a)
	{
		echo "Текущее значение: $a<br>";
		$a++;
		echo "После увеличения: $a<br>";
	}
	
	function selectItems($items, $selected = 0)
	{
		$text = "";
		
		foreach ($items as $key => $value)
		{
			if ($key === $selected)
				$ch = " selected";
			else
				$ch = "";
			
			$text .= "<option$ch value='$key'>$value</option>";
		}
		return $text;
	}
	
//	Типы аргументов и возвращаемого значения
	declare(strict_type = 1);
	function sum(int $fst, int $snd)
	{
		return $fst + $snd;
	}

	function factorial($n)
	{
		if ($n <= 0) return 1;
		else return $n * factorial($n - 1);
	}

	function myecho(...$str)
	{
		foreach ($str as $item) {
			echo "$item<br/>\n";
		}
	}
	
	function tabble($spaces, ...$planets)
	{
		$new = [];
		foreach ($planets as $planet) {
			$new[] = str_repeat("&nbsp;", $spaces) . $planet;
		}
		
		call_user_func_array("myecho", $new);
	}



?>