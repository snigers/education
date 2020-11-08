<?php
require_once "class/Page/Cached.php";
class StaticPage extends Cached
{
	public function __construct($id)
	{
//		Проверяем? ytn kb nfrjq cnhfybwt d rtit
//		if ($this->isCached($this->id($id)))
//		{
////			Есть, инициализируем объект содержимым кэша
//			parent::__construct($this->title(), $this->content());
//		} else {
////			Данные пока не кэшировались, извлекаем
////			содержимое из базы данных
////			$query = "SELECT * FROM static_pages WHERE id = :id LIMIT 1";
////			$sth = $dbh->prepare($query);
////			$sth = $dbh->execute($query, [$id]);
////			$page = $sth->fetch(PDO::FETCH_ASSOC);
////			parent::__construct($page['title'], $page['content']);
			parent::__construct("Контакты", "Содержание страницы Контакты");
//		}
	}

	public function id($id)
	{
		return "static_page_{$id}";
	}
}
?>