<?php
$note = array(
    "Diouf" => 13,
    "Fall" => 16,
    "Dia"=>15,
);
print_r($note);

echo "la note maximale est: ",max($note)."\n"," la note minimale est: ",min($note)."\n";
echo "\n";
ksort($note);
// la boucle foreach pour parcourir les couples clé=>valeur d'un tableau
foreach ($note as $key => $value) {
	echo "la note de l’étudiant $key est : $value \n";
}
echo "\n";

echo "tri par ordre decroissant\n";
arsort($note);
foreach ($note as $key => $value) {
	echo "la note de l’étudiant $key est : $value \n";
}
echo "\n";
echo "la moyenne de la classe: ",round(array_sum($note)/count($note),2);
