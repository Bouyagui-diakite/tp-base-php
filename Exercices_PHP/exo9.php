<?php
$array =[];
$maximum;
for($i =1; $i<20; $i++){
    $n = (int)readline("Entrer le nombre numero $i \n" );
    if($n ===0)
    {
        echo "fin du programme";
        break;
    }
    else
    {
        array_push($array, $n);
        max($array);
        $maximum = max($array);    
    }
    echo "le maximum est de $maximum \n"; 
    $pos = array_search($maximum, $array);
         
}
if($pos !==false)
        {
         echo "c'etait le nombre numero $pos \n";
        } 
       
// print_r($array);

// echo array_search($maximum, $array);
