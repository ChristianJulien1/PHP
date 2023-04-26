<?php 

$valeurs= [];
for($i = 0; $i < 3 ; $i++){
    $saisie = readline ("valeurs");
    $valeurs [$i]= $saisie;
}

echo "la valeur maximale est :"; 
echo max ($valeurs);

?>

<?php

$max = 0;
$temporaire = 0;
$indice = 0;
$valeur = [];
$nombre = readline ("nombre de valeurs :");

for($i = 0; $i < $nombre ; $i++){
$saisie = readline("valeurs :");
$valeur[$i] = $saisie;
}

for($i = 0; $i < count($valeur) ;$i++){
    $temporaire = $valeur[$i];
    if($max < $temporaire){
       $max = $temporaire;
       $indice = $i;
    }
}

$indice++;

echo "valeur maximum :$max \n";
echo "position :$indice"

?>