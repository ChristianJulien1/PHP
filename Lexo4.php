<?php 

$tableau1 = [2, 4, 6, 8, 10];
$tableau2 = [1, 3, 5, 7, 9];

$tableauResultat = [];

for ($i = 0; $i < count($tableau1); $i++) {
    $somme = $tableau1[$i] + $tableau2[$i];
    $tableauResultat[$i] = $somme;
}

print_r($tableauResultat);
?>