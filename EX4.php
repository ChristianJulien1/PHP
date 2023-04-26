<?php

$min = 0;
$max = 0;

for ($i = 1; $i <= 5; $i++) {
    echo "Entrez le nombre $i : ";
    $nombre = (int)readline();

    if ($nombre < $min) {
        $min = $nombre;
    }
    if ($nombre > $max) {
        $max = $nombre;
    }
}

echo "Le plus petit nombre est : $min\n";
echo "Le plus grand nombre est : $max\n";

?>
