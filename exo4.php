<?php
    $nombre1 = (float)readline ("Entrez un nombre : ");
    $nombre2 = (float)readline ("Entrez un nombre : ");
    if(($nombre1 > 0 and $nombre2 > 0) or ($nombre1 < 0 and $nombre2 < 0))
    echo "nombre est positif";
    if($nombre1 == 0 and $nombre2 == 0)
    echo "nombre est égal à 0";
    else echo "nombre est négatif";
?>