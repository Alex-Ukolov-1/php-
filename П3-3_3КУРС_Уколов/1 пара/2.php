<?php
$error_login="";
$error_pass="";
$error_address="";
$input_login="";
$input_pass="";
$input_address="";

$name=$_POST['address'];
$god=$_POST['GOD'];
$play=$_POST['play'];
$mesage=$_POST['message'];

if(isset($_POST['done']))
{
$input_login=$_POST['login'];
$input_pass=$_POST['pass'];
$input_address=$_POST['address'];
echo'кнопка обработчика нажата!<br>';
if(!empty($_POST['login'])&&$_POST['pass']!=123&&!empty($_POST['pass']))
{
echo " Всё хорошо , все поля пройдены ";
echo " Здесь должна быть ваша обработка формы ";	
echo " Занесение в базу данных,отправка сообщения и т.п. ";	
echo "<br/>"."ваш  АДРЕСС ".$name."<br/>"."Имя ".$god."<br/>"."возвраст ".$play."<br/>"." СООБЩЕНИЕ ".$mesage."<br/>"."Доступ разрешён!";
}

if($_POST['login']=='')
{
$error_login="Имя пуст!<br>";
}

if($_POST['address']=='')
{
$error_address="Адресс пуст!<br>";
}

if($_POST['pass']=='123'||empty($_POST['pass']))
{
$error_pass="Нельзя использовать популярные пароли.Придумайте свой!<br>";
}
}
?>


<!DOCTYPE html>
<html lang='ru'>
<head>
</head>
<BODY>
	<form action="" method="post">
	 <p>введите логин:<input type="password" name="login" value="<?=$input_login?>"><?=$error_login?></p>
	 <p>введите пароль:<input type="password" name="pass" value="<?=$input_pass?>"><?=$error_pass?></p>
	 <p>введите адрес:<input type="text" name="address" value="<?=$input_address?>"></p>
	 <p>введите имя:<input type="text" name="GOD"></p>
	 <p>введите возвраст:<input type="password" name="play"></p>
	 <p>Сообщение:<br/><textarea name="message" cols="30" rows="5"></textarea></p>
	 <p><input type="submit" value="Отправить" name="done"></p>
	</form>
</BODY>
</html>