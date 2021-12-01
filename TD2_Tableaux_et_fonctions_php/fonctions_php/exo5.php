<?php

function pluPetit($arg1, $arg2, $arg3){

    if($arg1 < $arg2 && $arg1< $arg3){
        echo "$arg1";
    }
    elseif($arg2 < $arg1 && $arg2< $arg3){
        echo "$arg1";
    }
    else{
        echo "$arg3";
    }

}
pluPetit(10, 20, 30);