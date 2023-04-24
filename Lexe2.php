<?php

$tabNotes = array ("boucher" => 16, "bourdette" => 13, "john" => 10,);

foreach ($tabNotes as $eleve => $note) {
    echo "$eleve a obtenu la note de $note.";
  }

$somme = 0;
$nombreeleves = 0;

foreach ($tabNotes as $eleve => $note) {
  $somme += $note;
  $nombreeleves++;
}

$moyenne = $somme / $nombreeleves;

echo "La moyenne des notes est de $moyenne.";

?>
