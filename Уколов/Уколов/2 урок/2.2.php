
<?php

            $a=1;
            $b=3;
            if($a<=1 && $b>=3){
                $rez=$a+$b;
                echo "(1) ", "$rez", "\n";
            }
            else{
                $rez=$a-$b;
                echo "(1) ", "$rez", "\n";
            }
            
            // 2 Пункт
            $a=0;
            $b=6;
            if(($a>2 && $a<11) || ($b>=6 && $b<14)){
                echo "(2) ", "Верно", "\n";
            }
            else{
                echo "(2) ", "Неверно", "\n";
            }
            $day=1;
            if($day<=10)
            {
                echo "(3) ","Первая декада месяца", "\n";
            } 
            else{
                if($day>20)
                {
                        echo "(3) ","Третья декада месяца", "\n";
                }
                else{
                        echo "(3) ","Вторая декада месяца", "\n";
                }
            }
            $month=12;
            if($month>=3 && $month <=5)
            {
                echo "(4) ", "Весна", "\n";
            } 
            else{
                if($month>=6 && $month <=8)
                {
                    echo "(4) ", "Лето", "\n";
                }
                else{
                    if($month>=9 && $month <=11){
                        echo "(4) ", "Осень", "\n";
                    }
                    else{
                        echo "(4) ", "Зима", "\n";
                    }
                }
            }
            $year=2020;

            if($year%4==0 && $year %100!=0)
            {
                echo "(5) ", "$year год — високосный", "\n";
            } 
            else{
                if($year%400==0)
                {
                    echo "(5) ", "$year год — високосный", "\n";
                }
                else{
                    echo "(5) ", "$year год — невисокосный", "\n";
                }
            }
            $num = 1;
            switch($num)
            {
                case 1:$rez="Весна";break;
                case 2:$rez="Лето";break;
                case 3:$rez="Осень";break;
                case 4:$rez="Зима";break;
                default: $rez="Ошибка";break;
            }
            echo "(6) ", "$rez", "\n";

            // 7 Пункт
            for($i=1;$i<=100;$i++){
                echo "(7) ", "$i\n";
            }
            
        ?>
		