<?php
    echo "Entrez un nombre de départ : ";
    $num = readline();

    $i = 1;
    while ($i <= 10) {
        $suivant = $num + $i;
        echo "$suivant\n";
        $i++;
    }
?>