<?php
$array =[];
$maximum=0;
for($i =1; $i<20; $i++){
    $n = (int)readline("Entrer le nombre numero ".($i). " \n" );
    array_push($array, $n); //ajout des elements dans le tableau
    max($array); //trouver le maximum du tableau
    $maximum = max($array);  //affecter le maximum du tabeau a la variable $maximum
}
// print_r($array); //Affcihage des elements du tableau (facultatif)
echo "le maximum est de $maximum \n"; 
$pos = array_search($maximum, $array); //rechercher le maximum dans le tableau
if($pos !==false){
    echo "IL ETAIT A LA POSITION " .($pos+1). " \n";
}
// echo array_search($maximum, $array);
while($n ===0){
    break;
}