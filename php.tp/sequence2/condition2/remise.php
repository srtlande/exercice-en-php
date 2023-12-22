<?php

$prix = readline("saisir un prix en euros : ");
echo " le prix saisit est de $prix ";
if ($prix<1000 ) {
    $remise = $prix*0.05;
    echo "la remise de 5% est de $remise";
} elseif ($prix >= 1000 && $prix<5000){
    $remise = $prix*0.1;
    echo" la remise de 10% est de $remise";
 }else{
    $remise = $prix*0.2;
    echo "la remise de 20% est de $remise";
}
$prixRemise= $prix - $remise;

echo " le montant de l'article après remise est de ".$prixRemise;



