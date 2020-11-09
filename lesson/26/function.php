<?php
	
	function pr($arr)
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
	

	function myErrorHandler($errno, $msg, $file, $line)
	{
		if (error_reporting() == 0) return;
		
		echo '<duv style="border-style: inset; border-width: 2">';
		echo "Произошла ошибка с кодом <b>$errno<b/><br />";
		echo "Файл: <tt>$file</tt>, строка $line<br />";
		echo "Текст ошибки: <i>$msg</i>";
		echo '</div>';
	}

?>