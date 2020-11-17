<?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  $radio=$_POST['operation'];
  if ($_POST['vichislit'])
  {
      if ($radio=='+'){$c = $a + $b; echo "сумма=" . $c.'<br>';}
      if ($radio=='-'){$d = $a - $b; echo "разность=" . $d.'<br>';
      if ($radio=='*'){$e = $a *$b;  echo  "произведение=" . $e.'<br>';}
      if ($radio=='/'){$f = $a / $b; echo "деление=" . $f;
}
?>  