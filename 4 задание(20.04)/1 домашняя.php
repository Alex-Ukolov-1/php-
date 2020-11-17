<?php 
function func()
{
  $sum = 0;
  $dum = 0;
  $arr = array(1,2,3,4,5);
  for ($i=count($arr); $i >=0; $i--)
  { 
   print_r("{$arr[$i]}\n");
  }
  for ($i=0; $i<=count($arr); $i++)
  { 
      $dum++;
  }
  echo "чисел в массиве ", $dum-1;
}
func();
?>