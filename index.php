<?php
function pr($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
pr($_SERVER);

class AgentSmith {}
$smit = new AgentSmith();
$wesson = new AgentSmith();

if ($smit == $wesson)
		echo "Объекты равны";
	
if ($smit === $wesson)
	echo "Объекты эквивалентны'";
	
echo "<br>";
echo "<br>";
echo "<br>";






?>