<?php

// declarer et initialiser un tableau contenant des notes

$notes=[9,14,11,18,13,8,15,7,19,1]; // equivalent $notes = array (9,14,11); , les valeurs du tableau = elements


echo $notes[0]; // on accede a l'element qui se trouve à l'index 0 dans le tableau $notes
echo $notes[1];
echo $notes[2].PHP_EOL;

// affichage du tableau avec une boucle for

for ($i=0; $i < count($notes); $i++){
    echo $notes[$i].PHP_EOL;
}


echo PHP_EOL;

// afficher le tableau avec une boucle foreach

foreach($notes as  $note){
    echo $note.PHP_EOL;
}

echo PHP_EOL;

for ($i=0; $i < count($notes); $i++) { // afficher aussi l'index
    echo "$i,$notes[$i]" . PHP_EOL;
}
echo PHP_EOL;

foreach($notes as $index => $note){ // afficher aussi l'index !! on peut pas recup que les index
    echo "$index ,$note".PHP_EOL;
}

// affichage du tableau en mode debug => si on veut voir juste en 2spi
print_r($notes);
var_dump($notes);// vide le tableau sur l'ecran


echo PHP_EOL;
// ajt une nouvelle note en fin de tableau

$notes[]= 20;

print_r($notes);

// deuxième solution d'ajout

array_push($notes,19,15,12.5); // avantage peux mettre une liste de valeurs !! ce qui n'est pas possible avec les crochets

print_r($notes);
