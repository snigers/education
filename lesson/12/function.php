<?php
	
	function pr($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	

	function simple($from = 0, $to = 100)
	{
		for ($i = $from; $i < $to; $i++)
		{
			echo "$i<br/>";
			yield $i;
		}
	}
	
	function collect($arr, $callback)
	{
		foreach ($arr as $item) {
			yield $callback($item);
		}
	}
	
//	Извлечение только четных элементов
	function select($arr, $callback)
	{
		foreach ($arr as $itemss) {
			if ($callback($itemss)) yield $itemss;
		}
	}
	
//	Пример не экономного расходования памяти
//	function crange($size)
//	{
//		$arr = [];
//		for ($i = 0; $i < $size; $i++)
//		{
//			$arr[] = $i;
//		}
//		return $arr;
//	}
//	Экономный расход памяти
	function crange($size)
	{
		for ($i = 0; $i < $size; $i++)
		{
			yield $i;
		}
	}
	
//	Использование ключей
	function collection($arr, $callback)
	{
		foreach ($arr as $key => $item) {
			yield $key => $callback($item);
		}
	}
	
//	Отправка данных генератору
	function block()
	{
		while (true)
		{
			$string = yield;
			echo $string;
		}
	}
?>