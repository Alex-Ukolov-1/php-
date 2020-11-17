<?php 
function func()
{
 $sum = 0;
  $arr = array(1,2,3,4,5,6,7,8,9,10);
 for ($i=0; $i<=count($arr); $i++)
  { 
      $dum++;
       $sum += $arr[$i];
       if($sum>10)break;
  }
  echo "необходимо ", $dum;
}
func();
?>