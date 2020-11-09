<?php
require_once "class/Page.php";
require_once "trait/Authors.php";
require_once "trait/Tag.php";

class News extends Page
{
	use Authors, Tag
	{
		Tag::tags insteadof Authors;
		Authors::authors insteadof Tag;
		Authors::tags as list;
	}
//	public function authors()
//	{
//		echo "News::authors<br />";
//	}
}
?>