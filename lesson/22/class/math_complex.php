<?php
	function test()
	{
		echo "ttttttt";
	}

	class MathComplex
	{
		public $re, $im;
		
		function add($re, $im)
		{
			echo $this->re += $re;
			echo $this->im += $im;
			
		}
	}
	
	class MathComplex2
	{
		public $re, $im;
		
		function add(MathComplex2 $y)
		{
			$this->re += $y->re;
			$this->im += $y->im;
		}
		
		function __toString()
		{
			return "({$this->re}, {$this->im})";
		}
	}
	
	class MathComplexConstruction
	{
		public $re, $im;
//		Инициализируем нового объекта
		function __construct($re, $im)
		{
			$this->re = $re;
			$this->im = $im;
		}
		
//		Добавляем к текущему комплексному числу другие
		function add(MathComplexConstruction $y)
		{
			$this->re += $y->re;
			$this->im += $y->im;
		}
		
		function __toString()
		{
			return "({$this->re}, {$this->im})";
		}
	}
	
	
?>