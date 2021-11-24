<?php

$f =1;
$n = (int)readline("Donner un nombre \n");
for($i=$n; $i>=1; $i--){
    $f = $f*$i;
}
echo "le factoriel de ".$n." est de ".$f;
