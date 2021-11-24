<?php
$n; $i; $somme; //déclaration des variables
$n = (int)readline("donner une valeur \n");
$somme = 0;
for ($i=1; $i<=$n; $i++)
{
$somme = $somme + $i;
}

echo "La somme des entiers de 1 à $n est égale à : $somme";

//utilisation de la boucle while
// $n_nbre; $i; $n_somme; //déclaration des variables
// $n_somme = 0;
// $i=1;
// While($i<=$n_nbre)
// {
// $n_somme = $n_somme + $i;
// $i++;
// }
// echo "La somme des entiers de 1 à $n_nbre est égale à : $n_somme";