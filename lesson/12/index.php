<?require_once "function.php"?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 12 (Function)</title>
		<meta charset="utf-8">
	</head>
	<body>
	
		<?php
            $array = [];
			$array['NAME'] = "Anton";
			$array['CITY'] = "Moscow";
			$array['LOCATION'] = "Center";
			$array['COUNTRY'] = "Russia";
			
			pr("test");
			foreach (simple() as $item) {
                echo "Значение: " . ($item * $item) . "<br/>";
                if ($item >= 5) break;
            }
			
			
			$arr = [1,2,3,4,5];
			$collect = collect($arr, function($e) {return $e * $e;});
			foreach ($collect as $item) {
                echo "$item ";
			}
			
			$arr = [1,2,3,4,5];
			$select = select($arr, function ($e) {return $e % 2 == 0 ? true : false;});
//			foreach ($select as $items) {
//                pr($items);
//			}
			$collect = collect($select, function($e) {return $e * $e;});
			foreach ($collect as $item) {
				pr($item);
			}
			pr("test");
			
//			$range = crange(1024000);
//			foreach ($range as $i)
//            {
//                echo "$i ";
//            }
//			echo memory_get_usage(). "<br/>";
            
            $arr_1 = [
                    "first" => 1,
                    "second" => 2,
                    "third" => 3,
                    "fourth" => 4,
                    "fifth" => 5,
                    "sixth" => 6,
            ];
            $collection = collection($arr_1, function($e) {return $e * $e;});
			foreach ($collection as $key => $item) {
                pr("$item ($key)");
            }
			
			$block = block();
			$block->send("Hello, world!<br/>");
			$block->send("Hello, PHP!<br/>");
?>
	
	
	
	</body>
</html>