<?php

$poids = readline ("veuillez saisir votre poids en kg : ");
$taille = readline ( "veuillez saisir votre taille en mètre : ");

if( !is_numeric($poids) || !is_numeric($taille)){
    echo " ATTENTION! le poids et la taille doivent être supérieure à 0 ";
    exit(1);
}

$imc = $poids/($taille * $taille);


if ($imc < 18.5){
    echo " $imc : vous êtes en sous-poids ";
} elseif ( $imc > 18.5 && $imc < 25){
    echo " $imc : vous avez un poids normal ";
} elseif ( $imc > 25 && $imc < 30){
    echo " $imc : vous êtes en surpoids";
} else{
    echo " $imc : vous êtes obèse";
}



