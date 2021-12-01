<?php

function verificationPWD($password){
    $taille_chaine = strlen($password);
    if(strlen($taille_chaine >= 8)){
        echo "true \n";
    }else{
        echo "false";
    }
}
verificationPWD("Hello_world \n"); /* 8 caracteres ou plus, va retourner true */
verificationPWD("Hello \n"); /* moins de 8 caracteres va retourner false */