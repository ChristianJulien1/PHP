<?php

$total = 0;
$notes = [];

for( $i= 0 ; $i<9; $i++ ){
$saisie = readline ("notes: ");
$notes[$i] = $saisie;
}

echo "Entrez vos notes";

for($i = 0; $i<count($notes) ;$i++){
    $total = $total + $notes[$i];
}

$moyenne = $total/count($notes);

echo "moyenne : $moyenne";

?>