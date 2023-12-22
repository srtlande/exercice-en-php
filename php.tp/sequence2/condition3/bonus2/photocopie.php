<?php

$nbrPhotocopie = readline("saisir le nombre de photocopies réalisées");
$prix = 0.0;


if( $nbrPhotocopie <=10 ){
    $prix = $nbrPhotocopie*0.30;
}elseif($nbrPhotocopie <=30) {
    $prix = (10 * 0.30) + (($nbrPhotocopie - 10) * 0.25);
} else {
    $prix = (10 * 0.30) + (20 * 0.25) + (($nbrPhotocopie - 30) * 0.20);
}

if ($prix > 50){
    $prix *= 0.90;

echo "le nombre a payer pour $nbrPhotocopie est de $prix  ";
