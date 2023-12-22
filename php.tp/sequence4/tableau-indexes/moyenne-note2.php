<?php

$notes = [20,20,16,7,20,19,8];
$somme = array_sum($notes);
$moyenne = $somme / count($notes);
echo round($moyenne,1);

if($moyenne < 10){
    echo " Vous n'avez pas votre diplome";
}elseif($moyenne > 10 && $moyenne < 12){
    echo " Mention passable";
}elseif($moyenne > 12 && $moyenne < 14){
    echo " Mention assez bien";
}elseif($moyenne > 14 && $moyenne < 16){
    echo " Mention bien";
}else{
    echo" Mention Très bien";
}