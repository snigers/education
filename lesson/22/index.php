<?require_once "function.php"?>
<?require_once "class/math_complex.php" ?>
<?require_once "class/FileLogger.php" ?>
<?require_once "class/father.php" ?>
<?require_once "class/counter.php" ?>
<?require_once "class/hooker.php" ?>
<?require_once "class/CloneHuman.php" ?>
<?require_once "class/cls.php" ?>
<?require_once "class/user.php" ?>
<?php
    $from = ["{TITLE}", "{BODY}"];
    $to = [
            "Lesson 22 (Object and Class)",
            "Test"
    ];
    ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 22 (Object and Class)</title>
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
            
            pr(test());
            
            $math = new MathComplex();
            $math->re = 34;
            $math->im = 555;
            
            echo $math->im;
            echo $math->add(5,5);
            pr("======================");
			
			$math2 = new MathComplex2();
			$math2->re = 314;
			$math2->im = 101;
			
			
			$b = new MathComplex2();
			$b->re = 33;
			$b->im = 56;
			
			$math2->add($b);
			echo $math2->__toString();
            
            
            
			pr("======================");
			$c = new MathComplex2();
			$c->re = 33;
			$c->im = 56;
			
			echo "Значение: $c";
			
			pr("======================");
			$d = new MathComplexConstruction(311,443);
			$d->add(new MathComplexConstruction(33,44));
			echo $d;
			
			pr("======================");
//			for ($n = 0; $n < 10; $n++)
//			{
//				$logger = new FileLogger("test$n", "test.log");
//				$logger->log("Hello");
//			}
			
			pr("======================");
			$father = new Father();
			
			$child = new Child($father);
			
//			$father->children[] = $child;
			echo "Пока что все живы ... Убиваем всех. <br />";
			
			$father = $child = null;
			echo "все умерли <br />";
			
			
			
			pr("======================");
			for ($objs = [], $i = 0; $i < 6; $i++)
			{
				$objs[] = new Counter();
			}
			
			echo "Сейчас существует {$objs[0]->getCount()} объектов.<br/>";
			
			$objs[5] = null;
			
			echo "А теперь - {$objs[0]->getCount()} объектов.<br/>";
			
			$objs = [];
			
			echo "Под конец осталось - ". Counter::getCount() . " объектов.<br/>";
			
			
			pr("======================");
			#$logger = new FileLogger("a"); // Нельзя! Доступ закрыт!
			$logger1 = FileLogger::create("file.log");
			sleep(1);
			$logger2 = FileLogger::create("file.log");
			
			echo "{$logger1->getTime()}, {$logger2->getTime()}";
			pr("======================");
			
			$obj = new Hooker();
			echo "<b>Получаем значение обычного свойства.</b><br/>";
			echo "Значение: {$obj->opened}<br />";
			echo "<b>Вызываем обычный метод.</b><br/>";
			$obj->method();
			
			echo "<b>Присваиваем несуществующему свойству.</b><br/>";
			$obj->nonExistent = 111;
			echo "<b>Получаем значение несуществующего свойства.</b><br/>";
			echo "Значение: {$obj->nonExistent}<br />";
			
			echo "<b>Обращение к несуществующему методу.</b><br/>";
			$obj->nonExistent(6);
			
			pr("======================");
			$neo = new CloneHuman();
			$virtual = clone $neo;
			
			echo "Neo DNA id:{$neo->dna}, text: {$neo->text}<br/>";
			echo "Virtual twin DNA id:{$virtual->dna}, text: {$virtual->text}<br/>";
			
			pr("======================");
			$obj = new cls(100);
			$text = serialize($obj);
			
			$fd = fopen("text.obj", "w");
			if (!$fd) exit("Невозможно открыть файл");
			fwrite($fd, $text);
			fclose($fd);
			
			
			$fd = fopen("text.obj", "r");
			if (!$fd) exit("Невозможно открыть файл");
			$text = fread($fd, filesize("text.obj"));
			fclose($fd);
			
			$obj = unserialize($text);
			pr($obj);
			
			pr("======================");
			$user = new user("nick", "password");
			pr($user);
			
			$object = serialize($user);
			
			echo $object;
			
			pr("2222222222");
			$obj = unserialize($object);
			pr($obj);
			
			
			pr("++++++++++++");
			pr("======================");
			
			
			
			
			
			
			pr("======================");
?>
	
	
	</body>
</html>