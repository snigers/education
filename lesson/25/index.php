<?require_once "function.php"?>
<?require_once "namespace/PHP7.php"?>
<?php
    $from = ["{TITLE}", "{BODY}"];
    $to = [
            "Lesson 25 (Namespace)",
            "Test"
    ];
    ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 25 (Namespace)</title>
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
            
            use PHP7\classes\Page as Page;
            use PHP7\functions as functions;
            
            
            $page = new Page("Контакты", "Содержимое страницы");
			functions\pr($page);
   
   
            
?>
	
	
	</body>
</html>