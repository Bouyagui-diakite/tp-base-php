<?php
$x =0;
do {
    $x = (int)readline("donner un nombre entre 10 et 20 \n");
    if($x> 20){
        echo " plus petit \n";
        
    }
    elseif($x<10){
        echo "plus grand \n";
     
    }
    else{
        echo "bravo";
    }
}
 while($x<10 && $x>20); 