<?php
    $nombre = (float) readline ("Entrez le nombre : ");
    $nombre = (int) nombre > 5;
    if($nombre > 5 and $nombre < 8){
        echo "l'enfant est poussin"; 
    }elseif($nombre > 7 and $nombre < 10){
        echo "l'enfant est pupille";
    }elseif($nombre > 9 and $nombre < 12){
        echo "l'enfant est minime";
    }elseif($nombre > 11){
        echo "l'enfant est cadet";
    }
    ?>