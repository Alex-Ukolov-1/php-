<html><head><title>PHP Kalkulyator</title></head>
<Body>
<form method="POST" action=''>
первое число<input TYPE="text" name="a" value="" /><br>
второе число<input TYPE="text" name="b" value="" /><br><br>
<input TYPE="radio" name="deistvieye" checked value='+'/>сложение
<input TYPE="radio" name="deistvieye" value='-'/>разность
<input TYPE="radio" name="deistvieye" value='*'/>произведение
<input TYPE="radio" name="deistvieye" value='/'/>деление<br><br>  
<input type='submit' name='result' value='Результат'> 
<input type="reset" name='ochistit' value='Отменить'>  
</form> 
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$radio=$_POST['deistvieye'];

if ($_POST['result'])
{
if ($radio=='+'){$c = $a + $b; echo "сумма=" . $c;}
if ($radio=='-'){$d = $a - $b; echo "разность=" . $d;}
if ($radio=='*'){$e = $a *$b;  echo  "произведение=" . $e;}
if ($radio=='/'){$f = $a / $b; echo "деление=" . $f;}
else echo "ошибка";
}
?>  
 </Body>
</html>