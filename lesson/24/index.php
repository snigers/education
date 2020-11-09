<?require_once "function.php"?>
<?require_once "class/Page/News.php"?>
<?php
    $from = ["{TITLE}", "{BODY}"];
    $to = [
            "Lesson 24 (Interface)",
            "Test"
    ];
    ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 24 (Interface)</title>
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
            
            $news = new News();
            $news->authors();
            $news->tags();
            $news->list();
            
?>
	
	
	</body>
</html>