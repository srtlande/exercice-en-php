<?php
$a = readline("entrer un coefficient a : ");
$b = readline("entrer un coefficient b : ");
$c = readline("entrer un coefficient c : ");


$x = -$b / 2 * $a;
$equation = readline($a*$x*2 + $b*$x + $c = 0) ;
$discriminant = $b*$b - 4*$a*$c;
if ($discriminant == 0 ){
    $x = -$b / 2 * $a;
    echo "il y a une solution $x";
} elseif($discriminant > 0){
    $x1 = -$b - sqrt($discriminant)/2*$a;
    $x2 = -$b + sqrt($discriminant)/2*$a;
    echo "il y a deux solutions distinctes $x1 , $x2 ";
}else {
    echo "pas de solution";
}


