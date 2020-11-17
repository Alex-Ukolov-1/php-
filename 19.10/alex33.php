<?php 
$n = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
function task17($n)
{
 $sum = 0;
 for ($i=0; $i<=count($n); $i++)
  { 
  if($n[$i]%3==0)
  echo "$n[$i] <br>";
  if($n[$i]%3==0 && $n[$i]%5==0)
  $sum = $sum-1;
  
  if($n[$i]%5==0)
  $sum = $sum+$n[$i];
  
  }
echo "сумма 'sum' $sum";
return $n;
}
task17($n);
?>