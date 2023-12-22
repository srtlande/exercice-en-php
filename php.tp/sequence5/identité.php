<?php



require'cour-fonction.php';

// test la fonction

$prenom = readline("saisissez votre prénom : ");
$nom = readline("saisissez votre nom : ");
$identite = retournerIdentite($prenom,$nom);

echo $identite;