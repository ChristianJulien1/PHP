<?php

$Pos = 0;
$Neg = 0;
$valeurs = [];
for($i = 0 ; $i < 3 ; $i++){
    $valeurs [$i]= readline ("Entrez vos valeurs : ");
}
for($i = 0 ; $i < count ($valeurs); $i++){
    if($valeurs [$i] > 0){
        $Pos++;
    }
    else{
        $Neg++;
    }
}
echo "$Pos | $Neg";

?>