<?php

for($i = 11; $i<=36; $i++){
    $tab[$i] = chr(54+ $i);

}
/* lecture avec la boucle for */
for($i = 11; $i<=36; $i++){
    echo "element d'indice $i: $tab[$i] \n";
}



/* lecture avec la boucle foreach */
foreach ($tab as $key => $value) {
    
    echo "Element d'indice $key : $value \n";
}