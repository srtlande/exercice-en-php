<?php

$livre = "Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2";

// 1. extraire et afficher les informations du livre
// utiliser la fonction explode


$livreTab = explode (":",$livre);

foreach($livreTab as $infos ){
    echo " $infos";
}

echo PHP_EOL;

// 2. utiliser la fonction list

list($titre,$auteur,$datePublication,$genre,$ISBN) = explode (":",$livre);
echo"$titre $auteur $datePublication $genre $ISBN";
echo PHP_EOL;

// 3. utiliser le destructuring (à partir de la version 7.1)
[$titre,$auteur,$datePublication,$genre,$ISBN] = explode (":",$livre);

echo"$titre $auteur $datePublication $genre $ISBN";
echo PHP_EOL;

// 4. afficher le titre et l'année de publication

$livreTab = explode (":",$livre);
echo "$titre $datePublication";
echo PHP_EOL;

//utiliser list()

list($titre,,$datePublication)=explode (":",$livre);
echo "$titre $datePublication";
echo PHP_EOL;
// utiliser le destructuring

[$titre,,$datePublication] =explode(":",$livre);
echo"$titre $datePublication";
echo PHP_EOL;
// afficher  auteur du livre

[,$auteur] = explode(":",$livre);
echo" $auteur";
echo PHP_EOL;

// afficher l'isbn du livre
[,,,,$ISBN] = explode(":",$livre);
echo" $ISBN";
echo PHP_EOL;



