<?php
function check_format_mdp($mdp){
    $majuscule = preg_match('@[A-Z]@', $mdp);
    $minuscule = preg_match('@[a-z]@', $mdp);
    $chiffre = preg_match('@[1-9]@', $mdp);


    if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp)< 8){
        return false;
    }
    else
    return true;

}

if (check_format_mdp("Bouyagui11b230") != true)
{
	echo "false";
}
else 
	echo "true";
