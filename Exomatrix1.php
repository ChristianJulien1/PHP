<?php

$Tab = [
    [10, 2, 5, 7, 12, 8, 1, 9],
    [3, 11, 6, 4, 5, 7, 8, 2],
    [9, 4, 12, 1, 8, 6, 7, 3],
    [6, 8, 2, 9, 3, 11, 5, 4],
    [7, 3, 8, 11, 2, 9, 4, 10],
    [1, 5, 7, 12, 6, 4, 2, 11],
    [8, 7, 1, 5, 10, 2, 12, 6],
    [2, 9, 11, 6, 4, 5, 3, 8],
    [5, 6, 3, 10, 7, 1, 9, 12],
    [4, 10, 9, 2, 1, 12, 6, 7],
    [11, 1, 4, 8, 9, 3, 10, 5],
    [12, 8, 10, 3, 6, 7, 11, 1]
];
  
  $max = $Tab[0][0];
  
  for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 8; $j++) {
      if ($Tab[$i][$j] > $max) {
        $max = $Tab[$i][$j];
      }
    }
  }
  
  echo "La plus grande valeur dans le tableau est $max";


$T = array();
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 8; $j++) {
        $T[$i][$j] = rand(0, 100);
    }
}

echo "Tableau T :\n";
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 8; $j++) {
        echo $T[$i][$j] . " ";
    }
    echo "\n";
}

$max_value = $T[0][0];
for ($i = 0; $i < 12; $i++) {
    for ($j = 0; $j < 8; $j++) {
        if ($T[$i][$j] > $max_value) {
            $max_value = $T[$i][$j];
        }
    }
}

echo "La plus grande valeur dans le tableau est : " . $max_value . "\n";

?>
