<?php
$reste;
$m;
$nb5;
$somdu = 0;
while($e!=0){
    $e = (int)readline("entrez un montant \n");
    $somdu = $somdu + $e;
}
echo "vous devez: $e euros";
$m = (int)readline("Montant verse: ");
$reste = $m - $e;
while($reste >=10){
    $nb10 = $nb10 +1;
    $reste = $reste = 10;
}
if($reste >=5){
    $nb5 = 1;
    $reste = $reste -5;
}
echo "Rendu de la monnaie: \n";
echo "Billet de 10$ : $nb10";
echo "Billet de 5$ : $nb5";
echo "Billet de 1$ : $reste";
