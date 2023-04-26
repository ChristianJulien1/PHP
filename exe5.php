<?php

$nb1 = readline("Entrez le premier nombre : "); 
$nb2 = readline("Entrez le premier nombre : "); 

$resultat = $nb1 * $nb2;

while ( $nb1 % $nb2 != 0 ){     
    $temporaire = $nb2;     
    $nb2 = $nb1 % $nb2;     
    $nb1 = $temporaire; 
} 
    
    echo "Le PPCM est " . $resultat / min ($nb1 , $nb2);

?>