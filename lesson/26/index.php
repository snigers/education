<?require_once "function.php"?>
<?require_once "namespace/PHP7.php"?>
<?php
//	ini_set('error_reporting', E_ALL);
//	ini_set('display_errors', 1);
//	ini_set('display_startup_errors', 1);
    $from = ["{TITLE}", "{BODY}"];
    $to = [
            "Lesson 26 (Except)",
            "Test"
    ];
    ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 26 (Except)</title>
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
            
            
            pr("==============================");
            $f = fopen("spoon.txt", "r");
//            if (!$f) return;
            pr("==============================");
            set_error_handler("myErrorHandler", E_ALL);
            filemtime("spoon");
            pr("==============================");
            pr("==============================");
            pr("==============================");
            pr("==============================");
            pr("==============================");
            pr("==============================");
            pr("==============================");
            pr("==============================");
   
   
            
?>
	
	
	</body>
</html>