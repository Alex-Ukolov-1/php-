<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>home.php</title>
</head>
<body>
   
    <?php
    $connection = mysql_connect("localhost", "root", "root");
$db = mysql_select_db(my_bd);

if (!$connection || !$db)
{
	mysql_error();
}

$result = mysql_query("SELECT * FROM news");

mysql_close();
    
while($row = mysql_fetch_assoc($result))
    {?>

<h1><?php echo $row['title']?></h1>
<p><?php echo $row['text']?></p>
<p>Дата публикации: <?php echo $row['date']?> / <?php echo $row['time']?></p>
<p>Автор новости: <?php echo $row['author']?></p>
<a href="edit.php?id=<?php echo $row['id']?>">редактировать новость</a><br />
<a href="delete.php?id=<?php echo $row['id']?>">удалить новость</a>
<hr />
<?php }?>

    

<a href="add.php">добавить новость</a>
</body>
</html>