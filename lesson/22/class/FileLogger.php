<?php
class FileLogger
{
//	Массив всех созданных объектов-журналов
	static public $loggers = [];
//	Время создания объекта
	private $time;
	
	
//	public $f; //Открытие файла
//	public $name; //Имя журнала
//	public $lines = []; //Накапливаемая строка
//	public $t;
	
	private function __construct($fname)
	{
		$this->time = microtime(true);
	}
	
	public static function create($fname)
	{
		if (isset(self::$loggers[$fname]))
			return self::$loggers[$fname];
		
		return self::$loggers[$fname] = new self($fname);
	}
	
	public function getTime() {
		return $this->time;
	}
	
//	public function __destruct()
//	{
//		$this->log("###__destruct() called!");
//		fputs($this->f, join("", $this->lines));
//		fclose($this->f);
//	}
//
//	public function log($str)
//	{
//		$prefix = '[' . date("Y-m-d_h:i:s ") . "{$this->name}]";
//		$str = preg_replace('/^/m', $prefix, rtrim($str));
//		$this->lines[] = $str . "\n";
//	}
	
//	public function close()
//	{
//		fputs($this->f, join("", $this->lines));
//		fclose($this->f);
//	}
	
}


?>