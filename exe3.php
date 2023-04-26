<?php
    
    $num = readline("Entrez un nombre de départ : ");

    $i = 0;
    while ($i <= 10) {
        $suivant = $num + $i;
        $i++;
        echo "$suivant\n";
    }

?>