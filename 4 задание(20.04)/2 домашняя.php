<?php 
function func()
{
$string1 ="я не люблю php";
$string2=str_replace('не', 'очень', $string1);
echo $string2;
$str= strlen($string2);
echo ' число символов  ',"$str \n";
echo date('l jS \of F Y h:i:s A');
}
func();
?>