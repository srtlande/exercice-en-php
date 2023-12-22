<?php

$nombreMinute = readline("saisir le nombre de minutes d'appels utilisées : ");
$nombreSms = readline( "saisir le nombre de SMS envoyés :  ");
$qtDGO = readline( "saisir la quantité de données en consommées GO : ");

if ( $nombreMinute <  0 && $nombreSms < 0 && $qtDGO < 0 ){
    echo " ATTENTION ! vous devez saisir des nombres positifs ";
}

$coutmin = $nombreMinute * 0.40;
$coursms = $nombreSms * 0.20;
$coutGO = $qtDGO * 0.90;

$coutTotal = $coutGO + $coursms + $coutmin ;

echo "le montant total de votre facture  est de $coutTotal";


