<?php 


$prix = [5,50,23,11];
$quantités = [10,1,4,3];

$total = 0;

for( $i = 0; $i < count($prix); $i++){
    $total += $prix[$i] * $quantités[$i];
}

echo "le prix total est de : ". $total . "euros";

?>