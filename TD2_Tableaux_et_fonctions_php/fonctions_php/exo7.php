<?php

function plugrand($array = [])
{
    if(empty($array)){ /* empty: verifie si le tableau est vide */
     echo "null";
    }
    else{
        echo max($array);
    }

}
plugrand($array =[12, 30, 15]);