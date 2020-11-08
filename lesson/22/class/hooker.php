<?php
class Hooker
{
	public $opened = 'opened';
	private $vars = [];
	
	public function method() {echo "Whoa, deja vu.<br />";}
	
	public function __get($name)
	{
		echo "Перехват: получаем значение $name. <br/>";
		return isset($this->vars[$name]) ? $this->vars[$name] : null;
	}
	
	public function __set($name, $value)
	{
		echo "Перехват: устанавлеваем значение $name равным '$value'. <br/>";
		return $this->vars[$name] = $value;
	}
	
	public function __call($name, $args)
	{
		echo "перехват: вызываем $name с аргументами: ";
		var_dump($args);
		return $args[0];
	}
}

?>