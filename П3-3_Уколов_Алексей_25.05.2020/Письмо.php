
<!DOCTYPE html> 
<html lang="ru"> 
<head> 
<meta charset="UTF-8"> 
<title>Форма отправки email</title> 
</head> 
<body> 
<?php 
if($_POST['submit']) { 
echo " 
<b>Уважаемый {$_POST['name']}, благодарим Вас за обращение в службу технической поддержки нашего сервиса!</b> 
<p>Наши специалисты свяжутся с Вами по указанному email: {$_POST['email']} в ближайшее время</p>"; 
} elseif($_POST['submit'] && (!$_POST['name'] || !$_POST['email'] || !$_POST['subject'] || !$_POST['message'])) { 
echo " 
<b>Вы не заполнили, либо заполнили некорректно поля отправки сообщения!</b>
<p>Пожалуйста проверьте правильность заполнения формы и отправьте сообщение повторно.</p>"; 
} else { 
echo " 
<h1>Отправка сообщения в техническую поддержку</h1> 
<form action=\"Listing_41.1.php\" method=\"post\" style=\"display: flex; flex-direction: column; justify-content: center; align-items: center; width: 300px;\"> 
<div> 
<input type=\"text\" name=\"name\" placeholder=\"Как к Вам обращаться?\" style=\"margin: 10px 0; width: 220px; height: 25px; border: 1px solid rgb(30,30,30); border-radius: 3px; font-family: Arial, sans-serif; color: rgb(30,30,30); padding: 3px 5px;\"> 
</div> 
<div> 
<input type=\"email\" name=\"email\" placeholder=\"Ваш email\" style=\"margin: 10px 0; width: 220px; height: 25px; border: 1px solid rgb(30,30,30); border-radius: 3px; font-family: Arial, sans-serif; color: rgb(30,30,30); padding: 3px 5px;\"> 
</div> 
<div> 
<input type=\"text\" name=\"subject\" placeholder=\"Тема сообщения\" style=\"margin: 10px 0; width: 220px; height: 25px; border: 1px solid rgb(30,30,30); border-radius: 3px; font-family: Arial, sans-serif; color: rgb(30,30,30); padding: 3px 5px;\"> 
</div> 
<div> 
<textarea name=\" message\" cols=\"30\" rows=\"10\" placeholder=\"Текст сообщения\" style=\"margin: 10px 0; width: 220px; height: 200px; border: 1px solid rgb(30,30,30); border-radius: 3px; font-family: Arial, sans-serif; color: rgb(30,30,30); resize: none; padding: 3px 5px;\"></textarea> 
</div> 
<div> 
<input type=\"submit\" name=\"submit\" value=\"Отправить\" style=\"border: none; border-radius: 3px; height: 30px; width: 220px; color: rgb(245,245,245); background-color: rgb(150,150,150); cursor: pointer;\"> 
</div> 
</form> 
"; 
} 
?> 
<?php 
$email = "support@support.com"; 
$subject = "Отправитель: ".$_POST['name'].". Обращение в службу тех.поддержки по теме: ".$_POST['subject']; 
$headers = "From: ".$_POST['email']."\r\n";
if ($_POST['name'] && $subject && $_POST['message']) { 
mail($email, $subject, $_POST['message'], $headers); 
} 
?> 
</body> 
</html>
