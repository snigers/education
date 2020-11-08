<?require_once "function.php"?>
<?php
    $from = ["{TITLE}", "{BODY}"];
    $to = [
            "Lesson 23 (Сlass inheritance)",
            "Test"
    ];
    
    ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 23 (Сlass inheritance)</title>
		<meta charset="utf-8">
	</head>
	<body>
	
		<?php
            $array = [];
			$array["NAME"] = "Anton";
			$array["CITY"] = "Moscow";
			$array['LOCATION'] = "Center";
			$array['COUNTRY'] = "Russia";
			
			pr("test");
            
            $arr_1 = [
                    "first" => 1,
                    "second" => 2,
                    "third" => 3,
                    "fourth" => 4,
                    "fifth" => 5,
                    "sixth" => 6,
            ];
            
            $str1 = "Hello world!";
            $str2 = "Привет мир!";
            
            echo "{$str1[2]}<br/>";
            echo "{$str2[2]}<br/>";
			
			echo strlen($str2) . " байт <br/>";
			echo mb_strlen($str2) . " байт <br/>";
            
?>
	
	
	</body>
</html>