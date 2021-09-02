<?php
$startWork = microtime(true);
date_default_timezone_set('Europe/Moscow');
@session_start();
    if (!isset($_SESSION["answer"])){
    $_SESSION["answer"] = array();
    }

if($_GET["t"]==1){
    $x=$_GET["x"];
        $y=$_GET["y"];
        $r=$_GET["r"];
        $nowDate=date("Y-m-d H:i:s");


        if(checkValid($x,$y,$r)){
    array_unshift($_SESSION["answer"],"<tr>
                                             <th>".$x."</th>
                                             <th>".$y."</th>
                                             <th>".$r."</th>
                                             <th>".checkPosition($x,$y,$r)."</th>
                                             <th>".$nowDate."</th>
                                             <th>".((microtime(true) - $startWork)) ." сек</th>
                                             </tr>");
                                             printText();

        }else{
        array_unshift($_SESSION["answer"],"<tr>
                                                 <th>Ошибка валидации</th>
                                                 <th>Ошибка валидации</th>
                                                 <th>Ошибка валидации</th>
                                                 <th>Ошибка валидации</th>
                                                 <th>Ошибка валидации</th>
                                                 <th>Ошибка валидации</th>
                                                 </tr>");
                                                 printText();

        }

}else if($_GET["t"]==2){
echo "<td id='nullAnswer'><center><p >Данных еще нет</p></center></td>";
session_destroy();
}else{
if(count($_SESSION["answer"])==0){
echo "<td id='nullAnswer'><center><p >Данных еще нет</p></center></td>";
}else{
printText();}

}


function printText(){
echo "<table>
     <tr>
           <th>x</th>
           <th>y</th>
           <th>r</th>
           <th>Попал ли в одз</th>
           <th>Сейчас время</th>
           <th>Время за которое выполнился скрипт</th>
           </tr>";
foreach ($_SESSION["answer"] as $answers) echo $answers;
echo "</table>";
}




    function checkValid($x,$y,$r){
    if(($x==-3 or $x==-2 or $x==-1 or $x==0 or $x==1 or $x==2 or $x==3 or $x==4 or $x==5)and($y>=-5 and $y<=5)and($r==1 or $r==2 or $r==3 or $r==4 or $r==5)){
    return true;
    }else{
    return false;
    }
    }

    function checkPosition($x1, $y1, $r1) {
           $answer=true;
        if($y1>=0){
            if($x1>=0){
                if($x1<=$r1/2 && $y1<=$r1/2 && $y1<=-$x1+$r1/2){
                  }
                else{
                    $answer=false;}
            }else{
                   if($x1**2+$y1**2<=$r1**2){

                   }else{
                   $answer=false;
                   }
            }
        }else{
            if($x1>=0){
            if($y1>-$r1 && $x1<$r1){

            }else{
            $answer=false;
            }

            }else{
            $answer=false;
            }
        }
        if($answer){
        return "Да";
        }else{
        return "Нет";}
    }
?>
