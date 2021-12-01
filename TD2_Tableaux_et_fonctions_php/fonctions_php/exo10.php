<?php

function capital($cap){

    $cap = readline("Saisissez le nom d'un pays \n");

    switch ($cap) {
        case 'France':
            echo "France ==> Paris";
            break;

        case 'Allemagne':
             echo "Allemagne ==> Berlin";
            break;


         case 'Mali':
            echo "Mali ==> Bamako"; 
           break;
        
        
        case 'Maroc':
         echo "Maroc ==> Rabat";
            break;


         case 'Espagne':
           echo "Espagne ==> Madrid";
             break;


        case 'Portugal':
            echo "Portugal ==> Lisbonne";
                break;


        case 'Angleterre':
            echo "Angleterre ==> Londres";
                break;


       case 'Senegal':
            echo "Senegal ==> Dakar";
                break;

        default:
           echo "Inconnu";
            break;
    }
}
capital("");