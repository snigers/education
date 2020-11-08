<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php
	if ($_REQUEST['login'] == 'root' && $_REQUEST['password'] == '111')
	{
		echo "Доступ открыт";
	} else {
		echo "Доступ закрыт ";
	}
	
	
?>
</body>
</html>