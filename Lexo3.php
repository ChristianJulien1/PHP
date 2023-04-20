<?php

$total = 0;
$valeurs = [];
for($i = 0; $i < 3 ; $i++){
    $saisie = readline ("valeurs");
    $valeurs [$i]= $saisie;
}
for($i = 0; $i<count($valeurs) ;$i++){
    $total = $total + $valeurs[$i];
}
echo "Total $total";

?>