<?php

$heure = (int)readline("Entrez l'heure : ");
$minute = (int)readline("Entrez les minutes : ");
$seconde = (int)readline("Entrez les secondes : ");

$seconde++;

if ($seconde == 60) {
  $seconde = 0;
  $minute++;
  if ($minute == 60) {
    $minute = 0;
    $heure++;
    if ($heure == 24) {
      $heure = 0;
    }
  }
}

echo "Dans une seconde, il sera ".$heure." heure(s), ".$minute." minute(s) et ".$seconde." seconde(s).";
?>