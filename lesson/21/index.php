<?require_once "function.php"?>
<?php
    $from = ["{TITLE}", "{BODY}"];
    $to = [
            "Lesson 21 (Other function)",
            "Test"
    ];
    ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 21 (Other function)</title>
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
            
            for ($i = 1; $i < 10; $i++)
			{
				echo $i * $i . "<br />";
			}
            echo "test";
            $mul = create_function('$a,$b', 'return $a * $b;');
            $neg = create_function('$a', 'return -$a;');
            
            echo $mul(10,20);
            echo $neg(4) . "<br />";
            
//            Анонимные функции
			$fruits = ["orange","apple","apricot","lemon"];
//			usort($fruits, function ($a, $b) {return strcmp($b, $a);});
			usort($fruits, function ($a, $b) {return $b <=> $a;}); //Начиная с PHP 7 <=>
			foreach ($fruits as $key => $value)
				echo "$key: $value<br />";
			echo "test";
?>
	
	
	</body>
</html>