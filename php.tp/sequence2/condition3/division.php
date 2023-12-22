<?php
$nombre1 = readline("Saisir un nombre entier : ");
$nombre2 = readline("Saisir un nombre entier : ");
if($nombre2 == 0){
    echo" $nombre2 doit etre plus grand que 0 ";
    PHP_EOL;
    $nombre2 = readline("saisir un nombre:");
}
$resultat = round($nombre1 / $nombre2,2);
echo "Le résultat de la division de $nombre1 par $nombre2 est $resultat";

