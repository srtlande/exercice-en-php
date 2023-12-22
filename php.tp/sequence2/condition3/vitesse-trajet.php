<?php

$distance_kms = readline("saisir une distance en km :");
$duree = readline (" Saisir une durée (format h:m)");
$vitesse =($distance/($duree/60));

if($vitesse <= 90)
