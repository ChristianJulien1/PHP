<?php

$nb1 = readline("Entrez le premier nombre : "); 
$nb2 = readline("Entrez le premier nombre : "); 

$tmp1 = $nb1 * $nb2; 
while($nb1 % $nb2 !=0){     
    $tmp = $nb2;     
    $nb2 = $nb1%$nb2;     
    $nb1 = $tmp; } 
    
    echo "Le PPCM est ", 
    $tmp1 / min($nb1,$nb2);

?>