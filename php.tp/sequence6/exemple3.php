<?php

// Déclaration d'un tableau associatif bi-dimensionnel
// dont les éléments sont des tableaux indexés

// Déclarer un tableau associatif '$etudiants'
// Chaque élément représente un étudiant avec son nom et ses notes
// La clé de l'élément est le nom de l'étudiant
// La valeur de l'élément est un tableau indexé de notes
// Chaque étudiant peut avoir un nombre de notes différent
;

// Afficher une valeur du tableau
// Afficher la 2ème note de Dupont
echo "-------------------------------------" . PHP_EOL;

$etudiants = [
    "Dupont" => [10,12,9],
    "Durand" => [15,8,12],
    "Martin" => [10,8,9,10]
];

echo $etudiants["Dupont"][1].PHP_EOL;


// Afficher toutes les valeurs du tableau
echo "-------------------------------------" . PHP_EOL;

foreach($etudiants as $notes){
    //$note = tableau indexé
    foreach($notes as $note){
        echo "$note ";
    }
    echo PHP_EOL;
}


// Afficher tous les éléments (clé et valeur) du tableau
echo "-------------------------------------" . PHP_EOL;

foreach($etudiants as $nom =>$notes) {
    echo "$nom : ";
    foreach ($notes as $note) {
        echo "$note ";
    }
    echo PHP_EOL;
}

// Calculer la moyenne de chaque étudiant
// creer un nouveau tableau => $moyenne
// pour ce tableau la clé = le nom de l'etudiant
// la valeur ets la moyenne de l'etudiant
// afficher le tableau
echo "-------------------------------------" . PHP_EOL;

$moyennes = [];

foreach($etudiants as $nom =>$notes){

    // pour chaque etudiant on va calculer la somme des notes
    $somme =   array_sum($notes);
    $moyenne = round($somme /count($notes));

    //ajoute la moyenne dans e tableau
    $moyennes[$nom] = $moyenne;
}


print_r($moyennes);


