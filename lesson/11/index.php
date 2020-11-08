<?require_once "function.php"?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 11 (Function)</title>
		<meta charset="utf-8">
	</head>
	<body>
	
		<?php
            $array = [];
			$array['NAME'] = "Anton";
			$array['CITY'] = "Moscow";
			$array['LOCATION'] = "Center";
			$array['COUNTRY'] = "Russia";
			

            
            if (isset($_REQUEST['surname']))
            {
                $name = $array[$_REQUEST["surname"]];
                echo "Вы выбрали: {$_REQUEST['surname']}, {$name} ";
            }
			
			
			echo "<pre>";
			echo print_r($str, true);
			echo "</pre>";
			
			
			echo "<pre>";
            echo print_r($array, true);
            echo "</pre>";
			
		?>
	
	
<!--            <form action="--><?//=$_SERVER["SCRIPT_NAME"]?><!--" method="post">-->
<!--                <select name="surname">-->
<!--                    --><?//=selectItems($array, $_REQUEST['surname'])?>
<!--                </select>-->
<!--                <input type="submit" value="Узнать Фамилию">-->
<!--            </form>-->
	
        <?
            
            $num = 10;
	
			echo "Начальное значение: $num<br>";
			increment($num);
			echo "После вызова функции: $num<br>";
            echo "<br>";
            echo sum(2,2);
			echo "<br>";
            echo sum(2.2, 3.5);
			echo "<br>";
			
			pr(factorial(5));
			echo "<br>";
			
			if (!function_exists("virtual"))
            {
                echo "virtual";
                function virtual($uri)
                {
                    $url = "http://" . $_SERVER["HTTP_HOST"] . $uri;
                    pr(file_get_contents($url));
                }
            }
			virtual('/');
			pr("test");
			echo "<br>";
			tabble(10, "Меркурий", "Венера", "Земля", "Марс");
			
			
			$message = "Работа не может быть продолжена из-за ошибки<br>";
			$check = function (array $errors) use ($message)
            {
                if (isset($errors) && count($errors) > 0)
                {
                    echo $message;
                    foreach ($errors as $error)
                    {
                        echo "$error<br/>";
                    }
                }
            };
//
            $check([]);

			$errors[] = "Заполните имя";
			$check($errors);
//
			$message = "список требований";
			$errors = ["PHP", "MySQL", "memcache"];
			$check($errors);
			
        ?>
	
	
	
	
	
	</body>
</html>