<?php
    $i=0;
    $sum=0;
    $sumC=0;
    $sumL=0;
    while($i<=10){
        $sum+=$i;
        if($i%2==0){
            $sumC+=$i;
            }
        else {
            $sumL+=$i;
            }
        $i++;
             }
            echo "$sum <br>";
            echo "$sumC <br>";    
            echo "$sumL"
    ?>;