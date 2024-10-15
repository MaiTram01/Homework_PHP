<?php
    $sumC=0;
    $sumL=0;
    for ($i = 0; $i <5; $i++) {
        if($i%2==0){
            $sumC+=$i;
        }
        else{
            $sumL+=$i;
        }
            }
        echo "$sumC <br>";    
        echo "$sumL";  
?>