<?php

function incrementer(int $nombre ) : int { // passage par
    $nombre += 1;
    return $nombre;
}

$compteur = 1 ;
$compteur = incrementer ($compteur);
echo $compteur;
echo PHP_EOL;

function incrementer1( int & $nombre): void{ //passage par reference : au lieu qu 'il y est une copie de $compteur avec le & compteur va devenir l'argument va travaillerdirectement sur $compteur
    $nombre +=1;
}
$compteur = 1 ;
incrementer1($compteur);
echo $compteur;