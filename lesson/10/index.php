<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 10 (Array)</title>
		<meta charset="utf-8">
	</head>
	<body>
	
		<?php
            $array = [];
			$array['NAME'] = "Anton";
			$array['CITY'] = "Moscow";
			$array['LOCATION'] = "Center";
			$array['COUNTRY'] = "Russia";
			
			//			$str = implode(" | ", $array);
			$filename = "test.txt";
			
			if (file_exists($filename))
			{
				echo "file exists <br>";
				$handle = @fopen($filename, "r");
				while (($buffer = fgets($handle, 4096)) !== false) {
					echo $buffer;
				}
				unlink($filename);
			} else {
				echo "no file <br>";
				file_put_contents($filename, implode(' | ', $array));
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			echo "<pre>";
			echo print_r($str, true);
			echo "</pre>";
			
			
			echo "<pre>";
            echo print_r($array, true);
            echo "</pre>";
			
		?>
	
	
	
	
	
	
	
	
	
	</body>
</html>