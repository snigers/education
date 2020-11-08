<?php
require_once "class/Page.php";
abstract class Cached extends Page
{
	protected $expires;
	protected $store;
	
	public function __construct($title = "", $content = "", $expires = 0)
	{
//		Вызов конструктора базового класса
		parent::__construct($title, $content);
//		Установливаем время жизни кэша
		$this->expires = $expires;
//		Подготовка хранилища
//		$this->store = new Memcached();
//		$this->store->addServer('localhost', 11211);
//		Размещаем данные в хранилище
		$this->set($this->id('title'), $title);
		$this->set($this->id('content'), $content);
	}
	
//	Проверяем есть ли позиция $key в кеше
	protected function isCached($key)
	{
//		return (bool) $this->store->get($key);
	}
	
	protected function set($key, $value, $force = false)
	{
//		if ($force)
//		{
//			$this->store->set($key, $value, $this->expires);
//		} else {
//			if ($this->isCached($key))
//				$this->store->set($key, $value, $this->expires);
//		}
	}
	
	protected function get($key)
	{
//		return $this->store->get($key);
	}
	
	abstract public function id($name);
	
	public function title()
	{
//		if ($this->isCached($this->id('title')))
//			return $this->get($this->id('title'));
//		else
			return parent::title(); // TODO: Change the autogenerated stub
	}
	
	public function content()
	{
//		if ($this->isCached($this->id('content')))
//			return $this->get($this->id('content'));
//		else
		return parent::content(); // TODO: Change the autogenerated stub
	}
	
}
	

?>