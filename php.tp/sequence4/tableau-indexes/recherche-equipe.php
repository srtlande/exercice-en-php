<?php

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

$choix = readline("veuillez choisir une équipe :");

$trouve=false;
foreach($equipes as $equipe){
    if (strcasecmp($choix, $equipe) == 0) {
        $trouve = true;
        break;
    }
}

if ($trouve = true ) {
 echo " $choix sera présente a la coupe du monde ";
} else {
    echo " $choix ne sera pas présente a la coupe du monde";
}


