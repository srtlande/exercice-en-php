<?php

// inclure le fichier dans lequel se trouve la fonction estPair
// utilisation de la fonction require :
require 'cour-fonction.php'; // => php vient remplacer cette ligne par la fonction elle meme
include 'cour-fonction.php';
//require stoppe directe le prog si le fichier n'existe pas / alors que include continue jusqu'à trouver le moment où ça bloque vu qu'il manque le fichier

// appel la fonction

$nombre = readline( "saisir un nombre : ");

if (estPair($nombre)){
    echo "le nombre est pair !";

}else {
    echo "le nombre est impair";
}