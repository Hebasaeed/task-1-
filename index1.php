<?php

$units=200;
 if($units<=50){
     
     $electricitybill=$units*3.5;
      echo " electricitybill=" . $electricitybill;

 }elseif($units>50&&$units<=150){
    $electricitybill=50*3.5+($units-50)*4;
    echo " electricitybill=" . $electricitybill;

 }else{
    $electricitybill=50*3.5+100*4+($units-150)*6.50;
    echo " electricitybill=" . $electricitybill;

 }

?>