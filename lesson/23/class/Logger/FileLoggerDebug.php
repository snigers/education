<?php
	require_once "class/Logger/FileLoggerDebug.php";
class FileLoggerDebug extends FileLogger
{
	public function __construct($fname)
	{
		parent::__construct(basename($fname), $fname);
	}
	
	public function debug($s, $level = 0)
	{
		$stack = debug_backtrace();
		$file = basename($stack[$level]['file']);
		$line = $stack[$level]['line'];
		$this->logger->log("[at $file line $line] $s");
	}
}
?>