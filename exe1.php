<?php
$num = 0;
while ($num < 1 || $num > 3) {
    echo "Veuillez entrer un nombre compris entre 1 et 3 : ";
    $num = readline();
}
echo "Vous avez entré le nombre $num.";
?>