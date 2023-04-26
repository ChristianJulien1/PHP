<?php

$nombrephotocopies = (float) readline ("Entrez un nombre : ");
if ( $nombrephotocopies < 11){
    $prix = $nombrephotocopies * 0.10;
}
if ( $nombrephotocopies > 11 and $nombrephotocopies < 31){
    $prix = (1 + $nombrephotocopies) * 0.09;
}
if ( $nombrephotocopies > 30){
   $prix = (1 + 1.8 + $nombrephotocopies) * 0.08;
}
echo "le prix est de : $prix";