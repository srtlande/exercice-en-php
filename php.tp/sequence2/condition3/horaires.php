<?php

$heure = readline("saisir une heure :");

if ($heure < '19 : 00' || $heure >= '9:00');
{
    echo "le magasin est ouvert";
} else {
    echo " le magasin est fermer ";
}
