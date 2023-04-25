<?php


$nombre_aleatoire = rand(1, 20);

if ($nombre_aleatoire <= 5) {
    echo "Le nombre est compris entre 1 et 5";
} elseif ($nombre_aleatoire <= 10) {
    echo "Le nombre est compris entre 6 et 10";
} elseif ($nombre_aleatoire <= 15) {
    echo "Le nombre est compris entre 11 et 15";
} else {
    echo "Le nombre est compris entre 16 et 20";
}


$nombre_aleatoire = rand(0, 20);

if ($nombre_aleatoire < 7) {
    $message = "Bonjour";
} elseif ($nombre_aleatoire < 14) {
    $message = "Salut";
} else {
    $message = "Hello";
}

echo "Nombre: " . $nombre_aleatoire . " " . $message;

$nb_essais = 0;

do {
    $nb_essais++; 
    
    $nombre = readline("Entrez un nombre pair et divisible par 3 : ");

    
    if ($nombre % 2 != 0 || $nombre % 3 != 0) {
        echo "Erreur : le nombre saisi n'est pas pair et divisible par 3.\n";
    }
} while ($nombre % 2 != 0 || $nombre % 3 != 0);

echo "Bravo, vous avez saisi le nombre correct en $nb_essais essais !";

?>


?>

