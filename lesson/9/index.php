<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Модель сценария для обработки формы</title>
		<meta charset="utf-8">
	</head>
	<body>
	
		<?php
		$wasError = 0;
		if (isset($_REQUEST['doSubmit']))
			do {
				if ($_REQUEST["reloads"] != 1+1+7) {$wasError = 1; break;}
				if ($_REQUEST["loader"] != "source") {$wasError = 1; break;}
				
				exit();
			} while (0);
			
			if ($wasError)
			{
				echo "Вы ответили неверно, попробуйте еще раз";
			}
		?>
	
	<form action="index.php" method="post">
		<label for="reloads">Число перезагрузок</label>
		<input type="text" name="reloads" id="reloads">
		<label for="loader">Загрузочная программа</label>
		<input type="text" name="loader" id="loader">
		<input type="submit" name="doSubmit" value="Ответить на вопрос">
	</form>
	
	
	
	
	
	
	
	
	</body>
</html>