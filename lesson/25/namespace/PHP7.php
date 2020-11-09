<?php
namespace PHP7\functions
{
	function pr($arr)
	{
		echo "<pre>";\
		print_r($arr);
		echo "</pre>";
	}
}

namespace PHP7\classes
{
	class Page
	{
		protected $title;
		protected $content;
		
		public function __construct($title = '', $content = '')
		{
			$this->title = $title;
			$this->content = $content;
		}
	}
}

?>