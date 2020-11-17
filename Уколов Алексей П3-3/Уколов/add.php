<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>add.php</title>
</head>
<body>
  <form method="post" action="add.php">
Название новости<br> <input type="text" name="title"><br>
Текст новости<br><textarea cols="60" rows="10"></textarea><br>
Автор<br> <input type="text" name="author"><br>
<input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
<input type="hidden" name="time" value="<?php echo date('H:i:s'); ?>">
<br>

<input type="submit" name="add" value="добавить">

</form>
   <?php
   $connection = mysql_connect("localhost", "root", "");
   
$db = mysql_select_db(my_bd);

mysql_set_charset(utf-8);

if (!$connection || !$db)
{
	exit(mysql_error());
}
    if (isset($_POST['add']))
{
	$title = strip_tags(trim($_POST['title']));
	$text = strip_tags(trim($_POST['text']));
	$author = strip_tags(trim($_POST['author']));
	$date = $_POST['date'];
	$time = $_POST['time'];

	mysql_query("INSERT INTO news(title, text, date, time, author) 
				VALUES ('title', 'text', date, 'time', 'author')");

	mysql_close();
}
  ?>
</body>
</html>