<?php
    $nombre1 = (float)readline ("Entrez un nombre : ");
    $nombre2 = (float)readline ("Entrez un nombre : ");
    if(($nombre1 > 0 and $nombre2 > 0) or ($nombre1 < 0 and $nombre2 < 0));{
    echo "nombre est positif";
    }
    else echo "nombre est négatif";
?>