<?php
    $num = 0;
    while ($num < 10 || $num > 20) {
        echo "Veuillez entrer un nombre compris entre 10 et 20 : ";
        $num = readline();
        if ($num > 20) {
            echo "Plus petit ! ";
        } elseif ($num < 10) {
            echo "Plus grand ! ";
        }
    }
    echo "Vous avez entré le nombre $num";

?>