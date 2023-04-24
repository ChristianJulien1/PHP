<?php

$total=0;
$somme=0;
$notes = [];
$nbnote=0;
$nbr=readline('nombre de notes :');
for($i=0;$i<$nbr;$i++){
$saisie = readline('notes:');
$notes[$i]=$saisie;
}
for($i=0;$i<count($notes);$i++){
    $somme=$somme+$notes[$i];
}
$moyenne=$somme/count($notes);
for($i=0;$i<count($notes);$i++){
    $tmp=$notes[$i];
    if($tmp>$moyenne){
       $nbnote++;
    }
}
echo "note>moyenne :$nbnote"

?>