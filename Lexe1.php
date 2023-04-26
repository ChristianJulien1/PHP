<?php

$chomage = ["Autriche" => 4.9, "Allemagne" => 9.3 , "Danemark" => 4.8 , "Espagne" => 9.4 , "France" => 9.7];
$chomagecinqpays = 0;

foreach($chomage as $pays => $taux){
    echo "chômage du pays" . $pays . "est de" . $taux;
}
foreach ($chomage as $pays => $taux) {
    if ($taux < 5) {
      echo "$pays a un taux de chômage inférieur à 5%.<br>";
    }
  }
  $nompays = "";
  $tauxminimum = null;
  
  foreach ($chomage as $pays => $taux) {
    if ($tauxminimum == null || $taux < $tauxminimum) {
      $tauxminimum = $taux;
      $nompays = $pays;
    }
  }
  
  echo "Le pays avec le taux de chômage le plus faible est $nompays avec un taux de $tauxminimum %.";
  
