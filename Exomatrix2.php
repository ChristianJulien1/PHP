<?php
$n = 7;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
} 
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

// $n = 7 est le nombre de lignes et colonnes
// $i = lignes et $j = colonnes

?>

<?php

//Je définie la hauteur du losange
$nombre =7;
//Cette boucle parcours le lignes
for( $i=0; $i<=(2*$nombre); $i++ ){

    //parcours les colonnes de chaque ligne
    for( $j=0; $j<=$nombre; $j++ ){

        //Vérifie la position courante de i, comprise entre les limites supérieure et inférieure pour afficher une étoile par rapport à $nombre.
        //La limite inférieure est décalée de $j-1 positions vers le bas
        //La limite supérieure est décalée de $j+1 position vers le haut
        if($i>=$nombre-($j-1) && $i<=$nombre+($j-1)){
            echo " ";
        }
    }
    echo "\n";
}
?>

<?php

$suite = array();
for($i=1;$i<=8;$i++){
        for($j=1;$j<=$i;$j++){
            switch($j){
                case $j<2 || $j==$i:
                    $suite[$i][$j]="♦";
                    echo $suite[$i][$j];
                    break;
                case $j>1&&$j<$i && $i!=8:
                    $suite[$i][$j]="○";
                    echo $suite[$i][$j];
                    break;
                default:
                    $suite[$i][$j]="♦";
                    echo $suite[$i][$j];
                    break;

            }
        }
    echo "\n";
}
?>

<?php

//gère le nombre de lignes
for ($i = 0; $i < 8; $i++) {

    //gère les caractère à afficher sur chaque lignes
    for ($j = 0; $j <= $i; $j++) {

        //On vérifie si j est égal à 0  pour afficher x sur le bord gauche 
        //j est égal à i pour afficher x sur le bord droit
        // si i est égal à 7 pour afficher x sur la dernière ligne
        if ($j == 0 ; $j == $i ; $i == 7) {
            echo "x";
        } else {
            echo "o";
        }
    }
    echo "\n";

?>

