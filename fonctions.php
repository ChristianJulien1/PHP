<?php

function calculPrixTTC ($prixHT, $nombreArticles, $tauxTVA) {

    $prixHTTotal = $prixHT * $nombreArticles;
    $montantTVA = $prixHTTotal * $tauxTVA / 100;
    $prixTTCTotal = $prixHTTotal + $montantTVA;

    return $prixTTCTotal;
  }
  
  function pgcd ($a, $b) {
    while ($b != 0) {
      $r = $a % $b;
      $a = $b;
      $b = $r;
    }
    return $a;
  }

  function ppcm ($a, $b) {
    $pgcd = pgcd ($a, $b);
    $ppcm = ($a * $b) / $pgcd;
    return $ppcm;
  }
  
  function AfficherTableMultiplication() {

    for ($i = 1; $i <= 10; $i++) {
      $produit = $nombre * $i;
      echo "$nombre x $i = $produit \n";
    }
  }
  
  function calculerFactorielle($nombre) {

    $factorielle = 1;
    for ($i = 2; $i <= $nombre; $i++) {
      $factorielle *= $i;
    }
    return $factorielle;
}

function somme_tableau($tableau) {
    $somme = 0;
    foreach ($tableau as $valeur) {
        $somme += $valeur;
    }
    return $somme;
}

function afficher_triangle($nb_lignes) {
    for ($i = 1; $i <= $nb_lignes; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nb_lignes = $_POST["nb_lignes"];
    afficher_triangle($nb_lignes);
}

function pyramide($size){
  $suite = array();
  for($i=1;$i<=$size;$i++){
      if($i<=$size/2){
          for($j=1;$j<=$i;$j++){
              $suite[$i][$j]="♦";
              echo $suite[$i][$j];
          }
      }
      else{
          for($j=($size-$i);$j>=0;$j--){ 
              $suite[$i][$j]="♦";
              echo $suite[$i][$j];
          }
      }
      echo "\n";
  }
}

// SUITES



?>
