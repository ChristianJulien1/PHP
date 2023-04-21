<?php 

$valeurs = 0;
$valeurs=[];
for($i = 0; $i < 3 ; $i++){
    $saisie = readline ("valeurs");
    $valeurs [$i]= $saisie;
}

echo "la valeur maximale est :"; 
echo max ($valeurs);

?>