<?php

$sexe = readline ("Homme ou Femme : ");
$âge = readline ("âge : ");

if( $sexe = "Homme" and $âge > 20){
    echo "Vous payez des impôts";
}elseif ($sexe = "Femme" and $âge > 17 and $âge < 36){
    echo "Vous payez des impôts";
}
else echo "Vous ne payez pas d'impôts";