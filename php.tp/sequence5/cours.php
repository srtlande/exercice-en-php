<?php

// définir une fonction qui affiche "Bonjour"

function direBonjour() : void { // : void => pour dire que la fonction retourne rien on l'utilise avec des fonction qui servent juste a afficher

    echo " Bonjour".PHP_EOL;
}

// appeler la fonction afin de l'exécuter

direBonjour();



// définir une fonction qui affiche "bonjour $nom
// la fonction a 1 paramètre = nom

function direBonjourNom(string $prenom) : void { // $prenom = parametre , il faut que les types arguments et parammètre soit concordant
    echo " Bonjour $prenom". PHP_EOL; // $nom est une variable qui existe que dans la fonction
}

// appeler executer la fonction
direBonjourNom('lande'); // lande => un argument -> la valeur qui va permettre d'initialiser le paramètre lors de la fonction
$prenom = "mynna";
direBonjourNom($prenom);
echo PHP_EOL;
// définir une fonction permettant de calculer et retourner la somme de 2 nbrs

function additionner (int $nb1 , int $nb2) : int {
    // $ resultat est une variable locale à la fonction (on ne peut l'utiliser en dehors de la fonction)
    return $nb1 + $nb2;
}

// on appel la fonction
$resultat = additionner(1,5); // on appel la fonction elle va s'executer pui va faire un return de 30 et cette valeur on vient la stocker dans la variable global $resulta(!! ce n'est pas la meme variable que celle dans la fonction )
echo "le resultat est egale : $resultat ";
echo PHP_EOL;
echo "le resultat est egale : $resultat ";

// par-contre pour les fonctions qui ne renvoie rien ( sans return ) on a pas besoins de restocker le resultat dans une variable

