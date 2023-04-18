<?php
$heure = (int) readline ("Entrez une heure : ");
$minute = (int) readline ("Entrez une minute : ");
$seconde = (int) readline ("Entrez une seconde : ");
$x = 1;
$minute = $minute + $x;
$seconde = $seconde + $x;
    if($heure > 23){
    echo "00";
    }elseif($minute > 59){
    echo "00";
    }elseif($seconde > 59){
        echo "00";
    }elseif($minute == $minute + $x and $seconde == $seconde + $x)
?>