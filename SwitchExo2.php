<!-- <?php

// $nombre = 0;
// $nombre1 = $nombre + $nombre;
// $nombre2 = $nombre - $nombre;
// $nombre3 = $nombre * $nombre;
// $nombre4 = $nombre / $nombre;

// for($i=0 ; $i<$nombre ; $i++){ 
//     $saisie = readline("nombre : ");
//     $nombre[$i] = $saisie;
//     $total = $choix + $nombre[$i];
// }

// echo "Que voulez-vous faire ?\n";
// echo "1. Additionner\n";
// echo "2. Soustraire\n";
// echo "3. Multiplier\n";
// echo "4. Diviser";
// $choix = readline("Choix : ");

// switch($choix){

// } -->

$num1=0;
$num2=0;
$op='i';
while($op!='q'){
    $num1=(float)readline();
    $op=(string)readline();
    $num2=(float)readline();
switch($op){
    case '+':
        $result=$num1+$num2;
        echo "= $result \n";
        break;
    case '-':
        $result=$num1-$num2;
        echo "= $result \n";
        break;
    case '*':
        $result=$num1*$num2;
        echo "= $result \n";
        break;
    case '/':
        $result=$num1/$num2;
        echo "= $result \n";
        break;
    case 'q':
        echo 'au revoir';
        break;
        
}
}

?>