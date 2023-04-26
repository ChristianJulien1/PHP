<?php

$nombre = rand(1, 9);

echo "Table de multiplication de " . $nombre . " :\n";

for ($i = 0; $i < 10; $i++) {
  $resultat = $nombre * $i;
  echo $nombre . " x " . $i . " = " . $resultat . "\n";
}

?>