<?php

$nombre = $nombre2 = readline ("Entrez un nombre : ");

echo "Nombre qui précèdent et succédent  " . $nombre . " :\n";

for ($i = 0; $i < 5; $i++) {
$nombre = $nombre + 1;
echo "$nombre\n";
}

for ($i = 0; $i < 5; $i++) {
    $nombre2 = $nombre2 - 1;
    echo "$nombre2\n";
    }
?>