<?php
 session_start();
 $num=(isset($_SESSION["num"])) ? $_SESSION["num"] :0;
 if($num==0) echo"вы ещё не обновляли страницу ";
 $num++;
 $_SESSION["num"]=$num;
 echo "страница обновлена $num раз";
?>