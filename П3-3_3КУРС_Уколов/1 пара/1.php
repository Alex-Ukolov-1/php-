<?php
$error_login="";
$error_pass="";
$input_login="";
$input_pass="";
if(isset($_POST['done']))
{
$input_login=$_POST['login'];
$input_pass=$_POST['pass'];
echo'кнопка обработчика нажата!<br>';
if(!empty($_POST['login'])&&$_POST['pass']!=123&&!empty($_POST['pass']))
{
echo " Всё хорошо , все поля пройдены ";
echo " Здесь должна быть ваша обработка формы ";	
echo " Занесение в базу данных,отправка сообщения и т.п. ";	
}

if($_POST['login']=='')
{
$error_login="Логин пуст!<br>";
}

if($_POST['pass']=='123'||empty($_POST['pass']))
{
$error_pass="Нельзя использовать популярные пароли.Придумайте свой!<br>";
}
}
?>


<?php
if(isset($_FILES['avatar']))
{
$file=$_FILES['avatar'];
print("Загружен файл с именем".$file['name']."и размером".$file['size']."байт");
}
?>

<?php
$current_path=$_FILES['avatar']['tmp_name'];
$filename=$_FILES['avatar']['name'];
$new_path=dirname(_FILE_).'/'.$filename;
move_uploaded_file($current_path,$new_path);
?>

<!DOCTYPE html>
<html lang='ru'>
<head>
</head>
<BODY>
	<form action="" method="post">
		<p>введите логин:<input type="text" name="login" value="<?=$input_login?>"><?=$error_login?></p>
		<p>введите пароль<input type="password" name="pass" value="<?=$input_pass?>"><?=$error_pass?></p>
		<p><input type="submit" value="Отправить" name="done"></p>
	</form>
	<form name="file_upload" method="post" action="" enctype="multipart/form-data">
		<label>Ваш авантар:<input type="file" name="avatar"></label>
		<input type="submit" name="send" value="Отправить файл">
	</form>
</BODY>
</html>