<?php

$nombre;
$total = 0;
$notes = [];

for( $i= 0 ; $i<5; $i++ ){
$saisie = readline ("notes: ");
$notes[$i] = $saisie;
}

echo "Entrez vos notes";

for($i = 0; $i<count($notes) ;$i++){
    $total = $total + $notes[$i];
}

$moyenne = $total/count($notes);

echo "la moyenne est de : $moyenne";

?>