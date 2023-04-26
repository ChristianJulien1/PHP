<?php

$jour = (int)readline("Entrez le numéro de jour : ");
$mois = (int)readline("Entrez le numéro de mois : ");
$annee = (int)readline("Entrez le numéro d'année : ");

if ($annee % 4 == 0 && ($annee % 100 != 0 || $annee % 400 == 0)) {
  echo "$annee est une année bissextile.";
} else {
  echo "$annee n'est pas une année bissextile.";
}

?>
