<?php

function convertirCelsiusFahrenheit( int$celsius) : int {
    return $celsius *1.8 + 32;

}


function genererMotDePasse(int $longueur) : string{

    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789!@#%&*()";
    $motPasse = "";
    for ($i=0; $i < $longueur ; $i++) {
        $motPasse = $motPasse . $caracteres[random_int(0,strlen($caracteres)-1)];
    }
    return $motPasse;
}