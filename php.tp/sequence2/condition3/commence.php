<?php
// demander la saisie d'un mot
// afficher si le mot commence par la lettre p

$mot = readline("saisir un mot:");
$mot = strtolower($mot);


if (str_starts_with("$mot","p")) {
    echo "le $mot commence par p";
}else{
    echo "le $mot ne commence pas par p";
}

if (strlen($mot) >= 5){
    echo "le $mot contient au moins 5 ";
}else{
    echo "le $mot contient moins de 5";
}