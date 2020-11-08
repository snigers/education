<?require_once "function.php"?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Lesson 20 (Regular expressions)</title>
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
            
            
            if (@$_REQUEST["text"])
                echo htmlspecialchars($_REQUEST["text"]) . "<hr />";
?>
 
		<form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="post">
			<textarea name="text" cols="60" rows="10">
				<?=@htmlspecialchars($_REQUEST["text"])?>
			</textarea><br />
			<input type="submit">
		</form><br />
  
		<?
		preg_match('/(\d+)/s', "article123.html", $match);
		
		pr($match);
		
		preg_match('/(\S+)@([a-z0-9.]+)/is', "Привет от somebody@mail.ru!", $sm);
		
		pr($sm);
		
		$text = "Привет от somebody@gmail.com, а также от other@mail.com!";
		
		$html = preg_replace(
				'/(\S+)@([a-z0-9.]+)/is',
				'<a href="mailto:$O">$O</a>',
				$text
		);
			pr($html);
			
			
		echo preg_replace('[(/file)[0-9]+]i', '$l', "/file123.txt");
		
		$re = '/\\\\filename/';
		
		pr(preg_replace('/at/', 'AT', "What is the Perl Compatible Regex?"));
		
		$str3 = " 15-16/2000   ";
		$re = '{
			^\s*(
				(\d+)
				\s* [[:punct:]] \s*
				(\d+)
				\s* [[:punct:]] \s*
				(\d+)
			)\s*$
		}xs';
		
//		preg_match($re, $str3, $matches);
//		pr($matches);
		
//		$text = htmlspecialchars(file_get_contents(__FILE__));
//		$html = preg_replace('/(\$[a-z]\w*)/is', '<b>$1</b>', $text);
//		pr($html);
		
		$str = "Hello, this <b>word</b> is bold!";
		
		$re = '|<(\w+) [^>]* > (.*?) </\1>|xs';
			pr($re);
		preg_match($re, $str, $match1);
		pr(htmlspecialchars($match1[2]));
			pr($str);
			
			
		$str = "2015-12-15";
		$re = "|^(?<year>\d{4})-(?<month>\d{2})-(?'day'\d{2})$|";
		preg_match($re, $str, $match11);
		pr($match11);
			
			
//			$match = [];
//			$str = "Hello, this <b>word</b> is <b>bold</b>!";
//			$re = '|<(\w+) [^>]* > (.*) </\1>|xs';
//			preg_match($re, $str, $match);
//			pr($match);
			
			$str = '[b] жирный текст [b]а тут еще жирнее[/b] вернулись [/b]';
			$to = '<b>$1</b>';
			$re1 = '|\[b\] (.*) \[b\]|ixs';
			$re2 = '|\[b\] (.*?) \[b\]|ixs';
			pr(preg_replace($re1, $to, $str));
			pr(preg_replace($re2, $to, $str));
			
			$str = "";
			$str = file_get_contents(__FILE__);
			$str = preg_replace('/^/m', "\t", $str);
			pr(htmlspecialchars($str));
			
			
			$str = '<hTmL><bOdY style="background: white">Hello world!</bOdY></hTmL>';
			
			$str = preg_replace_callback(
				'{(?<btag></?)(?<content>\w+)(?<etag>.*?>)}s',
				function ($m) {return $m['btag'] . strtoupper($m['content']) . $m['etag'];},
				$str
			);
			pr(htmlspecialchars($str));
			
			setlocale(LC_ALL, "ru_RU.UTF-8");
			$fname = "largetextfile.txt";
			$text = file_get_contents($fname);
			$uniq = getUniques($text, $nOrig);
			pr("===========");
			pr(count($uniq));
			pr(join(" ", $uniq));
			pr("===========");
		?>
	
	
	</body>
</html>