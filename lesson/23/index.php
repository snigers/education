<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	?>
<?require_once "function.php"?>
<?require_once "class/Logger/FileLoggerDebug0.php"?>
<?require_once "class/Base/Child.php"?>
<?require_once "class/Dumper.php"?>
<?require_once "class/Container.php"?>
<?require_once "class/Page/Cached/StaticPage.php"?>
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
            
            
//            $logger = new FileLoggerDebug0("test", "test.log");
//            $logger->log("Обычное сообщение");
//            $logger->debug("Отладочное сообщение");
			Child::test();
			pr("========================");
			Dumper::print(new class {
				public $title;
				public function __construct()
				{
					$this->title = "Hello world";
				}
			});
			pr("========================");
			(new Container)->anonym()->print();
			pr("========================");
			
			$id = 3;
			pr("test");
			$page = new StaticPage($id);
			pr("test333s");
			$page->render();
			echo $page->id($id);
			pr("========================");
			pr();
			pr("========================");
            
?>
	
	
	</body>
</html>