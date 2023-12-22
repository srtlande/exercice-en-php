<?php
$prixHT = readline("saisir un prix HT :");
$tauxTva = readline( "saisir un taux de TVA :");
$prixTTC = round($prixHT*(1 +( $tauxTva/ 100)) , 2 );
echo "le prix TTC est de : $prixTTC";
