<?php
$heure = (int) readline ("Entrez une heure : ");
$minute = (int) readline ("Entrez une minute : ");
$minute = $minute + 1;
    if($minute > 58 and $heure < 60){
    echo "00";
    }
?>