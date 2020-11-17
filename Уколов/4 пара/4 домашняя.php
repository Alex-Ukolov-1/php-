<?php 
function func()
{
$a = 586;
$arr[0] = sqrt($a);
$arr[1] = floor(sqrt($a));
$arr[2] = ceil(sqrt($a));
$array=['floor'=>'$arr[1]','ceil'=>'$arr[2]'];
echo "$arr[0]\n";
echo" $arr[1]\n";
echo "$arr[2]\n";
}
func();
?>
