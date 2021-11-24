<?php

$x =0;
do {
    $x = (int)readline("donner un nombre entre 1 et 3 \n");
    if($x > 1 && $x<3){
        echo "bravo";
        break;
    }
    else{
        echo " ce nombre n'existe pas entre 1 et 3\n";
    }
} 

while($x < 1 || $x > 3);
// $n =0;
// while($n< 1|| $n>3){
//    (int)readline("donner un nombre entre 1 et 3 \n");
//     $n++;
//     if($n<1 || $n>3){
//         echo "saisie errone, recommencez";
//     }else{

//         echo "bravo";
//     }
// }

