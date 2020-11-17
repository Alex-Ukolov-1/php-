<?php
session_start();
$text = $_POST['logged_in_user_name'];
$_SESSION['mytext'] = $text;
echo $_SESSION['mytext'];
?>
<!DOCTYPE html>
<html lang='ru'>
<head>
</head>
<BODY>
	<form action="test.php" method="post">
		<p>введите логин:<input type="text" name="logged_in_user_id" value="<?=$input_login?>"><?=$error_login?></p>
		<p>введите Ваш город<input type="text" name="logged_in_user_name" value="<?=$input_pass?>"><?=$error_pass?></p>
		<p><input type="submit" value="Отправить" name="done"></p>
	</form>
</BODY>
</html>