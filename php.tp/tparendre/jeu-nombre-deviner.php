<?php

$nombreaDeviner = rand(1,100);
$tentativesRestantes= rand(10,15);

$pseudo = readline("veuillez saisir votre pseudo:");

echo "Il vous reste $tentativesRestantes tentatives pour essayer de deviner le nombre ";
$datePartie = date('d/m/Y H:i:s');
$resultatPartie = "";

for($i = 1; $i <= $tentativesRestantes ; $i++) {
    $tentative = (int)readline(" entrez un nombre entre 1 et 100: ");

    if ($tentative == $nombreaDeviner) {
        $resultatPartie = "Bravoo !! $pseudo , vous avez trouvé le nombre $nombreaDeviner en $i tentatives !\n";
    } elseif ($tentative < $nombreaDeviner) {
        echo "Arrghh , le nombre est trop petit. Essayez  encore.";
       // $tentative = (int)readline("entrez un nombre entre 1 et 100: ");
    } else {
        echo "Arrghh , le nombre est trop grand. Essayez  encore";
       // $tentative = (int)readline("entrez un nombre entre 1 et 100: ");
    }

    }
if ($i > $tentativesRestantes) {
    $resultatPartie = "Désolé ¯\_(ツ)_/¯, vos avez utilisé toutes vos tentatives. Le nombre à deviner était $nombreaDeviner. ";

}

echo " $resultatPartie ";

$resultatPartie = fopen("resultat.txt","a");
fwrite($resultatPartie,"Date et heure de la partie : $datePartie\n");
fwrite($resultatPartie, "Pseudo : $pseudo\n");
fwrite($resultatPartie, "$resultatPartie\n");
fclose($resultatPartie);
