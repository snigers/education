<?require_once "function.php"?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 14 (Array)</title>
		<meta charset="utf-8">
        <script src="jquery-3.3.1.min.js"></script>
        <script src="script.js"></script>
	</head>
	<body>
	
		<?php
            pr($_COOKIE);
            
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
            
            $d = opendir(".");
            while (false !== ($e = readdir($d)))
            {
                if (is_dir($e)) $files[$e] =0;
                else $files[$e] = filesize($e);
            }
            
            uksort($files, function ($f1, $f2) {
                if (is_dir($f1) && !is_dir($f2)) return -1;
				if (!is_dir($f1) && is_dir($f2)) return 1;
				return $f1 <=> $f2;
            });
            
            pr($files);
            
            
            $files1 = [
                    "img10.gif",
                    "img1.gif",
                    "img2.gif",
                    "img20.gif",
            ];
            natsort($files1);
            pr($files1);
            
            $native = ["green", "red", "blue"];
            $colors = ["red", "yelow", "green", "cyan"];
            $inter = array_unique(array_merge($native, $colors));
            pr($inter);
?>
    
            <p id="js-hello">Здрасте!</p>
            <form action="index.php" method="post">
                <p>Имя: <input type="text" name="name" value=""></p>
                <p>Фамилия: <input type="text" name="lastname" value=""></p>
                <p><input type="submit" value="Представьтесь"></p>
            </form>
	
	
	</body>
</html>