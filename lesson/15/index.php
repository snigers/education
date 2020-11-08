<?require_once "function.php"?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 15 (Files)</title>
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
            
            
//            $f = fopen("/home/user/file.txt", "rt") or die("Ошибка1!");
//            $f = fopen("https://www.php.net", "rt") or die("Ошибка2!");
//            $f = fopen("ftp://user:pass@example.com/a.txt", "wt") or die("Ошибка3!");
            
            $f = fopen("file.csv", "rt") or die("Ошибка!");
            
            for ($i = 0; $data = fgetcsv($f, 1000, ";"); $i++)
            {
                $num = count($data);
                echo "<h3>Строка номер $i (полей: $num):</h3>";
                for ($c = 0; $c < $num; $c++)
                    print "[$c]: $data[$c]<br />";
            }
            
            fclose($f);
			
			
            echo realpath("index.php");
//            echo realpath(".");
            pr(ini_get('include_path'));
            
            
            $file = "counter.dat";
            fclose(fopen($file, "a+b"));
            $f = fopen($file, "r+t");
            flock($f, LOCK_EX);
            $count = fread($f, 100);
            $count = $count + 1;
            ftruncate($f,0);
            fseek($f,0, SEEK_SET);
            fwrite($f,$count);
            fclose($f);
            echo $count;
            
            mkdir("test_dir", 0770);
            
            echo "<pre>";
            echo  "/\n";
            chdir($_SERVER["DOCUMENT_ROOT"]);
            printTree();
            echo "</pre>";
            
            
            
            
            
            
            
?>
	
	
	</body>
</html>